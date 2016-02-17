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
        
      </nav>
    </header>
    <!-- end header -->

    <!-- begin content -->
    
    <div id="site_content">
      <div id="left_content">
        <div id="blog_container">
          <div class="blog"><h2>May</h2><h3>20th</h3></div>
          <h4 class="select"><a href="blog.html">Magazine Photo-Shoot</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="">read more.....</a></p>
          <div class="blog"><h2>Apr</h2><h3>20th</h3></div>
          <h4><a href="blog_2004.html">Wedding Shoot in Edinburgh</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="">read more.....</a></p>
        </div>
      </div>
      <div id="right_content">
        <div id="blog_text">
          <h1>Magazine Photo-Shoot</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui.</p>
        </div>
      </div>
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
