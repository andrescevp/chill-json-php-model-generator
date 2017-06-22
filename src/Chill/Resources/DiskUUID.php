<?php 
/**
 */
class diskUUID {

	/**
	 */
	const DISKUUID_REQUIRED_LABEL = 'label';

	/**
	 */
	const DISKUUID_REQUIRED_TYPE = 'type';

	/**
	 * @var bool
	 */
	public $additionalProperties;

	/**
	 * @var DiskUUIDProperties
	 */
	public $diskUUIDProperties;

	/**
	 * @var array
	 */
	public $required;
}