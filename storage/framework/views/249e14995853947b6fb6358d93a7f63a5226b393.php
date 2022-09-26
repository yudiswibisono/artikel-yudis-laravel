<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LARAVEL YUDIS</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/normalize.css')); ?> ">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/flag-icon.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/cs-skin-elastic.css')); ?>">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/scss/style.css')); ?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
            <a class="navbar-brand" alt="Logo">Hi. <?php echo e(Auth::user()->name); ?></a>
            <a class="navbar-brand hidden" href="./"><img src="<?php echo e(asset('style/images/logo2.png')); ?>" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <h3 class="menu-title">Artikel</h3><!-- /.menu-title -->
                    <li>
                        <a href="<?php echo e(url('/artikel')); ?>"> <i class="menu-icon fa fa-laptop"></i>Daftar Artikel</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('tambahArtikel')); ?>"> <i class="menu-icon fa fa-table"></i>Tambah</a>

                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-th"></i>Forms</a>

                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>

                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="<?php echo e(asset('style/images/admin.jpg')); ?>" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i><?php echo e(Auth::user()->name); ?></a>

                                <a class="nav-link" href=" <?php echo e(route('logout')); ?>"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->


        <?php echo $__env->yieldContent('formContent'); ?>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="<?php echo e(asset('style/assets/js/vendor/jquery-2.1.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('style/assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('style/assets/js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('style/assets/js/main.js')); ?>"></script>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\webinar-himit-yudis\resources\views/layout.blade.php ENDPATH**/ ?>