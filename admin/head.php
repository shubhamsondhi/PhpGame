
<?php 
session_start();

?>
<html><head><title></title>


<script src="../js/jquery.js" ></script>

<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/agency.css" rel="stylesheet">
<link href="../css/g.css" rel="stylesheet">

</head>
<body>
 <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top bg">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Admin</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php">
                        Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="add_games.php">Add Games</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="add_admin.php">Add Admin</a>
                    </li>
                     <li class="pro">
                      <div >  <?php include 'logout.php' ?> </div>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    