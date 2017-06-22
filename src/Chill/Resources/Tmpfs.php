<?php 
/**
 */
class tmpfs {

	/**
	 */
	const TMPFS_REQUIRED_SIZEINMB = 'sizeInMB';

	/**
	 */
	const TMPFS_REQUIRED_TYPE = 'type';

	/**
	 * @var bool
	 */
	public $additionalProperties;

	/**
	 * @var array
	 */
	public $required;

	/**
	 * @var TmpfsProperties
	 */
	public $tmpfsProperties;
}