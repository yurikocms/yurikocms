<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
* @package    YurikoCMS
* @author     Lorenzo Pisani - Zeelot
* @license    http://yurikocms.com/license
*/

class Model_Page_Node_Setting extends ORM {

	protected $belongs_to = array
	(
		'page_node' => array(),
	);

}