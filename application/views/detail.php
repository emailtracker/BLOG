
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>


	<?php $this->load->view('layout/header') ?>



    </div>

   

    <!-- ##### Single Blog Area Start ##### -->
    <div class="single-blog-wrapper section-padding-0-100">

        <!-- Single Blog Area  -->
        <div class="single-blog-area blog-style-2 mb-50">
            <div class="single-blog-thumbnail">
                <img src="<?= base_url()?>assets/img/bg-img/b5.jpg" alt="">
                <div class="post-tag-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="post-date">
                                    <a href="#"><span><?= $blogs['created_at']?></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- ##### Post Content Area ##### -->
                <div class="col-12 col-lg-9">
                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">Lifestyle</a>
                            <h4><a href="#" class="post-headline mb-0"><?= $blogs['title']?></a></h4>
                            <div class="post-meta mb-50">
                                <p>By <a href="#"><?= $blogs['author']?></a></p>
                            </div>
                            <p><?= $blogs['description']?></p>
                        </div>
                    </div>

                   

                    

                 
                </div>

                
            </div>
        </div>
    </div>
    <!-- ##### Single Blog Area End ##### -->

    

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
