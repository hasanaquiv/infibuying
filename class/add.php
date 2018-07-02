<?php
	class add extends database {
			
			public function addd($product_name,$brand,$category,$price,$desc,$seller_id,$image){ 
				$query = $this->mysqli->query("insert into products(product_name,product_brands,product_categories,product_price,product_desc,seller_id,product_image) values('$product_name','$brand','$category','$price','$desc','$seller_id','$image')");		
				return $query;			
		    }
		}

?>