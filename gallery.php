<?php
include 'header.php';
?>
<div class="container">
        
        
 <div class="row"><?php 
     for($i=0;$i<=20;$i++){
		echo " <a href='image/name$i.jpg' download> <div class='col-md-3 col-sm-4 col-xs-6'><img class='img-responsive' src='image/name$i.jpg' /> </a></div>";
     
     }  ?>
    
        
    </div></div><?php
include 'footer.php';
?> 