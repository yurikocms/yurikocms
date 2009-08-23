<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
* @package    YurikoCMS
* @author     Lorenzo Pisani - Zeelot
* @license    http://yurikocms.com/license
*/

class Model_Page_Node extends ORM {

	protected $belongs_to = array
	(
		'page',
		'node',
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