<head>
   <link rel ="stylesheet" type="text/css"
         href="grid.css"/>
		 <title>Lost Phones</title>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<!-- <body  style=" background-image: url(back.jpg); "> -->
<body>

<nav class="nav nav-tabs navbar navbar-inverse navbar-fixed-top" style="margin: 0">
  <div class="container" style="padding-top:10px; padding-bottom:10px; ">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="adminpanel.html">Lost Phone</a> 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	<form class="navbar-form navbar-left" name="search" method ="post" action="search.php">
      <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="Enter IMEI Number" style="width:600px">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
	 <!-- <li><a href="#">Notifications</a></li> -->
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
	  <li><a href="signin.html"><span class="glyphicon glyphicon-log-out"></span> Signout</a></li>
    </ul>
    </div>
  </div>
</nav>
    
    <div class ="container">
    
   
             
        
        
        
        <div class="row">
             <div class="col-10" style=" text-align: right; "><a href="dashboard.php" style="padding-right: 25px; color:#333;">Dashboard</a> 
             </div>
            
        <div class="col-2" style=" text-align: right; "><a href="addlostphone.php" style="padding-right: 25px; color:#333;">Add Lost Phone Details</a> 
            </div></div></div>
        






<br><br>



<h2 style="text-align:center">REGISTERED PHONE DETAILS</h2>




<br>




<?php
$con =mysqli_connect("localhost","root","","lostphone");
$query ="SELECT * FROM lostmobile";
$result =mysqli_query($con, $query);
$resultrows = mysqli_fetch_array($result);

?>

<table border="2" width="1200px" align="center" style="margin-left:83px" >
        <tr>
            <th>SNO.</th>
            <th>IMEI number</th>
            <th>FIR number</th>
            <th>Brand</th>
            <th>Date of Purchase</th>
            <th>Shop name</th>
             <th>Date of loss</th>
            <th>Name </th>
            <th>Address</th>
             <th>Contact number</th>
           
            
           
             
                </tr>
    <?php
     
            $s=1;
    do{
        
    ?>
        <tr>
           <td><?php echo $s; $s++;?> </td>
            <td><?php echo $resultrows[0];?></td>
            <td><?php echo $resultrows[1];?></td>
            <td><?php echo $resultrows[2];?></td>
            <td><?php echo $resultrows[3];?></td>
            <td><?php echo $resultrows[4];?></td>
            <td><?php echo $resultrows[5];?></td>
            <td><?php echo $resultrows[6];?></td>
            <td><?php echo $resultrows[7];?></td>
            <td><?php echo $resultrows[8];?></td>
            
            </tr>
    <?php
    }while($resultrows=mysqli_fetch_array($result));
    ?>
        
         </table>
</body>