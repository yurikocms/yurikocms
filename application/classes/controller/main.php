<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller {

	public function action_index()
	{
		$this->request->response = 'hello, world!';
	}

} // End Main
