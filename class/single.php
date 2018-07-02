<?php
	class single extends database{
		public function  single_product($p_idn){  
			$query = $this->mysqli->query("select * from products where product_name='$p_idn'");
			return $query;
		}
		
		public function  product($id){  
			$query = $this->mysqli->query("select * from products where product_id='$id'");
			return $query;
		}
	}
?>