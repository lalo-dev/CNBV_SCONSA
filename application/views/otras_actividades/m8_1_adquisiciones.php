<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>CNBV</title>

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-192x192.png" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->
<!--
    Available Classes:

    'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

    'sidebar-l'                  Left Sidebar and right Side Overlay
    'sidebar-r'                  Right Sidebar and left Side Overlay
    'sidebar-mini'               Mini hoverable Sidebar (> 991px)
    'sidebar-o'                  Visible Sidebar by default (> 991px)
    'sidebar-o-xs'               Visible Sidebar by default (< 992px)

    'side-overlay-hover'         Hoverable Side Overlay (> 991px)
    'side-overlay-o'             Visible Side Overlay by default (> 991px)

    'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

    'header-navbar-fixed'        Enables fixed header
-->
<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
    <!-- Side Overlay-->
    <?php //include_once('sideContent.php'); ?>
    <?php $this->load->view('core/sideContent'); ?>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <?php //include_once('menu.php'); ?>
    <?php $this->load->view('core/menu'); ?>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="header-navbar" class="content-mini content-mini-full">
        <!-- Header Navigation Right -->
        <?php //include_once("core/headerNavigation.php"); ?>
        <?php $this->load->view('core/headerNavigation'); ?>
        <!-- END Header Navigation Right -->

        <!-- Header Navigation Left -->
        <ul class="nav-header pull-left">
            <li class="hidden-md hidden-lg">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                    <i class="fa fa-navicon"></i>
                </button>
            </li>
            <li class="hidden-xs hidden-sm">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                    <i class="fa fa-ellipsis-v"></i>
                </button>
            </li>

        </ul>
        <!-- END Header Navigation Left -->
    </header>
    <!-- END Header -->
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Header -->
        <div class="content bg-gray-lighter">
            <div class="row items-push">
                <div class="col-sm-7">
                    <h1 class="page-heading">
                        Adquisiciones <small>Otras actividades</small>
                    </h1>
                </div>
                <div class="col-sm-5 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li>Otras actividades</li>
                        <li>Adquisiciones</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END Page Header -->

        <!-- Page Content -->
        <div class="content">
            <div class="block">
                <ul class="nav nav-tabs" data-toggle="tabs">
                    <li class="active">
                        <a href="#search-documentos">Lista de terminos</a>
                    </li>
                    <li class="pull-right">
                        <a href="#btabs-alt-static-settings" data-toggle="tooltip" title="Opciones"><i class="si si-settings"></i></a>
                    </li>
                    <li class="pull-right">
                        <ul class="block-options push-10-t push-10-r">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="block-content tab-content bg-white">
                    <!-- Documentos -->
                    <div class="tab-pane fade fade-up in active" id="search-documentos">

                        <!-- Tabla_Tema-->
                        <div class="col-md-12">
                            <!-- Block -->
                            <div class="block">

                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                        </li>
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Blockquotes -->
                                <div class="block block-themed">
                                    <h3 class="block-title">Tema 01</h3>
                                    <div class="block-content">
                                        <div class="block-content">
                                            <table class="table table-borderless table-header-bg table-condensed">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Descripción</th>
                                                    <th style="width: 190px;">Responsable</th>
                                                    <th>Normativa</th>
                                                    <th style="width: 170px;">Archivos adjuntos</th>
                                                    <th class="text-center" style="width: 90px;">Fecha</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                                                    <td>Nombre Apellido Apellido</td>
                                                    <td>
                                                        <span class="label label-primary">Normativa aaaaa</span>
                                                        <span class="label label-primary">Normativa aaaaa</span>
                                                    </td>
                                                    <td>
                                                        <a href="">Archivo adjunto.pdf</a>
                                                    </td>
                                                    <td class="text-center">12-12-2015</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                                                    <td>Nombre Apellido Apellido</td>
                                                    <td>
                                                        <span class="label label-primary">Normativa aaaaa</span>
                                                        <span class="label label-primary">Normativa aaaaa</span>
                                                    </td>
                                                    <td>
                                                        <a href="">Archivo adjunto.pdf</a>
                                                    </td>
                                                    <td class="text-center">12-12-2015</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                                                    <td>Nombre Apellido Apellido</td>
                                                    <td>
                                                        <span class="label label-primary">Normativa aaaaa</span>
                                                        <span class="label label-primary">Normativa aaaaa</span>
                                                    </td>
                                                    <td>
                                                        <a href="">Archivo adjunto.pdf</a>
                                                    </td>
                                                    <td class="text-center">12-12-2015</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Blockquotes -->
                            </div>
                            <!-- END Block -->
                        </div>
                        <!-- END Tabla_Tema-->

                        <!-- Tabla_Tema-->
                        <div class="col-md-12">

                            <!-- Block -->
                            <div class="block">

                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                        </li>
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Blockquotes -->
                                <div class="block block-themed">
                                    <h3 class="block-title">Tema 02</h3>
                                    <div class="block-content">
                                        <div class="block-content">
                                            <table class="table table-borderless table-header-bg table-condensed">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Descripción</th>
                                                    <th style="width: 190px;">Responsable</th>
                                                    <th>Normativa</th>
                                                    <th style="width: 170px;">Archivos adjuntos</th>
                                                    <th class="text-center" style="width: 90px;">Fecha</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                                                    <td>Nombre Apellido Apellido</td>
                                                    <td>
                                                        <span class="label label-primary">Normativa aaaaa</span>
                                                        <span class="label label-primary">Normativa aaaaa</span>
                                                    </td>
                                                    <td>
                                                        <a href="">Archivo adjunto.pdf</a>
                                                    </td>
                                                    <td class="text-center">12-12-2015</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                                                    <td>Nombre Apellido Apellido</td>
                                                    <td>
                                                        <span class="label label-primary">Normativa aaaaa</span>
                                                        <span class="label label-primary">Normativa aaaaa</span>
                                                    </td>
                                                    <td>
                                                        <a href="">Archivo adjunto.pdf</a>
                                                    </td>
                                                    <td class="text-center">12-12-2015</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                                                    <td>Nombre Apellido Apellido</td>
                                                    <td>
                                                        <span class="label label-primary">Normativa aaaaa</span>
                                                        <span class="label label-primary">Normativa aaaaa</span>
                                                    </td>
                                                    <td>
                                                        <a href="">Archivo adjunto.pdf</a>
                                                    </td>
                                                    <td class="text-center">12-12-2015</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Blockquotes -->
                            </div>
                            <!-- END Block -->
                        </div>
                        <!-- END Tabla_Tema-->

                        <!-- Tabla_Tema-->
                        <div class="col-md-12">
                            <!-- Block -->
                            <div class="block">

                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                        </li>
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Blockquotes -->
                                <div class="block block-themed">
                                    <h3 class="block-title">Tema 03</h3>
                                    <div class="block-content">
                                        <div class="block-content">
                                            <table class="table table-borderless table-header-bg table-condensed">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Descripción</th>
                                                    <th style="width: 190px;">Responsable</th>
                                                    <th>Normativa</th>
                                                    <th style="width: 170px;">Archivos adjuntos</th>
                                                    <th class="text-center" style="width: 90px;">Fecha</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                                                    <td>Nombre Apellido Apellido</td>
                                                    <td>
                                                        <span class="label label-primary">Normativa aaaaa</span>
                                                        <span class="label label-primary">Normativa aaaaa</span>
                                                    </td>
                                                    <td>
                                                        <a href="">Archivo adjunto.pdf</a>
                                                    </td>
                                                    <td class="text-center">12-12-2015</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                                                    <td>Nombre Apellido Apellido</td>
                                                    <td>
                                                        <span class="label label-primary">Normativa aaaaa</span>
                                                        <span class="label label-primary">Normativa aaaaa</span>
                                                    </td>
                                                    <td>
                                                        <a href="">Archivo adjunto.pdf</a>
                                                    </td>
                                                    <td class="text-center">12-12-2015</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                                                    <td>Nombre Apellido Apellido</td>
                                                    <td>
                                                        <span class="label label-primary">Normativa aaaaa</span>
                                                        <span class="label label-primary">Normativa aaaaa</span>
                                                    </td>
                                                    <td>
                                                        <a href="">Archivo adjunto.pdf</a>
                                                    </td>
                                                    <td class="text-center">12-12-2015</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Blockquotes -->
                            </div>
                            <!-- END Block -->
                        </div>
                        <!-- END Tabla_Tema-->

                    </div>
                    <!-- END Documentos -->

                    <!-- Settings -->
                    <div class="tab-pane" id="btabs-alt-static-settings">
                        <h4 class="font-w300 push-15">Opciones</h4>
                        <div class="row">
                            <div class="col-xs-6 col-sm-2 col-lg-2 col-lg-offset-2">
                                <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                    <div class="block-content block-content-full">
                                        <i class="si si-list fa-4x text-primary"></i>
                                        <div class="font-w600 push-15-t">Ordenar</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-2 col-lg-2">
                                <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                    <div class="block-content block-content-full">
                                        <i class="si si-printer fa-4x text-primary"></i>
                                        <div class="font-w600 push-15-t">Imprimir lista</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-2 col-lg-2">
                                <a class="block block-link-hover3 text-center" href="m8_2_comsoc_form.php">
                                    <div class="block-content block-content-full">
                                        <i class="si si-doc fa-4x text-primary"></i>
                                        <div class="font-w600 push-15-t">Agregar COMSOC</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END Settings -->
                </div>
            </div>
        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->


    <!-- Footer -->
    <?php //include_once('footer.php'); ?>
    <?php $this->load->view('core/footer'); ?>
    <!-- END Footer -->
</div>
<!-- END Page Container -->


<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/core/jquery.slimscroll.min.js"></script>
<script src="assets/js/core/jquery.scrollLock.min.js"></script>
<script src="assets/js/core/jquery.appear.min.js"></script>
<script src="assets/js/core/jquery.countTo.min.js"></script>
<script src="assets/js/core/jquery.placeholder.min.js"></script>
<script src="assets/js/core/js.cookie.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>