<?php
	namespace application\models\common;
	use application\core\engine\Model;

	class Header extends Model
	{
		public function getMenuList()
		{
			return $this->db->getAllRows("SELECT * FROM menu");
		}
	}
