<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66f78c276f4287624a18fc097369e6f6
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phootwork\\tokenizer\\' => 20,
            'phootwork\\lang\\' => 15,
            'phootwork\\file\\' => 15,
            'phootwork\\collection\\' => 21,
        ),
        'g' => 
        array (
            'gossi\\docblock\\' => 15,
            'gossi\\codegen\\' => 14,
        ),
        'S' => 
        array (
            'Symfony\\Component\\OptionsResolver\\' => 34,
        ),
        'P' => 
        array (
            'PhpParser\\' => 10,
        ),
        'C' => 
        array (
            'Chill\\Test\\' => 11,
            'Chill\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phootwork\\tokenizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phootwork/tokenizer/src',
        ),
        'phootwork\\lang\\' => 
        array (
            0 => __DIR__ . '/..' . '/phootwork/lang/src',
        ),
        'phootwork\\file\\' => 
        array (
            0 => __DIR__ . '/..' . '/phootwork/file/src',
        ),
        'phootwork\\collection\\' => 
        array (
            0 => __DIR__ . '/..' . '/phootwork/collection/src',
        ),
        'gossi\\docblock\\' => 
        array (
            0 => __DIR__ . '/..' . '/gossi/docblock/src',
        ),
        'gossi\\codegen\\' => 
        array (
            0 => __DIR__ . '/..' . '/gossi/php-code-generator/src',
        ),
        'Symfony\\Component\\OptionsResolver\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/options-resolver',
        ),
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
        'Chill\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/test',
        ),
        'Chill\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Chill',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit66f78c276f4287624a18fc097369e6f6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit66f78c276f4287624a18fc097369e6f6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
