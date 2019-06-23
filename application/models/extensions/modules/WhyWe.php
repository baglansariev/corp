<?php
	namespace application\models\extensions\modules;
	use application\core\engine\Model;

	class WhyWe extends Model
	{
		public function getWhyWeList()
		{
			return $this->db->getAllRows("SELECT * FROM why_we");
		}
	}
