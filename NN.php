
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />  
Register <style>
<!-- #container{width:400px; margin: 0 auto;} -->
</style>  
<script type="text/javascript" language="javascript"> 
function submitreg() { 
    var form = document.reg; 
    if(form.name.value == ""){ 
        alert( "Enter name." ); 
        return false; 
        } else if(form.uname.value == ""){ 
            alert( "Enter username." ); 
            return false; 
            } else if(form.upass.value == ""){ 
                alert( "Enter password." ); 
                return false; 
                } else if(form.uemail.value == ""){ 
                    alert( "Enter email." ); 
                    return false; 
                    } 
                    } 
                    </script> 
                    <div id="container"> 
                        <h1>Registration Here</h1> 
                        <form action="" method="post" name="reg"> 
                            <table> 
                                <tbody> 
                                    <tr> 
                                        <th>Full Name:</th> 
                                        <td><input type="text" name="fullname" required="" /></td> 
                                        </tr> 
                                    <tr> 
                                         <th>User Name:</th> 
                                         <td><input type="text" name="uname" required="" /></td> 
                                    </tr> 
                                    <tr> 
                                        <th>Email:</th> 
                                        <td><input type="text" name="uemail" required="" /></td> 
                                    </tr> 
                                    <tr> 
                                        <th>Password:</th> 
                                        <td><input type="password" name="upass" required="" /></td> 
                                    </tr> 
                                    <tr> 
                                        <td></td> 
                                        <td><input onclick="return(submitreg());" type="submit" name="submit" value="Register" /></td> 
                                    </tr> 
                                    <tr> 
                                        <td></td> 
                                        <td><a href="login.php">Already registered! Click Here!</a></td> 
                                    </tr> 
                               </tbody> 
                         </table> 
                      </form>
                  </div> 
                  





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