<?php
	namespace application\models\extensions\modules;
	use application\core\engine\Model;

	class Clients extends Model
	{
		public function getClientsList()
		{
			return $this->db->getAllRows("SELECT * FROM clients");
		}
	}
