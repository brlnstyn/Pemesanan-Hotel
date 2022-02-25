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
                                 <a class="nav-link" href="">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo e(route('uKamar.index')); ?>">Kamar</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo e(route('uFasilitas.index')); ?>">Fasilitas</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="#">Booking</a>
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
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                      <h2>Booking</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               <form class="row g-5 main_form" autocomplete="off">
                  <div class="col-md-3">
                     <label for="tgl_check_in" class="form-label">Tanggal Check In</label>
                     <input type="date" class="contactus" id="tgl_check_in" name="tgl_check_in" placeholder="yyyy/mm/dd">
                  </div>
                  <div class="col-md-3">
                     <label for="tgl_check_out" class="form-label">Tanggal Check Out</label>
                     <input type="date" class="contactus" id="tgl_check_out" name="tgl_check_in" placeholder="yyyy/mm/dd">
                  </div>
                  <div class="col-md-3">
                     <label for="nama_tamu" class="form-label">Nama Tamu</label>
                     <input type="text" class="contactus" id="nama_tamu" name="nama_tamu" placeholder="Nama Tamu">
                  </div>
                  <div class="col-2 mt-4">
                     <button type="submit" class="send_btn">Pesan</button>
                  </div>
               </form>
               <br>

                  <form id="request" class="main_form" autocomplete="off">
                     <div class="row">
                        <div class="col-md-12 ">
                            <strong>Nama Pemesan</strong>
                           <input class="contactus" placeholder="Nama Pemesan" type="text" name="name"> 
                        </div>
                        <div class="col-md-12">
                            <strong>Email</strong>
                           <input class="contactus" placeholder="Email" type="email" name="email"> 
                        </div>
                        <div class="col-md-12">
                            <strong>No Handphone</strong>
                           <input class="contactus" placeholder="Phone Number" type="number" name="Phone Number">                          
                        </div>
                        <div class="col-md-12">
                            <strong>Tipe Kamar</strong>
                            <select class="contactus" name="tipe_kamar">
                                <option value="Junior Suite">Junior Suite</option>
                                <option value="Superior">Superior</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <strong>Jumlah Kamar</strong>
                           <input class="contactus" placeholder="Jumlah Kamar" type="number" name="jumlah">                          
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Konfirmasi Pesanan</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      
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
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href=""> Kamar</a></li>
                        <li><a href="">Fasilitas</a></li>
                        <li><a href="">Booking</a></li>
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
</html><?php /**PATH C:\xampp\htdocs\LARAVEL\PemesananHotel\resources\views/booking/index.blade.php ENDPATH**/ ?>