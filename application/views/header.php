

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Project</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="<?php echo base_url('assets/favicon.ico')?>">

        <!--Google Fonts link-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700') ?>" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i') ?>" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i')?>" rel="stylesheet">


        <link rel="stylesheet" href="<?php echo base_url('assets/css/slick.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/slick-theme.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/fonticons.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootsnav.css')?>">
        <link href="<?php echo base_url("assets/css/bootstrap-datepicker.css");?>" rel="stylesheet" />

        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css')?>" />
		
		
	<script src="<?php echo base_url("assets/js/jquery-1.11.2.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/js/bootstrap.js");?>"></script>
	<script src="<?php echo base_url("assets/js/bootstrap-datepicker.js");?>"></script>
	<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />

        <script src="<?php echo base_url('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')?>"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->

        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                </div>
            </div>
        </div>

        <!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default navbar-fixed white no-background bootsnav text-uppercase" style="background-color:lightgray;position:fixed;top:0px; ">
                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->

                <div class="container">    
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                    <i class="fa fa-shopping-bag"></i>
                                    <span class="badge">3</span>
                                </a>
                                <ul class="dropdown-menu cart-list">
                                    <li>
                                        <a href="#" class="photo"><img src="<?php echo base_url('assets/images/thumb01.jpg')?>" class="cart-thumb" alt="" /></a>
                                        <h6><a href="#">Delica omtantur </a></h6>
                                        <p class="m-top-10">2x - <span class="price">$99.99</span></p>
                                    </li>
                                    <li>
                                        <a href="#" class="photo"><img src="<?php echo base_url('assets/images/thumb01.jpg')?>" class="cart-thumb" alt="" /></a>
                                        <h6><a href="#">Delica omtantur </a></h6>
                                        <p class="m-top-10">2x - <span class="price">$99.99</span></p>
                                    </li>
                                    <li>
                                        <a href="#" class="photo"><img src="<?php echo base_url('assets/images/thumb01.jpg')?>" class="cart-thumb" alt="" /></a>
                                        <h6><a href="#">Delica omtantur </a></h6>
                                        <p class="m-top-10">2x - <span class="price">$99.99</span></p>
                                    </li>
                                    <!---- More List ---->
                                    <li class="total">
                                        <span class="pull-right"><strong>Total</strong>: $0.00</span>
                                        <a href="#" class="btn btn-cart">Cart</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>        
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.html">

                            <img src="<?php echo base_url('assets/images/logo.png" class="logo logo-display')?>" alt="">
                            <img src="<?php echo base_url('assets/images/logo-black.png" class="logo logo-scrolled')?>" alt="">

                        </a>
                    </div>
                    <!-- End Header Navigation -->
													
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
						<?php if($this->session->sessionLogin["USER"]=="Admin"){ ?>
                            <li class="active"><a href="<?php echo base_url('Admin')?>">AdminHome</a></li> 
							<li><a href="<?php echo base_url('Admin/approve')?>">Approve</a></li> 							                   
                            <li class="dropdown">
								<a href="<?php echo base_url('Admin/show')?>">Upload Circular</a>
							</li>
							<li><a href="<?php echo base_url('Admin/Notice')?>">ADDNotice</a></li>
                            <li><a href="<?php echo base_url('Admin/Notices')?>">Notice</a></li>							
                            <li><a href="<?php echo base_url('Admin/stories')?>">ADDStories</a></li>
                            <li><a href="<?php echo base_url('Admin/editstory')?>">EditStories</a></li>							
                            <li><a href="<?php echo base_url('Admin/changepassword')?>">Change Password</a></li>
							<li><a href="<?php echo base_url('Home/logout')?>">LogOut</a></li>
						<?php }  
							 else if($this->session->sessionLogin["USER"]=="staff") {?>
                            <li class="active"><a href="<?php echo base_url('Staff/index')?>">Staffhome</a></li> 
							<li><a href="<?php echo base_url('Staff/shows')?>">Upload Circulars</a></li> 							                   
                            <li class="dropdown">
								<a href="<?php echo base_url('Staff/changepassword')?>">Change Password</a>
							</li>	
                            <li><a href="<?php echo base_url('Home/logout')?>">LogOut</a></li>
							<?php } 
							 else { ?>
							<li class="active"><a href="<?php echo base_url('Home')?>">home</a></li> 
							<li><a href="<?php echo base_url('Home/companyDetail')?>">about</a></li> 							                   
                            <li class="dropdown">
								<a href="<?php echo base_url('Home/registration')?>">Registration</a>
							</li>	
                            <li><a href="<?php echo base_url('Home/login')?>">Login</a></li>
							<li><a href="<?php echo base_url('Home/Files')?>">Circular</a></li>
                            <li><a href="<?php echo base_url('Home/getDetail')?>">Stories</a></li> <?php }?>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>  


            </nav>