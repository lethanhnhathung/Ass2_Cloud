<?php
	require_once ('lib/function.php');

	$sql = "SELECT * FROM products ORDER BY productid desc";
	$rowcount = getRowCount($sql);
	$row = getData($sql);

?>
    <div class="submenu">
    <div><img src="img/sub_menu1_top.png" width="207" height="11" /></div>
    <div class="menubg1">
            
            <div class="menutitle">
                
                <img src="img/title_bullet.png" alt="" width="17" />
            
                <div class="text2">
                        <p>CATEGORIES</p>
                </div>
            </div>
        
            <div class="findform">
                <BR />
                <h3>Can I Help You...?</h3>
                <form method="post" action="?page=productlist&cart=<?php echo($GLOBALS['cart']) ?>">
                 <button type="submit"><i class='bx bx-search-alt-2'></i></button>
                    <input type="text" name="find" id="find" placeholder="Search...?" title="Search" /><br />
                </form>
            </div>
            
    <div>
    <img src="img/sub_menu1_bottom.png" width="207" height="11" /></div>
    </div>
