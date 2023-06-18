<?php
	require_once ('lib/function.php');

	$sql = "SELECT * FROM categories ORDER BY categoriesid asc";
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
    </div>
    
    <div class="submenutext Submenu_All">
        <div class="text">
              <i class='bx bx-right-arrow-alt'></i>
             <a href="?page=productlist&cart=all">All</a>
        </div>
		<?php for($i = 0; $i < $rowcount; $i++){ ?>

        <div class="text">    
            <i class='bx bx-right-arrow-alt'></i>
            <a href="?page=productlist&cart=<?php echo($row[$i][0]) ?>"><?php echo($row[$i][1]) ?></a>
        </div>
		<?php } ?>
    </div>
    </div>
    <div>
    <img src="img/sub_menu1_bottom.png" width="207" height="11" /></div>
    </div>
