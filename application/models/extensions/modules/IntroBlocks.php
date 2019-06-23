<?php
	namespace application\models\extensions\modules;
	use application\core\engine\Model;

	class IntroBlocks extends Model
	{
		public function getIntroBlocksList()
		{
			return $this->db->getAllRows("SELECT * FROM intro_blocks");
		}
	}
