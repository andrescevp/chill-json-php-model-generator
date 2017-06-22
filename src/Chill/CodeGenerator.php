<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 22/06/2017
 * Time: 21:23
 */

namespace Chill;


use gossi\codegen\model\AbstractPhpStruct;
use gossi\codegen\model\PhpClass;
use gossi\codegen\model\PhpConstant;
use gossi\codegen\model\PhpProperty;
use gossi\docblock\Docblock;
use ReflectionClass;
use gossi\codegen\generator\CodeGenerator as CodeGen;
class CodeGenerator
{
    private $keysToConstants = ['enum', 'required'];
    private $keysToArrayToCheckProperty = ['required'];

    public function foo()
    {

        $a = json_decode(file_get_contents(__DIR__ . '/Resources/Fixtures/complex_schema.json'));

        $class = PhpClass::create('Test');

        $this->process($a, $class, 'test');

        $generator = new CodeGen([

        ]);

        $code = '<?php ' . PHP_EOL;
        $code .= $generator->generate($class);

        file_put_contents(__DIR__ . '/Resources/' . 'Test.php', $code);
//        var_dump(get_object_vars($a));die;


    }

    /**
     * @param \stdClass $a
     * @param AbstractPhpStruct $class
     */
    public function process($a, AbstractPhpStruct &$class, $selfName)
    {
        $parameters = get_object_vars($a);

        $class->setDocblock(Docblock::create('tetststs'));

        $propertiesCount = 0;

        foreach ($parameters as $name => $value) {

            if ($name === 'properties') {
                $name = $selfName . ucfirst($name);
            }

            if (is_string($value)) {

                if ($name === '$schema') {
                    $name = substr($name, 1);
                }

                $property = PhpProperty::create($name)
                    ->setVisibility(PhpProperty::VISIBILITY_PUBLIC)
                    ->setType('string');


                if (($name !== 'id' || $name !== '_id')) {
                    $property->setValue($value);
                }

                $property->setDocblock(Docblock::create('@Type("string")'));

                $class->setProperty($property);
            } elseif (is_int($value)) {
                $class->setProperty(
                    PhpProperty::create($name)
                        ->setVisibility(PhpProperty::VISIBILITY_PUBLIC)
                        ->setType('int')
                );
            } elseif (is_float($value)) {
                $class->setProperty(
                    PhpProperty::create($name)
                        ->setVisibility(PhpProperty::VISIBILITY_PUBLIC)
                        ->setType('float')
                );
            } elseif (is_bool($value)) {
                $class->setProperty(
                    PhpProperty::create($name)
                        ->setVisibility(PhpProperty::VISIBILITY_PUBLIC)
                        ->setType('bool')
                );
            } elseif (is_array($value) ) {

                if (in_array($name, $this->keysToConstants)) {
                    $class->setProperty(
                        PhpProperty::create($name)
                            ->setVisibility(PhpProperty::VISIBILITY_PUBLIC)
                            ->setType('array')
                    );

                    foreach ($value as $constant) {
                        if (is_string($constant)) {
                            $class->setConstant(
                                PhpConstant::create(
                                    strtoupper($selfName . '_' . $name . '_' .  $constant),
                                    $constant
                                )

                            );
                        }
                    }

                } else {
                    $class->setProperty(
                        PhpProperty::create($name)
                            ->setVisibility(PhpProperty::VISIBILITY_PUBLIC)
                            ->setType('array')
                    );
                }


            } else {

                $class->setProperty(
                    PhpProperty::create($name)
                        ->setVisibility(PhpProperty::VISIBILITY_PUBLIC)
                        ->setType(ucfirst($name))
                );

                $classChild = PhpClass::create($name);

                $this->process($value, $classChild, $name);

                $generator = new CodeGen();

                $code = '<?php ' . PHP_EOL;
                $code .= $generator->generate($classChild);

                file_put_contents(__DIR__ . '/Resources/' . ucfirst($name) . '.php', $code);
            }

            $propertiesCount++;
        }
    }
}