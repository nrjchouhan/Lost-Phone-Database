<html>
<head>
</head>
<body>
<?php
//step1...... create connection
$con =mysqli_connect("localhost","root","","lostphone");

//step 2
 echo $emailid=$_POST['emailid'];
 echo $oldpassword=$_POST['oldpassword'];
 echo $password=$_POST['password'];

echo $query = "UPDATE users SET password='$password' WHERE password='$oldpassword' AND userid='$emailid'";


$result= mysqli_query($con ,$query);
if($result){
	?>
<div class="alert alert-success alert-dismissable fade in" style="margin-top:51px; text-align:center;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Your Password has been Successfully changed...
</div>
	<?php
	include("servicepanel.html");
}else{
	header('location: error.html');
}

?>
</body>
</html>