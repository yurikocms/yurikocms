<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller {

	public function action_index()
	{
		$config = Kohana::config('database');
		echo Kohana::debug($config);
		$this->request->response = 'hello, world!';
	}

} // End Main
