<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Lavai</title>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">


    <link href="<?php echo e(asset('dashboard/css/nucleo-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dashboard/css/nucleo-svg.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dashboard/css/nucleo-icons.css')); ?>" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo e(asset('dashboard/img/favicon.png')); ?>">
    <link href="<?php echo e(asset('dashboard/css/material-dashboard.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">

</head>
<body class="g-sidenav-show  bg-gray-200">
<?php echo toastr_css(); ?>
<?php echo toastr_js(); ?>
<?php echo app('toastr')->render(); ?>
<?php if(Auth::check()): ?>

    <?php if(auth()->user()->user_type_id == \App\Models\UserType::ADMIN): ?>
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark ps bg-white" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5  end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" http://localhost.com " target="_blank">
                <img src="<?php echo e(asset('dashboard//img/logo-ct.png')); ?>" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Lavai</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse w-auto ps ps--active-x" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="<?php echo e(route('dashboard')); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                    <a class="nav-link text-white active bg-gradient-primary" href="<?php echo e(route('manage')); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">payments</i>
                        </div>
                        <span class="nav-link-text ms-1">Validar Crédito</span>
                    </a>
                    <a class="nav-link text-white active bg-gradient-primary" href="<?php echo e(route('managePrice')); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">currency_exchange</i>
                        </div>
                        <span class="nav-link-text ms-1">Gerir Preço</span>
                    </a>
                    <a class="nav-link text-white active bg-gradient-primary" href="<?php echo e(route('user.search')); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">people_outline</i>
                        </div>
                        <span class="nav-link-text ms-1">Validar Usuário</span>
                    </a>
                </li>
            </ul>

            <div class="ps__rail-x" style="width: 250px; left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 214px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></aside>
        <main class="main-content  max-height-vh-100 h-100 border-radius-lg ps ps--active-y">
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
                <div class="container-fluid py-1 px-3">
                    <nav aria-label="breadcrumb">
                        <!--
                        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                        </ol>
                        -->
                        <h6 class="font-weight-bolder mb-0"><?php echo $__env->yieldContent('title'); ?></h6>
                    </nav>
                    <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ml-4">
                        <a href="javascript:;" class="nav-link text-body pr-0 ">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </div>
                    <?php else: ?>
    <aside id="sidenav-main">
        <div  id="sidenav-collapse-main">
            <div class="ps__rail-x" style="width: 250px; left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 214px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        <main class="main-content  max-height-vh-100 h-100 border-radius-lg ps ps--active-y">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg ">

                    <?php endif; ?>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                </div>
                <ul class="navbar-nav justify-content-end">

                    <li class="nav-item ">
                        <h6 class="nav-link font-weight-bold">Saldo: <?php echo e(Auth::user()->credit->amount); ?>KG</h6>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="javascript:;" class="nav-link text-body font-weight-normal px-2" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="d-sm-inline d-none"><?php echo e(Auth::user()->name); ?></span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end p-2 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">

                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>

                            </li>

                        </ul>
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


                </ul>
            </div>
            </nav>
<?php endif; ?>

        <div id="app">

            <?php if(!(Auth::check())): ?>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                            Lavanderia
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                     <div class="collapse navbar-collapse" id="navbarSupportedContent">


                        <ul class="navbar-nav ms-auto">
                            <?php if(auth()->guard()->guest()): ?>
                                <?php if(Route::has('login')): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                    </li>
                                <?php endif; ?>

                                <?php if(Route::has('register')): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('show.register')); ?>"><?php echo e(__('Cadastre-se')); ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a class="nav-link"><h6> Saldo: <?php echo e(Auth::user()->credit->amount); ?>KG</h6></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo e(Auth::user()->name); ?>

                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Logout')); ?>

                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </div>
                                </li>

                            <?php endif; ?>
                        </ul>

                    </div>
                </div>
            </nav>
            <?php endif; ?>
            <main class="py-4">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
                        </main>
        </main>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<!-- Dashboard scripts -->
<script src="<?php echo e(asset('dashboard/js/core/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/core/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/plugins/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/plugins/smooth-scrollbar.min.js')); ?>"></script>
<!-- Kanban scripts -->
<script src="<?php echo e(asset('dashboard/js/plugins/dragula/dragula.min.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/plugins/jkanban/jkanban.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/material-dashboard.min.js')); ?>"></script>


<script src="../../assets/js/plugins/datatables.js"></script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="<?php echo e(asset('js/dataTable.js')); ?>" defer></script>     <script src="<?php echo e(asset('js/laundryService.js')); ?>"></script>

<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

</html>


<?php /**PATH B:\Programming\Laundry\resources\views/layouts/app.blade.php ENDPATH**/ ?>