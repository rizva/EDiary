<!DOCTYPE HTML>
<html>

<head>
  <title>EDiary</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <!-- stylesheets -->
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
  <link href="css/colour.css" rel="stylesheet" type="text/css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
    
  <div id="header_right">
          <ul>
              <li><button class="btn"><a href="login.php">Login</a></button></li>&nbsp;&nbsp;&nbsp;&nbsp;
              <li><button class="btn"><a href="registration.php">Register</a></button></li>
          </ul>
     </div>  
  <div id="main">

    <!-- begin header -->
    <header>
      <div id="logo" style="text-align: center;" ><h1>E<a href="#">Diary</a></h1>
               
     </div>
      
      <nav>
          
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="index.html">Home</a></li>
          <li><a href="confessions.php">Confessions</a></li>
          <li><a href="stories.php">Stories</a>
            <ul>
              <li><a href="portfolio_one.html">portfolio_one</a></li>
              <li><a href="portfolio_two.html">portfolio_two</a></li>
            </ul>
          </li>         
          <li><a href="contact.php">Contact</a></li>
        
        <div id="inner_nav">
          
        </div>
      </nav>
    </header>
    <!-- end header -->

    <!-- begin content -->
    <div id="site_content">
      <ul class="slideshow">
        <li class="show"><img width="950" height="450" src="images/136.jpg" alt="&quot;You can put a caption for your image right here&quot;" /></li>
        <li><img width="950" height="450" src="images/9.jpg" alt="&quot;You can put a description of the image here if you like, or anything else if you want.&quot;" /></li>
        <li><img width="950" height="450" src="images/book-corner-ethiopia.jpg" alt="&quot;You can put a description of the image here if you like, or anything else if you want.&quot;" /></li>
      </ul>
    </div>
    <?php include 'template/footer.php';?>

  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <!-- initialise sooperfish menu -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
