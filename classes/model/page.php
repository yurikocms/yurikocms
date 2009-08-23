<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
* @package    YurikoCMS
* @author     Lorenzo Pisani - Zeelot
* @license    http://yurikocms.com/license
*/

class Model_Page extends ORM {

	protected $has_many = array
	(
		'page_nodes',
		'page_settings',
		//@TODO: 'content_page_inheritances',
	);

	public function unique_key($id)
	{
		if ( ! empty($id) AND is_string($id) AND ! ctype_digit($id))
		{
			return 'permalink';
		}
		return parent::unique_key($id);
	}
}