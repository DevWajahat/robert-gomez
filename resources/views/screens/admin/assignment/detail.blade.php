<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    </meta>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    </meta>

    <title>Robert Gomez Admin</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </link>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    </link>

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    </link>

    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    </link>

    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    </link>

    <link rel="stylesheet" href="dist/css/adminlte.css">
    </link>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->

        <nav class="main-header navbar navbar-expand navbar-dark justify-content-between">
            <!-- Left navbar links -->

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('admin.index') }}" class="nav-link">Home</a>
                </li>

                <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
            </ul>

            <div class="time-container text-center">
                <div class="time" id="time">23:44</div>

                <div class="date" id="date">Mon, 02 June 2025</div>
            </div>

            <!-- Right navbar links -->

            <ul class="navbar-nav">
                <!-- Navbar Search -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>

                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search"></input>

                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>

                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>

                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->

                            <div class="media">
                                <img src="{{ asset("assets/admin/img/user1-128x128.jpg") }}" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">

                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel

                                        <span class="float-right text-sm text-danger">
                                            <i class="fas fa-star"></i>
                                        </span>
                                    </h3>

                                    <p class="text-sm">Call me whenever you can...</p>

                                    <p class="text-sm text-muted">
                                        <i class="far fa-clock mr-1"></i>
                                        4 Hours Ago
                                    </p>
                                </div>
                            </div>

                            <!-- Message End -->
                        </a>

                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->

                            <div class="media">
                                <img src="{{ asset('assets/admin/img/user8-128x128.jpg') }}" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">

                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce

                                        <span class="float-right text-sm text-muted">
                                            <i class="fas fa-star"></i>
                                        </span>
                                    </h3>

                                    <p class="text-sm">I got your message bro</p>

                                    <p class="text-sm text-muted">
                                        <i class="far fa-clock mr-1"></i>
                                        4 Hours Ago
                                    </p>
                                </div>
                            </div>

                            <!-- Message End -->
                        </a>

                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->

                            <div class="media">
                                <img src="{{ asset("assets/admin/img/user3-128x128.jpg") }}" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">

                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester

                                        <span class="float-right text-sm text-warning">
                                            <i class="fas fa-star"></i>
                                        </span>
                                    </h3>

                                    <p class="text-sm">The subject goes here</p>

                                    <p class="text-sm text-muted">
                                        <i class="far fa-clock mr-1"></i>
                                        4 Hours Ago
                                    </p>
                                </div>
                            </div>

                            <!-- Message End -->
                        </a>

                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>

                <!-- Notifications Dropdown Menu -->

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>

                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>

                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i>
                            4 new messages

                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i>
                            8 friend requests

                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i>
                            3 new reports

                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- /.navbar -->
        <!-- Main Sidebar Container -->

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->

            <a href="{{ route('admin.index') }}" class="brand-link">
                <img src="{{ asset("assets/admin/img/AdminLTELogo.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: 0.8">

                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->

            <div class="sidebar">
                <!-- Sidebar Menu -->

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./{{ route('admin.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> -->

                        <li class="nav-item">
                            <a href="{{ route('admin.index') }}" class="nav-link">
                                <img src="{{ asset("assets/admin/img/link-img-1.png") }}" alt="">

                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="assignments.html" class="nav-link">
                                <img src="{{ asset("assets/admin/img/link-img-1.png") }}" alt="">

                                <p>Assignments</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="admin-CMS.html" class="nav-link">
                                <img src="{{ asset("assets/admin/img/link-img-1.png") }}" alt="">

                                <p>Admin CMS</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img src="{{ asset("assets/admin/img/link-img-1.png") }}" alt="">

                                <p>Accounting</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img src="{{ asset("assets/admin/img/link-img-1.png") }}" alt="">

                                <p>Reports</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="settings.html" class="nav-link">
                                <img src="{{ asset("assets/admin/img/link-img-1.png") }}" alt="">

                                <p>Settings</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img src="{{ asset("assets/admin/img/link-img-1.png") }}" alt="">

                                <p>ProLink</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img src="{{ asset("assets/admin/img/link-img-1.png") }}" alt="">

                                <p>Forms</p>
                            </a>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img src="{{ asset("assets/admin/img/link-img-1.png") }}" alt="">

                                <p>Downloads</p>
                            </a>
                        </li> -->
                    </ul>
                </nav>

                <!-- /.sidebar-menu -->
            </div>

            <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="dashboard-content">
                        <div class="view-wrapper mt-0">
                            <div class="inner-head-wrap2 mb-5">
                                <ul class="inner-head3">
                                    <a href="#" class="link text-decoration-none">
                                        <li class="inner-list inner-list-1">View</li>
                                    </a>

                                    <a href="#" class="link text-decoration-none">
                                        <li class="inner-list inner-list-1">Print</li>
                                    </a>

                                    <a href="#" class="link text-decoration-none">
                                        <li class="inner-list inner-list-1">Edit</li>
                                    </a>

                                    <a href="#" class="link text-decoration-none">
                                        <li class="inner-list inner-list-1">Cancel</li>
                                    </a>

                                    <a href="#" class="link text-decoration-none">
                                        <li class="inner-list inner-list-1">Dispatch</li>
                                    </a>

                                    <a href="#" class="link text-decoration-none">
                                        <li class="inner-list inner-list-1">Messages</li>
                                    </a>

                                    <a href="#" class="link text-decoration-none">
                                        <li class="inner-list inner-list-1">Billing</li>
                                    </a>

                                    <a href="#" class="link text-decoration-none">
                                        <li class="inner-list inner-list-1">Files</li>
                                    </a>

                                    <a href="#" class="link text-decoration-none">
                                        <li class="inner-list inner-list-1">Actions</li>
                                    </a>

                                    <a href="#" class="link text-decoration-none">
                                        <li class="inner-list inner-list-1">Reports</li>
                                    </a>

                                    <a href="#" class="link text-decoration-none">
                                        <li class="inner-list inner-list-1">Notepad</li>
                                    </a>

                                    <button class="link text-decoration-none open-modal-btn" type="button" onclick="openModal()">
                                        <li class="inner-list inner-list-1">Schedule Appointments</li>
                                    </button>
                                </ul>
                            </div>

                            <div class="row boxes-rows">
                                <div class="col-lg-4">
                                    <div class="payment-info">
                                        <div class="info-head">
                                            <h3>Claim Info</h3>
                                        </div>

                                        <div class="info-desc d-flex">
                                            <div>
                                                <ul class="head-ul">
                                                    <li>Company:</li>

                                                    <li>Company #:</li>

                                                    <li>DL Number:</li>

                                                    <li>Claim Number:</li>

                                                    <li>Status:</li>
                                                </ul>
                                            </div>

                                            <div>
                                                <ul class="desc-ul">
                                                    <li>Lorem Ipsum</li>

                                                    <li>ABCD1234567890</li>

                                                    <li>1234566</li>

                                                    <li>1234566</li>

                                                    <li>Active</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="info-head">
                                            <h3>Take Action</h3>
                                        </div>

                                        <div class="info-desc text-center">
                                            <button class="mod-btn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                You must ACCEPT or REJECT the claim to proceed
                                            </button>

                                            <div class="d-flex mb-3 gap-5">
                                                <p class="claim-para">
                                                    <i class="fa-solid fa-check"></i>
                                                    Accept Claim
                                                </p>

                                                <p class="claim-para">
                                                    <i class="fa-solid fa-minus"></i>

                                                    <a href="#"
                                                        class="text-decoration-none">Reject Claim</a>
                                                </p>
                                            </div>

                                            <div class="d-flex">
                                                <p class="claim-para">
                                                    <i class="fa-solid fa-exclamation"></i>
                                                    Turn On :
                                                    Needs Attention
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="payment-info">
                                        <div class="info-head">
                                            <h3>Payment Details</h3>
                                        </div>

                                        <div class="info-desc text-center">
                                            <table class="table text-start">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Billing Type</th>

                                                        <th scope="col" colspan="2">Appraisal Standard</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Base Rate</th>

                                                        <td>+</td>

                                                        <td>$0.00</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Base Rate</th>

                                                        <td>+</td>

                                                        <td>$0.00</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Base Rate</th>

                                                        <td>+</td>

                                                        <td>$0.00</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Base Rate</th>

                                                        <td>+</td>

                                                        <td>$0.00</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Base Rate</th>

                                                        <td>+</td>

                                                        <td>$0.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <button class="pay-btn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal2">Request Pay Change</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="payment-info" style="height: auto !important">
                                        <div class="info-head">
                                            <h3>Timeline</h3>
                                        </div>

                                        <div class="info-desc d-flex">
                                            <div>
                                                <ul class="head-ul">
                                                    <li class="mb-4">Appointment Date:</li>

                                                    <li class="mb-2">Time Open</li>

                                                    <li>Date Created</li>
                                                </ul>
                                            </div>

                                            <div>
                                                <ul class="desc-ul">
                                                    <li class="mb-4">
                                                        09/18/2024 5:00 am

                                                        <a href="" class="text-danger text-decoration-none"
                                                            style="margin-left: 12px; font-weight: 700">Change</a>
                                                    </li>

                                                    <li class="mb-2">2 days, 16 hours, 13 mins</li>

                                                    <li>05/18/2024 6:33 pm CDT</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pay-instruction">
                                        <h5>Instructions</h5>

                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the
                                            industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has
                                            survived not only five centuries, but also the leap into
                                            electronic typesetting, remaining essentially unchanged.
                                            It was popularised in the 1960s with the release of
                                            Letraset sheets containing Lorem Ipsum passages, and
                                            more recently with desktop publishing software like
                                            Aldus PageMaker including versions of Lorem Ipsum
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="faqs">
                                        <div class="faq">
                                            <button type="button" class="faq-btn d-flex">
                                                <span class="flex-grow-1">Assignments</span>

                                                <div class="faq-btn-arrow">
                                                    <i class="fa-solid fa-chevron-down"></i>
                                                </div>
                                            </button>

                                            <div class="faq-body mb-0" style="display: none">
                                                <div class="view-tab-content">
                                                    <form action="">
                                                        <div class="row" style="margin-bottom: 11px">
                                                            <div class="col-6">
                                                                <div class="row align-items-center">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Duplicated
                                                                            VIN #
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"
                                                                            placeholder="Select"></input>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row" style="margin-bottom: 11px">
                                                            <div class="col-6">
                                                                <div class="row align-items-center">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Duplicated
                                                                            Claim #
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <h5 class="assign-head">Insurance Information</h5>

                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            File
                                                                            #
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for=""
                                                                            class="custom-label">Company</label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for=""
                                                                            class="custom-label">Adjuster</label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Deductible
                                                                            Amount
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Claim
                                                                            For
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Date First
                                                                            Contacted
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Claim
                                                                            Number
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Adjuster
                                                                            Phone
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Date of
                                                                            Loss
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Insured
                                                                            Name
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Policy
                                                                            Number
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Type of
                                                                            Loss
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <h5 class="assign-head">Owner Information</h5>

                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Business
                                                                            Name
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Contact
                                                                            Name
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">City</label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">State</label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Client
                                                                            Email
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Mobile
                                                                            Phone
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            First
                                                                            Name
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Last
                                                                            Name
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for=""
                                                                            class="custom-label">Address</label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">Zip</label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Home
                                                                            Phone
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Work
                                                                            Phone
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <h5 class="assign-head">Location Information</h5>

                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for=""
                                                                            class="custom-label">Location</label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for=""
                                                                            class="custom-label">Address</label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">City</label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Location
                                                                            Phone
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            Location
                                                                            Name
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">State</label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">Zip</label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">State</label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <h5 class="assign-head">Vehicle Information</h5>

                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">Year</label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">Make</label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">VIN #</label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">
                                                                            License
                                                                            Plate
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for=""
                                                                            class="custom-label">Mileage</label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">Model</label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for="" class="custom-label">Color</label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label for=""
                                                                            class="custom-label">Damage</label>
                                                                    </div>

                                                                    <div class="col-md-8">
                                                                        <input type="text" name="" id=""
                                                                            class="custom-input form-control"></input>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="faq">
                                            <button type="button" class="faq-btn d-flex">
                                                <span class="flex-grow-1">Guidelines</span>

                                                <div class="faq-btn-arrow">
                                                    <i class="fa-solid fa-chevron-down"></i>
                                                </div>
                                            </button>

                                            <div class="faq-body mb-0" style="display: none">
                                                <div class="view-tab-content">
                                                    <p class="guide-para">
                                                        Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the
                                                        1500s, when an unknown printer took a galley of
                                                        type and scrambled it to make a type specimen
                                                        book. It has survived not only five centuries, but
                                                        also the leap into electronic typesetting,
                                                        remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of
                                                        Letraset sheets containing Lorem Ipsum passages,
                                                        and more recently with desktop publishing software
                                                        like Aldus PageMaker including versions of Lorem
                                                        Ipsum
                                                    </p>

                                                    <p class="guide-para">
                                                        Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the
                                                        1500s, when an unknown printer took a galley of
                                                        type and scrambled it to make a type specimen
                                                        book. It has survived not only five centuries, but
                                                        also the leap into electronic typesetting,
                                                        remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of
                                                        Letraset sheets containing Lorem Ipsum passages,
                                                        and more recently with desktop publishing software
                                                        like Aldus PageMaker including versions of Lorem
                                                        Ipsum
                                                    </p>

                                                    <p class="guide-para">
                                                        Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the
                                                        1500s, when an unknown printer took a galley of
                                                        type and scrambled it to make a type specimen
                                                        book. It has survived not only five centuries, but
                                                        also the leap into electronic typesetting,
                                                        remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of
                                                        Letraset sheets containing Lorem Ipsum passages,
                                                        and more recently with desktop publishing software
                                                        like Aldus PageMaker including versions of Lorem
                                                        Ipsum
                                                    </p>

                                                    <p class="guide-para">
                                                        Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the
                                                        1500s, when an unknown printer took a galley of
                                                        type and scrambled it to make a type specimen
                                                        book. It has survived not only five centuries, but
                                                        also the leap into electronic typesetting,
                                                        remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of
                                                        Letraset sheets containing Lorem Ipsum passages,
                                                        and more recently with desktop publishing software
                                                        like Aldus PageMaker including versions of Lorem
                                                        Ipsum
                                                    </p>

                                                    <p class="guide-para">
                                                        Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the
                                                        1500s, when an unknown printer took a galley of
                                                        type and scrambled it to make a type specimen
                                                        book. It has survived not only five centuries, but
                                                        also the leap into electronic typesetting,
                                                        remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of
                                                        Letraset sheets containing Lorem Ipsum passages,
                                                        and more recently with desktop publishing software
                                                        like Aldus PageMaker including versions of Lorem
                                                        Ipsum
                                                    </p>

                                                    <p class="guide-para">
                                                        Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the
                                                        1500s, when an unknown printer took a galley of
                                                        type and scrambled it to make a type specimen
                                                        book. It has survived not only five centuries, but
                                                        also the leap into electronic typesetting,
                                                        remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of
                                                        Letraset sheets containing Lorem Ipsum passages,
                                                        and more recently with desktop publishing software
                                                        like Aldus PageMaker including versions of Lorem
                                                        Ipsum
                                                    </p>

                                                    <p class="guide-para">
                                                        Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the
                                                        1500s, when an unknown printer took a galley of
                                                        type and scrambled it to make a type specimen
                                                        book. It has survived not only five centuries, but
                                                        also the leap into electronic typesetting,
                                                        remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of
                                                        Letraset sheets containing Lorem Ipsum passages,
                                                        and more recently with desktop publishing software
                                                        like Aldus PageMaker including versions of Lorem
                                                        Ipsum
                                                    </p>

                                                    <p class="guide-para">
                                                        Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the
                                                        1500s, when an unknown printer took a galley of
                                                        type and scrambled it to make a type specimen
                                                        book. It has survived not only five centuries, but
                                                        also the leap into electronic typesetting,
                                                        remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of
                                                        Letraset sheets containing Lorem Ipsum passages,
                                                        and more recently with desktop publishing software
                                                        like Aldus PageMaker including versions of Lorem
                                                        Ipsum
                                                    </p>

                                                    <p class="guide-para">
                                                        Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the
                                                        1500s, when an unknown printer took a galley of
                                                        type and scrambled it to make a type specimen
                                                        book. It has survived not only five centuries, but
                                                        also the leap into electronic typesetting,
                                                        remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of
                                                        Letraset sheets containing Lorem Ipsum passages,
                                                        and more recently with desktop publishing software
                                                        like Aldus PageMaker including versions of Lorem
                                                        Ipsum
                                                    </p>

                                                    <p class="guide-para">
                                                        Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the
                                                        1500s, when an unknown printer took a galley of
                                                        type and scrambled it to make a type specimen
                                                        book. It has survived not only five centuries, but
                                                        also the leap into electronic typesetting,
                                                        remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of
                                                        Letraset sheets containing Lorem Ipsum passages,
                                                        and more recently with desktop publishing software
                                                        like Aldus PageMaker including versions of Lorem
                                                        Ipsum
                                                    </p>

                                                    <p class="guide-para">
                                                        Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the
                                                        1500s, when an unknown printer took a galley of
                                                        type and scrambled it to make a type specimen
                                                        book. It has survived not only five centuries, but
                                                        also the leap into electronic typesetting,
                                                        remaining essentially unchanged. It was
                                                        popularised in the 1960s with the release of
                                                        Letraset sheets containing Lorem Ipsum passages,
                                                        and more recently with desktop publishing software
                                                        like Aldus PageMaker including versions of Lorem
                                                        Ipsum
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="faq">
                                            <button type="button" class="faq-btn d-flex">
                                                <span class="flex-grow-1">Clients Forms</span>

                                                <div class="faq-btn-arrow">
                                                    <i class="fa-solid fa-chevron-down"></i>
                                                </div>
                                            </button>

                                            <div class="faq-body mb-0" style="display: none">
                                                <div class="view-tab-content">
                                                    style

                                                    <div class="entry-table-wrap">
                                                        <table class="table entries-table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                        File Name

                                                                        <i class="fa-solid fa-arrow-down"></i>
                                                                    </th>

                                                                    <th scope="col" style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                        Label

                                                                        <i class="fa-solid fa-arrow-down"></i>
                                                                    </th>

                                                                    <th scope="col" style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                        Date

                                                                        <i class="fa-solid fa-arrow-down"></i>
                                                                    </th>

                                                                    <th scope="col" style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                        Download

                                                                        <i class="fa-solid fa-arrow-down"></i>
                                                                    </th>

                                                                    <th scope="col" style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                        Add to Docs/Photos

                                                                        <i class="fa-solid fa-arrow-down"></i>
                                                                    </th>

                                                                    <th scope="col" style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                        Action

                                                                        <i class="fa-solid fa-arrow-down"></i>
                                                                    </th>

                                                                    <th scope="col" style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                        Action

                                                                        <i class="fa-solid fa-arrow-down"></i>
                                                                    </th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr class="">
                                                                    <td>1_IAS_Knowledgebase.docx</td>

                                                                    <td>IAS KNOWLEDGE BASE</td>

                                                                    <td>04/09/2024</td>

                                                                    <td>Lorem Ipsum Dummy</td>

                                                                    <td>Add to Docs/Photos</td>

                                                                    <td>
                                                                        <a href="#" class="icon" title="Download">
                                                                            <i class="fa fa-download"></i>
                                                                        </a>
                                                                    </td>

                                                                    <td>
                                                                        <a href="#" class="icon" title="Download">
                                                                            <i class="fa-solid fa-check"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>

                                                                <tr class="bg-changed">
                                                                    <td>1_IAS_Knowledgebase.docx</td>

                                                                    <td>IAS KNOWLEDGE BASE</td>

                                                                    <td>04/09/2024</td>

                                                                    <td>Lorem Ipsum Dummy</td>

                                                                    <td>Add to Docs/Photos</td>

                                                                    <td>
                                                                        <a href="#" class="icon" title="Download">
                                                                            <i class="fa fa-download"></i>
                                                                        </a>
                                                                    </td>

                                                                    <td>
                                                                        <a href="#" class="icon" title="Download">
                                                                            <i class="fa-solid fa-check"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>

                                                                <tr class="">
                                                                    <td>1_IAS_Knowledgebase.docx</td>

                                                                    <td>IAS KNOWLEDGE BASE</td>

                                                                    <td>04/09/2024</td>

                                                                    <td>Lorem Ipsum Dummy</td>

                                                                    <td>Add to Docs/Photos</td>

                                                                    <td>
                                                                        <a href="#" class="icon" title="Download">
                                                                            <i class="fa fa-download"></i>
                                                                        </a>
                                                                    </td>

                                                                    <td>
                                                                        <a href="#" class="icon" title="Download">
                                                                            <i class="fa-solid fa-check"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>

                                                                <tr class="bg-changed">
                                                                    <td>1_IAS_Knowledgebase.docx</td>

                                                                    <td>IAS KNOWLEDGE BASE</td>

                                                                    <td>04/09/2024</td>

                                                                    <td>Lorem Ipsum Dummy</td>

                                                                    <td>Add to Docs/Photos</td>

                                                                    <td>
                                                                        <a href="#" class="icon" title="Download">
                                                                            <i class="fa fa-download"></i>
                                                                        </a>
                                                                    </td>

                                                                    <td>
                                                                        <a href="#" class="icon" title="Download">
                                                                            <i class="fa-solid fa-check"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="pagination assign-pagination">
                                                        <button class="prev">
                                                            <i class="fa-solid fa-angle-left"></i>
                                                        </button>

                                                        <button class="page active-page">1</button>

                                                        <button class="page">2</button>

                                                        <button class="page">3</button>

                                                        <button class="page">4</button>

                                                        <button class="next">
                                                            <i class="fa-solid fa-angle-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="faq">
                                            <button type="button" class="faq-btn d-flex">
                                                <span class="flex-grow-1">General Forms</span>

                                                <div class="faq-btn-arrow">
                                                    <i class="fa-solid fa-chevron-down"></i>
                                                </div>
                                            </button>

                                            <div class="faq-body mb-0">
                                                <div class="view-tab-content">
                                                    <div class="entry-table-wrap">
                                                        <table class="table entries-table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                        File Name

                                                                        <i class="fa-solid fa-arrow-down"></i>
                                                                    </th>

                                                                    <th scope="col" style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                        Label

                                                                        <i class="fa-solid fa-arrow-down"></i>
                                                                    </th>

                                                                    <th scope="col" style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                        Date

                                                                        <i class="fa-solid fa-arrow-down"></i>
                                                                    </th>

                                                                    <th scope="col" style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                        Download

                                                                        <i class="fa-solid fa-arrow-down"></i>
                                                                    </th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td>1_IAS_Knowledgebase.docx</td>

                                                                    <td>IAS KNOWLEDGE BASE</td>

                                                                    <td>04/09/2024</td>

                                                                    <td>
                                                                        <a href="#" class="icon" title="Download">
                                                                            <i class="fa fa-download"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>1_IAS_Knowledgebase.docx</td>

                                                                    <td>IAS KNOWLEDGE BASE</td>

                                                                    <td>04/09/2024</td>

                                                                    <td>
                                                                        <a href="#" class="icon" title="Download">
                                                                            <i class="fa fa-download"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>1_IAS_Knowledgebase.docx</td>

                                                                    <td>IAS KNOWLEDGE BASE</td>

                                                                    <td>04/09/2024</td>

                                                                    <td>
                                                                        <a href="#" class="icon" title="Download">
                                                                            <i class="fa fa-download"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>1_IAS_Knowledgebase.docx</td>

                                                                    <td>IAS KNOWLEDGE BASE</td>

                                                                    <td>04/09/2024</td>

                                                                    <td>
                                                                        <a href="#" class="icon" title="Download">
                                                                            <i class="fa fa-download"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="pagination assign-pagination">
                                                        <button class="prev">
                                                            <i class="fa-solid fa-angle-left"></i>
                                                        </button>

                                                        <button class="page active-page">1</button>

                                                        <button class="page">2</button>

                                                        <button class="page">3</button>

                                                        <button class="page">4</button>

                                                        <button class="next">
                                                            <i class="fa-solid fa-angle-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Main Footer -->

        <footer class="main-footer">
            <strong>
                Copyright &copy; 2025

                <a href="javascript:;">AdminLTE.io</a>

                .
            </strong>

            All rights reserved.

            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b>

                3.2.0
            </div>
        </footer>
    </div>


    <!-- Modal Start Here -->

    <div id="customModal" class="modal-overlay">
        <div class="modal-box">
            <div class="d-flex align-items-center justify-content-between b-box">
                <h2>Schedule Appointment</h2>
                <span class="close-btn" onclick="closeModal()">&times;</span>
            </div>
            <form action="">
                <div>
                    <label for="">Quick Updates</label>
                    <input type="date" class="custom-input form-control">
                    <input type="time" class="custom-input form-control">
                </div>
                <div class="text-center">
                    <button class="primary-btn" type="button" onclick="closeModal()">Update</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal Start Here -->

    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="dist/js/adminlte.js"></script>
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <script src="plugins/chart.js/Chart.min.js"></script>
    <script src="dist/js/demo.js"></script>
    {{-- <script src="dist/js/pages/dashboard2.js"></script> --}}

    <script>
function openModal() {
  document.getElementById("customModal").style.display = "flex";
}

function closeModal() {
  document.getElementById("customModal").style.display = "none";
}
</script>

</body>

</html>
