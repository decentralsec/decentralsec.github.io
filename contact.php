<?php include('includes/header.php')?>
<body class="darker">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="loader-load"></div>
        </div>
    </div>
     <!-- ##### Header Area Start ##### -->
     <?php include('includes/nav.php')?>
    <!-- ##### Header Area End ##### -->
    <!-- ##### Welcome Area Start ##### -->
    <div class="breadcumb-area">
         <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">Contact Us</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="home">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Area End ##### -->
     <!-- ##### Contact Area Start ##### -->
    <div class="contact_us_area section-padding-100-70" id="contact">
        <div class="container">
            <div class="section-heading text-center">
                 <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                   <!-- <img src="img/svg/divider-01.svg" width="100" class="mb-15" alt="divider">-->
                </div>
                <h2 class="fadeInUp" data-wow-delay="0.3s">Contact With Us</h2>
                <!--<p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo. </p>
           --> </div>
            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4">
                    <ul class="services-block-four">
                        <li class="inner-box">
                            <div class="icon-font-box"><i class="fa fa-envelope-o"></i></div>
                            <h3>Support Email</h3>
                            <div class="text width-80">hi@decentralsec.io</div>
                        </li>
                        <li class="inner-box">
                            <div class="icon-font-box"><i class="fa fa-phone"></i></div>
                            <h3>Phone Number</h3>
                            <div class="text width-80">(039) 245 90238</div>
                        </li>
                        <li class="inner-box">
                            <div class="icon-font-box"><i class="fa fa-calendar-o"></i></div>
                            <h3>Working Hours</h3>
                            <div class="text width-80">9AM to 5PM Sunday To Friday</div>
                        </li>
                        <li class="inner-box">
                            <div class="icon-font-box"><i class="fa fa-map-o"></i></div>
                            <h3>Location</h3>
                            <div class="text width-80">72 St, Newyork, Downtown Tower</div>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="contact_form grediant-borders">
                        <form action="submit_form.php" method="post" id="main_contact_form">
                            <div class="row">
                                <div class="col-12">
                                    <div id="success_fail_info" style="color:white !important;"></div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="group fadeInUp" data-wow-delay="0.2s">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group fadeInUp" data-wow-delay="0.3s">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group fadeInUp" data-wow-delay="0.4s">
                                        <input type="text" name="subject" id="subject" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group fadeInUp" data-wow-delay="0.5s">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Message</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center fadeInUp" data-wow-delay="0.6s">
                                    <button type="submit" class="btn login-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Contact Area End ##### -->
   <!-- ##### Our sponsors Start ##### -->
    <section class="our_team_area section-padding-0-100 clearfix" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        
                        <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                            <!--<img src="img/svg/divider-01.svg" width="100" class="mb-15" alt="divider">-->
                        </div>
                        <h2 class="fadeInUp" data-wow-delay="0.3s">Out Top Sponsors</h2>
                        <!--<p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo. </p>-->
                    </div>
                </div>
            </div>

            <div class="parttns">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <img src="img/partners/2.png" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <img src="img/partners/1.png" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <img src="img/partners/3.png" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <img src="img/partners/4.png" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <img src="img/partners/5.png" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <img src="img/partners/6.png" alt="">
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- ##### Our sponsers End ##### -->
    

    <!-- ##### Footer Area Start ##### -->
     <?php include('includes/footer.php')?>

    <!-- ##### Footer Area End ##### -->

    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
<?php include('includes/common_js.php')?>


</body>


</html>