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
                        <a class="navbar-brand logo_h" href="home_staff.html"><img src="img/logo_comm.png" style="width:145px;height:37px;"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="manage_project.html">Projects</a>
                                <li class="nav-item"><a class="nav-link" href="manage_document.html">Document</a>
                                <!--
                                <li class="nav-item"><a class="nav-link" href="manage_contact.html">Chat</a>
                                -->
                                <li class="nav-item"><a class="nav-link" href="index.html">Logout</a></li>
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
						<h2>Project Chat</h2>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Post Slider Area =================-->
        <section class="feature_area pad_top">
            <div class="container">
                <div class="section-top-border">
                        <h3 class="mb-30 title_color">Contacts</h3>
                        <div class="button-group-area">
                            <a href="#" class="genric-btn success radius" data-target="#insert" data-toggle="modal">Add Contact</a>
                        </div>
                        <br>


                        <div id="insert" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal"></button> 
                                    <h3 class="mb-30 title_color">Add Contact</h3> 
                                </div>

                                  <form method="post" action="inputbuku.php" enctype="multipart/form-data">
                                    <div class="mt-10" style="padding: 10px">
                                        <input type="text" name="id_contact" placeholder="Contact ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact ID'" required class="single-input">
                                    </div>

                                    <div class="mt-10" style="padding: 10px">
                                        <input type="text" name="nama" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required class="single-input">
                                    </div>

                                    <div class="mt-10" style="padding: 10px">
                                        <input type="text" name="position" placeholder="Position" onfocus="this.placeholder = ''" onblur="this.placeholder = 'position'" required class="single-input">
                                    </div>

                                    <div class="mt-10" style="padding: 10px">
                                        <input type="text" name="responsible" placeholder="Responsible" onfocus="this.placeholder = ''" onblur="this.placeholder = 'responsible'" required class="single-input">
                                    </div>

                                    <div class="mt-10" style="padding: 10px">
                                        <input type="text" name="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'phone'" required class="single-input">
                                    </div>

                                    <center>
                                      <button type="submit" name="submit" class="genric-btn info radius">Submit</button>
                                    </center>
                                    <br>
                                 </form>
                                 
                                 </div>
                                </div>
                            </div>

                        <div class="progress-table-wrap">
                            <div class="progress-table">
                                <div class="table-head">
                                    <div class="serial">#</div>
                                    <div class="country">Name</div>
                                    <div class="visit">Position</div>
                                    <div class="visit">Responsible</div>
                                    <div class="visit">Phone Number</div>
                                    <div class="visit">Actions</div>
                                </div>
                                <div class="table-row">
                                    <div class="serial">PC001-1</div>
                                    <div class="country">Iskandar Doddy</div>
                                    <div class="visit">Construction Manager</div>
                                    <div class="visit">Vine Wood Apartment</div>
                                    <div class="visit">08688945446</div>
                                    <div class="button-group-area mt-40">
                                        <a href="#" class="genric-btn primary radius small" data-target="#update" data-toggle="modal">Edit</a>
                                        <a href="#" class="genric-btn danger radius small">Delete</a>
                                    </div>   
                                </div>
                                
                                <div class="table-row">
                                    <div class="serial">PC001-2</div>
                                    <div class="country">Gunardi</div>
                                    <div class="visit">Estimator</div>
                                    <div class="visit">Vine Wood Apartment</div>
                                    <div class="visit">08441306553</div>   
                                    <div class="button-group-area mt-40">
                                        <a href="#" class="genric-btn primary radius small" data-target="#update" data-toggle="modal">Edit</a>
                                        <a href="#" class="genric-btn danger radius small">Delete</a>
                                    </div>
                                </div>

                                <div class="table-row">
                                    <div class="serial">PC001-3</div>
                                    <div class="country">Leony Yenny</div>
                                    <div class="visit">Architect</div>
                                    <div class="visit">Vine Wood Apartment</div>
                                    <div class="visit">082146024474</div>   
                                    <div class="button-group-area mt-40">
                                        <a href="#" class="genric-btn primary radius small" data-target="#update" data-toggle="modal">Edit</a>
                                        <a href="#" class="genric-btn danger radius small">Delete</a>
                                    </div>
                                </div>
                                
                            </div>

                            <div id="update" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal"></button> 
                                    <h3 class="mb-30 title_color">Edit Contact</h3> 
                                </div>

                                  <form method="post" action="inputbuku.php" enctype="multipart/form-data">
                                    <div class="mt-10" style="padding: 10px">
                                        <input type="text" name="no_contact" placeholder="No Contact (ex: 01,02,..,) " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Document Number'" required class="single-input">
                                    </div>

                                    <div class="mt-10" style="padding: 10px">
                                        <input type="text" name="nama" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required class="single-input">
                                    </div>

                                    <div class="mt-10" style="padding: 10px">
                                        <input type="text" name="position" placeholder="Position" onfocus="this.placeholder = ''" onblur="this.placeholder = 'position'" required class="single-input">
                                    </div>

                                    <div class="mt-10" style="padding: 10px">
                                        <input type="text" name="responsible" placeholder="Responsible" onfocus="this.placeholder = ''" onblur="this.placeholder = 'responsible'" required class="single-input">
                                    </div>

                                    <div class="mt-10" style="padding: 10px">
                                        <input type="text" name="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'phone'" required class="single-input">
                                    </div>

                                    <center>
                                      <button type="submit" name="submit" class="genric-btn info radius">Submit</button>
                                    </center>
                                    <br>
                                 </form>
                                 
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