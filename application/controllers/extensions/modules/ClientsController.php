<?php
	namespace application\controllers\extensions\modules;
	use application\core\engine\Controller;

	class ClientsController extends Controller
	{
		public function index()
		{

			$clients_model = $this->load->model('extensions/modules/Clients');

			$result = $clients_model->getClientsList();
			$data = array();

			if($result){
				foreach ($result as $client) {
					$data['client_src'][] = $client['src'];
				}
			}

			return $this->load->view('extensions/modules/clients', $data);
		}
	}
