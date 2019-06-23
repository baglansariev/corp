<?php
	namespace application\models;
	use application\core\engine\Model;

	class News extends Model
	{
		public function getNewsList($limit = '')
		{
			if((int)$limit){
				return $this->db->getAllRows("SELECT * FROM news ORDER BY date_insert DESC LIMIT " . $limit);
			}
			return $this->db->getAllRows("SELECT * FROM news ORDER BY date_insert DESC");
		}

		public function getOneNews($id)
		{
			return $this->db->getAllRows("SELECT * FROM news WHERE id = ". (int)$id);	
		}
	}
