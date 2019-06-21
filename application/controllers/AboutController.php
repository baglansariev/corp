<?php
	namespace application\controllers;

	use application\core\engine\Controller;

	class AboutController extends Controller
	{
		public function indexAction()
		{
			$this->view->asset->setMetaDesc('Информация о компании ТОО Expert Group-M');
	    	$this->view->asset->setMetaKeys('egm.kz, Экспертиза проектно-сметной документации');
	    	$this->view->asset->setTitle('О компании');
	    	
	    	$data['header'] = $this->load->controller('common/HeaderController');
	    	$data['footer'] = $this->load->controller('common/FooterController');
	    	$this->view->response('About/index', $data);
		}
	}
