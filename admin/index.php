<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nhật Hưng Mobile</title>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<?php
	$action = $_GET['action'];
?>


<body>
	<div class="container">
            <div class="login">
                
            
                <div class="box">
                   <div class="logo-admin">
                     <img src="img/logo.png" width="50px" height="50px" alt="alt"/>
                     <h1>Nhat Hung Mobile</h1>
                   </div>
                    <form action="validateuser.php" method="post">
                        <table cellpadding="0" cellspacing="0">
                            <tr>
                                <td  align="right">USER NAME:</td>
                                <td><input class="input-form-admin" name="username" type="text" id="username" size="20" /></td>
                                </tr>
                            <tr>
                                <td align="right">PASSWORD:</td>
                                <td><input  class="input-form-admin" name="password" type="password" id="password" size="20" /></td>
                            </tr>
                            <tr align="center" height="30px">
                                    <td colspan="2">
                                        <input class="btn-admin" type="submit" value="Log In" />
                                        <input class="btn-admin" type="reset" value="Reset" />
                                    </td>
                                </tr>
                        </table>
                        </form>
                </div>
                <?php
                    if($action == 'fail'){
                        echo('<div align="center"><font color="#CC0000">Invalid username and password!!</font></div>');
                    }
                ?>
            
             </div>
    </div>
</body>
</html>
