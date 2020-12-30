<?php 

// <-- $con =  mysql_connect("localhost","root","");
$con = new mysqli("localhost","root","");
if($con){
	mysqli_select_db($con, 'restaurant reservation');
	$user = $_POST['user'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$timing = $_POST['timing'];
	$seat = $_POST['seat'];
	$comments = $_POST['comments'];
		

	$query = " insert into customerinfodata (user, email, mobile, timing, seat, comments)
values ('$user','$email','$mobile','$timing','$seat','$comments')";

	mysqli_query($con,$query);

	echo "reservation done";
}
// }
// else{
// 	echo "no connection";
// }

?>