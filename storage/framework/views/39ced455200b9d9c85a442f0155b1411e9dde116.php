
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
          content="wrap-pixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
          content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Quizer</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href=<?php echo e(asset('assets/images/favicon.png'), false); ?>>
    <!-- Custom CSS -->
    <link href=<?php echo e(asset('admin/assets/css/style.min.css'), false); ?> rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><a/script>
    <![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->







<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
     data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin6">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->

                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src='https://cdn.discordapp.com/attachments/899293191960936492/931126319931064330/download_2.png' alt="homepage" class="dark-logo" style="width:50px;"/>

                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                            <!-- dark Logo text -->
                            <h1 style="color: #0a53be;font-size: small">Quizer</h1>

                        </span>
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                   href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav me-auto mt-md-0 ">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->

                    <li class="nav-item hidden-sm-down">

                    </li>
                </ul>

                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav">
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src='https://cdn.discordapp.com/attachments/899293191960936492/931126319931064330/download_2.png' alt="user" class="profile-pic me-2"><?php echo e(auth()->user()->name, false); ?>

                        </a>
                        <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->












































    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <?php echo $__env->yieldContent('admin-content'); ?>
            <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer text-center">
                    © 2021 Quizer Admin
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src=<?php echo e(asset('admin/assets/plugins/jquery/dist/jquery.min.js'), false); ?>></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src=<?php echo e(asset('admin/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js'), false); ?>></script>
    <script src=<?php echo e(asset('admin/js/app-style-switcher.js'), false); ?>></script>
    <!--Wave Effects -->
    <script src=<?php echo e(asset('admin/js/waves.js'), false); ?>></script>
    <!--Menu sidebar -->
    <script src=<?php echo e(asset('admin/js/sidebarmenu.js'), false); ?>></script>
    <!--Custom JavaScript -->
    <script src=<?php echo e(asset('admin/js/custom.js'), false); ?>></script>
    <!--This page JavaScript -->
    <!--flot chart-->
    <script src=<?php echo e(asset('admin/assets/plugins/flot/jquery.flot.js'), false); ?>></script>
    <script src=<?php echo e(asset('admin/assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js'), false); ?>></script>
    <script src=<?php echo e(asset('admin/js/pages/dashboards/dashboard1.js'), false); ?>></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel_projects\Affiliate-Marketing-App\resources\views/admin/master.blade.php ENDPATH**/ ?>