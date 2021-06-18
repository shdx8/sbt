<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>SeBat - Dashboard</title>
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
  <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">">

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="../assets/css/sleek.css" />




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
            <li class="has-sub active expand">
              <a class="sidenav-item-link" href="index.php">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Dashboard</span>
              </a>
            </li>
            <li class="has-sub">
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

      <?php 
      include '../conn.php';
      $order = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pinjam"));
      $pinjam = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pinjam where status LIKE 'pinjam'"));
      $revenue =mysqli_fetch_array(mysqli_query($koneksi, "SELECT sum(total) FROM pinjam"));
      ?>
      <div class="content-wrapper">
        <div class="content">
          <div class="row">
            <div class="col-xl-3 col-sm-6">
              <div class="card card-mini mb-4">
                <div class="card-body stat">
                  <h2 class="mb-1"><?php echo $order ?></h2>
                  <p>Total Order</p>
                  <div class="chartjs-wrapper">
                    <canvas id="barChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card card-mini  mb-4">
                <div class="card-body stat">
                  <h2 class="mb-1"><?php echo $pinjam ?></h2>
                  <p>Sedang dipinjam</p>
                  <div class="chartjs-wrapper">
                    <canvas id="dual-line"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card card-mini mb-4">
                <div class="card-body stat">
                  <h2 class="mb-1">50</h2>
                  <p>Powerbank Tersedia</p>
                  <div class="chartjs-wrapper">
                    <canvas id="area-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card card-mini mb-4">
                <div class="card-body stat">
                  <h2 class="mb-1">Rp<?php echo $revenue[0]; ?>K</h2>
                  <p>Total Revenue</p>
                  <div class="chartjs-wrapper">
                    <canvas id="line"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">

              <!-- User activity statistics -->
              <div class="card card-default" id="user-activity">
                <div class="row no-gutters">
                  <div class="col-xl-12">
                    <div class="border-right">
                      <div class="card-header justify-content-between py-5">
                        <h2>User Activity</h2>
                        <div class="date-range-report ">
                          <span></span>
                        </div>
                      </div>
                      <ul
                        class="nav nav-tabs nav-style-border justify-content-between justify-content-xl-start border-bottom"
                        role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active pb-md-0" data-toggle="tab" href="#user" role="tab" aria-controls=""
                            aria-selected="true">
                            <span class="type-name">Dipinjam</span>
                            <h4 class="d-inline-block mr-2 mb-3">5248</h4>
                            <!-- <span class="text-success ">5%
                              <i class="mdi mdi-arrow-up-bold"></i>
                            </span> -->
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link pb-md-0" data-toggle="tab" href="#session" role="tab" aria-controls=""
                            aria-selected="false">
                            <span class="type-name">Total order</span>
                            <h4 class="d-inline-block mr-2 mb-3">638</h4>
                            <!-- <span class="text-success ">20%
                              <i class="mdi mdi-arrow-up-bold"></i>
                            </span> -->
                          </a>
                        </li>
                        
                      </ul>
                      <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="home-tab">
                            <canvas id="activity" class="chartjs"></canvas>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                 
                </div>
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




</body>

</html>