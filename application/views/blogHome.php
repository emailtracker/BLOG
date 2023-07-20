

    <!-- Favicon -->



    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

	<?php $this->load->view('layout/header') ?>
  


    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(<?= base_url()?>assets/img/bg-img/b2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <a href="#" data-animation="fadeInUp">lifestyle</a>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms"><a href="single-post.html">Take a look at last night’s party!</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(<?= base_url()?>assets/img/bg-img/b1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <a href="#" data-animation="fadeInUp">lifestyle</a>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms"><a href="single-post.html">Take a look at last night’s party!</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(<?= base_url()?>assets/img/bg-img/b3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <a href="#" data-animation="fadeInUp">lifestyle</a>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms"><a href="single-post.html">Take a look at last night’s party!</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->


    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100 clearfix">
        <div class="container">
            <div class="row align-items-end">
				<h2>Promotional</h2>
				<hr>
                <!-- Single Blog Area -->
				<?php if(!empty($promote)){ ?>

                <div class="col-12 col-lg-4">
                    <div class="single-blog-area clearfix mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
							<p><?= $promote['created_at']?></p>

                            <h4><a href="#" class="post-headline"><?= $promote['title']?></a></h4>
                            <p><?= word_limiter($promote['description'],35)?></p>
                            <a href="<?= base_url()?>main/detail/<?= $promote['blog_id']?>" class="btn original-btn">Read More</a>
                        </div>
                    </div>
                </div>
				<?php } else {?>
					<div class="col-12 col-lg-4">
                    <div class="single-blog-area clearfix mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>

                            <h4><a href="#" class="post-headline">No data available</a></h4>
                           
                        </div>
                    </div>
                </div>

				<?php }?>


                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-catagory-area clearfix mb-100">
                        <img src="<?= base_url()?>assets/img/blog-img/1.jpg" alt="">
                        <!-- Catagory Title -->
                        <div class="catagory-title">
                            <a href="#">Lifestyle posts</a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-catagory-area clearfix mb-100">
                        <img src="<?= base_url()?>assets/img/blog-img/2.jpg" alt="">
                        <!-- Catagory Title -->
                        <div class="catagory-title">
                            <a href="#">latest posts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
					<h2>Featured</h2>
					<hr>

					<?php if(!empty($featured)){
						foreach($featured as $fet):
					?>

                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1000ms">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <div class="single-blog-thumbnail">
                                    <img src="<?= base_url()?>assets/img/blog-img/3.jpg" alt="">
                                    <div class="post-date">
                                        <a href="#"><span><?= $fet['created_at']?></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Blog Content -->
                                <div class="single-blog-content">
                                    <div class="line"></div>
                                    <h4><a href="#" class="post-headline"><?= $fet['title']?></a></h4>
                                    <p><?=  word_limiter($fet['description'],35) ?></p>
                                    <div class="post-meta">
                                        <p>By <a href="#"><?= $fet['author']?></a></p>
										 <!-- Load More -->
					 <div class="load-more-btn mt-100 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1000ms">
                        <a href="<?= base_url()?>main/detail/<?= $fet['blog_id']?>" class="btn original-btn">Read More</a>
                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

					


					<?php endforeach;?>

					<?php } else {?>
						<div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1000ms">
                        <div class="row align-items-center">
                            
                            <div class="col-12 col-md-6">
                                <!-- Blog Content -->
                                <div class="single-blog-content">
                                    <div class="line"></div>
                                    <a href="#" class="post-tag"><?= 'No data available'?></a>
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>

					<?php }?>


                

                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1000ms">
						<h2>All Blogs</h2>
						<hr>
                        <div class="row">
                            <div class="col-12">
                                <div class="single-blog-thumbnail">
                                    <img src="<?= base_url()?>assets/img/blog-img/7.jpg" alt="">
                                    
                                </div>
                            </div>
                         
                        </div>
                    </div>


					<?php if(!empty($allblogs)){
						foreach($allblogs as $blog):
					?>

                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1000ms">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <div class="single-blog-thumbnail">
                                    <img src="<?= base_url()?>assets/img/blog-img/5.jpg" alt="">
                                    <div class="post-date">
                                        <a href="#"><span><?= $blog['created_at']?></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Blog Content -->
                                <div class="single-blog-content">
                                    <div class="line"></div>
                                    <a href="#" class="post-tag">Lifestyle</a>
                                    <h4><a href="#" class="post-headline"><?= $blog['title']?></a></h4>
                                    <p><?= word_limiter($blog['description'],55) ?></p>
                                    <div class="post-meta">
                                        <p>By <a href="#"><?= $blog['author']?></a></p>
										<!-- Load More -->
						  <div class="load-more-btn mt-100 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1000ms">
                        <a href="<?= base_url()?>main/detail/<?= $blog['blog_id']?>" class="btn original-btn">Read More</a>
                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						  
                    </div>
                  
                </div>


				<?php endforeach;?>

					<?php } else {?>
						<div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1000ms">
                        <div class="row align-items-center">
                            
                            <div class="col-12 col-md-6">
                                <!-- Blog Content -->
                                <div class="single-blog-content">
                                    <div class="line"></div>
                                    <a href="#" class="post-tag"><?= 'No data available'?></a>
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>

					<?php }?>

                <!-- ##### Sidebar Area ##### -->
                
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->



    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   
                    <!-- Footer Nav Area -->
                    <div class="classy-nav-container breakpoint-off">
                        <!-- Classy Menu -->
                        <nav class="classy-navbar justify-content-center">

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">

                                <!-- close btn -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>

                              
                            </div>
                        </nav>
                    </div>
                    
                    <!-- Footer Social Area -->
                    <div class="footer-social-area mt-30">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

   <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="<?= base_url()?>assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?= base_url()?>assets/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="<?= base_url()?>assets/js/plugins.js"></script>
    <!-- Active js -->
    <script src="<?= base_url()?>assets/js/active.js"></script>

</body>

</html>
