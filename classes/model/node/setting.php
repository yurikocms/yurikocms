<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
* @package    YurikoCMS
* @author     Lorenzo Pisani - Zeelot
* @copyright  (c) 2008-2009 Lorenzo Pisani
* @license    http://yurikocms.com/license
*/

class Model_Node_Setting extends ORM {

	protected $belongs_to = array
	(
		'node' => array(),
	);

}