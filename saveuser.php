<?php
	require('config/connect.php');

	$firstname = $_REQUEST['txtfirstname'];
	$lastname = $_REQUEST['txtlastname'];
	$email = $_REQUEST['txtemail'];
	$sex = $_REQUEST['sex'];
	$address = $_REQUEST['txtaddress'];
	$postcode = $_REQUEST['txtpostcode'];
	$city = $_REQUEST['txtcity'];
	$country = $_REQUEST['txtcountry'];
	$phone = $_REQUEST['txtphone'];
	$fax = $_REQUEST['txtfax'];
	$cpwd = $_REQUEST['txtcpwd'];
	$action = $_GET['action'];
	
	if($action == 'edit'){
		$sql = "UPDATE customers SET address='$address',postcode='$postcode',city='$city',country=$country,phone='$phone',fax='$fax' WHERE customerid=" .$_SESSION['sess_customerid'];
		if (!mysql_query($sql))
		{
			echo mysql_error();
			die;
		}		
		
		mysql_close($mydb);
		echo("<script>window.location = '?page=userdetail&cart=" . $GLOBALS['cart'] . "'; </script>");		
	}
	

	$sql = "SELECT * FROM customers WHERE email='" . $email . "'";
	$result = mysql_query($sql);
	$num = mysql_num_rows($result);

	if($num == 0){
		$sql = "INSERT INTO customers (firstname, lastname, email, sex, address, postcode, city, country, phone, fax, password) values ('$firstname','$lastname','$email',$sex,'$address','$postcode','$city',$country,'$phone','$fax','$cpwd')";
	
	
		if (!mysql_query($sql))
		{
			echo mysql_error();
			die;
		}		
		
		mysql_close($mydb);
	
	
		echo("<script>window.location = '?page=login&cart=" . $GLOBALS['cart'] . "'; </script>");		
	}
	else{
		mysql_close($mydb);
		echo("<script>window.location = '?page=registration&cart=" . $GLOBALS['cart'] . "&action=fail'; </script>");		
	}

?>