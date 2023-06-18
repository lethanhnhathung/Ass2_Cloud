<?php
	// session_start();
	require_once('lib/function.php');
	

	if( isset($action) != 'empty' && isset($_SESSION['sess_customerid']) != ''){
		$sql = "SELECT * FROM orders WHERE remark='pending' AND customerid=".(int)($_SESSION['sess_customerid']);
		$ordercount = getRowCount($sql);
		$order = getData($sql);

		for($i=0; $i< $ordercount; $i++){ 
			$GLOBALS['totalitems'] = $GLOBALS['totalitems'] +  $order[$i]['qty'];
		}		
	}
	else{
		$GLOBALS['totalitems']= 0;
	}
?>

<div class="top_banner">
<div class="logo">
<a href="index.php">
<img src="img/logo - Copy.png"  width="60" /></a></div>
<div class="shoppingcart">

<i class='bx bxs-cart-alt' style="font-size:20px"></i>
    <a href="?page=addcart&cart=<?php echo($GLOBALS['cart']) ?>">
    <strong>
	<?php 
		if($GLOBALS['totalitems'] > 1){
			echo($GLOBALS['totalitems'] . ' items'); 
		}
		else{
			echo($GLOBALS['totalitems'] . ' item'); 
		}

	?>    
    </strong>
	</a>
	<?php 
		if( isset($_SESSION['sess_username']) != '') {
		    echo('<br /><font color="#CC0000">Welcome: <strong>' . $_SESSION['sess_username'] . '</strong></font><div class="logout"><a href="?page=logout&cart=' . $GLOBALS['cart'] . '">Logout</a></div>');
		}
		
	?>
    
    
</div>
</div>
