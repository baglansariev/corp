<?php
	namespace application\controllers;

	use application\core\engine\Controller;

	class ReviewsController extends Controller
	{

	    public function indexAction()
	    {
	    	$this->view->asset->setMetaDesc('Отзывы партнеров о компании ТОО Expert Group-M');
	    	$this->view->asset->setMetaKeys('egm.kz, Экспертиза проектно-сметной документации');
	    	$this->view->asset->setTitle('Отзывы');

	    	$this->view->asset->setCss('/public/style/gallery/gallery.css');
			$this->view->asset->setJs('/public/style/gallery/gallery.js');

	    	$data = array();
	    	$data['page_title'] = 'Отзывы о нас';
	    	$data['gallery'] = $this->load->controller('extensions/modules/ReviewsGalleryController');

	    	$data['header'] = $this->load->controller('common/HeaderController');
	    	$data['footer'] = $this->load->controller('common/FooterController');
	    	$this->view->response('Reviews/index', $data);
	    }
	}
