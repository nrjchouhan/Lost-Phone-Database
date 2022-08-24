<?php
//step1...... create connection
$con =mysqli_connect("localhost","root","","lostphone");

//step 2
echo $emailid=$_POST['emailid'];
 echo $aadhar=$_POST['aadhar'];
 echo $ownername=$_POST['ownername'];
 echo $owneraddress=$_POST['owneraddress'];
echo $phoneno=$_POST['phoneno'];
 echo $dor=$_POST['dor'];
  echo $shopname=$_POST['shopname'];
echo $shoppassword=$_POST['shoppassword'];
echo $shopaddress=$_POST['shopaddress'];



echo $query = "INSERT INTO shopregister(emailid,aadhar,ownername,owneraddress,phoneno,dor,shopname,shoppassword,shopaddress)
    VALUES('$emailid','$aadhar','$ownername','$owneraddress','$phoneno','$dor','$shopname','$shoppassword','$shopaddress')";
echo $query1 = "INSERT INTO users VALUES('$emailid','$shoppassword','service')";


$result= mysqli_query($con ,$query);
$result1= mysqli_query($con ,$query1);

header('location: viewshopdetails.php');
/*
if($result){
	header('location: viewshopdetails.php');
}else{
	header('location: error.html');
}  */

?>
