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


        <script src="<?=JS ?>core/jquery.min.js"></script>
        <script src="<?=JS ?>core/bootstrap.min.js"></script>
        <script src="<?=JS ?>core/jquery.slimscroll.min.js"></script>
        <script src="<?=JS ?>core/jquery.scrollLock.min.js"></script>
        <script src="<?=JS ?>core/jquery.appear.min.js"></script>
        <script src="<?=JS ?>core/jquery.countTo.min.js"></script>
        <script src="<?=JS ?>core/jquery.placeholder.min.js"></script>
        <script src="<?=JS ?>core/js.cookie.min.js"></script>
        <script src="<?=JS ?>app.js"></script>

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <div class="hidden" id="sup_bandera_url"><?=URL;?></div>
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
                                Revisiones <?=$pat_ano; ?> <small>PAT</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Planeación anual</li> 
                                <li><a class="link-effect" href="<?=URL ?>m1_0_pat">PAT</a></li>
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
                                <a href="#search-info">Info</a>
                            </li>
                            <li>
                                <a href="#search-projects">Revisiones</a>
                            </li>
                            <li>
                                <a href="#search-validaciones">Validaciones</a>
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
                            <!-- General -->
                            <div class="tab-pane fade fade-up in active" id="search-info">
                                <div class="border-b push-30">
                                    <h2 class="push-10">Estatus <span class="h5 font-w400 text-muted">PAT</span></h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="fa fa-battery-0 fa-4x text-success"></i>
                                                <div class="font-w600 push-15-t">Creado</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-2">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="fa fa-battery-1 fa-4x text-muted"></i>
                                                <div class="font-w600 push-15-t">En revisión</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-2">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="fa fa-battery-2 fa-4x text-muted"></i>
                                                <div class="font-w600 push-15-t">Finalizado</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-2">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="fa fa-battery-4 fa-4x text-muted"></i>
                                                <div class="font-w600 push-15-t">Emitido</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="border-b push-30">
                                    <h2 class="push-10">Opciones <span class="h5 font-w400 text-muted">Documento</span></h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <a class="block block-link-hover2" href="javascript:void(0)" disabled data-toggle="tooltip" data-placement="top" title="Vista previa">
                                            <div class="block-content block-content-full bg-flat clearfix">
                                                <i class="si si-eye fa-2x text-white pull-right"></i>
                                                <span class="h4 font-w700 text-white">PAT</span>
                                                <span class="h4 text-white-op">Completo</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-2">
                                        <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx" disabled data-toggle="tooltip" data-placement="top" title="Descargar">
                                            <div class="block-content block-content-full bg-primary clearfix">
                                                <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                <span class="h4 font-w700 text-white">PAT</span>
                                                <span class="h4 text-white-op">Completo</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-2">
                                        <a class="block block-link-hover2" href="javascript:void(0)" disabled data-toggle="tooltip" data-placement="top" title="Vista previa">
                                            <div class="block-content block-content-full bg-flat clearfix">
                                                <i class="si si-eye fa-2x text-white pull-right"></i>
                                                <span class="h4 font-w700 text-white">PAT</span>
                                                <span class="h4 text-white-op">Detalle</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-2">
                                        <a class="block block-link-hover2" href="./archivos/PAT_DETALLADO.xlsx" disabled data-toggle="tooltip" data-placement="top" title="Descargar">
                                            <div class="block-content block-content-full bg-primary clearfix">
                                                <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                <span class="h4 font-w700 text-white">PAT</span>
                                                <span class="h4 text-white-op">Detalle</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-2">
                                        <a class="block block-link-hover2" href="javascript:void(0)" disabled data-toggle="tooltip" data-placement="top" title="Vista previa">
                                            <div class="block-content block-content-full bg-flat clearfix">
                                                <i class="si si-eye fa-2x text-white pull-right"></i>
                                                <span class="h4 font-w700 text-white">PAT</span>
                                                <span class="h4 text-white-op">Resumen</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-2">
                                        <a class="block block-link-hover2" href="./archivos/PAT_DETALLADO.xlsx" disabled data-toggle="tooltip" data-placement="top" title="Descargar">
                                            <div class="block-content block-content-full bg-primary clearfix">
                                                <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                <span class="h4 font-w700 text-white">PAT</span>
                                                <span class="h4 text-white-op">Resumen</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End General -->
                            <!-- Revisiones -->
                            <div class="tab-pane fade fade-up" id="search-projects">
                                <div class="border-b push-30">

                                    <h2 class="push-10"> <span id="label_find_total_rev">0</span> <span class="h5 font-w400 text-muted">Revisiones encontrados</span></h2>
                                </div>
                                
                                <table class="table table-striped table-vcenter table-condensed" id="table_revisiones">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th></th>
                                            <th class="text-center">P/A/C</th>
                                            <th class="text-center">Clave</th>
                                            <th class="text-left">Área a revisar</th>
                                            <th class="text-center">Inicio</th>
                                            <th class="text-center">Fin</th>
                                            <th class="text-center">Validar</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($getRevisiones as $key => $value): ?>
                                            <tr id="id_pres_<?=$value->id_rev ?>">
                                                <td><?=$key+1; ?></td> 
                                                <td class="text-center"><?=$value->prog_adic;?></td>
                                                <td class="text-center"> <?=$value->clave;?> </td>
                                                <td><?=$value->area_revizar;?></td> 
                                                <td class="text-center"><?=$value->periodo_ini;?></td>
                                                <td class="text-center"><?=$value->periodo_fin;?></td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Revisar/Validar">
                                                            <i class="fa fa-send-o"></i>
                                                        </a>
                                                        <a class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal_comment_rev_<?=$value->id_rev ?>">
                                                            <i class="fa fa-commenting-o"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="text-center" style="min-width: 106px;">
                                                    <div class="btn-group">
                                                        <a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Archivo digitalizado" href="./archivos/curso_taller_SD.tiff">
                                                            <i class="fa fa-cloud-download"></i>
                                                        </a>
                                                        <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                            <i class="fa fa-eye"></i>
                                                        </button>
                                                        <a class="btn btn-primary btn-xs" href="<?=URL;?>m1_0_0_form_pat_editar_revision/<?=$pat_ano . '/' .$value->id_rev ?>" type="button" data-toggle="tooltip" data-placement="top" title="Editar">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" onclick="delPrespar(<?=$value->id_rev;?>)" data-placement="top" title="Eliminar">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                        <!--tr>
                                            <td>1</td>
                                            <td class="text-center">P</td>
                                            <td class="text-center">700</td>
                                            <td>DG de Visitas de Investigación (Proceso de Soporte Legal)</td>
                                            <td class="text-center">01/01/2013</td>
                                            <td class="text-center">31/12/2013</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Revisar/Validar">
                                                        <i class="fa fa-send-o"></i>
                                                    </a>
                                                    <a class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-small2">
                                                        <i class="fa fa-commenting-o"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Archivo digitalizado" href="./archivos/curso_taller_SD.tiff">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </a>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-primary btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Editar">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="text-center">P</td>
                                            <td class="text-center">700</td>
                                            <td>DG de Visitas de Investigación (Proceso de Soporte Legal)</td>
                                            <td>01/01/2013</td>
                                            <td>31/12/2013</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Revisar/Validar">
                                                        <i class="fa fa-send-o"></i>
                                                    </a>
                                                    <a class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Validar" href="m1_0_0_form_pat_validar.php" >
                                                        <i class="fa fa-commenting-o"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Archivo digitalizado" href="./archivos/curso_taller SD.pdf" target="_blank">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </a>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-primary btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Editar">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="text-center">P</td>
                                            <td class="text-center">700</td>
                                            <td>DG de Visitas de Investigación (Proceso de Soporte Legal)</td>
                                            <td>01/01/2013</td>
                                            <td>31/12/2013</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-warning btn-xs" disabled data-toggle="tooltip" data-placement="top" title="Revisar/Validar">
                                                        <i class="fa fa-send-o"></i>
                                                    </a>
                                                    <a class="btn btn-warning btn-xs" disabled data-toggle="tooltip" data-placement="top" title="Validar" href="m1_0_0_form_pat_validar.php" >
                                                        <i class="fa fa-commenting-o"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs" disabled type="button" data-toggle="tooltip" data-placement="top" title="Archivo digitalizado">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </button>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-primary btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Editar">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="text-center">P</td>
                                            <td class="text-center">700</td>
                                            <td>DG de Visitas de Investigación (Proceso de Soporte Legal)</td>
                                            <td>01/01/2013</td>
                                            <td>31/12/2013</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-warning btn-xs" disabled data-toggle="tooltip" data-placement="top" title="Enviar a validación">
                                                        <i class="fa fa-send-o"></i>
                                                    </a>
                                                    <a class="btn btn-warning btn-xs" disabled data-toggle="tooltip" data-placement="top" title="Validar" href="m1_0_0_form_pat_validar.php" >
                                                        <i class="fa fa-commenting-o"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs" disabled type="button" data-toggle="tooltip" data-placement="top" title="Archivo digitalizado">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </button>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-primary btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Editar">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="text-center">P</td>
                                            <td class="text-center">700</td>
                                            <td>DG de Visitas de Investigación (Proceso de Soporte Legal)</td>
                                            <td>01/01/2013</td>
                                            <td>31/12/2013</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-warning btn-xs" disabled data-toggle="tooltip" data-placement="top" title="Enviar a validación">
                                                        <i class="fa fa-send-o"></i>
                                                    </a>
                                                    <a class="btn btn-warning btn-xs" disabled data-toggle="tooltip" data-placement="top" title="Validar" href="m1_0_0_form_pat_validar.php" >
                                                        <i class="fa fa-commenting-o"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs" disabled type="button" data-toggle="tooltip" data-placement="top" title="Archivo digitalizado">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </button>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-primary btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Editar">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr-->
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Revisiones -->
                            <!-- Validaciones -->
                            <div class="tab-pane fade fade-up" id="search-validaciones">
                                <div class="border-b push-30">
                                    <h2 class="push-10"> 5 <span class="h5 font-w400 text-muted">Validaciones encontrados</span></h2>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-condensed" id="">
                                        <thead>
                                            <tr>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="No. Revisión">#</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Tipo de revisión">Tipo</th>
                                                <th class="text-left" data-toggle="tooltip" data-placement="top" title="Programada / Adicional">P/A/C</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Clave Programa">Clave</th>
                                                <th class="text-center">Instancia</th>
                                                <th class="text-left">Justificación</th>
                                                <th class="text-left" data-toggle="tooltip" data-placement="top" title="Área a Revisar">Área</th>
                                                <th class="text-left">Descripción</th>
                                                <th class="text-left">Objetivo</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Semana Programada de Inicio">S.P.I.</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Semanan Programada de Término">S.P.T.</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Total Semanas Revisión">T.S.R.</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Total Semanas Hombre">T.S.H.</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Periodo de Revisión Inicio">P.R.I.</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Periodo de Revisión Fin">P.R.F.</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Auditoria Procedente">A.P.</th>
                                                <th class="text-center">Muestra</th>
                                                <th class="text-center">Universo</th>
                                                <th class="text-left">Riesgos</th>
                                                <th class="text-left">Cuadrante</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Revisado">R</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Validado">V</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Comentarios">C</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($getRevisiones as $key => $value): ?>
                                                <tr id="id_val_<?=$value->id_rev;?>" class="info">
                                                    <td class="text-center"><?= $key +1;?></td> 
                                                    <td class="text-center"><?=$value->tipo_revision;?></td>
                                                    <td class="text-center"><?=$value->prog_adic;?></td>
                                                    <td class="text-center"><?=$value->clave;?> </td>
                                                    <td class="text-center"><?=$value->instancia;?> </td>
                                                    <td class="text-left"><?=$value->justificacion;?></td>
                                                    <td class="text-left"><?=$value->area_revizar;?></td>
                                                    <td class="text-left">
                                                        <?=$value->descripcion;?>
                                                    </td>
                                                    <td class="text-left">
                                                        <?=$value->objetivo;?>
                                                    </td>
                                                    <td><?=$value->semana_ini;?></td>
                                                    
                                                    <td><?=$value->semana_fin;?></td>
                                                    <td><?=$value->ts_revision;?></td>
                                                    <td>0</td>
                                                    <td><?=$value->periodo_ini;?></td>
                                                    <td><?=$value->periodo_fin;?></td>
                                                    <td><?=$value->aud_precedente;?></td>
                                                    <td><?=$value->muestra;?></td>
                                                    <td><?=$value->universo;?></td>
                                                    <td>
                                                        <p>1.2 Supervisores beneficiados a traves de acuerdos con entidades supervisadas.</p>
                                                        <p>1.3 Autorizaciones otorgadas en forma deficiente.</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <p>1</p>
                                                        <p>1</p>
                                                    </td>
                                                    <td class="text-center">
                                                        <label class="css-input switch switch-primary">
                                                            <?php if ($value->estatus_revisado == 0): ?>
                                                                <input type="checkbox"><span></span>
                                                            <?php else: ?>
                                                                <input type="checkbox" checked><span></span>
                                                            <?php endif ?> 
                                                        </label>
                                                    </td>
                                                    <td class="text-center">
                                                        <label class="css-input switch switch-primary">
                                                            <?php if ($value->estatus_validado == 0): ?>
                                                                <input type="checkbox"><span></span>
                                                            <?php else: ?>
                                                                <input type="checkbox" checked><span></span>
                                                            <?php endif ?>                                                            
                                                        </label>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_comment_rev_<?=$value->id_rev ?>">
                                                            <i class="fa fa-commenting-o"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                            <!--tr class="info">
                                                <td class="text-center">1</td>
                                                <td class="text-center">Auditoria</td>
                                                <td class="text-center">P</td>
                                                <td class="text-center">700</td>
                                                <td class="text-center">OIC</td>
                                                <td class="text-left">ÁREAS CRÍTICAS PROCLIVES A CORRUPCIÓN</td>
                                                <td class="text-left">DGs de Supervisión de la CNBV (Proceso de Supervisión, Autorizaciones y Sanciones)</td>
                                                <td class="text-left">
                                                    Evaluar que el control interno establecido en las áreas sustantivas de la CNBV respecto a los procesos de la supervisión, autorizaciones y sanciones de las Vicepresidencias de Supervisión de Grupos e Intermediarios Financieros A y B, Banca de Desarrollo y Finanzas Populares y Supervisión Bursátil; asi como la alineación con la Dirección General de Métodos y Procesos de Supervisión ; la coordinación con las Direcciones Generales de Autorizaciones al Sistema Financiero y de Autorizaciones Especializadas y la Dirección General de Delitos y Sanciones; además de la interacción con las áreas soporte de las Vicepresidencias Técnica y de Supervisión de Procesos Preventivos, se haya efectuado de conformidad con el marco legal aplicable y que los resultados hayan sido debidamente informados.
                                                </td>
                                                <td class="text-left">
                                                    Verificar el cumplimiento de los procesos de supervisión, autorizaciones y sanciones de las Vicepresidencias de Supervisión de Grupos e Intermediarios Financieros A y B, Banca de Desarrollo y Finanzas Populares y Supervisión Bursátil; asi como la alineación con la Dirección General de Métodos y Procesos de Supervisión; la coordinación con las Direcciones Generales de Autorizaciones al Sistema Financiero y de Autorizaciones Especializadas y la Dirección General de Delitos y Sanciones; además de la interacción con las áreas soporte de las Vicepresidencias Técnica y de Supervisión de Procesos Preventivos, conforme al marco legal aplicable y que los resultados hayan sido informados.
                                                </td>
                                                <td>1</td>
                                                <td>26</td>
                                                <td>26</td>
                                                <td>193</td>
                                                <td>01/01/2013</td>
                                                <td>31/12/2013</td>
                                                <td>0/0</td>
                                                <td>Se determinará en la auditoría.</td>
                                                <td>100%</td>
                                                <td>
                                                    <p>1.2 Supervisores beneficiados a traves de acuerdos con entidades supervisadas.</p>
                                                    <p>1.3 Autorizaciones otorgadas en forma deficiente.</p>
                                                </td>
                                                <td class="text-center">
                                                    <p>1</p>
                                                    <p>1</p>
                                                </td>
                                                <td class="text-center">
                                                    <label class="css-input switch switch-primary">
                                                        <input type="checkbox"><span></span>
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <label class="css-input switch switch-primary">
                                                        <input type="checkbox" checked><span></span>
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-small">
                                                        <i class="fa fa-commenting-o"></i>
                                                    </a>
                                                </td>
                                            </tr-->
                                            <!--tr>
                                                <td class="text-center">2</td>
                                                <td class="text-center">Auditoria</td>
                                                <td class="text-center">P</td>
                                                <td class="text-center">700</td>
                                                <td class="text-center">OIC</td>
                                                <td class="text-left">ÁREAS CRÍTICAS PROCLIVES A CORRUPCIÓN</td>
                                                <td class="text-left">DGs de Supervisión de la CNBV (Proceso de Supervisión, Autorizaciones y Sanciones)</td>
                                                <td class="text-left">
                                                    Evaluar que el control interno establecido en las áreas sustantivas de la CNBV respecto a los procesos de la supervisión, autorizaciones y sanciones de las Vicepresidencias de Supervisión de Grupos e Intermediarios Financieros A y B, Banca de Desarrollo y Finanzas Populares y Supervisión Bursátil; asi como la alineación con la Dirección General de Métodos y Procesos de Supervisión ; la coordinación con las Direcciones Generales de Autorizaciones al Sistema Financiero y de Autorizaciones Especializadas y la Dirección General de Delitos y Sanciones; además de la interacción con las áreas soporte de las Vicepresidencias Técnica y de Supervisión de Procesos Preventivos, se haya efectuado de conformidad con el marco legal aplicable y que los resultados hayan sido debidamente informados.
                                                </td>
                                                <td class="text-left">
                                                    Verificar el cumplimiento de los procesos de supervisión, autorizaciones y sanciones de las Vicepresidencias de Supervisión de Grupos e Intermediarios Financieros A y B, Banca de Desarrollo y Finanzas Populares y Supervisión Bursátil; asi como la alineación con la Dirección General de Métodos y Procesos de Supervisión; la coordinación con las Direcciones Generales de Autorizaciones al Sistema Financiero y de Autorizaciones Especializadas y la Dirección General de Delitos y Sanciones; además de la interacción con las áreas soporte de las Vicepresidencias Técnica y de Supervisión de Procesos Preventivos, conforme al marco legal aplicable y que los resultados hayan sido informados.
                                                </td>
                                                <td>1</td>
                                                <td>26</td>
                                                <td>26</td>
                                                <td>193</td>
                                                <td>01/01/2013</td>
                                                <td>31/12/2013</td>
                                                <td>0/0</td>
                                                <td>Se determinará en la auditoría.</td>
                                                <td>100%</td>
                                                <td>
                                                    <p>1.2 Supervisores beneficiados a traves de acuerdos con entidades supervisadas.</p>
                                                    <p>1.3 Autorizaciones otorgadas en forma deficiente.</p>
                                                </td>
                                                <td class="text-center">
                                                    <p>1</p>
                                                    <p>1</p>
                                                </td>
                                                <td class="text-center">
                                                    <label class="css-input switch switch-primary">
                                                        <input type="checkbox"><span></span>
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <label class="css-input switch switch-primary">
                                                        <input type="checkbox" checked><span></span>
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-primary btn-sm">
                                                        <i class="fa fa-commenting-o"></i>
                                                    </a>
                                                </td>
                                            </tr-->
                                        </tbody>
                                    </table>                                    
                                </div>

                            </div>
                            <!-- END Revisiones -->
                            <!-- Settings -->
                            <div class="tab-pane" id="btabs-alt-static-settings">
                                <h4 class="font-w300 push-15">Opciones</h4>
                                <div class="row">
                                    <!--div class="col-xs-6 col-sm-2 col-lg-2 col-lg-offset-3">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="si si-list fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Ordenar</div>
                                            </div>
                                        </a>
                                    </div-->
                                    <div class="col-xs-6 col-sm-2 col-lg-2 col-lg-offset-4">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="si si-printer fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Imprimir lista</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-2 col-lg-2">
                                        <a class="block block-link-hover3 text-center" href="<?=URL ?>m1_0_0_form_pat_agregar_revision/<?=$pat_ano ?>">  
                                            <div class="block-content block-content-full">
                                                <i class="si si-doc fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Agregar Revisión</div>
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

        <!-- Small Modal -->
        <div class="modal" id="modal-small" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Comentarios</h3>
                        </div>
                        <div class="block-content">
                            <!-- Single Chat (Chat Window 3) -->
                            <div class="block">
                                <div class="block">
                                    <div class="bg-image" style="background-image: url('<?=IMG ?>photos/photo25.jpg');">
                                        <div class="block-content block-content-full bg-black-op text-center">
                                            <div class="push-10"><img class="img-avatar img-avatar-thumb" src="<?=IMG ?>avatars/avatar9.jpg" alt="">
                                            </div>
                                            <h3 class="h4"><span class="text-white">Coordinador</span></h3>
                                        </div>
                                    </div>
                                    <div class="js-chat-talk overflow-y-auto block-content block-content-full" data-chat-id="3">
                                        <!-- Messages -->
                                        <div class="font-s12 text-muted text-center push-20-t push-15"><em>Ayer</em></div>
                                        <div class="block block-rounded block-transparent push-15 push-50-l">
                                            <div class="block-content block-content-full block-content-mini bg-gray-lighter">Revisa, la propuesta, sls</div>
                                        </div>
                                        <div class="font-s12 text-muted text-center push-20-t push-10"><em>Hoy</em></div>
                                        <div class="block block-rounded block-transparent push-15 push-50-r">
                                            <div class="block-content block-content-full block-content-mini bg-gray-light">Todo OK</div>
                                        </div>
                                        <!-- END Messages -->
                                    </div>
                                    <div class="js-chat-form block-content block-content-full block-content-mini">
                                        <form action="m1_0_0_form_pat_completo.php" method="post">
                                            <input class="js-chat-input form-control" type="text" data-target-chat-id="3" placeholder="Type a message and hit enter..">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- END Single Chat (Chat Window 3) -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Small Modal -->

        <!-- Small Modal -->
        <div class="modal" id="modal-small2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Comentarios</h3>
                        </div>
                        <div class="block-content">
                            <!-- Single Chat (Chat Window 3) -->
                            <div class="block">
                                <div class="block">
                                    <div class="bg-image" style="background-image: url('<?=IMG ?>photos/photo25.jpg');">
                                        <div class="block-content block-content-full bg-black-op text-center">
                                            <div class="push-10"><img class="img-avatar img-avatar-thumb" src="<?=IMG ?>avatars/avatar9.jpg" alt="">
                                            </div>
                                            <h3 class="h4"><span class="text-white">Titular</span></h3>
                                        </div>
                                    </div>
                                    <div class="js-chat-talk overflow-y-auto block-content block-content-full" data-chat-id="3">
                                        <!-- Messages -->
                                        <div class="font-s12 text-muted text-center push-20-t push-15"><em>Ayer</em></div>
                                        <div class="block block-rounded block-transparent push-15 push-50-l">
                                            <div class="block-content block-content-full block-content-mini bg-gray-lighter">Revisa, la propuesta, sls</div>
                                        </div>
                                        <!-- END Messages -->
                                    </div>
                                    <div class="js-chat-form block-content block-content-full block-content-mini">
                                        <form action="m1_0_0_form_pat_completo.php" method="post">
                                            <input class="js-chat-input form-control" type="text" data-target-chat-id="3" placeholder="Type a message and hit enter..">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- END Single Chat (Chat Window 3) -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Small Modal -->
        <!-- Modal show comment --> 
        <?php foreach ($getRevisiones as $key => $value): ?>
        <div class="modal" id="modal_comment_rev_<?=$value->id_rev ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Comentarios</h3>
                        </div>
                        <div class="block-content">
                            <!-- Single Chat (Chat Window 3) -->
                            <div class="block">
                                <div class="block">
                                    <div class="bg-image" style="background-image: url('<?=IMG ?>photos/photo25.jpg');">
                                        <div class="block-content block-content-full bg-black-op text-center">
                                            <div class="push-10"><img class="img-avatar img-avatar-thumb" src="<?=IMG ?>avatars/avatar9.jpg" alt="">
                                            </div>
                                            <h3 class="h4"><span class="text-white">Titular</span></h3>
                                        </div>
                                    </div>
                                    <div class="js-chat-talk overflow-y-auto block-content block-content-full content_commit" data-chat-id="3">
                                        <!-- Messages -->
                                        <?php                                                 
                                        $query = "SELECT * FROM pat_rev_comment 
                                                WHERE estatus = 0 and id_rev = $value->id_rev";    

                                        $get_commit = $this->db->query($query)->result();
                                        foreach ($get_commit as $key => $value): ?> 
                                            <div class="block block-rounded block-transparent push-15 push-50-l">
                                                <div class="block-content block-content-full block-content-mini bg-gray-lighter"><?=$value->comentario ?> </div>                                            
                                            </div>
                                        <?php endforeach ?> 
                                        <!--div class="font-s12 text-muted text-center push-20-t push-15"><em>10/07/2016</em></div>
                                        <div class="block block-rounded block-transparent push-15 push-50-l">
                                            <div class="block-content block-content-full block-content-mini bg-gray-lighter">Revisa, la propuesta, sls <?=$value->no_revision ?> </div>                                            
                                        </div>
                                        <div class="font-s12 text-muted text-center push-20-t push-15"><em>Ayer</em></div>
                                        <div class="block block-rounded block-transparent push-15 push-50-l">
                                            <div class="block-content block-content-full block-content-mini bg-gray-lighter">Revisa, la propuesta, sls <?=$value->no_revision ?> </div>                                            
                                        </div-->
                                        <!-- END Messages -->
                                    </div>
                                    <div class="js-chat-form block-content block-content-full block-content-mini">
                                        <span class="hidden"  id="load_datos_gen_commit"> <i class="fa fa-cog fa-spin"></i> </span>
                                        <div class="clearfix"></div>
                                        <form action="" method="post" class="form_comment_rev">
                                            <input class="js-chat-input form-control hidden id_comment" type="text"  name ="id_comment" value="<?=$value->id_rev ?>">
                                            <input class="js-chat-input form-control mess_comment" type="text" name="mess_comment" maxlength="255" data-target-chat-id="3" placeholder="Type a message and hit enter..">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- END Single Chat (Chat Window 3) -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
        <!-- END Modal show comment -->

        <!-- From Right Modal -->
        <div class="modal fade" id="modal_del_all" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-fromright">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <div class="col-md-12 text-center">
                                <h3 class="block-title">¡Atencion!</h3>
                            </div>                            
                        </div>
                        <div class="block-content">
                            <strong>
                                <p>Esta seguro de eliminar?</p>
                            </strong>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-sm btn-danger" id="btn_del_all" type="button"><i class="fa fa-check"></i>Elimnar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END From Right Modal -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->


        <!-- Page JS Plugins -->
        <script src="<?=JS ?>plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="<?=JS ?>plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?=JS ?>pages/base_forms_wizard.js"></script>

        <!-- Page JS Code -->
        <!--script src="< ?=JS ?>pages/base_forms_validation.js"></script-->
        <script src="<?=URL ?>content/vendor/js/pat/pat_show_revisiones.js"></script>
        

        <!-- Page JS Plugins -->
        <script src="<?=JS ?>plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="<?=JS ?>plugins/bootstrap-datetimepicker/moment.min.js"></script>
        <script src="<?=JS ?>plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="<?=JS ?>plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
        <script src="<?=JS ?>plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="<?=JS ?>plugins/select2/select2.full.min.js"></script>
        <script src="<?=JS ?>plugins/masked-inputs/jquery.maskedinput.min.js"></script>
        <script src="<?=JS ?>plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="<?=JS ?>plugins/dropzonejs/dropzone.min.js"></script>
        <script src="<?=JS ?>plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?=JS ?>pages/base_ui_chat.js"></script>

        <!-- Page JS Code -->
        <script>
            $(function () {
                // Init page helpers (BS Datepicker + BS Datetimepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                App.initHelpers(['datepicker', 'datetimepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            });
        </script>
    </body>
</html>