<?php
// initialize shopping cart class
//include 'Cart.php';
include_once('header_function.php');
//$cart = new Cart;

// include database configuration file
include 'dbConfig.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){
        $productID = $_REQUEST['id'];
        // get product details
        $query = $db->query("SELECT * FROM products WHERE product_id = ".$productID);
        $row = $query->fetch_assoc();
        $itemData = array(
            'id' => $row['product_id'],
            'name' => $row['product_name'],
            'price' => $row['offer_price'],
            'seller_id' => $row['seller_id'],
            'qty' => 1
        );
        
        $insertItem = $cart->insert($itemData);
		//echo 'add successful';
		echo ' <a href="cart" class="lnk-cart">
			
            <div class="items-cart-inner" id="d">
              <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
              <div class="basket-item-count"><span class="count">'.$cart->total_items().'</span></div>
              <div class="total-price-basket">cart</div>
            </div>
            </a>';
       // $redirectLoc = $insertItem?'product?p_id='.$productID:'index';		
        //header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: cart");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['id'])){
        // insert order details into database
        $insertOrder = $db->query("INSERT INTO orders (customer_id, total_price, created, modified) VALUES ('".$_SESSION['id']."', '".$cart->total()."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");
        
        if($insertOrder){
            $orderID = $db->insert_id;
            $sql = '';
            // get cart items
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $sql .= "INSERT INTO order_items (order_id, product_id, quantity, seller_id) VALUES ('".$orderID."', '".$item['id']."', '".$item['qty']."', '".$item['seller_id']."');";
				$db->query("INSERT INTO notification (notification_title, status, seller_id) VALUES ('You have new order!', '0', '".$item['seller_id']."')");
            }
            // insert order items into database
            $insertOrderItems = $db->multi_query($sql);
            
            if($insertOrderItems){
                $cart->destroy();
                header("Location: orderSuccess.php?id=$orderID");
            }else{
                header("Location: checkout");
            }
        }else{
            header("Location: checkout");
        }
    }else{
        header("Location: index");
    }
}else{
    header("Location: index.php");
}