<?php
	namespace application\lib;
	use application\lib\Db;
	use application\lib\Request;
	
	class Menu
	{
		public $db;
		public $request;

		public function __construct()
		{
			$this->db = new Db;
			$this->request = new Request;
		}

		public function getMenuList()
		{
			$result = $this->db->getAllRows("SELECT * FROM menu");
			if($result){

				$menu = '<ul>';
				foreach ($result as $value) {
					$class = 'class=""';
					if($value['url'] == '/'.$this->request->getUriWithoutParams()){
						$class = 'class="menu-active"';
					}
					else{
						$class = '';
					}
					$menu .= '<a href="'. $value['url'] .'" '. $class .'>';
					$menu .= '<li>'. $value['name'] .'</li>';
					$menu .= '</a>';
				}
				$menu .= '</ul>';
			}
			else{
				$menu = 
				'<ul>
					<a href="/">
						<li>Главная</li>
					</a>
					<a href="/about">
						<li>О нас</li>
					</a>
					<a href="/reviews">
						<li>Отзывы</li>
					</a>
					<a href="/news">
						<li>Новости</li>
					</a>
					<a href="/contact">
						<li>Контакты</li>
					</a>
				</ul>';
			}
			return $menu;
		}
	}