<?php
	namespace application\controllers\extensions\modules;
	use application\core\engine\Controller;

	class IntroBlocksController extends Controller
	{
		public function index()
		{

			$intro_blocks_model = $this->load->model('extensions/modules/IntroBlocks');

			$result = $intro_blocks_model->getIntroBlocksList();
			$data = array();

			if($result){
				$data['intro_blocks'] = $result;
			}

			return $this->load->view('extensions/modules/intro-blocks', $data);
		}
	}
