<?php
	namespace application\models\extensions\modules;
	use application\core\engine\Model;

	class Advantages extends Model
	{
		public function getAdvantagesList()
		{
			return $this->db->getAllRows("SELECT * FROM advantages");
		}
	}
