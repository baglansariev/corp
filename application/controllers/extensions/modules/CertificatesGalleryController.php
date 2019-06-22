<?php
	namespace application\controllers\extensions\modules;
	use application\core\engine\Controller;

	class CertificatesGalleryController extends Controller
	{
		public function index()
		{

			$gallery_model = $this->load->model('extensions/modules/Gallery');

			$result = $gallery_model->getCertificates();
			$data = [];

			if($result){
				foreach ($result as $value) {
					$data['certificates_src'][] = $value['src'];
				}
			}

			return $this->load->view('extensions/modules/certificates-gallery', $data);
		}
	}
