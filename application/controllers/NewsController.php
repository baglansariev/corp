<?
	namespace application\controllers;

	use application\core\Controller;

	class NewsController extends Controller
	{
		public function newsListAction()
		{
			$this->view->render('Новости');
		}

		public function oneNews()
		{
			$this->view->render('Одна новость');
		}
	}
