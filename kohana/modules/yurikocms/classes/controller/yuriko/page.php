<?php defined('SYSPATH') or die('No direct script access.');

/**
 * @package    YurikoCMS
 * @author     Lorenzo Pisani - Zeelot
 * @copyright  (c) 2008-2009 Lorenzo Pisani
 * @license    http://yurikocms.com/license
 */
 
class Controller_Yuriko_Page extends Controller {

	public function action_view()
	{
		$this->response->body('Hello, World!');
	}

} // End Yuriko Page Controller
