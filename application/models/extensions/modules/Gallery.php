<?php
	namespace application\models\extensions\modules;
	use application\core\engine\Model;

	class Gallery extends Model
	{
		public function getReviews()
		{
			return $this->db->getAllRows("SELECT src FROM reviews");
		}

		public function getCertificates()
		{
			return $this->db->getAllRows("SELECT src FROM certificates");
		}
	}
