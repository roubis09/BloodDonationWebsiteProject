<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="shortcut icon" href="Images/logo.ico" type="image/x-icon">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



    <link href='https://getbootstrap.com/docs/4.3/getting-started/introduction/' rel='stylesheet' type='text/css'>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Blood Daan</title>


  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <script src="js/source.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>


  <style>
  .Buton{
    padding-left: 130px;
    padding-top: 50px;
  }
  .button {
    border-radius: 4px;
    background-color: Red;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 200px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
  }
  .button:hover{
    background-color: #f4511e;
  }
  .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }

  .button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }

  .button:hover span {
    padding-right: 25px;
  }

  .button:hover span:after {
    opacity: 1;
    right: 0;
  }
  .monospace {
  font-family: "Lucida Console", Courier, monospace;
  font-weight: bold;
}
  </style>
</head>

<body>
    <div class="container-fluid  col-md-12">
		  <div class="header">
        <div class="logo">
			      <h1>【B ░ L ░ O ░ O ░ D】 &nbsp&nbsp<a href="index.php"><img src="Images/logo.jpg" alt=""></a> &nbsp&nbsp 【D ░ A ░ A ░ N】 </h1>
        </div>
		   </div>

       <div class="wrap">
		       <?php require('nav.php');?>
	     </div>

     </div>
    <div class="secondd">
    <div class="container-fluid col-md-12">
    <div class="container-fluid col-md-6">
      <div id="first" class="first">
        <div class="container" style="padding-right: 500px;">
          <img src="Images/front1.jpg" alt="Snow" class="slide" style="width:800px; height:500px;">
          <div class="centered">
            <h1>HELP FIGHT<br>🅲🅾🆅🅸🅳-19</h1><br>
            <button type="button" class="btn btn-danger btn-lg" onclick="javascript:window.location.href='donate.php'">DONATE TODAY</button>
          </div>
        </div>
        <div class="container" style="padding-right: 500px;">
          <img src="Images/front2.png" alt="Snow" class="slide" style="width:800px; height:500px;">
          <div class="bottom">
            <button type="button" class="btn btn-info btn-lg" onclick="javascript:window.location.href='https://timesofindia.indiatimes.com/city/goa/hit-by-shortfall-hospicio-appeals-for-blood-donations/articleshow/75227778.cms'">SEE HERE</button>
          </div>
        </div>
        <div class= "btn1">
        <button class="w3-button w3-black w3-display-left" id="btn2" onclick="plusDivs(-1)" style="margin-left: 60px;">&#10094;</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)" style="margin-left: 40px;">&#10095;</button>
        </div>
      </div>
    </div>
    <div class="container-fluid col-md-6">
    <section id="sec">
    <div class="word">
      <h2 class="monospace"> NATION COMES FIRST FOR
      <h1>&nbsp&nbsp&nbsp&nbsp&nbsp☬RAKHT SEVA☬ </h1></h2>
    </div>
    <div class="image">
      <img class="mySlides" src="Images/blood1.jpg" style="height:200px; width:300px">
      <img class="mySlides" src="Images/blood2.jpg" style="height:200px; width:300px">
      <img class="mySlides" src="Images/blood3.jpg" style="height:200px; width:300px">
    </div>
     <div class="Buton">
       <button class="button" onclick="javascript:window.location.href='donate.php'"><span>DONATE BLOOD </span></button>
       <button class="button" onclick="javascript:window.location.href='need.php'"><span>NEED BLOOD </span></button>
     </div>
     </section>
   </div>
  </div>
  <section id="third">
    <div class="container-fluid col-md-6">
          <div class="main">
      	<div class="content">
      			<h4>Blood bank:</h4>
      			<p>Blood is universally recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. More than 29 million units of blood components are transfused every year.
              Donate Blood.<br>
              We welcome you to in our WebSite. If you are a donor , We appreciate you to <a href="donate.php">donate blood</a> as a Donor. If you need blood please <a href="need.php">Send Request</a> to us.We are happy to serve you. We do this
              as a public service without any profit motive.This is a free service. We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.</p>
      	</div>

      	<div class="clear"></div>
      	</div>
      </div>
    <div class="container-fluid col-md-6">
      <div class="sidebar">
          <h2>You Should Know</h2>
          <div class="blog_posts">

        <marquee direction="up" scrolldelay="300" width="60%" height="200px">
          <table >
            <tr><td>
                <div class="blog_desc">
                <div class="blog_heading">
                  <span class="spn" style="font-weight:bold"><b><a href="https://www.brmsonline.com/blog/wellness/healthcare/2018/benefits-of-blood-donation">Health Benefits Of Donating Blood</a></b>
                      <p>Blood donation not only makes the receiver’s life good but also helps the donor to maintain good health. See The health benefits of donating blood.</p></span>
                </div>
                <br>
                <span class="spn" style="font-weight:bold"><b><a href="https://www.who.int/news-room/campaigns/world-blood-donor-day/2018/who-can-give-blood">Who can donate blood</a></b>
                      <p>Most people can give blood if they are in good health. There are some basic requirements one  need to fulfill in order to become a blood donor.See some basic eligibility guidelines</p></span>

                <br>
                <span class="spn" style="font-weight:bold"><b><a href="https://www.indiatoday.in/amp/mail-today/story/why-india-is-facing-a-huge-blood-crisis-1619927-2019-11-18">Why India is facing a huge blood crisis</a></b>
                      <p>India has the world's largest shortage of blood, with all states together battling a huge shortfall of 41 million units </p></span>
                </div>
            </td></tr>

                </table>
          </marquee>

               <div class="clear"></div>
            </div>


      </div>
    </div>
  </section>
  </div>
    <script type="text/javascript">
    var slideIndex = 0;
    carousel();

    function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
    }
    </script>

    <script>
      var slideIndex = 1;
      showDivs(slideIndex);

      function plusDivs(n) {
        showDivs(slideIndex += n);
      }

      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("container");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
      }
    </script>
</body>
</html>
