


<?php
include_once 'database.php';
if(isset($_POST['submit']))
{	 
	 // $first_name = $_POST['first_name'];
	 // $last_name = $_POST['last_name'];
	 // $city_name = $_POST['city_name'];
	 // $email = $_POST['email'];
	 // if (!(empty($_POST['area_access']))) {
		// 	# code...ech

		// 	foreach ($_POST['area_access'] as $area_access) {
		// 		# code...ec
				
		// 		echo($area_access);


		// }}

		// else{	
		// 	echo "select a checkbox";
		// }

$area_access = isset($_POST['area_access']) ? $_POST['area_access'] : ''; //is area access posted or empty?
$area_access_send = is_array($area_access) ? implode(", ", $area_access) : ''; //implode area access
echo $area_access_send;

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$purpose = $_POST['purpose'];
	$class = $_POST['class'];
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	$email= $_POST['email'];
	// $valid = $_POST['valid'];

	$valid = isset($_POST['valid']) ? $_POST['valid'] : '';

	$induction = isset($_POST['induction']) ? $_POST['induction'] : '';
	// $induction = $_POST['induction'];
	$po_num = $_POST['po_num'];
	$receipt_num = $_POST['receipt_num'];

	echo($name.
	$phone.
	$purpose.
	$class.
	$start_date.
	$end_date.
	$email.
	$induction.
	// $area_access.
	$po_num.
	$valid.
	$receipt_num);
	
	 $sql = "INSERT INTO site_access (phone,name,email,area_access,class,start_date,end_date,purpose,induction,po_num,valid,receipt_num)
	 VALUES ('$phone','$name','$email','$area_access_send','$class','$start_date', '$end_date','$purpose','$induction', '$po_num','$valid', '$receipt_num')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>







