<?php
	namespace application\controllers;

	use application\core\engine\Controller;

	class MainController extends Controller
	{

	    public function indexAction()
	    {
	    	$this->view->asset->setMetaDesc('ТОО «EXPERT GROUP-M» осуществляют трудовую деятельность эксперты лучшие в своем отрасли. Имеют большой опыт, навык, обладают интеллектуальными знаниями в области экспертной деятельности и осуществляют работу в соответствии с законом архитектурной, градостроительной и строительной деятельности Республики Казахстан.');

	    	$this->view->asset->setMetaKeys('egm.kz, Предэкспертная консультация');
	    	$this->view->asset->setTitle('Expert Group-M. Экспертиза проектно-сметной документации в Шымкенте');

			$this->view->asset->setJs('/public/style/particles/particles.min.js');
			$this->view->asset->setJs('/public/style/particles/particles_switcher.js');
	    	
	    	$data['header'] = $this->load->controller('common/HeaderController');
	    	$data['footer'] = $this->load->controller('common/FooterController');
	    	$this->view->response('Main/index', $data);
	    }
	}
