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
        <?php //include_once('headerNavigation.php'); ?>
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
                        Mapa de riesgos <small>Planeacón anual</small>
                    </h1>
                </div>
                <div class="col-sm-5 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li>Planeación anual</li>
                        <li>Mapa de riesgos</li>
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
                        <a href="#search-mapa-riesgos">Mapa de riesgos</a>
                    </li>
                    <li>
                        <a href="#search-mapa">Mapa</a>
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
                    <!-- Mapa de risegos -->
                    <div class="tab-pane fade fade-up in active" id="search-mapa-riesgos">

                        <!-- Lista -->
                        <div class="border-b push-30">
                            <h2 class="push-10"> <span id="label_map_riesgo">0</span> <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped table-vcenter table-condensed" id="table_map_riesgo">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-left">Descripción</th>
                                        <th class="text-center" data-toggle="tooltip" data-placement="top" title="IMPACTO 0.6">Imp(x)</th>
                                        <th class="text-center" data-toggle="tooltip" data-placement="top" title="PROBABILIDAD 0.4">Pro(y)</th>
                                        <th class="text-center">Cuadrante</th>
                                        <th class="text-center" data-toggle="tooltip" data-placement="top" title="RIESGO PONDERADO">RP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($get_riesgos as $key => $valuea): ?>
                                    <tr>
                                        <td><?= $key+1; ?></td>
                                        <td class="text-left"><?= $valuea->descripcion; ?></td>
                                        <td class="text-center"><?= $valuea->impacto; ?></td>
                                        <td class="text-center"><?= $valuea->probabilidad; ?></td>
                                        <td class="text-center"><?= $valuea->cuadrante; ?></td>
                                        <td class="text-left"><?= $valuea->riesgo_ponderado; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <!--tr>
                                        <td>1</td>
                                        <td class="text-left">Procesos susantivos aplicados ineficiente o inoportunamente</td>
                                        <td class="text-center">9</td>
                                        <td class="text-center">8</td>
                                        <td class="text-center">I</td>
                                        <td class="text-left">8.6</td>
                                    </tr-->
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- End Lista -->
                    </div>
                    <!-- End Mapa de riesgos -->
                    <!-- Mapa -->
                    <div class="tab-pane fade fade-up" id="search-mapa">
                        <!-- Lista -->
                        <div class="table-responsive">
                            <div class="border-b push-30">
                                <h2 class="push-10">2 <span class="h5 font-w400 text-muted">Resutados en el mapa...</span></h2>
                            </div>
                            Aquí el mapa ! ! !
                        </div>
                    </div>
                    <!-- END Mapa -->

                    <!-- Settings -->
                    <div class="tab-pane" id="btabs-alt-static-settings">
                        <h4 class="font-w300 push-15">Opciones</h4>
                        <div class="row">
                            <div class="col-md-2 col-lg-offset-4">
                                <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                    <div class="block-content block-content-full">
                                        <i class="si si-printer fa-4x text-primary"></i>
                                        <div class="font-w600 push-15-t">Imprimir lista</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a class="block block-link-hover3 text-center" href="m1_4_mapa_riesgos_form">
                                    <div class="block-content block-content-full">
                                        <i class="si si-doc fa-4x text-primary"></i>
                                        <div class="font-w600 push-15-t">Agregar riesgo</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END Settings -->
                </div>
            </div>
            <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <?php $this->load->view('core/footer'); ?>
    <!--footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">

        <div class="pull-left">
            <a class="font-w600" href="" target="_blank">CNBV</a> &copy; <span class="js-year-copy"></span>
        </div>
    </footer-->
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
<script type="text/javascript">
    $(function(){
        

        var trs =$("#table_map_riesgo tbody tr").length;
        $("#label_map_riesgo").text(trs);
    })

</script>
</body>
</html>