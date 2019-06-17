<?php
	namespace application\core;
	use application\lib\Menu;

	class View
	{
		public $route;
		public $path;
		public $menu;
		public $layout = 'default';

		public function __construct($route)
		{
			$this->route = $route;
			$this->menu = new Menu;
			$this->path = ucfirst($route['controller']).DS.$route['action'];
		}

		public function render($title, $arr = [])
		{
			extract($arr);

			ob_start();
			require_once('application/views/'.$this->path.'.php');
			$content = ob_get_clean();
			
			require_once('application/layouts/'.$this->layout.'.php');
		}

		public static function errorResponse($type, $title)
		{
			http_response_code($type);
			$content = obInclude('application/views/errors/'.$type.'.php');
			require_once('application/layouts/default.php');
			exit();
		}

	}

