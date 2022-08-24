<?php
// step1.... create/include the connection

$con = mysqli_connect("localhost","root","","lostphone"); // connect to data base ....add name of server..user ...password....database name....php page ko data base se connect karega


// step2.. retreive form parameters{method name}
echo $userid =$_POST['userid']; // agar method post ka h to post use karo..
echo $password =$_POST['password'];// agar nai pata post or get  to request use kar lo
echo $usertype =$_POST['usertype'];

//step3......create the query
 echo $query ="SELECT * from users WHERE userid ='$userid' AND password='$password' AND usertype='$usertype'";
    
    //execute the query
$result= mysqli_query($con,$query);
$num =mysqli_num_rows($result);
    

if($num==1){
	if($usertype=='admin'){
		header('location:adminpanel.html');
	}
	else{
		header('location:servicepanel.html');
	}
}
else{
	?>
<div class="alert alert-danger alert-dismissable fade in" style="margin-top:51px; text-align:center;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    User Id or Password is Wrong!!!
</div>
	<?php
	include("signin.html");
}
    
?>