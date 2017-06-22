<?php 
/**
 */
class diskDevice {

	/**
	 */
	const DISKDEVICE_REQUIRED_DEVICE = 'device';

	/**
	 */
	const DISKDEVICE_REQUIRED_TYPE = 'type';

	/**
	 * @var bool
	 */
	public $additionalProperties;

	/**
	 * @var DiskDeviceProperties
	 */
	public $diskDeviceProperties;

	/**
	 * @var array
	 */
	public $required;
}