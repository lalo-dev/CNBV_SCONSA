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
        <!-- <link rel="stylesheet" id="css-theme" href="<?=CSS ?>themes/flat.min.css"> -->
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
                                Equipo de trabajo <small>Planeación anual</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Planeación anual</li>
                                <li>Equipo de trabajo</li>
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
                                <a href="#search-projects">Revisiones</a>
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
                            <!-- Auditorias -->
                            <div class="tab-pane fade fade-up in active" id="search-projects">
                                <div class="border-b push-30">
                                    <h2 class="push-10"> <span id="label_equipo_trabajo">0</span> <span class="h5 font-w400 text-muted">Revisiones encontrados</span></h2>
                                </div>
                                <table class="table table-striped table-vcenter table-condensed" id="table_equipo_trabajo">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class="text-left">Tipo</th>
                                            <th class="text-left">Instancia</th>
                                            <th class="text-left">Justificación</th>
                                            <th class="text-center">Trimeste</th>
                                            <th class="text-center">Estatus</th>
                                            <th class="text-center">Auditores</th>
                                            <th class="text-center">Agregar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($getRevisiones as $key => $value): ?>
                                        <tr id="id_pres_<?=$value->id_rev ?>">
                                            <td><?=$key+1; ?></td>
                                            <td class="text-center"><?=$value->tipo_revision;?></td>
                                            <td class="text-center"> <?=$value->instancia;?> </td>
                                            <td><?=$value->justificacion;?></td>
                                            <td class="text-center"><span class="badge badge-primary"><?=$value->trimestre;?></span></td>
                                            <td class="text-center">
                                            <?php if($value->estatus_auditoria == 1){
                                                ?>
                                                    <span class="badge badge-warning">Programada</span>
                                                <?php
                                                } elseif($value->estatus_auditoria == 2) {
                                                ?>
                                                    <span class="badge badge-success">En proceso</span>
                                                <?php
                                                } else {
                                                ?>
                                                    <span class="badge badge-danger">Finalizada</span>
                                                <?php
                                                }
                                            ?>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-primary"><?=$value->cant_auditores;?></span>
                                            </td>
                                            <td class="text-center" style="min-width: 106px;">
                                                <a class="btn btn-primary" type="button" href="<?=URL ?>m1_6_0_form_equipo_trabajo/<?=$value->id_rev ?>"><i class="fa fa-plus"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                        <!--
                                        <tr>
                                            <td>1</td>
                                            <td>Auditoría</td>
                                            <td>OIC</td>
                                            <td>ÁREAS CRÍTICAS PROCLIVES A CORRUPCIÓN</td>
                                            <td class="text-center">
                                                <span class="badge badge-primary">0</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-success">En proceso</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-primary">5</span>
                                            </td>
                                            <td class="text-center"> 
                                                <a class="btn btn-primary" type="button" href="<?=URL ?>m1_6_0_form_equipo_trabajo/111"><i class="fa fa-plus"></i></a>
                                            </td>
                                        </tr>
                                    -->
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Auditorias -->
                            <div class="tab-pane" id="btabs-alt-static-settings">
                                <h4 class="font-w300 push-15">Opciones</h4>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-5">
                                        <a class="block block-link-hover3 text-center" href="<?=URL ?>down_list_m1_6_equipo_trabajo/<?=$pat_ano ?>">
                                            <div class="block-content block-content-full">
                                                <i class="si si-printer fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Imprimir lista</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
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

        <script type="text/javascript">
            $(function(){
                var trs = $("#table_equipo_trabajo tbody tr").length;
                $("#label_equipo_trabajo").text(trs);
            })
        </script>
        
    </body>
</html>