<?php
session_start();
require_once('config/session.php');
define("tax", 7);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Nhật Hưng Mobile</title>
  <link href="css/admin.css" rel="stylesheet" type="text/css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <script src="js/myjs.js" type="text/javascript"></script>

</head>
<?php

$page = $_GET['page'];

if ($page == '') {
  $page = 'categories';
}

?>

<body>
  <div class="container">
    <div class="form-admin-home">
      <div class="frame">
        <div class="menupanel">
          <div class="btnbg">
            <div class="text"><i class='bx bxs-hand-right'></i><a href="?page=categories">Product Categories</a></div>
          </div>
          <div class="btnbg">
            <div class="text"><i class='bx bxs-hand-right'></i><a href="?page=products"> Products</a></div>
          </div>
          <div class="btnbg">
            <div class="text"><i class='bx bxs-hand-right'></i><a href="?page=customers">Customers</a></div>
          </div>
          <div class="btnbg">
            <div class="text"><i class='bx bxs-hand-right'></i><a href="?page=orders">Orders</a></div>
          </div>
          <div class="btnbg">
            <div class="text"><i class='bx bxs-hand-right'></i><a href="?page=shipping">Shipping</a></div>
          </div>
          <div class="btnbg">
            <div class="text"><i class='bx bxs-hand-right'></i><a href="?page=payment">Payment</a></div>
          </div>
          <div class="btnbg">
            <div class="text"><i class='bx bxs-hand-right'></i><a href="?page=settings">Settings</a></div>
          </div>
          <div class="btnbg">
            <div class="text"><i class='bx bxs-hand-right'></i><a href="?page=logout">Logout</a></div>
          </div>
        </div>

        <div class="mainbody">
          <div class="content">

            <?php
            if (file_exists($page . '.php') == 1) {
              require($page . '.php');
            } else {
              require('categories.php');
            }
            ?>

          </div>
          <div class="copyright">&copy; Greenwich University</div>
        </div>
      </div>

    </div>


  </div>
</body>

</html>