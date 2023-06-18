<?php
session_start();
define("productfolder", "img/product/");
define("productlargefolder", "img/product_large/");
define("tax", 7);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta name="keywords" lang="en-us" content="Assumption University,Computer Store Project,Assumption University Project,PHP Project,ABAC Project">
	<META NAME="Description" CONTENT="Assumption University PHP Final Project">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="google-site-verification" content="WWfmdAzbuVnt8F45gamZG9yEZVSbWsU-rs93ZDsnh0M" />

	<title>Nhật Hưng Mobile</title>

	<link rel="shortcut icon" href="img/logo - Copy.png" />
	<link href="css/mystyle.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<script src="js/myjs.js" type="text/javascript"></script>
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>

</head>
<?php

$GLOBALS['cart'] = '';
$GLOBALS['totalitems'] = 0;

$page = isset($_GET['page'])?$_GET['page']:'';
$cart = isset($_GET['cart']);

if ($page == '') {
	$page = 'productlist';
}

if ($cart == '') {
	$cart = 'all';
} else {
	$GLOBALS['cart'] = $cart;
}

?>


<body>


	<div class="frame">


		<?php require("topbanner.php") ?>
		<?php require("mainmenu.php") ?>

		<!-- <div class="space"></div> -->

		<div class="main_body">

			<?php require("menupanel.php") ?>

			<div class="bodypanel">
				<?php require("bodybanner.php") ?>

				<!-- <div class="space3"></div> -->

				<?php
				if (file_exists($page . '.php') == 1) {
					require($page . '.php');
				} else {
					require('productlist.php');
				}
				?>

			</div>

		</div>


		<?php require("footer.php") ?>
	</div>
</body>

</html>