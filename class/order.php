<?php

	class order extends database {
		public function orders($search,$p,$limit,$seller_id){
			$query = $this->mysqli->query("select * from orders join order_items join products where orders.id = order_items.order_id and order_items.seller_id='$seller_id' || orders.id = '$search' limit ".$p.",".$limit);
			return $query;
		}
		
		public function invoice($invoice_id){
			$query = $this->mysqli->query("select * from orders join order_items join products join user join seller where orders.id = order_items.order_id and products.product_id=order_items.product_id and orders.customer_id=user.id and order_items.seller_id=seller.seller_id and orders.id='$invoice_id'");
			return $query;
		}
	}
	//select * from orders join order_items join products where orders.id = order_items.order_id and order_items.seller_id='1' || orders.id = '2' limit 1,5
	//select sum(total_price) as price from orders where seller_id=1
	//select sum(orders.total_price) as price from orders join order_items where orders.id = order_items.order_id and order_items.seller_id=1
?>