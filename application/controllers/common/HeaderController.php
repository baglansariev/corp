<?php
	namespace application\controllers\common;
	use application\core\engine\Controller;

	class HeaderController extends Controller
	{
		public function index()
		{
			$header_model = $this->load->model('common/header');

			$result = $header_model->getMenuList();
			$data = [];

			if($result){
				$data['menu'] = '<ul>';

				foreach ($result as $value) {

					if($value['url'] == '/' . $this->request->getUriWithoutParams()){
						$class = 'class="menu-active"';
					}
					else{
						$class = 'class=""';
					}

					$data['menu'] .= '<a href="'. $value['url'] .'" '. $class .'>';
					$data['menu'] .= '<li>'. $value['name'] .'</li>';
					$data['menu'] .= '</a>';
				}
				$data['menu'] .= '</ul>';
			}
			else{
				$data['menu'] = 
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

			return $this->load->view('common/header', $data);
		}
	}
