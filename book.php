<?php
$hostname='localhost';
$user='root';
$password='';
$db='user_db';
$con=mysqli_connect($hostname,$user,$password);
if(!$con){
	die("Connection failed: ".mysqli_connect_error());
}
else{
	echo "Connection successfull";
}
mysqli_select_db($con,$db);
?>

<?php
if (isset($_POST['submit'])) {
	$name_info=$_POST['name'];
	$mobile_info=$_POST['mobile'];
	$email_info=$_POST['email'];
	$date_info=$_POST['date'];
	$package_info=$_POST['package'];
	$transaction_info=$_POST['transaction'];

	$query="INSERT INTO tourist(name,mobile,email,datei,package,transaction) VALUES('$name_info','$mobile_info','$email_info','$date_info','$package_info','$transaction_info')";
	$run=mysqli_query($con,$query);
	if ($run) {
		echo "Submission successfull";
	}
	else{
		echo "Error: ".$query."<br>".mysqli_error($con);
	}
}
mysqli_close($con);
?>