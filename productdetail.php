<?php
	$pid = $_GET['pid'];

	$sql = "SELECT * FROM products WHERE productid=" . $pid;
	$pdata = getData($sql);

?>
<div class="productlist">
<div><img src="img/product_list_top.png" width="602" height="10" /></div>    
<div class="products">
<div class="product_table">	

<table width="580" cellpadding="0" cellspacing="0">

<tr>
<td colspan="3" valign="middle"><?php echo('<Strong>'. $pdata[0]['productname']) .'</Strong>' ?></td>
</tr>

<tr>
<td colspan="3" valign="middle" height="1px" bgcolor="#666666"></td>
</tr>

<tr>
<td colspan="3" valign="middle" height="10px">&nbsp;</td>
</tr>

<tr>
<td width="200px" align="center"><img src="<?php echo(productfolder . $pdata[0]['productimage'])?>"></td>
<td width="5px"></td>
<td width="375px"  valign="top">

	<table width="375px" cellpadding="0" cellspacing="0">
        <tr>
            <td width="100px" valign="top">Category:</td>
            <td width="275px" valign="top">
			<?php 
                $sql = "SELECT * FROM categories WHERE categoriesid=" . $pdata[0]['categoriesid'];
                $catedata = getData($sql);

				echo('<Strong>'. $catedata[0]['categoriesname'] .'</Strong>'); ?>
            </td>
        </tr>
        <tr>
            <td width="100px" valign="top">Description:</td>
            <td width="275px" valign="top"><?php echo('<Strong>'. $pdata[0]['productdes']) .'</Strong>' ?></td>
        </tr>
        <tr>
            <td width="100px">Price:</td>
            <td width="275px"><span class="textprice">$<?php echo('<Strong>'. $pdata[0]['price']) .'</Strong>' ?></span></td>
        </tr>
	</table>


</td>
</tr>

<tr>
<td align="center" class="pagenumber"><a href="<?php echo(productlargefolder . 'large_' . $pdata[0]['productimage'])?>" rel="lightbox">View Large Image</a></td>
<td colspan="2" align="left">
	<?php if($pdata[0]['qty'] == 0){ ?>
        <img src="img/out_of_stock.png" width="68" height="19" />
    <?php }else{ ?>
    <a href="?page=addcart&cart=<?php echo($GLOBALS['cart']) ?>&pid=<?php echo($pid); ?>">
        <img src="img/add_2_cart.png" width="68" height="19" />
    </a>
	<?php } ?>
    &nbsp;
    <a href="#" onClick="javascript:history.back();">
        <img src="img/btn_back.jpg" width="68" height="19" />
    </a>
</td>
</tr>

</table>

</div>
</div>
<div><img src="img/product_list_bottom.png" width="602" height="10" /></div>    
</div>

