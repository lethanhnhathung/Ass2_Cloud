<?php
	require_once ('lib/function.php');

	$sql = "SELECT * FROM products ORDER BY productid desc";
	$rowcount = getRowCount($sql);
	$row = getData($sql);
	
	$show_row = rand(0, $rowcount-1);
?>
    <div class="submenu">
    <div><img src="img/sub_menu1_top.png" width="207" height="11" /></div>
    <div class="menubg1">
    
         <div class="menutitle">
        
            <img src="img/title_bullet.png" alt="" width="17" />
            
            <div class="text2">
                    <p>NEW PRODUCT</p>
            </div>
        </div>
    
        <div class="description">
            <div class="image">
                <a href="?page=productdetail&cart=<?php echo($GLOBALS['cart']) ?>&pid=<?php echo($row[$show_row]['productid']); ?>">
                <img src="img/product/<?php echo($row[$show_row]['productimage']); ?>" />
                </a>        
            </div>        
            <div class="text">
                <a href="?page=productdetail&cart=<?php echo($GLOBALS['cart']) ?>&pid=<?php echo($row[$show_row]['productid']); ?>">
                <?php echo($row[$show_row]['productname']); ?>
                </a>
                <br />
                Category: 
            <?php 
                $sql = "SELECT * FROM categories WHERE categoriesid=" . $row[$show_row]['categoriesid'];
                $catedata = getData($sql);
                echo($catedata[0][1]); 
                ?>
            </div>
            <div class="price">$<?php echo($row[$show_row]['price']); ?></div>        

            <div align="center">
            <?php if($row[$show_row]['qty'] == 0){ ?>
                <img src="img/out_of_stock.png" width="68" height="19" />
            <?php }else{ ?>
            <a href="?page=addcart&cart=<?php echo($GLOBALS['cart']) ?>&pid=<?php echo($row[$show_row]['productid']); ?>">
                <img src="img/add_2_cart.png" width="68" height="19" />
            </a>
            <?php } ?>
            &nbsp;
            <a href="?page=productdetail&cart=<?php echo($GLOBALS['cart']) ?>&pid=<?php echo($row[$show_row]['productid']); ?>">
                <img src="img/detail.png" width="68" height="19" />
            </a>                  
            </div>
            
        </div>
    </div>
    <div>
    <img src="img/sub_menu1_bottom.png" width="207" height="11" /></div>
    </div>
