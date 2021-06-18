<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Sewa - SeBat</title>

  <!-- FAVICON -->
  <link href="../assets/img/favicon.png" rel="shortcut icon" />

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
    rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="../assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="../assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="../assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet" />
  <link href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="../assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="../assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="../assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>


  <!-- CSS -->
  <link id="sleek-css" rel="stylesheet" href="../assets/css/sleek.css" />
  <link rel="stylesheet" href="../assets/css/sebat.css" />



  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="../assets/plugins/nprogress/nprogress.js"></script>
</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
  <script>
    NProgress.configure({
      showSpinner: false
    });
    NProgress.start();
  </script>

  <div class="mobile-sticky-body-overlay"></div>
  <?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
  <div class="wrapper">

    <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
    <aside class="left-sidebar bg-sidebar">
      <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
          <a href="index.php">
            <img src="../assets/img/logo/logo-white.png" alt="" class="brand-logo">
            <!--
            <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
              height="33" viewBox="0 0 30 33">
              <g fill="none" fill-rule="evenodd">
                <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
              </g>
            </svg>
          -->
            <span class="brand-name"><img src="../assets/img/logo/sebat-bw.png" alt=""></span>
          </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">
            <li class="has-sub">
              <a class="sidenav-item-link" href="index.php">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Dashboard</span>
              </a>
            </li>
            <li class="has-sub active">
              <a class="sidenav-item-link" href="pinjam.php">
                <i class="mdi mdi-swap-horizontal-bold"></i>
                <span class="nav-text">Pinjam</span>
              </a>
            </li>
            <li class="has-sub">
              <a class="sidenav-item-link" href="history.php">
                <i class="mdi mdi-history"></i>
                <span class="nav-text">Riwayat</span>
              </a>
            </li>
            <!-- <li class="has-sub">
              <a class="sidenav-item-link" href="profile.php">
                <i class="mdi mdi-account"></i>
                <span class="nav-text">Profile</span>
              </a>
            </li> -->
            <li class="has-sub">
              <a class="sidenav-item-link" href="help.php">
                <i class="mdi mdi-information"></i>
                <span class="nav-text">Bantuan</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </aside>



    <div class="page-wrapper">
      <!-- Header -->
      <header class="main-header " id="header">
        <nav class="navbar navbar-static-top navbar-expand-lg">
          <!-- Sidebar toggle button -->
          <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <!-- search form -->
          <div class="search-form d-none d-lg-inline-block">
            <!-- <div class="input-group">
              <button type="button" name="search" id="search-btn" class="btn btn-flat">
                <i class="mdi mdi-magnify"></i>
              </button>
              <input type="text" name="query" id="search-input" class="form-control"
                placeholder="'button', 'chart' etc." autofocus autocomplete="off" />
            </div> -->
            <div id="search-results-container">
              <ul id="search-results"></ul>
            </div>
          </div>

          <div class="navbar-right ">
            <ul class="nav navbar-nav">

              </li>
              <!-- User Account -->
              <li class="dropdown user-menu">
                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <img src="../assets/img/profile.svg" class="user-image" alt="User Image" />
                  <span class="d-none d-lg-inline-block"><?= $_SESSION['username'];; ?></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <!-- User image -->
                  <!-- <li class="dropdown-header">
                    <img src="../assets/img/profile.svg" class="img-circle" alt="User Image" />
                    <div class="d-inline-block">
                      <?=  $_SESSION['username'];; ?> <small class="pt-1">abdus@gmail.com</small>
                    </div>
                  </li> -->

                  


                  <li class="dropdown-footer">
                    <a href="logout.php"> <i class="mdi mdi-logout"></i> Log Out </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>


      </header>

      <div class="content-wrapper">
        <div class="content">


          <div class="row">
            <div class="col-md-12 container-fluid">

              <!-- User activity statistics
              <div class="card card-header">
                <h1>Pinjam</h1>
              </div> -->

              <?php
              include '../conn.php';

              $query = mysqli_query($koneksi, "SELECT max(id_pinjam) as kodeTerbesar FROM pinjam");
              $data = mysqli_fetch_array($query);
              $id_pinjam = $data['kodeTerbesar'];

              // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
              // dan diubah ke integer dengan (int)
              $urutan = (int) substr($id_pinjam, 3, 3);

              // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
              $urutan++;

              // membentuk kode barang baru
              // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
              // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
              // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
              $huruf = "S-";
              $id_pinjam = $huruf . sprintf("%03s", $urutan);
              ?>
              <div class="card card-body">
                <form action="act/pinjam.php" method="POST">
                  <div class="form-group">
                    <input type="text" name="id_pinjam" class="form-control" value="<?= $id_pinjam ?>" readonly hidden>
                  </div>
                  <div class="form-group">
                    <H3 for="exampleFormControlInput1">Nama Peminjam</H3>
                    <br>
                    <input type="text" name="nama_peminjam" class="form-control" placeholder="Nama Peminjam...">
                  </div>
                  <div class="form-group">
                    <H3 for="exampleFormControlInput1">Nomor HP Peminjam</H3>
                    <br>
                    <input type="text" name="no_hp" min="11" class="form-control" placeholder="Nomor HP Peminjam...">
                  </div>
                  <div class="form-group">
                    <input type="date" name="tgl_pinjam" class="form-control" value="<?= date("Y-m-d"); ?>" readonly hidden>
                  </div>

                  <h3>Kabel</h3>
                  <br>
                  <div class="form-group radio-section card-pinjam">
                    <div class="row">
                      <div class="col-md-auto">
                        <label>
                          <input type="radio" name="cable" value="micro">
                          <span class="radio-check"><i class="fa fa-check-circle fa-lg check-icon"></i></span>
                          <div class="radio-body"><img src="../assets/img/cable/micro.png" alt=""></div>
                        </label>
                      </div>
                      <div class="col-md-auto">
                        <label>
                          <input type="radio" name="cable" value="type-c">
                          <span class="radio-check"><i class="fa fa-check-circle fa-lg check-icon"></i></span>
                          <div class="radio-body"><img src="../assets/img/cable/type-c.png" alt=""></div>
                        </label>
                      </div>
                      <div class="col-md-auto">
                        <label>
                          <input type="radio" name="cable" value="lightning">
                          <span class="radio-check"><i class="fa fa-check-circle fa-lg check-icon"></i></span>
                          <div class="radio-body"><img src="../assets/img/cable/lightning.png" alt=""></div>
                        </label>
                      </div>
                      <div class="col-md-auto">
                        <label>
                        <input type="text" value="m" size="3" readonly>
                        <input type="text" value="c" size="3" readonly>
                        <input type="text" value="l" size="3" readonly>
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <h3>Durasi Pinjam</h3>
                    <br>
                    <div class="row harga">
                      <div class="col-md-3">
                        <label>
                          <input type="radio" name="durasi" value="1000">
                          <span class="radio-check"><i class="fa fa-check-circle fa-lg check-icon"></i></span>
                          <div class="radio-body radio-text">30 Menit</div>
                          <div class="radio-option radio-text">Rp<strong>1000</strong></div>
                        </label>
                      </div>
                      <div class="col-md-3">
                        <label>
                          <input type="radio" name="durasi" value="2000">
                          <span class="radio-check"><i class="fa fa-check-circle fa-lg check-icon"></i></span>
                          <div class="radio-body radio-text">60 Menit</div>
                          <div class="radio-option radio-text">Rp<strong>2000</strong></div>
                        </label>
                      </div>
                      <div class="col-md-3">
                        <label>
                          <input type="radio" name="durasi" value="3000">
                          <span class="radio-check"><i class="fa fa-check-circle fa-lg check-icon"></i></span>
                          <div class="radio-body radio-text">90 Menit</div>
                          <div class="radio-option radio-text">Rp<strong>3000</strong></div>
                        </label>
                      </div>
                      <div class="w-100"><br></div>
                      <div class="col-md-3">
                        <label>
                          <input type="radio" name="durasi" value="4000">
                          <span class="radio-check"><i class="fa fa-check-circle fa-lg check-icon"></i></span>
                          <div class="radio-body radio-text">2 Jam</div>
                          <div class="radio-option radio-text">Rp<strong>4000</strong></div>
                        </label>
                      </div>
                      <div class="col-md-3">
                        <label>
                          <input type="radio" name="durasi" value="10000">
                          <span class="radio-check"><i class="fa fa-check-circle fa-lg check-icon"></i></span>
                          <div class="radio-body radio-text">5 Jam</div>
                          <div class="radio-option radio-text">Rp<strong>10000</strong></div>
                        </label>
                      </div>
                      <div class="col-md-3">
                        <label>
                          <input type="radio" name="durasi" value="25000">
                          <span class="radio-check"><i class="fa fa-check-circle fa-lg check-icon"></i></span>
                          <div class="radio-body radio-text">24 Jam</div>
                          <div class="radio-option radio-text">Rp<strong>25000</strong></div>
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" name="status" class="form-control" value="pinjam" readonly hidden>
                    </div>
                  </div>

                  <br>
                  <br>
                  <!-- <div class="form-group total">
                    <div class="row">
                      <div class="col-md">
                        <p>Total:</p>
                      </div>
                      <div class="col-auto text-right">
                        <p>Rp</p>
                      </div>
                      <div class="col-md">
                        <p>0</p>
                      </div>
                    </div>
                  </div> -->
                  <br>
                  <br>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-8">&nbsp;</div>
                      <div class="col-md-4"><button class="btn btn-primary btn-block">Pinjam</button></div>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>

        </div>




      </div>


      <footer class="footer mt-auto">
        <div class="copyright bg-white">
          <p>
            &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
            <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
          </p>
        </div>
        <script>
          var d = new Date();
          var year = d.getFullYear();
          document.getElementById("copy-year").innerHTML = year;
        </script>
      </footer>

    </div>
  </div>


  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
  <script src="../assets/plugins/jquery/jquery.min.js"></script>
  <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/plugins/toaster/toastr.min.js"></script>
  <script src="../assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
  <script src="../assets/plugins/charts/Chart.min.js"></script>
  <script src="../assets/plugins/ladda/spin.min.js"></script>
  <script src="../assets/plugins/ladda/ladda.min.js"></script>
  <script src="../assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
  <script src="../assets/plugins/select2/js/select2.min.js"></script>
  <script src="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
  <script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
  <script src="../assets/plugins/daterangepicker/moment.min.js"></script>
  <script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="../assets/plugins/jekyll-search.min.js"></script>
  <script src="../assets/js/sleek.js"></script>
  <script src="../assets/js/chart.js"></script>
  <script src="../assets/js/date-range.js"></script>
  <script src="../assets/js/map.js"></script>
  <script src="../assets/js/custom.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'></script>
  <script src="../assets/js/radio-check.js"></script>





</body>

</html>