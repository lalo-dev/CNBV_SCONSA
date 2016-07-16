<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>CNBV</title>
        
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?=IMG ?>favicons/favicon.png">

        <link rel="icon" type="image/png" href="<?=IMG ?>favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="<?=IMG ?>favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?=IMG ?>favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?=IMG ?>favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="<?=IMG ?>favicons/favicon-192x192.png" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="<?=IMG ?>favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?=IMG ?>favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?=IMG ?>favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?=IMG ?>favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?=IMG ?>favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?=IMG ?>favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?=IMG ?>favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?=IMG ?>favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?=IMG ?>favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="<?=CSS ?>bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="<?=CSS ?>oneui.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="<?=JS ?>core/jquery.min.js"></script>
        <script src="<?=JS ?>core/bootstrap.min.js"></script>
        <script src="<?=JS ?>core/jquery.slimscroll.min.js"></script>
        <script src="<?=JS ?>core/jquery.scrollLock.min.js"></script>
        <script src="<?=JS ?>core/jquery.appear.min.js"></script>
        <script src="<?=JS ?>core/jquery.countTo.min.js"></script>
        <script src="<?=JS ?>core/jquery.placeholder.min.js"></script>
        <script src="<?=JS ?>core/js.cookie.min.js"></script>
        <script src="<?=JS ?>app.js"></script>
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
                                Planeación ejecutiva <small>Planeación anual</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Planeación anual</li>

                                <!--<li><a class="link-effect" href="">Planeación ejecutiva</a></li>-->

                                <li>Planeación ejecutiva</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->

                <!-- Cod_1 -->
                <!-- Page Content -->
                <div class="content">
                    <div class="block">
                        <ul class="nav nav-tabs" data-toggle="tabs">
                            <li class="active">
                                <a href="#search-documentos">Lista de documentos</a>
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
                                <div class="border-b push-30">
                                    <h2 class="push-10">5 <span class="h5 font-w400 text-muted">Documentos encontrados</span></h2>
                                </div>
                                <table class="table table-borderless table-vcenter table-header-bg table-condensed">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 10%;">#</th>
                                        <th style="width: 35%;">Nombre</th>
                                        <th style="width: 40%;">Descripción</th>
                                        <th class="text-center" style="width: 15%;">Descargar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($gets_pres_ejecutiva as $key => $value): ?>
                                    <tr>
                                        <td class="text-center"> <?= $key+1 ?> </td>
                                        <td><?=$value->pre_eje_name ?></td>
                                        <td><?=$value->pre_eje_des ?></td>
                                        <?php
                                        /*
                                            $type_id = trim($value->pre_eje_file_type) ; 
                                            $type= "word";
                                            foreach ($file_type as $key => $value) {
                                                if ($value->id ==$type_id ) {
                                                    $type = strtolower( trim($value->des) );
                                                }
                                            }*/
                                            $type = strtolower( trim($value->type_des) );
                                            $btn_color = "primary";
                                            if ($type == "imagen") { 
                                                $type = "image";
                                                $btn_color = "info";
                                            }
                                            if ($type == "excel") {
                                                $btn_color = "success";
                                            }
                                            if ($type =="pdf") {
                                                $btn_color = "danger";
                                            }

                                            if ($type == "power point") { 
                                                $type = "powerpoint"; 
                                                $btn_color ="warning";
                                            }
                                        ?> 
                                        <td class="text-center">
                                            <div class="btn-group">   
                                                <a class="btn btn-lg btn-<?=$btn_color?>" type="button" href="<?=URL ?>get_down_file_planeacion_ejecutiva/<?=$value->id_pre_eje; ?>" data-toggle="tooltip" title="Descargar <?=$type?>">
                                                    <i class="fa fa-file-<?=$type?>-o"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>   
                                    <!--tr>
                                        <td class="text-center">2</td>
                                        <td>Nombre del documento</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-lg btn-success" type="button" data-toggle="tooltip" title="Descargar Excel">
                                                <i class="fa fa-file-excel-o"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>Nombre del documento</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-lg btn-danger" type="button" data-toggle="tooltip" title="Descargar PDF">
                                                <i class="fa fa-file-pdf-o"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>Nombre del documento</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-lg btn-warning" type="button" data-toggle="tooltip" title="Descargar PowerPoint">
                                                <i class="fa fa-file-powerpoint-o"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td>Nombre del documento</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-lg btn-info" type="button" data-toggle="tooltip" title="Descargar Imagen">
                                                <i class="fa fa-file-image-o"></i></button>
                                            </div>
                                        </td>
                                    </tr-->
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Documentos -->

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
                                        <a class="block block-link-hover3 text-center" href="<?=URL ?>m1_3_presentacion_ejecutiva_form">
                                            <div class="block-content block-content-full">
                                                <i class="si si-doc fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Agregar Documento</div>
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

    </body>
</html>