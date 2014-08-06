<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_Sitetpl {

	public function action_index()
	{
		$this->template->title = __("site.title");

		$view = View::factory('login/index');

		$this->template->content = $view;
	}


	public function action_setlang($lang)
	{
		if(!in_array($lang, array('es', 'en', 'en-us'))){
			$lang = 'en';
		}
		Cookie::set('lang', $lang);
   		I18n::lang($lang);
	}

} // End Login
