<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>CNBV</title>
        <!-- Iconos y CSS -->
        <?php $this->load->view('core/head_assets');?>
    </head>
    <body>
        <!-- Page Container -->
        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
            <!-- Side Overlay-->
            <?php $this->load->view('core/sideContent') ?>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <?php $this->load->view('core/menu'); ?>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <?php $this->load->view('core/headerNavigation');?>
                <?php $this->load->view('core/headerNavigation');?>
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
                <div class="content bg-image overflow-hidden" style="background-image: url('<?=IMG ?>various/logoGeneral.png');">
                    <div class="push-50-t push-15">
                        <h1 class="h2 text-white animated zoomIn">&nbsp;</h1>
                        <hr />
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Stats -->
                <div class="content bg-white border-b">
                    <div class="row items-push text-uppercase">
                        <div class="col-xs-12 col-md-4">
                            <div class="font-w700 text-gray-darker animated fadeIn">Auditorías</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Hoy | <?php echo date('d - m - y')?></small></div>
                            <a class="h2 font-w300 text-primary animated flipInX"><?php echo $totalAuditorias->total; ?></a>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="font-w700 text-gray-darker animated fadeIn">Seguimientos</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Hoy | <?php echo date('d - m - y')?></small></div>
                            <a class="h2 font-w300 text-primary animated flipInX"><?php echo $totalSeguimientos->total; ?></a>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="font-w700 text-gray-darker animated fadeIn">PRA</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Hoy | <?php echo date('d - m - y')?></small></div>
                            <a class="h2 font-w300 text-primary animated flipInX"> 0</a>
                        </div>
                    </div>
                </div>
                <!-- END Stats -->

                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- News -->
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title"> Noticias</h3>
                                </div>
                                <div class="block-content">
                                    <ul class="list list-timeline pull-t">
                                        <!-- Twitter Notification -->
                                        <li>
                                            <div class="list-timeline-time">12 Dic 2015</div>
                                            <i class="fa fa-newspaper-o list-timeline-icon bg-info"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">Noticia CNBV</p>
                                                <p class="font-s13">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <div class="row items-push js-gallery">
                                                    <div class="col-sm-6 col-lg-4">
                                                        <a class="img-link" href="assets/img/photos/photo2@2x.jpg">
                                                            <img class="img-responsive" src="assets/img/photos/photo2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-4">
                                                        <a class="img-link" href="assets/img/photos/photo8@2x.jpg">
                                                            <img class="img-responsive" src="assets/img/photos/photo8.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-4">
                                                        <a class="img-link" href="assets/img/photos/photo16@2x.jpg">
                                                            <img class="img-responsive" src="assets/img/photos/photo16.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <p class="font-s13"><a href="javascript:void(0)">Leer más >></a></p>
                                            </div>
                                        </li>
                                        <!-- END Twitter Notification -->

                                        <!-- Generic Notification -->
                                        <li>
                                            <div class="list-timeline-time">11 Dic 2015</div>
                                            <i class="fa fa-calendar-times-o list-timeline-icon bg-city"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">Fechas limite de entrega!</p>
                                                <p class="font-s13">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p class="font-s13"><a href="javascript:void(0)">Leer más >></a></p>
                                            </div>
                                        </li>
                                        <!-- END Generic Notification -->

                                        <!-- System Notification -->
                                        <li>
                                            <div class="list-timeline-time">10 Dic 2015</div>
                                            <i class="fa fa-check list-timeline-icon bg-success"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">Documentos entregados!</p>
                                                <p class="font-s13">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p class="font-s13"><a href="javascript:void(0)">Leer más >></a></p>
                                            </div>
                                        </li>
                                        <!-- END System Notification -->

                                        <!-- Facebook Notification -->
                                        <li>
                                            <div class="list-timeline-time">09 Dic 2015</div>
                                            <i class="fa fa-newspaper-o list-timeline-icon bg-default"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">Noticia CNBV</p>
                                                <p class="font-s13">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <div class="row items-push js-gallery">
                                                    <div class="col-sm-6 col-lg-4">
                                                        <a class="img-link" href="assets/img/photos/photo2@2x.jpg">
                                                            <img class="img-responsive" src="assets/img/photos/photo2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-4">
                                                        <a class="img-link" href="assets/img/photos/photo8@2x.jpg">
                                                            <img class="img-responsive" src="assets/img/photos/photo8.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-4">
                                                        <a class="img-link" href="assets/img/photos/photo16@2x.jpg">
                                                            <img class="img-responsive" src="assets/img/photos/photo16.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <p class="font-s13"><a href="javascript:void(0)">Leer más >></a></p>
                                            </div>
                                        </li>
                                        <!-- END Facebook Notification -->

                                        <!-- System Notification -->
                                        <li class="push-5">
                                            <div class="list-timeline-time">08 Dic 2015</div>
                                            <i class="fa fa-cog list-timeline-icon bg-primary-dark"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">Actualización del sistema</p>
                                                <p class="font-s13">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p class="font-s13"><a href="javascript:void(0)">Leer más >></a></p>
                                            </div>
                                        </li>
                                        <!-- END System Notification -->
                                    </ul>
                                </div>
                            </div>
                            <!-- END News -->
                        </div>
                        <div class="col-lg-4">
                            <!-- Content Grid -->
                            <div class="content-grid">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <!-- Mini Stats -->
                                        <a class="block block-link-hover3" href="javascript:void(0)">
                                            <table class="block-table text-center">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50%;">
                                                            <div class="push-30 push-30-t">
                                                                <i class="si si-layers fa-3x text-primary"></i>
                                                            </div>
                                                        </td>
                                                        <td class="bg-gray-lighter" style="width: 50%;">
                                                            
                                                            <div class="h5 text-muted text-uppercase push-5-t">PAT</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </a>
                                        <a class="block block-link-hover3" href="javascript:void(0)">
                                            <table class="block-table text-center">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50%;">
                                                            <div class="push-30 push-30-t">
                                                                <i class="si si-reload fa-3x text-smooth"></i>
                                                            </div>
                                                        </td>
                                                        <td class="bg-gray-lighter" style="width: 50%;">
                                                            
                                                            <div class="h5 text-muted text-uppercase push-5-t">Seguimiento</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </a>
                                        <a class="block block-link-hover3" href="javascript:void(0)">
                                            <table class="block-table text-center">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50%;">
                                                            <div class="push-30 push-30-t">
                                                                <i class="si si-bar-chart fa-3x text-city"></i>
                                                            </div>
                                                        </td>
                                                        <td class="bg-gray-lighter" style="width: 50%;">
                                                            
                                                            <div class="h5 text-muted text-uppercase push-5-t">Reportes</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </a>
                                        <!--
                                        <a class="block block-link-hover3" href="javascript:void(0)">
                                            <table class="block-table text-center">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50%;">
                                                            <div class="push-30 push-30-t">
                                                                <i class="si si-calendar fa-3x text-primary-dark"></i>
                                                            </div>
                                                        </td>
                                                        <td class="bg-gray-lighter" style="width: 50%;">
                                                            
                                                            <div class="h5 text-muted text-uppercase push-5-t"> Calendario</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </a>
                                        -->
                                        <a class="block block-link-hover3" href="javascript:void(0)">
                                            <table class="block-table text-center">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50%;">
                                                            <div class="push-30 push-30-t">
                                                                <i class="si si-book-open fa-3x text-success"></i>
                                                            </div>
                                                        </td>
                                                        <td class="bg-gray-lighter" style="width: 50%;">
                                                            
                                                            <div class="h5 text-muted text-uppercase push-5-t"> Normativa</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </a>
                                        <!-- END Mini Stats -->
                                    </div>
                                </div>
                            </div>
                            <!-- END Content Grid -->
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <?php $this->load->view('core/footer');?>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <?php $this->load->view('core/core_js'); ?>

        <!-- Page Plugins -->
        <script src="<?=JS ?>plugins/slick/slick.min.js"></script>
        <script src="<?=JS ?>plugins/chartjs/Chart.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?=JS ?>pages/base_pages_dashboard.js"></script>
        <script>
            $(function () {
                // Init page helpers (Slick Slider plugin)
                App.initHelpers('slick');
            });
        </script>
    </body>
</html>