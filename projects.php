<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Commthru</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu" id="mainNav">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container box_1620">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="index.php"><img src="img/logo_comm.png" style="width:145px;height:37px;"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a>

                                
                                <li class="nav-item"><a class="nav-link" href="chat.php">Chat</a>
                                <!--
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="project-details.html">Project Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                                    </ul>
                                </li> 
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                        <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                                    </ul>
                                </li> 
                            -->
                                <li class="nav-item"><a class="nav-link" href="index.php">Logout</a></li>
                            </ul>
                        </div> 
                    </div>
                </nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Projects</h2>
						<div class="page_link">
							<a href="index.php">Home</a>
							<a href="projects.php">Projects</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Post Slider Area =================-->
        <section class="feature_area pad_top">
            <div class="container">
                <div class="main_title">
                    <h2>Current Projects</h2>
                    <p>See the progress of your current project</p>
                </div>
                <div class="feature_inner row">
                    <div class="col-lg-12">
                        <div class="progress-table-wrap">
                            <div class="progress-table">
                                <div class="table-head">
                                    <div class="serial">#</div>
                                    <div class="country">Name</div>
                                    <div class="visit">Details</div>
                                    <div class="visit">More</div>
                                    
                                    
                                </div>
                                <div class="table-row">
                                    
                                     <?php
                                    include  'koneksi.php'; ?>
                                    <br>
                                    <?php 
                                    $data = mysqli_query($conn, "SELECT * FROM project");
                                      while($msg= mysqli_fetch_array($data)) { ?>
                                                
                                                <div class="serial">
                                                    <?php 
                                                        echo $msg['no_project'];
                                                    ?>
                                                </div>

                                                <div class="country">
                                                    <?php 
                                                        echo $msg['nama_project'];
                                                    ?>
                                                </div>

                                                <div class="visit">
                                                    <?php 
                                                        echo $msg['detail'];
                                                    ?>
                                                </div>

                                                <div class="visit">
                                                    <a href="project_details.php">Click here</a>
                                                </div>

                                               
                                                

                                                <?php         
                                        }
                                    ?>
                                    
                                    
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>
        <!--================End Post Slider Area =================-->
        
       
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>