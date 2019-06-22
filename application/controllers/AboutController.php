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

	    	$this->view->asset->setCss('/public/style/gallery/gallery.css');
			$this->view->asset->setJs('/public/style/gallery/gallery.js');

	    	$data = array();

	    	$data['certificates'] = $this->load->controller('extensions/modules/CertificatesGalleryController');

	    	
	    	$data['header'] = $this->load->controller('common/HeaderController');
	    	$data['footer'] = $this->load->controller('common/FooterController');
	    	$this->view->response('About/index', $data);
		}
	}
