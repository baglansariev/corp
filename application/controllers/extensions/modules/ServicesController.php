<?php
	namespace application\controllers\extensions\modules;
	use application\core\engine\Controller;

	class ServicesController extends Controller
	{
		public function index()
		{

			$services_model = $this->load->model('extensions/modules/Services');

			$result = $services_model->getServicesList();
			$data = array();

			if($result){
				foreach ($result as $service) {
					$data['services_text'][] = $service['text'];
				}
			}

			return $this->load->view('extensions/modules/services', $data);
		}
	}
