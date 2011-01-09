<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
* @package    YurikoCMS
* @author     Lorenzo Pisani - Zeelot
* @license    http://yurikocms.com/license
*/

class Model_Page extends ORM {

	protected $_has_many = array
	(
		'page_nodes' => array(),
		'page_settings' => array(),
		//@TODO: 'content_page_inheritances',
	);
}