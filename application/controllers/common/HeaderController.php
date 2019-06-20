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
			$data['uri_params'] = '/'. $this->request->getUriWithoutParams();

			if($result){
				$data['menu'] = $result;
			}
			else{
				$result = require_once(LIB_PATH . 'local_data.php');
				$data['menu'] = $result['header-bottom-data']['menu'];
			}

			return $this->load->view('common/header', $data);
		}
	}
