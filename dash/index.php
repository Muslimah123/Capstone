<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='../register/login.php';" . "</script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">

<title>Dashboard</title>



<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->



<link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />



  </head>


  <body class="g-sidenav-show  bg-gray-100">
    
      <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-info" id="sidenav-main">

  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
      <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">Dashboard</span>
    </a>
  </div>


  <hr class="horizontal light mt-0 mb-2">

  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">

<li class="nav-item">
  <a class="nav-link text-white " href="./dashboard.html">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">dashboard</i>
      </div>
    
    <span class="nav-link-text ms-1">Dashboard</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-white " href="./tables.html">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">table_view</i>
      </div>
    
    <span class="nav-link-text ms-1">customers</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-white " href="./billing.html">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">receipt_long</i>
      </div>
    
    <span class="nav-link-text ms-1">products</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-white " href="./virtual-reality.html">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">view_in_ar</i>
      </div>
    
    <span class="nav-link-text ms-1">Reports</span>
  </a>
</li>

  

  
<li class="nav-item">
  <a class="nav-link text-white " href="./notifications.html">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">notifications</i>
      </div>
    
    <span class="nav-link-text ms-1">Notifications</span>
  </a>
</li>

  
    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
    </li>
  
<li class="nav-item">
  <a class="nav-link text-white " href="./profile.html">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">person</i>
      </div>
    
    <span class="nav-link-text ms-1">Profile</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-white " href="./sign-in.html">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">login</i>
      </div>
    
    <span class="nav-link-text ms-1">Sign In</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-white " href="./sign-up.html">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">assignment</i>
      </div>
    
    <span class="nav-link-text ms-1">Sign Up</span>
  </a>
</li>   
      
    </ul>
  </div>
  

  
</aside>

      <main class="main-content border-radius-lg ">
        <!-- Navbar -->

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">index</li>
      </ol>
      <h6 class="font-weight-bolder mb-0">index</h6>
      
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          
          <div class="input-group input-group-outline">
            <label class="form-label">Type here...</label>
            <input type="text" class="form-control">
          </div>
          
          <div class="input-group input-group-outline">
          <i class="fa fa-microphone me-sm-1 ms-1"></i>
            
            <!-- <span class="d-sm-inline d-none">log out</span> -->
          </div>
          
      </div>
      <ul class="navbar-nav  justify-content-end">
      
        <li class="nav-item d-flex align-items-center">
          <a href="../register/logout.php" class="nav-link text-body font-weight-bold px-0">
            <i class="fa fa-user me-sm-1"></i>
            
            <span class="d-sm-inline d-none">logout</span>
            
          </a>
        </li>
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
        <li class="nav-item px-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0">
            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
          </a>
        </li>
        <li class="nav-item dropdown pe-2 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-bell cursor-pointer"></i>
          </a>

          <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
            <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex py-1">
                  <div class="my-auto">
                    <img src="./assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm font-weight-normal mb-1">
                      <span class="font-weight-bold">New message</span> from Laur
                    </h6>
                    <p class="text-xs text-secondary mb-0">
                      <i class="fa fa-clock me-1"></i>
                      13 minutes ago
                    </p>
                  </div>
                </div>
              </a>
            </li>
            <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex py-1">
                  <div class="my-auto">
                    <img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm font-weight-normal mb-1">
                      <span class="font-weight-bold">New album</span> by Travis Scott
                    </h6>
                    <p class="text-xs text-secondary mb-0">
                      <i class="fa fa-clock me-1"></i>
                      1 day
                    </p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex py-1">
                  <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                    <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>credit-card</title> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g transform="translate(1716.000000, 291.000000)"> <g transform="translate(453.000000, 454.000000)"> <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path> <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path> </g> </g> </g> </g> </svg>
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm font-weight-normal mb-1">
                      Payment successfully completed
                    </h6>
                    <p class="text-xs text-secondary mb-0">
                      <i class="fa fa-clock me-1"></i>
                      2 days
                    </p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- End Navbar -->


        


            <div class="container-fluid py-4">
              


<div class="row">
  <div class="col-lg-7 position-relative z-index-2">
    <div class="card card-plain mb-4">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-lg-6">
            <div class="d-flex flex-column h-100">
  <h2 class="font-weight-bolder mb-0">General Statistics</h2>
</div>

          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-5 col-sm-5">
        <div class="card  mb-2">
    <div class="card-header p-3 pt-2">
    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
      <i class="material-icons opacity-10">weekend</i>
    </div>
    <div class="text-end pt-1">
      <p class="text-sm mb-0 text-capitalize">Total customers</p>
      <h4 class="mb-0">281</h4>
    </div>
  </div>

  <hr class="dark horizontal my-0">
  <div class="card-footer p-3">
    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
  </div>
</div>

        <div class="card  mb-2">
  <div class="card-header p-3 pt-2">
    <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
      <i class="material-icons opacity-10">leaderboard</i>
    </div>
    <div class="text-end pt-1">
      <p class="text-sm mb-0 text-capitalize">Today's sales</p>
      <h4 class="mb-0">2,300</h4>
    </div>
  </div>

  <hr class="dark horizontal my-0">
  <div class="card-footer p-3">
    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
  </div>
</div>

      </div>
      <div class="col-lg-5 col-sm-5 mt-sm-0 mt-4">
        <div class="card  mb-2">
  <div class="card-header p-3 pt-2 bg-transparent">
    <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
      <i class="material-icons opacity-10">store</i>
    </div>
    <div class="text-end pt-1">
      <p class="text-sm mb-0 text-capitalize ">Revenue</p>
      <h4 class="mb-0 ">34k</h4>
    </div>
  </div>

  <hr class="horizontal my-0 dark">
  <div class="card-footer p-3">
    <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday</p>
  </div>
</div>

        <div class="card ">
  <div class="card-header p-3 pt-2 bg-transparent">
    <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
      <i class="material-icons opacity-10">person_add</i>
    </div>
    <div class="text-end pt-1">
      <p class="text-sm mb-0 text-capitalize ">Reports</p>
      <h4 class="mb-0 ">+91</h4>
    </div>
  </div>

  <hr class="horizontal my-0 dark">
  <div class="card-footer p-3">
    <p class="mb-0 ">Just updated</p>
  </div>
</div>

      </div>
    </div>

    

<div class="row mt-4">
  <div class="col-lg-5 mb-lg-0 mb-4">
    <div class="card z-index-2 mt-4">
  <div class="card-body mt-n5 px-3">
    <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1 mb-3">
      <div class="chart">
        <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
      </div>
    </div>
    <h6 class="ms-2 mt-4 mb-0"> Active customers </h6>
    <p class="text-sm ms-2"> (<span class="font-weight-bolder">+11%</span>) than last week </p>
    <div class="container border-radius-lg">
      <div class="row">
        <div class="col-3 py-3 ps-0">
          <div class="d-flex mb-2">
            <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">groups</i>
            </div>
            <p class="text-xs my-auto font-weight-bold">Users</p>
          </div>
          <h4 class="font-weight-bolder">42K</h4>
          <div class="progress w-75">
            <div class="progress-bar bg-dark w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="col-3 py-3 ps-0">
          <div class="d-flex mb-2">
            <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-info text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">ads_click</i>
            </div>
            <p class="text-xs mt-1 mb-0 font-weight-bold">Clicks</p>
          </div>
          <h4 class="font-weight-bolder">1.7m</h4>
          <div class="progress w-75">
            <div class="progress-bar bg-dark w-90" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="col-3 py-3 ps-0">
          <div class="d-flex mb-2">
            <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-warning text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt</i>
            </div>
            <p class="text-xs mt-1 mb-0 font-weight-bold">Sales</p>
          </div>
          <h4 class="font-weight-bolder">399$</h4>
          <div class="progress w-75">
            <div class="progress-bar bg-dark w-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="col-3 py-3 ps-0">
          <div class="d-flex mb-2">
            <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-danger text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">category</i>
            </div>
            <p class="text-xs mt-1 mb-0 font-weight-bold">Items</p>
          </div>
          <h4 class="font-weight-bolder">74</h4>
          <div class="progress w-75">
            <div class="progress-bar bg-dark w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>
  <div class="col-lg-7">
    <div class="card z-index-2">
  <div class="card-header pb-0">
    <h6>Sales overview</h6>
    <p class="text-sm">
      <i class="fa fa-arrow-up text-success"></i>
      <span class="font-weight-bold">4% more</span> in 2021
    </p>
  </div>
  <div class="card-body p-3">
    <div class="chart">
      <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
    </div>
  </div>
</div>

  </div>
</div>

<div class="row">
  <div class="col-12">
    <div id="globe" class="position-absolute end-0 top-10 mt-sm-3 mt-7 me-lg-7">
      <canvas width="700" height="600" class="w-lg-100 h-lg-100 w-75 h-75 me-lg-0 me-n10 mt-lg-5"></canvas>
    </div>
  </div>
</div>


                <footer class="footer py-4  ">
  <div class="container-fluid">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6 mb-lg-0 mb-4">
       
      </div>
      <div class="col-lg-6">
        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
          
          <li class="nav-item">
            <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
          </li>
          <li class="nav-item">
            <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
          </li>
          
        </ul>
      </div>
    </div>
  </div>
</footer>

            </div>

         
       </main>
    


<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>


<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.0.4"></script>
  </body>

</html>
