<?php 
/**
 */
class device {

	/**
	 * @Type ("string")
	 * @var string
	 */
	public $pattern = '^/dev/[^/]+(/[^/]+)*$';

	/**
	 * @Type ("string")
	 * @var string
	 */
	public $type = 'string';
}