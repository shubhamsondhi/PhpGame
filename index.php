<?php
include 'head.php';
?>
    <!-- Header -->
    <header>
        <div class="container">
         <div class="intro-text">
       
            </div>
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Game Planet</div>
                <div class="intro-heading">It's Nice To Meet You</div>
                
            </div> 
        </div>
           
            
    </header>
    

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Games</h2>
                    <h3 class="section-subheading text-muted">Fun Should Be Continue</h3>
                </div>
            </div>
            <div class="row">
               <?php 
                include 'dbconfig.php';
                $sql="SELECT * FROM `pc_game`";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_row($result)){
     
		
         echo " <div class='col-md-4 col-sm-6 portfolio-item'>
                    <a href='play.php?id=$row[0]' class='portfolio-link' data-toggle='modal'>
                        <div class='portfolio-hover'>
                            <div class='portfolio-hover-content'>
                                <i class='fa fa-plus fa-3x'></i>
                            </div>
                        </div>
                        <img src='$row[5]' class='img-responsive' alt=''>
                    </a>
                    <div class='portfolio-caption'>
                        <h4>$row[1]</h4>
                        <p class='text-muted'>Simple Graphic</p>
                    </div>
                </div>";
}
       ?>
                 </div>
        </div>
    </section>


<?php
include 'footer.php';
?> 