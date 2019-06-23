<?php
	namespace application\models\extensions\modules;
	use application\core\engine\Model;

	class Services extends Model
	{
		public function getServicesList()
		{
			return $this->db->getAllRows("SELECT * FROM services");
		}
	}
