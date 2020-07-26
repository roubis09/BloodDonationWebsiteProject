<?php  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title></title>



    <style media="screen">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700,800);

    *,html,body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,label,fieldset,input,p,blockquote,th,td {
        margin: 0;
        padding: 0;
    }

    article,aside,figure,footer,header,hgroup,nav,section {
        display: block;
    }

    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    html {
        -webkit-font-smoothing: antialiased;
    }

    a {
        color: #BA0707;
        text-decoration: none;
    }

    a:hover {
        color: #BA0707;
    }

    /*body {
        background: #e5e5e5;
        color: #374147;
        font: 14px "Open Sans",Helvetica,Arial,sans-serif;
        -webkit-font-smoothing: antialiased;
        line-height: 1;
        width: 100%;
    }*/

    nav {
        display: block;
        background: #374147;
        width: 105%;
        margin-left: -20px;
        margin-bottom: 50px;
    }

    .menu {
        display: block;
    }

    .menu li {
        display: inline-block;
        position: relative;
        z-index: 100;
    }

    .menu li:first-child {
        margin-left: 0;
    }

    .menu li a {
        font-weight: 600;
        text-decoration: none;
        padding: 20px 15px;
        display: block;
        color: #fff;
        transition: all 0.2s ease-in-out 0s;
    }

    .menu li a:hover,.menu li:hover>a {
        color: #fff;
        background: #9ca3da;
    }

    .menu ul {
        visibility: hidden;
        opacity: 0;
        margin: 0;
        padding: 0;
        width: 170px;
        position: absolute;
        left: 0px;
        background: #fff;
        z-index: 99;
        transform: translate(0,20px);
        transition: all 0.2s ease-out;
    }

    .menu ul:after {
        bottom: 100%;
        left: 20%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-color: rgba(255, 255, 255, 0);
        border-bottom-color: #fff;
        border-width: 6px;
        margin-left: -6px;
    }

    .menu ul li {
        display: block;
        float: none;
        background: none;
        margin: 0;
        padding: 0;
    }

    .menu ul li a {
        font-size: 12px;
        font-weight: normal;
        display: block;
        color: #797979;
        background: #fff;
    }

    .menu ul li a:hover,.menu ul li:hover>a {
        background: #9ca3da;
        color: #fff;
    }

    .menu li:hover>ul {
        visibility: visible;
        opacity: 1;
        transform: translate(0,0);
    }

    .menu ul ul {
        left: 169px;
        top: 0px;
        visibility: hidden;
        opacity: 0;
        transform: translate(20px,20px);
        transition: all 0.2s ease-out;
    }

    .menu ul ul:after {
        left: -6px;
        top: 10%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-color: rgba(255, 255, 255, 0);
        border-right-color: #fff;
        border-width: 6px;
        margin-top: -6px;
    }

    .menu li>ul ul:hover {
        visibility: visible;
        opacity: 1;
        transform: translate(0,0);
    }

    .responsive-menu {
        display: none;
        width: 105%;
        padding: 20px 15px;
        background: #374147;
        color: #fff;
        text-transform: uppercase;
        font-weight: 600;
    }

    .responsive-menu:hover {
        background: #374147;
        color: #fff;
        text-decoration: none;
    }

    a.homer {
        background: #9ca3da;
    }

    /*@media (min-width: 768px) and (max-width: 979px) {
        nav{
          width: 103%;
          margin-left: -20px;
        }
        .mainWrap {
            width: 800px;
        }

        .menu ul {
            top: 37px;
        }

        .menu li a {
            font-size: 12px;
        }

        a.homer {
            background: #374147;
        }
    }*/

    @media (max-width: 1000px) {
        .mainWrap {
          width: 105%;
          margin-left: -20px;
          padding: 50px 20px;
        }

        .menu {
            display: none;
        }

        .responsive-menu {
            display: block;
        }

        nav {
            margin-left: -20px;
            background: none;
            width: 103%;


        }

        .menu li {
            display: block;
            margin: 0;
        }

        .menu li a {
            background: #fff;
            color: #797979;
        }

        .menu li a:hover,.menu li:hover>a {
            background: #9ca3da;
            color: #fff;
        }

        .menu ul {
            visibility: hidden;
            opacity: 0;
            top: 0;
            left: 0;
            width: 105%;
            transform: initial;
        }

        .menu li:hover>ul {
            visibility: visible;
            opacity: 1;
            position: relative;
            transform: initial;
        }

        .menu ul ul {
            left: 0;
            transform: initial;
        }

        .menu li>ul ul:hover {
            transform: initial;
        }
    }

    @media (max-width: 480px) {
    }

    @media (max-width: 320px) {
    }

    </style>

    <script type="text/javascript">
        $(document).ready(function(){
      	var touch 	= $('#resp-menu');
      	var menu 	= $('.menu');

      	$(touch).on('click', function(e) {
      		e.preventDefault();
      		menu.slideToggle();
      	});

      	$(window).resize(function(){
      		var w = $(window).width();
      		if(w > 767 && menu.is(':hidden')) {
      			menu.removeAttr('style');
      		}
      	});

      });
    </script>
  </head>
  <body>
    <nav>
    <a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> Menu</a>
   <ul class="menu">
   <li><a class="homer" href="index.php"><i class="fa fa-home"></i> HOME</a>
   <!--<ul class="sub-menu">
   <li><a href="#">Sub-Menu 1</a></li>
   <li><a href="#">Sub-Menu 2</a></li>
   <li><a href="#">Sub-Menu 3</a></li>
   <li><a href="#">Sub-Menu 4</a></li>
   <li><a href="#">Sub-Menu 5</a></li>
 </ul>-->
   </li>
   <li><a  href="about.php"><i class="fa fa-sitemap"></i> ABOUT </a></li>
   <li><a  href="donate.php"><i class="fa fa-sitemap"></i> DONATE BLOOD </a></li>
   <li><a  href="need.php"><i class="fa fa-exclamation-triangle"></i> NEED BLOOD </a></li>
  <li><a  href="https://www.who.int/news-room/q-a-detail/why-should-i-donate-blood"><i class="fa fa-user"></i> WHY GIVE BLOOD</a></li>
  <li><a  href="https://www.who.int/news-room/campaigns/world-blood-donor-day/2019/who-can-give-blood"><i class="fa fa-camera"></i> ELIGIBILITY FOR DONATING</a>
  <!--<ul class="sub-menu">
   <li><a href="#">Sub-Menu 1</a></li>
   <li><a href="#">Sub-Menu 2</a>
    <ul>
    <li><a href="#">Sub Sub-Menu 1</a></li>
   	<li><a href="#">Sub Sub-Menu 2</a></li>
	<li><a href="#">Sub Sub-Menu 3</a></li>
   	<li><a href="#">Sub Sub-Menu 4</a></li>
	<li><a href="#">Sub Sub-Menu 5</a></li>
    </ul>
   </li>
     <li><a href="#">Sub-Menu 3</a>
    <ul>
    <li><a href="#">Sub Sub-Menu 1</a></li>
   	<li><a href="#">Sub Sub-Menu 2</a></li>
	<li><a href="#">Sub Sub-Menu 3</a></li>
   	<li><a href="#">Sub Sub-Menu 4</a></li>
	<li><a href="#">Sub Sub-Menu 5</a></li>
    </ul>
   </li>
 </ul>-->
  </li>
  <li><a  href="donation.php"><i class="fa fa-bullhorn"></i> DONATION PROCESS</a></li>
  <li><a  href="our.php"><i class="fa fa-tags"></i> WHY OUR PLATFORM</a>
  <!--<ul class="sub-menu">
   <li><a href="#">Sub-Menu 1</a></li>
   <li><a href="#">Sub-Menu 2</a>
    <ul>
    <li><a href="#">Sub Sub-Menu 1</a></li>
   	<li><a href="#">Sub Sub-Menu 2</a></li>
	<li><a href="#">Sub Sub-Menu 3</a></li>
   	<li><a href="#">Sub Sub-Menu 4</a></li>
	<li><a href="#">Sub Sub-Menu 5</a></li>
    </ul>
   </li>
     <li><a href="#">Sub-Menu 3</a>
    <ul>
    <li><a href="#">Sub Sub-Menu 1</a></li>
   	<li><a href="#">Sub Sub-Menu 2</a></li>
	<li><a href="#">Sub Sub-Menu 3</a></li>
   	<li><a href="#">Sub Sub-Menu 4</a></li>
	<li><a href="#">Sub Sub-Menu 5</a></li>
    </ul>
   </li>
 </ul>-->
  </li>
  <li><a  href="contact.php"><i class="fa fa-envelope"></i> CONTACT</a></li>

  </ul>
  </nav>

  </body>
</html>
