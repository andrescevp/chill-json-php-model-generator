<?php 
/**
 */
class Test {

	/**
	 */
	const TEST_REQUIRED_STORAGE = 'storage';

	/**
	 * @var Definitions
	 */
	public $definitions;

	/**
	 * @Type ("string")
	 * @var string
	 */
	public $description = 'schema for an fstab entry';

	/**
	 * @Type ("string")
	 * @var string
	 */
	public $id = 'http://some.site.somewhere/entry-schema#';

	/**
	 * @var array
	 */
	public $required;

	/**
	 * @Type ("string")
	 * @var string
	 */
	public $schema = 'http://json-schema.org/draft-04/schema#';

	/**
	 * @var TestProperties
	 */
	public $testProperties;

	/**
	 * @Type ("string")
	 * @var string
	 */
	public $type = 'object';
}