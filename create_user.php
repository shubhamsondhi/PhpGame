<?php
include "head.php";

?>

    <?php
    if(isset($_POST['submit']))
    {
   
    include'dbconfig.php';
        extract($_POST);
    $sql1="INSERT INTO `user_id` (`u_id`, `first_name`, `last_name`, `password`, `email_id`, `mobile_no`, `city`) VALUES (NULL, '$first_name', '$last_name', '$password', '$e_mail', '$mobile_no', '$city')";
     if(mysqli_query($conn,$sql1));
    { 
      echo "inserted";
    }}
    echo "<center><h1>TABLE</h1></center>"
      ?> 


 <section id="portfolio" class="bg-light-gray">
        <div class="container">
      
    <div id="wrapper">

     
        
        <div id="page-content-wrapper">
            
                    <!-- Introduction Row -->
   
    <center><form method="post"><table class="table">
        
<td> First name</td>
    <td><input type="text" id="first_name" class="form-control" name="first_name"></td>
    </tr>
<tr>
<td>last_name</td>
<td><input type="text" id="last_name" class="form-control" name="last_name">
    </tr>
    <tr>
        <td>password</td>
        <td><input type="password" class="form-control" id="password"name="password">

    </tr>
    
    
    <tr>
        <td>e_mail</td>
        <td><input type="text" class="form-control" id="e_mail" name="e_mail"</td>
        </tr>
    <tr>
    <td>mobile_no</td>
        <td><input type="text" class="form-control" id="mobile_no" name="mobile_no"></td>
</tr>
<tr>
    
<td> city </td>
<td> <input type="text" class="form-control" id="city" name="city">
</tr>
<tr>
    <td>   </td>
      <td> <input type="submit" name="submit" value="submit"> </td>
<td>  </td>
</tr>
        
        </table></form></center>
<?php
include 'footer.php';
?> 