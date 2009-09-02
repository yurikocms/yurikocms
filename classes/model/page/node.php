<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
* @package    YurikoCMS
* @author     Lorenzo Pisani - Zeelot
* @license    http://yurikocms.com/license
*/

class Model_Page_Node extends ORM {

	protected $belongs_to = array
	(
		'page' => array(),
		'node' => array(),
	);
	protected $has_many = array
	(
		'node_route_parameters' => array(),
	);
}