<?
	namespace application\controllers;

	use application\core\Controller;

	class ContactController extends Controller
	{
		public function indexAction()
		{
			$this->view->render('Контакты');
		}
	}
