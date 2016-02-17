<?php
session_start();
include_once 'user.php';
$user = new User(); 
$id = $_SESSION['id'];


if (!$user->get_session()){
 header("location:login.php");
}

if (isset($_GET['q'])){
 $user->user_logout();
 header("location:login.php");
 }


    

?>
<?php include 'template/head.php';?>

<body>
 
    <div id="header_right">
          <ul>
              <li>Welcome <?php $user->get_username($id);?></li>&nbsp;&nbsp;&nbsp;
              <li><button class="btn" name="q"><a href="login.php">Log out</a></button></li>
          </ul>
     </div>  

  <div id="main">

  <?php include 'template/header.php';?>
    
    <div id="site_content">
      <div id="left_content">
        <h1>About</h1>
            
  <table id="editleft">
  <thead>
    <tr>
      <th>Options</th>
      <th>Information</th>
      <th>Change</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><strong>First name</strong></td>
      <td><?php $user->get_firstname($id); ?></td>
      <td>
          <button class="btn editbtn">Edit</button>
      </td>
    </tr>
    <tr>
      <td><strong>Last name</strong></td>
      <td><?php $user->get_lastname($id); ?></td>
      <td><button class="btn editbtn">Edit</button></td>
    </tr>
    <tr>
      <td><strong>Username</strong></td>
      <td><?php $user->get_username($id); ?></td>
      <td><button class="btn editbtn">Edit</button></td>
    </tr>                 
    <tr>
      <td><strong>Email</strong></td>
      <td><?php $user->get_email($id); ?></td>
      <td><button class="btn editbtn">Edit</button></td>
    </tr>
  </tbody>
</table>
         
      </div>
      <div id="right_content">
          <h1 style="margin: 20px;">Changing Password</h1>
           <form method="post" enctype="multipart/form-data" action="editprofile.php"> 
            <table id ="tableright">
                <thead>
                
                    <th colspan="2"><h2>Changing your password</h2></th>
                
                </thead>
                <tr>
                    <td><label>Type your old password</label></td>
                    <td><input type="text" name="oldpass"/></td>
                </tr>
                <tr>
                    <td><label>Type your new password</label></td>
                    <td><input type="text" name="newpass1"/></td>
                </tr>
                <tr>
                    <td><label>Confirm your password</label></td>
                    <td><input type="text" name="newpass2"/></td>
                </tr>
                <tr>
                    <td colspan="2"><button class="btn" name="passchange">Change Password</button></td>
                    
                </tr>
            </table>
            </form>
      </div>
    </div>

  <?php include 'template/footer.php';?>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
  <script type="text/javascript" src="js/editprofile.js"></script>

  

  <!-- initialise sooperfish menu -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
  
</body>
</html>
