<?php
	namespace application\lib;

	class Request
	{
		public $get = [];
		public $post = [];
		public $request = [];

		public function __construct()
		{
			if(isset($_GET)){
				$this->get = $_GET;
			}
			if(isset($_POST)){
				$this->post = $_POST;
			}
			if(isset($_REQUEST)){
				$this->request = $_REQUEST;
			}
		}

		public function getFullUri()
		{
			return trim($_SERVER['REQUEST_URI'], '/');
		}

		public function getUriWithoutParams()
		{
			$uri = explode('?', $this->getFullUri());
			if(is_array($uri)){
				return array_shift($uri);
			}
			else{
				return $this->getFullUri();
			}
		}
	}
