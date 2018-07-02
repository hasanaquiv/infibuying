<?php
	class userdetail extends database{
		public function  userdetails($id){  
		   		$query = $this->mysqli->query("select * from user where id='$id'");
				return $query;
		}
	}
?>