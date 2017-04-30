<?php

include 'head.php';


$sql="SELECT * FROM user";
$error="";
include("dbconfig.php");

if(isset($_POST["submit"]))
{

    extract($_POST);


    $sql="SELECT * FROM `user_id` WHERE `email_id`='$username' AND `password`='$pass'";
	$rs=mysqli_query($conn,$sql) ;
    
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["user"]=$username;
        
        header("location:index.php");
	}
    if($found=="N"){
        
        $error="<lebal class='alert alert-warning'>Please Enter correct Email and Password</div>";
    }

}


?>
   <!-- Header -->
    <header>
        <div class="container" style="positio">
         
            <div class="intro-texts login">
             <div class="bb">
                 <form method="post">
                <table class="table">
<tr>
<td>username</td>
     <td><input class="form-control" type="text" id="username" name="username">
     </tr>
  <tr>
    <td>password</td>  
        <td><input  class="form-control" type="password" id="pass" name="pass">
       </tr>  <tr><td>
                    
                    
                    </td><td><input value="Login"  class="btn btn-info" type="submit" id="sub" name="submit">
                    
                    
                    <br><br><a href="create_user.php" class="btn btn-info" >Sign Up</a>
                    
                    </td></tr>
                    <tr><td colspan="2"><?php echo $error; ?> </td></tr> 
         </table> </form>
                </div>
            </div> 
        </div>
           
            
    </header>
     <center></center>
</body>
</html>

























</html>