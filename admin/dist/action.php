<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "sar";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$query="SELECT * from site_access";

if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}




if (isset($_POST['app'])) {

	$approve=$_POST['approve'];
	$approve_query="UPDATE site_access set status=1 where id=$approve";
	mysqli_query($conn,$approve_query);

	if (mysqli_query($conn,$approve_query)) {
		# code...
		echo("<script>
			alert('Access Approved');
		 </script>

		");

		echo "<meta http-equiv = 'refresh content='0'>";

	}

	

	
}

if (isset($_POST['dec'])) {
	
$decline=$_POST['decline'];
echo($decline);
$decline_query="UPDATE site_access  set status=2 where id=$decline";
mysqli_query($conn,$decline_query);

echo("<script>
		alert('Access declined');
	</script>

		");
		echo "<meta http-equiv = 'refresh content='0'>";


}









?>
