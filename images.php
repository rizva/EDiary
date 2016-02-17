<?php
session_start();
include_once 'user.php';

$user = new User(); 
//$id = $_SESSION['id'];

if (!$user->get_session()){
 header("location:login.php");
}

if (isset($_GET['q'])){
 $user->user_logout();
 header("location:login.php");
 }

$filesResized = glob("images/resized/*.*");
$filesThumb = glob("images/thumb/*.*");

//$desc_image = $_POST['desc_images'];
 include 'template/head.php'; 
 ?>

<body>
 
    <div id="header_right">
          <ul>
              <li>Welcome <?php $user->get_username($id);?></li>&nbsp;&nbsp;&nbsp;
              <li><button class="btn"><a href="registration.php">Log out</a></button></li>
          </ul>
     </div>  
    
  <div id="main">
    <?php include 'template/header.php'; ?>
     <div id="site_content">
         
      <!-- start gallery HTML containers -->
      <div id="gallery" class="content">
        <div class="slideshow-container">
          <div id="loading" class="loader"></div>
          <div id="slideshow" class="slideshow"></div>
        </div>
      </div>
      <div id="thumb-container">
      <div id="thumbs" class="navigation">
          <h1>Images</h1>
          <ul class="thumbs noscript">
           
               <?php for ($i=0, $j=0; $i<count($filesResized), $j<count($filesThumb); $i++, $j++) {
                       $imageResize = $filesResized[$i];
                       $imageThumb = $filesThumb[$j];
                 echo '<li>
                        <a class="thumb" href="'.$imageResize.'"><img src="'.$imageThumb.'" /></a>
                        <div class="caption">
                          <div class="image-title portfolio_one">&quot;Pier by the sea, Fowey, Cornwall, UK&quot;</div>
                        </div></li>';                               
                 
                }
             ?>
           
          </ul>
        </div>        
        <div id="controls" class="controls portfolio_one"></div>
        <div id="caption" class="caption-container"></div>
        <div style="clear: both;"></div>
        <!-- end gallery HTML containers -->
      </div>
    </div>
    
     
   
   <?php include 'template/footer.php';?>

  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <!-- initialise sooperfish menu -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
  <script type="text/javascript" src="js/jquery.galleriffic.js"></script>
  <script type="text/javascript" src="js/jquery.opacityrollover.js"></script>
  <script type="text/javascript" src="js/galerycss.js"></script>
</body>
</html>
