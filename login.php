<?php
if (isset($_SESSION['sess_customerid']) != '') {
  echo ("<script>window.location = '?page=userdetail&cart=" . $GLOBALS['cart'] . "&action=empty'; </script>");
}

$login = isset($_REQUEST['login']) && $_REQUEST['login'];
?>

<div class="productlist">
  <div><img src="img/product_list_top.png" width="602" height="10" /></div>
  <div class="products">
    <div class="product_table">
      <?php
      if ($login == 'fail') {
        echo ('<span class="product_table"><font color="#CC0000"><strong><u>Invalid username and password.</u></strong></font></span>');
      }
      ?>

      <table width="440px" border="0" cellspacing="0" cellpadding="0">

        <tr height="25px" valign="top">
          <td width="250px">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr height="130px">
                <td class="new-customer-login">

                  <h3 class="myh3">New Customer</h3>

                  <p>I am a new customer.</p>

                  <p>By creating an account at our Online Store you will be able to shop faster, be up to date on an orders status, and keep track of the orders you have previously made.</p>
                </td>
              </tr>
              <tr>
                <td align="right" class="bodylinks">
                  <p>
                    <input type="button" value="Sign Up" onclick="javascript:window.location='?page=registration&cart=<?php echo ($GLOBALS['cart']) ?>'" />
                    <i class='bx bx-log-in'></i>
                  </p>
                </td>
              </tr>
            </table>
          </td>
          <td width="25px" class="rightline">&nbsp;</td>

          <td width="160px">

            <form action="?page=validateuser&cart=<?php echo ($GLOBALS['cart']) ?>" method="post">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr height="130px">
                  <td class="new-customer-login">

                    <h3 class="myh3">Returning Customer</h3>
                    <p>
                      <span class="p-customer-login">E-mail Address:</span>
                      <input class="input-customer-login" type="text" name="email" id="email" /><br />
                      <span class="p-customer-login"> Password:</span> <br>
                      <input class="input-customer-login" type="password" name="password" id="password" /><br />
                    </p>

                  </td>
                </tr>
                <tr>
                  <td align="right" class="bodylinks">
                    <p>
                      <input type="submit" value="Sign In" />
                      <i class='bx bx-log-out'></i>
                    </p>
                  </td>
                </tr>
              </table>
            </form>


          </td>
        </tr>
      </table>

    </div>
  </div>
  <div><img src="img/product_list_bottom.png" width="602" height="10" /></div>
</div>