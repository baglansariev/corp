<?php
	namespace application\controllers\extensions\modules;
	use application\core\engine\Controller;

	class ReviewsGalleryController extends Controller
	{
		public function index()
		{

			$gallery_model = $this->load->model('extensions/modules/Gallery');

			$result = $gallery_model->getReviews();
			$data = [];

			if($result){
				foreach ($result as $value) {
					$data['img_src'][] = $value['src'];
				}
			}

			return $this->load->view('extensions/modules/reviews-gallery', $data);
		}
	}