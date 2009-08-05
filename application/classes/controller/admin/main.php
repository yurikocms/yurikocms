<?php defined('SYSPATH') OR die('No direct access allowed.');
/*
 * 
 */
class Controller_Admin_Main extends Controller {

	public function action_index()
	{
		$this->request->response = 'hello, admin world!';
	}

} // End Admin Main Controller