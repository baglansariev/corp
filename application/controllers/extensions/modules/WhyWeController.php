<?php
	namespace application\controllers\extensions\modules;
	use application\core\engine\Controller;

	class WhyWeController extends Controller
	{
		public function index()
		{

			$whywe_model = $this->load->model('extensions/modules/WhyWe');

			$result = $whywe_model->getWhyWeList();
			$data = array();
			$data['why_we'] = array();

			if($result){
				$data['why_we'] = $result;
			}

			return $this->load->view('extensions/modules/whywe', $data);
		}
	}
