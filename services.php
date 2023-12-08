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
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">Services</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="home">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Area End ##### -->
     <?php include("includes/services.php")?>
    <!-- ##### Services Area End ##### -->
 
    <!-- ##### Facts Start ##### -->
        <?php include("includes/stats.php")?>
    <!-- ##### Facts END ##### -->

    <!-- ##### How it works Start ##### -->
    <?php include("includes/our_approach.php")?>
    <!-- ##### How it works END ##### -->

    <!-- ##### Footer Area Start ##### -->
     <?php include('includes/footer.php')?>
     <!-- ##### Footer Area End ##### -->
    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <?php include('includes/common_js.php')?>


</body>


</html>