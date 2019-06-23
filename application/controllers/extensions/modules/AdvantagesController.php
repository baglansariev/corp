<?php
	namespace application\controllers\extensions\modules;
	use application\core\engine\Controller;

	class AdvantagesController extends Controller
	{
		public function index()
		{

			$advantages_model = $this->load->model('extensions/modules/Advantages');

			$result = $advantages_model->getAdvantagesList();
			$data = array();

			if($result){
				$data['advantages'] = $result;
			}

			return $this->load->view('extensions/modules/advantages', $data);
		}
	}
