 <?php
include 'head.php';
include 'check.php';
$err="";
$found="";
$success="";
if(isset($_POST['submit']))
{
   
extract($_POST);
    include 'dbconfig.php';
     
     $rs=mysqli_query($conn,"SELECT * FROM `add_block` WHERE `email`='$email'") ;
    if(mysqli_num_rows($rs)<1)
	{
    $sql1="INSERT INTO `add_block` (`name`, `email`, `password`, `mob`) VALUES ('$name', '$email', '$pass', '555')";
if(mysqli_query($conn,$sql1));
{
    $success="<div class='alert alert-success'>Admin is Created successfully</div>";
}
}	else
	{
        $found="N";
    }
 }
 if($found=="N"){
     
     $err="<div class='alert alert-warning'>Email Already Exist</div>";
 
 } ?>

<section id="add_games" class="bg-light-gray">
    <div class="container">
   <form method="POST" >
       <div class="form-gorup"><?php echo $success; ?><?php echo $err; ?><table class="table">
        <tr>
        <td>name</td>
            <td><input  placeholder="Please enter name" class="form-control"  type="text" class="form-control" id="name" name="name"></td>
                 </tr>
        <tr>
            <td>email</td>
            <td><input type="email" placeholder="Please enter email" class="form-control" id="email" name="email"></td>
    </tr>
        
    <tr>
        <td>password</td>
        <td><input type="password"  placeholder="Please enter email" class="form-control" id="password" name="pass">
        </td>
        </tr>
        <tr>
        <td>  </td>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
        
           </table></div>
      </form>
    </div></section>
<?php
include 'footer.php';
?> 