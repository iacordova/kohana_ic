<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Sitetpl extends Controller_Template {

	public $template = 'template'; //views/template.php

	/**
	 * The before() method is called before your controller action.
	 * In our template controller we override this method so that we can
	 * set up default values. These variables are then available to our
	 * controllers if they need to be modified.
	 */
	public function before()
	{
		parent::before();

		if ($this->auto_render)
		{
			// Initialize empty values
			$this->template->title   = '';
			$this->template->content = '';

			$this->template->styles = array();
			$this->template->scripts_header = array();
			$this->template->scripts_footer = array();
		}
	}

	/**
	 * The after() method is called after your controller action.
	 * In our template controller we override this method so that we can
	 * make any last minute modifications to the template before anything
	 * is rendered.
	 */
	public function after()
	{
		if ($this->auto_render)
		{
			$styles = array(
				'media/css/style.css' => 'screen, projection',
				'application/vendor/components/foundation/css/normalize.css' => 'screen',
				'application/vendor/components/foundation/css/foundation.css' => 'screen'
			);

			$scripts_header = array(
				'application/vendor/components/foundation/js/vendor/modernizr.js'
			);

			$scripts_footer = array(
				'application/vendor/components/foundation/js/vendor/jquery.js',
				'application/vendor/components/foundation/js/foundation.min.js'
			);

			$this->template->styles = array_merge( $this->template->styles, $styles );
			$this->template->scripts_header = array_merge( $this->template->scripts_header, $scripts_header );
			$this->template->scripts_footer = array_merge( $this->template->scripts_footer, $scripts_footer );
		}
		parent::after();
	}

}
?>