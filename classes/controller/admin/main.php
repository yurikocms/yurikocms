<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * @package    YurikoCMS
 * @author     Lorenzo Pisani - Zeelot
 * @copyright  (c) 2008-2009 Lorenzo Pisani
 * @license    http://yurikocms.com/license
 */
 
class Controller_Admin_Main extends Controller_Admin {

	public function action_index()
	{

		$this->request->response = 'hello, admin world!';
	}

} // End Admin Main Controller