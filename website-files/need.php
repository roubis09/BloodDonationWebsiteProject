<?php
include_once 'db/blood.php';
/*$mysqli = new mysqli("localhost","root","","blood");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}*/
if(isset($_POST['submit']))
{
	$name=$_POST['t1'];
  $gender=$_POST['t2'];
	$age=$_POST['t3'];
  $mobile=$_POST['t4'];
	$email=$_POST['t5'];
	$blood=$_POST['t6'];
	if($name==''|| $age==''|| $email==''|| $blood==''|| $mobile==''|| $gender=='')
	{
		//alert("REQUIRED..");
		echo "ALL FIELDS ARE REQUIRED..";
		return false;
	}
	else
	{
    try{
						//$sql= "INSERT INTO `donate`(`name`, `gender`, `age`, `mobile`, `email`, 'blood') VALUES ('rounik','male','12','123456','abcd', 'B+')";
						//$sql= "INSERT INTO `donate`(`name`, `gender`, `age`, `mobile`, `email`, `blood`) VALUES ('$name','$gender','$age','$mobile','$email', '$blood')";
            $sql= "INSERT INTO `need`(`name`, `gender`, `age`, `mobile`, `email`, `blood`, `email1`) VALUES ('$name','$gender','$age','$mobile','$email', '$blood','$email')";
            if($result = $mysqli -> query($sql)){
							header("Location: address2.php");
							//echo "SUBMITTED SUCCESSFULLY..";
							return true;
            }else{
                echo "errorrrrr";
                exit();
            }
    }
		catch (exception $e) {
            exit($e->getMessage());
    }
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Request Blood</title>
<link href="css/need1.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>

	<div class="container-fluid col-md-12">

		<div class="header">
			<div class="logo">
					<!-- <h1>【B】【L】【O】【O】【D】 &nbsp&nbsp<a href="index.php"><img src="Images/logo.jpg" alt=""></a> &nbsp&nbsp 【D】【A】【A】【N】 </h1>-->
					<h1>【B ░ L ░ O ░ O ░ D】 &nbsp&nbsp<a href="index.php"><img src="Images/logo.jpg" alt=""></a> &nbsp&nbsp 【D ░ A ░ A ░ N】 </h1>
			</div>
		 </div>
	</div>
<div class="nav_bg">

<div style="height:530px; width:700px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     <!--<form method="post" enctype="multipart/form-data">-->
<table cellpadding="0" cellspacing="0" style="margin:auto; width:100%; " >

    <tr><td colspan="2"  align="center"><img src="Images/need.png" width="300px" height="80px"  /></td></tr>

<tr><td colspan="2">&nbsp;</td></tr>

                <tr><td  id="need" style=" padding-left:20px;" ><img src="Images/need1.jpg" width="170px" class="shaddoww"/>&nbsp; </td>
                <td style="vertical-align:top;padding-top:20px;">
<table cellpadding="0" cellspacing="0" style="width:100%; height:400px;">
<form method="post" action=#>
    <tr><td class="lefttd">Name:</td><td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{2,15}" title="please enter only character  between 2 to 15 for donor name" /></td></tr>

    <tr><td class="lefttd">Gender</td><td><input name="t2" type="radio" value="male" checked="checked">Male<input name="r1" type="radio" value="female" >Female</td></tr>

    <tr><td class="lefttd">Age</td><td><input type="number" name="t3" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" /></td></tr>
    <tr><td class="lefttd">Mobile No</td><td><input type="tel" name="t4" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." /></td></tr>
    <tr><td class="lefttd">Email</td><td><input type="email" name="t5" required="required" title="please enter valid email" /></td></tr>

    <tr><td class="lefttd"> Blood Group </td><td>
    <select name="t6" required>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
    </select>
    <tr><td><input type="submit" value="Submit" name="submit" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>
</form>
</table
</body>
</html>
