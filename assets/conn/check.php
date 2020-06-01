<?php

if(isset($_POST['login'])){
	$dbServername='localhost';
	$dbusername='root';
	$dbPassword='';
	$dbName='sar';

	$conn= mysqli_connect($dbServername,$dbusername,$dbPassword,$dbName);
	
	// $sql="INSERT INTO messages(message,location) VALUES ($txt,$location);";
	// mysqli_query($conn,$sql);

	$email = $_POST['email'];
	$pass = $_POST['password'];
	$error="";
	$login_sql = "SELECT * FROM login WHERE password = '$pass' AND email = $email";
	// $code_is_used = "SELECT * FROM vouchers WHERE voucher = '$code' AND status = 1";
	// var_dump($sql_code);
	$login_sql_flush = mysqli_query($conn,$login_sql);
	// $code_is_used= mysqli_query($conn,$code_is_used);?





	if(mysqli_num_rows($login_sql_flush) > 0)

	{  
		
		// $code_var = "INSERT INTO used_coupons(`codes`) VALUES ('$code')";
		// $code_used = mysqli_query($conn,$code_var);
		// if ($code_used) {
			
		// 	$code_remove = "UPDATE vouchers SET status = 1 WHERE voucher = '$code'";
		// 	$code_update = mysqli_query($conn,$code_remove);
		// }
		

		header("location:../../pages/index1.html");
	}



}


