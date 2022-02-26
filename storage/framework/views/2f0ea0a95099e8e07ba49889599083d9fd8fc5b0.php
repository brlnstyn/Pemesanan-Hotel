<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Hotel Hebat</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../assets/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../assets/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../assets/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../assets/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="../assets/images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
               <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                    <div class="titlepage">
                        <h2>HOTEL HEBAT</h2>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="<?php echo e(route('user.dashboard')); ?>">Home</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="#">Kamar</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo e(route('uFasilitas.index')); ?>">Fasilitas</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo e(route('bookings.index')); ?>">Booking</a>
                              </li>
                              <li class="nav-item">
                                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                                    <?php echo csrf_field(); ?>
                                        <a href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();" class="nav-link">Log Out</a>
                                    </form>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Our Room</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- our_room -->
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <p  class="margin_0">Kami menyediakan beberapa tipe kamar untuk Anda </p>
                  </div>
               </div>
            </div>
            <div class="row">
            <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="col-md-12 col-sm-5">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="/image/<?php echo e($room->image); ?>" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3><?php echo e($room->tipe_kamar); ?></h3>
                        <span><strong><?php echo e($room->harga); ?></strong></span>
                        <p><?php echo e($room->fasilitas); ?></p>
                     </div>
                  </div>
               </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         </div>
      </div>
      <!-- end our_room -->
     
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-md-4">
                     <h3>Contact US</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Bandung</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +01 1234569540</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> hotelhebat@gmail.com</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>Menu Link</h3>
                     <ul class="link_menu">
                        <li><a href="<?php echo e(route('user.dashboard')); ?>">Home</a></li>
                        <li class="active"><a href="#"> Kamar</a></li>
                        <li><a href="<?php echo e(route('uFasilitas.index')); ?>">Fasilitas</a></li>
                        <li><a href="<?php echo e(route('bookings.index')); ?>">Booking</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../assets/js/custom.js"></script>
   </body>
</html><?php /**PATH C:\xampp\htdocs\LARAVEL\PemesananHotel\resources\views/uKamar/index.blade.php ENDPATH**/ ?>