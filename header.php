<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin</title>
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo_star_black.png" /></a>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="images/user.png" alt="">
            <p class="name">Administrator</p>
            <p class="designation">Administrator</p>
          </div>
          <ul class="nav">
			<li class="nav-item">
              <a class="nav-link" href="#">
                <img src="images/icons/1.png" alt="">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <img src="images/icons/008-list.png" alt="">
                <span class="menu-title">Card Detail</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
                <img src="images/icons/2.png" alt="">
                <span class="menu-title">Sales Order Info<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="sample-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="viewSO">
                      Single SO Detail
                    </a>
                  </li>
				  <li class="nav-item">
                    <a class="nav-link" href="viewPO">
                      Single PO Detail
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="upload">
                      Upload Multiple SO
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <img src="images/icons/005-forms.png" alt="">
                <span class="menu-title">Laporan</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->