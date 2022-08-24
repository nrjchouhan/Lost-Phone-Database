<?php
//step1...... create connection
$con =mysqli_connect("localhost","root","","lostphone");

//step 2
 echo $imei=$_POST['imei'];
 echo $FIRnumber=$_POST['FIRnumber'];
 echo $brand=$_POST['brand'];
 echo $dop=$_POST['dop'];
echo $shopname=$_POST['shopname'];
 echo $dol=$_POST['dol'];
echo $name=$_POST['name'];
echo $address=$_POST['address'];
 echo $phoneno=$_POST['phoneno'];


echo $query = "INSERT INTO lostmobile(imei,FIRnumber,brand,dop,shopname,dol,name,address,phonenumber)
    VALUES('$imei','$FIRnumber','$brand','$dop','$shopname','$dol','$name','$address','$phoneno')";


$result= mysqli_query($con ,$query);
if($result){
	header('location: viewphones.php');
}else{
	header('location: error.html');
}

?>
