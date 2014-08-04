<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_Sitetpl {

	public function action_index()
	{
		$this->template->title = __("Kohana Bootstrap IC");

		$view = View::factory('login/index');

		$this->template->content = $view;
	}


} // End Login
