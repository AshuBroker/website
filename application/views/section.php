<section style="background-image:url(assets/images/back/homepage-bg.jpg);" class="home bg-mega">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="home_text">
                                <h4 class="text-white text-uppercase">a new creative studio</h4>
                                <h1 class="text-white text-uppercase">good design is always in season</h1>

                                <div class="separator"></div>

                                <h5 class=" text-uppercase text-white">								
								
								
								<em>One day, the dream will come true with lorem ipsum dolor sit amet, 
                                        consectetuer adipiscing elit, nummy nibh euismod tincidunt laoreet.</em></h5>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->	
            </section> <!--End off Home Sections-->
            
			<section id="feature" class="feature p-top-100">
                <div class="container">
                    <div class="row">
                        <div class="main_feature">

                            <div class="col-md-6">
                                <!-- Head Title -->
                                <div class="col-md-12" style="background-color:floralwhite;">
                                    <h3 style="text-align:center;">Circulars</h3>
                                 </div>
								<div class="col-md-12"> 
								 <div  class="col-md-12" style="height:300px;overflow-y:scroll;"><marquee direction:"down"><?php $rows = $Detail->result_array();
			                            foreach($rows as $row){?>
										<ul>
										  <a href="<?php echo base_url('uploads/Pic/'.$row['pic'])?>"><li style="list-style-type:square;font-size:20px;"><?php echo $row['Circular_Head'];?></li></a></ul>
										<?php } ?></marquee>
								 </div>
								 </div>
                                
                            </div>
                            <div class="col-md-6">
                                <!-- Head Title -->
                                <div class="col-md-12" style="background-color:floralwhite">
                                    <h3 style="text-align:center;">Notice</h3>
                                 </div>
								 <div class="col-md-12">
								 <div class="col-md-12" style="height:300px;overflow-y:scroll;"><marquee direction:"down"><?php $rows = $records->result_array();
			                            foreach($rows as $row){?>
										<ul>
										  <a href="<?php echo base_url('uploads/Pic/'.$row['Pic'])?>"><li  style="list-style-type:square;font-size:20px;"><?php echo $row['Heading'];?></li></a></ul>
										<?php } ?></marquee>
								 </div>
                                </div>
                            </div>
                            </div>
                    </div><!--End off row-->
                </div><!--End off container -->
                <br />
                <br />
                <br />
                <br />
                <hr />
                <br />
                <br />

                <div class="container">
                    <div class="row">
                        <div class="main_counter text-center">
                            <div class="col-md-3">
                                <div class="counter_item">
                                    <h2 class="statistic-counter"><em> 29 </em></h2>
                                    <div class="separator_small"></div>
                                    <h5>Projects Finished</h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="counter_item sm-m-top-40">
                                    <h2 class="statistic-counter"><em>124</em></h2>
                                    <div class="separator_small"></div>
                                    <h5>Happy Clients</h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="counter_item sm-m-top-40">
                                    <h2 class="statistic-counter"><em>76</em></h2>
                                    <div class="separator_small"></div>
                                    <h5>Hours of work</h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="counter_item sm-m-top-40">
                                    <h2 class="statistic-counter"><em>500</em> </h2>
                                    <div class="separator_small"></div>
                                    <h5>Cup of coffee</h5>
                                </div>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->

                <br />
                <br />
                <br />
                

            <!--Gallery Section-->
            <section id="gallery" class="gallery margin-top-120 bg-grey">
                <!-- Gallery container-->
                <div class="container">
                    <div class="row">
                        <div class="main-gallery roomy-80">
                            <div class="col-md-12">
                                <div class="head_title text-left sm-text-center wow fadeInDown">
                                    <h2>Our Gallery</h2>
                                     <div class="separator_left"></div>
                                </div>
                            </div>
                            <div style="clear: both;"></div>

                            <div class="grid text-center">
                                <div class="grid-item transition metal ium">
                                    <img alt="" src="<?php echo base_url('assets/images/back/1.jpg')?>">
                                    <div class="grid_hover_area text-center">
                                        <div class="grid_hover_text m-top-110">
                                            <h4 class="text-white">Sloggi’s collection</h4>
                                            <h5 class="text-white"><em>Fashionista</em></h5>
                                            <a href="<?php echo base_url('assets/images/back/1.jpg')?>" class="popup-img text-white m-top-40"> <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div><!-- End off grid Hover area -->
                                </div><!-- End off grid item -->

                                <div class="grid-item metalloid " >
                                    <img alt="" src="<?php echo base_url('assets/images/back/2.jpg')?>">
                                    <div class="grid_hover_area text-center">
                                        <div class="grid_hover_text m-top-150">
                                            <h4 class="text-white">Sloggi’s collection</h4>
                                            <h5 class="text-white"><em>Fashionista</em></h5>
                                            <a href="<?php echo base_url('assets/images/back/2.jpg')?>" class="popup-img text-white m-top-50"><i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div><!-- End off grid Hover area -->
                                </div><!-- End off grid item -->

                                <div class="grid-item post-transition metal numberGreaterThan50">
                                    <img alt="" src="<?php echo base_url('assets/images/back/3.jpg')?>">
                                    <div class="grid_hover_area text-center">
                                        <div class="grid_hover_text m-top-50">
                                            <h4 class="text-white">Sloggi’s collection</h4>
                                            <h5 class="text-white"><em>Fashionista</em></h5>
                                            <a href="<?php echo base_url('assets/images/back/3.jpg')?>" class="popup-img text-white m-top-40">View Project <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div><!-- End off grid Hover area -->
                                </div><!-- End off grid item -->
                                
                                <div class="grid-item alkali ar" >
                                    <img alt="" src="<?php echo base_url('assets/images/back/4.jpg')?>">
                                    <div class="grid_hover_area text-center">
                                        <div class="grid_hover_text m-top-50">
                                            <h4 class="text-white">Sloggi’s collection</h4>
                                            <h5 class="text-white"><em>Fashionista</em></h5>
                                            <a href="<?php echo base_url('assets/images/back/4.jpg')?>" class="popup-img text-white m-top-40">View Project <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div><!-- End off grid Hover area -->
                                </div><!-- End off grid item -->

                                <div class="grid-item post-transition metal ium" >
                                    <img alt="" src="<?php echo base_url('assets/images/back/5.jpg')?>">
                                    <div class="grid_hover_area text-center">
                                        <div class="grid_hover_text m-top-150">
                                            <h4 class="text-white">Sloggi’s collection</h4>
                                            <h5 class="text-white"><em>Fashionista</em></h5>
                                            <a href="<?php echo base_url('assets/images/back/5.jpg')?>" class="popup-img text-white m-top-50">View Project <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div><!-- End off grid Hover area -->
                                </div><!-- End off grid item -->


                                



                            </div>

                            <div style="clear: both;"></div>

                        </div>
                    </div>
                </div><!-- Portfolio container end -->
            </section><!-- End off portfolio section -->




            <!--Testimonial Section-->
            <section id="testimonial" class="testimonial fix roomy-100">
                <div class="container">
                    <div class="row">
                        <div class="main_testimonial text-center">

                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active testimonial_item">
                                        <div class="col-sm-10 col-sm-offset-1">

                                            <div class="test_authour">
                                                <img class="img-circle" src="<?php echo base_url('assets/images/back/3.jpg')?>" alt="" />
                                                <h6 class="m-top-20">Laingockien</h6>
                                                <h5><em>The most handsome men in the world</em> </h5>
                                            </div>

                                            <p class=" m-top-40">I’ve just wordked with Pouseidon last week. Uhm.  
                                                I can say this is the best team that I have ever worked together. 
                                                All of them are very, very professional and creative, their unbelieved 
                                                plan made our concept become perfect. I recommend you to try one of
                                                their solutions youself. Once again,  thanks so much, Pouseidon. 5 stars for you!! </p>


                                        </div>
                                    </div>
                                    <div class="item testimonial_item">
                                        <div class="col-sm-10 col-sm-offset-1">

                                            <div class="test_authour">
                                                <img class="img-circle" src="<?php echo base_url('assets/images/back/4.jpg')?>" alt="" />
                                                <h6 class="m-top-20">Laingockien</h6>
                                                <h5><em>The most handsome men in the world</em> </h5>
                                            </div>

                                            <p class=" m-top-40">I’ve just wordked with Pouseidon last week. Uhm.  
                                                I can say this is the best team that I have ever worked together. 
                                                All of them are very, very professional and creative, their unbelieved 
                                                plan made our concept become perfect. I recommend you to try one of
                                                their solutions youself. Once again,  thanks so much, Pouseidon. 5 stars for you!! </p>


                                        </div>
                                    </div>
                                    <div class="item testimonial_item">
                                        <div class="col-sm-10 col-sm-offset-1">

                                            <div class="test_authour">
                                                <img class="img-circle" src="<?php echo base_url('assets/images/back/1.jpg')?>" alt="" />
                                                <h6 class="m-top-20">Laingockien</h6>
                                                <h5><em>The most handsome men in the world</em> </h5>
                                            </div>

                                            <p class=" m-top-40">I’ve just wordked with Pouseidon last week. Uhm.  
                                                I can say this is the best team that I have ever worked together. 
                                                All of them are very, very professional and creative, their unbelieved 
                                                plan made our concept become perfect. I recommend you to try one of
                                                their solutions youself. Once again,  thanks so much, Pouseidon. 5 stars for you!! </p>

                                        </div>
                                    </div>

                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="fa fa-long-arrow-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <span class="slash">/</span>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="fa fa-long-arrow-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>

                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->

                <br />
                <br />
				<br />
				<br />
				<br />
				
                