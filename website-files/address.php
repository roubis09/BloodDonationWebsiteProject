
<?php
/*if(!defined('Myheader')){
  //header('Location: index.php');
  //exit('header('Location: index.php')');
  echo "stop";
}*/

include_once 'db/blood.php';
/*$mysqli = new mysqli("localhost","root","","blood");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}*/

/*require_once 'donate.php';*/
/*if(isset($_POST['submit'])){
  $email= $_POST['t5'];
  echo $email;
}*/
//echo $_POST['t5'];

if(isset($_POST['submit']))
{
  $email=$_POST['email'];
	$country=$_POST['country'];
  $state=$_POST['state'];
	$city=$_POST['city'];
  $address=$_POST['address'];
	$locality=$_POST['locality'];
  $pincode=$_POST['pincode'];
  $landmark=$_POST['landmark'];
	if($email=='' || $country==''|| $state==''|| $city==''|| $address==''|| $locality==''|| $pincode=='')
	{
		//alert("REQUIRED..");
		echo "ALL FIELDS ARE REQUIRED..";
		return false;
	}
	else
	{

            //$sql= "INSERT INTO `address`(`email`, `country`, `state`, `city`, `address`, `locality`, `pincode`, `landmark`) VALUES ('$email','$country','$state','$city','$address','$locality', '$pincode', '$landmark')";
            $sql= "INSERT INTO `address`(`email`, `country`, `state`, `city`, `address`, `locality`, `pincode`, `landmark`) VALUES ('$email','$country','$state','$city','$address','$locality', '$pincode', '$landmark')";
            //$sql= "INSERT INTO `donate`(`country`, `state`, `city`, `address`, `locality`, `pincode`, `landmark`) VALUES ('$country','$state','$city','$address','$locality', '$pincode', '$landmark') WHERE email=donate.email";
            //SELECT * FROM donate natural join address on table1.mail=table2.mail
            if($result = $mysqli -> query($sql)){

                        $to = $email;
                        $subject = "Message From BloodDaan";
                        $txt = "Thank You For Donating Blood. We shall contact you soon";
                        $headers = "From: noreply@blooddaan.com";
                        //"CC: somebodyelse@example.com";

                        mail($to,$subject,$txt,$headers);

							header("Location: welcome.php");
						  //echo "SUBMITTED SUCCESSFULLY..";
							return true;
            }else{
                echo "errorrrrr.something went wrong";
                exit();
            }
            /*if($statement->rowCount() == 1){
              header("Location: index.php");
              //echo "SUBMITTED SUCCESSFULLY..";
              return true;
            }*/
    //}
    /*catch{
            echo "Something Went wrong...Try again...";
    }*/
	}
}
?>
<?php
if (!defined('SECURE_PAGE'))
{
    header("Location: index.php");
    die('<h1>Direct File Access Prohibited</h1>');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Address</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link rel="stylesheet" href="css/address.css">
</head>
<body>
   <div class="container">
    <h3>Your Address</h3>

    <form id="shippingAddress" method="post" action=#>
      <!--<div id="locationList"></div>
      <br>-->
      <div class="input-field">
        <input class="input_fields" id="email" type="email" name="email" required>
        <label class="active" for="email">Email(What you used in before page)</label>
      </div>
      <div class="input-field">
        <input class="input_fields" id="country" type="text" name="country" required>
        <label class="active" for="country">Country</label>
      </div>
      <div class="input-field">
        <input class="input_fields" id="state" type="text" name="state" required>
        <label class="active" for="State">State</label>
      </div>
      <div class="input-field">
        <input class="input_fields" id="city" type="text" name="city" required>
        <label class="active" for="city">City/District/Town</label>
      </div>
      <div class="input-field">
        <input class="input_fields materialize-textarea" id="address" type="text" name="address" required>
        <label class="active" for="address">Address (Area and Street)</label>
      </div>
      <div class="input-field">
        <input class="input_fields" id="locality" type="text" name="locality" required>
        <label class="active" for="locality">Locality</label>
      </div>
      <div class="input-field">
        <input class="input_fields" id="postal_code" type="text" name="pincode" pattern="[0-9]{1,100}" required>
        <label class="active" for="pin_code">Pin Code</label>
      </div>
      <div class="input-field">
        <input class="input_fields" id="landmark" type="text" name="landmark">
        <label class="active" for="landmark">Landmark</label>
      </div>
      <input type="submit" name="submit" class="btn btn-primary" value="Submit">
    </form>
    <!-- You could add a fallback address gathering form here -->
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFjxorFHRdEaGTp0Wead_xFeWSBxzHtqQ"></script>
  <script src="js/main.js"></script>
</body>
</html>
