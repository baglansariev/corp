<?php
	namespace application\controllers;

	use application\core\engine\Controller;

	class NewsController extends Controller
	{

	    public function newsListAction()
	    {
	    	$this->view->asset->setMetaDesc('Тестовое описание');
	    	$this->view->asset->setMetaKeys('ключ1, ключ2');
	    	$this->view->asset->setTitle('Новости');
	    	
	    	$news_model = $this->load->model('News');

	    	$data['news'] = array();

	    	$result = $news_model->getNewsList();

	    	if($result){
	    		foreach ($result as $news) {
	    			$news['date_insert'] = date('d M',  strtotime($news['date_insert']));
	    			$data['news'][] = $news;
	    		}
	    	}

	    	$data['header'] = $this->load->controller('common/HeaderController');
	    	$data['footer'] = $this->load->controller('common/FooterController');

	    	$this->view->response('News/newslist', $data);
	    }

	    public function oneNewsAction()
	    {
	    	$data = array();
	    	$data['one_news'] = array();
	    	$data['news_error'] = 'Такая статья не существует';

	    	$this->view->asset->setMetaKeys('egm.kz, новости');
	    	$this->view->asset->setMetaDesc($data['news_error']);
	    	$this->view->asset->setTitle($data['news_error']);

	    	$params = explode('/', $this->request->getUriWithoutParams());

	    	if($params[0] == 'news'){
	    		$news_id = array_pop($params);

	    		if(!empty($news_id) && $news_id > 0){
	    			$news_model = $this->load->model('News');

	    			$result = $news_model->getOneNews($news_id);

	    			if($result){
	    				foreach ($result as $news) {
	    					$data['one_news'][] = $news;

	    					$this->view->asset->setMetaDesc($news['short_text']);
	    					$this->view->asset->setTitle($news['title']);
	    				}
	    			}
	    		}
	    	}
	    	
	    	$data['header'] = $this->load->controller('common/HeaderController');
	    	$data['footer'] = $this->load->controller('common/FooterController');

	    	$this->view->response('News/onenews', $data);
	    }

	    public function latestNews($limit)
	    {
	    	$news_model = $this->load->model('News');

	    	$data['news'] = array();

	    	$result = $news_model->getNewsList($limit);

	    	if($result){
	    		foreach ($result as $news) {
	    			$news['date_insert'] = date('d M',  strtotime($news['date_insert']));
	    			$data['news'][] = $news;
	    		}
	    	}

	    	return $this->load->view('News/latest-news', $data);
	    }
	}