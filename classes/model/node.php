<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
* @package    YurikoCMS
* @author     Lorenzo Pisani - Zeelot
* @license    http://yurikocms.com/license
*/

class Model_Node extends ORM {

	protected $has_many = array
	(
		'node_settings' => array(),
		'page_nodes' => array(),
		'node_route_parameters' => array(),
	);
	protected $belongs_to = array
	(
		'node_route' => array(),
	);
}