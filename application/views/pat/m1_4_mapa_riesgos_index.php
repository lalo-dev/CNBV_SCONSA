<?php
    $pat_ano = $this->session->userdata("pat_ano");
    //$totalSeguimiento->total;
    //var_dump($getPats);
    //die();
?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>CNBV</title>
        
        <!-- Iconos y CSS -->
        <?php $this->load->view('core/head_assets');?>

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
    </head>
    <body>
        <!-- Page Container -->
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
                                Mapa de riesgos <small>Planeación anual</small>
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
                                <a href="#search-projects">Mapa de riesgos</a>
                            </li>
                            <!--li class="pull-right">
                                <a href="#btabs-alt-static-settings" data-toggle="tooltip" title="Opciones"><i class="si si-settings"></i></a>
                            </li>
                            <li class="pull-right">
                                <ul class="block-options push-10-t push-10-r">
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                    </li>
                                </ul>
                            </li-->
                        </ul>
                        
                        <div class="block-content tab-content bg-white">
                            <!-- Projects -->
                            <div class="tab-pane fade fade-up in active" id="search-projects">
                                <div class="border-b push-30">
                                    <h2 class="push-10"> <span id="label_mapa_riesgos">0</span> <span class="h5 font-w400 text-muted">Mapa de riesgos encontrados</span></h2>
                                </div>
                                <table class="table table-striped table-vcenter table-condensed" id="table_mapa_riesgos">
                                    <thead>
                                        <tr>
                                            <th class="text-left"><i class="fa fa-folder-open-o text-gray"></i> Mapa de riesgos</th>
                                            <th class="text-center" style=""><i class="fa fa-file-o text-gray"></i> Riesgos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $riesgosxpat_total = 0; ?>
                                        <?php foreach ($getPats as $key => $value): ?>
                                            <tr>
                                                <td>
                                                    <h3 class="h5 font-w600 push-10"> 
                                                        <a class="link-effect" href="<?=URL .'m1_4_mapa_riesgos/'. $value->pat_ano ?>"> <?= $value->pat_ano_des  ?> </a>
                                                    </h3>
                                                    <!--div class="push-10">
                                                        <span class="label label-warning"><i class="fa fa-refresh fa-spin"></i> En proceso</span>
                                                    </div-->
                                                </td>
                                                <td class="h3 text-center">
                                                    <?= $value->riesgosxpat; ?>
                                                </td>
                                            </tr>
                                            <?php $riesgosxpat_total = $value->riesgosxpat_total ?>
                                        <?php endforeach ?>
                                        <tr>
                                            <td lass="h3 text-center"><strong>TOTAL DE RIESGOS</strong> </td>
                                            <td  class="h3 text-center"> <?= $riesgosxpat_total;  ?> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <script type="text/javascript">
                            $(function(){
                                var trs = $("#table_mapa_riesgos tbody tr").length;
                                $("#label_mapa_riesgos").text(trs);
                            })
                            </script>
                            <!-- END Projects -->
                            <div class="tab-pane" id="btabs-alt-static-settings">
                                <h4 class="font-w300 push-15">Opciones</h4>
                                <div class="row">
                                    <!--div class="col-xs-6 col-sm-4 col-lg-2 col-lg-offset-4">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="si si-printer fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Imprimir lista</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-lg-2">
                                        <a class="block block-link-hover3 text-center" href="m1_0_0_form_nuevo_pat">
                                            <div class="block-content block-content-full">
                                                <i class="si si-folder fa-4x text-success"></i>
                                                <div class="font-w600 push-15-t">Nuevo PAT</div>
                                            </div>
                                        </a>
                                    </div-->
                                </div>
                            </div>
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


        
    </body>
</html>