<?php
  if(isset($_POST['submit'])){
    $email= $_POST['email'];
    $name= $_POST['name'];
    $mobile= $_POST['mobile'];
    $subject= $_POST['subject'];
    $description= $_POST['description'];

    $to = $email;
    $subject = "Message From BloodDaan";
    $txt = "Thank You For Contacting Us. Your response has been recorded. We shall get back to you soon";
    $headers = "From: noreply@blooddaan.com";
    //"CC: somebodyelse@example.com";

    mail($to,$subject,$txt,$headers);
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <div class="container">
      <h1> WE LIKE TO HEAR FROM YOU </h1>
      <form method="post" action="#">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter Full name">
          <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
        <div class="form-group">
          <label for="name">Mobile no.</label>
          <input type="number" class="form-control" name="mobile" id="mobile" aria-describedby="mobile" placeholder="Enter Mobile Number">
          <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Subject</label>
          <textarea class="form-control" id="subject" name="subject" rows="1"></textarea>
      </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </body>
</html>
