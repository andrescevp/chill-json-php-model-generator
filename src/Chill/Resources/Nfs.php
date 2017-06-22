<?php 
/**
 */
class nfs {

	/**
	 */
	const NFS_REQUIRED_REMOTEPATH = 'remotePath';

	/**
	 */
	const NFS_REQUIRED_SERVER = 'server';

	/**
	 */
	const NFS_REQUIRED_TYPE = 'type';

	/**
	 * @var bool
	 */
	public $additionalProperties;

	/**
	 * @var NfsProperties
	 */
	public $nfsProperties;

	/**
	 * @var array
	 */
	public $required;
}