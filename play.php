
<?php
include 'head.php';
include 'check.php';
        include 'dbconfig.php';


?>
<section id="portfolio" class="bg-light-gray">
        <div class="container">
           
             <div class="container">
        <div class="row">
            <div class="span5 col-md-8">
                <?php
            
if(isset($_REQUEST['id'])){
    
$id=$_REQUEST['id'];
                $sql="SELECT * FROM `pc_game` WHERE `g_id`='$id'";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_row($result)){
                
                echo "<embed src='$row[2]' height='520px' width='700px'>";
               
                }}
    
            ?>
            </div>
            <div class="span7 col-md-4">
                <h2>Online Game</h2>
                <h4 class="muted">Simple and Fun</h4>
                <p>
Put on your aviators and grab your fur-lined jacket -- it's time to fly in this realistic aerobatics simulator! Using either the mouse or the keyboard, guide your plane through the air and successfully fly through the obstacles to win! Impress the ladies with your amazing stunts -- but don't crash! Choose to invert the y-axis for a more realistic experience!
Also available on iTunes  http://goo.gl/FKMk4f    and Google Play   http://goo.gl/41qpDC</p>
                <hr>
                <p class="muted">Scoreboard, Airplane, Aeroplane, Flying, Racing, Plane, 3D</p>
                <br>
               </div>
        </div>
        
    </div>
  
           
           
          </div></section><?php
include 'footer.php';
?> 
    


