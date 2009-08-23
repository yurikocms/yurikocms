<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
* @package    YurikoCMS
* @author     Lorenzo Pisani - Zeelot
* @license    http://yurikocms.com/license
*/

class Model_Node extends ORM {

	protected $has_many = array
	(
		'node_settings',
		'page_nodes',
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