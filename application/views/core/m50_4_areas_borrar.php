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

    <!-- Page Plugins -->
    <script src="assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>


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
    <?php include_once('sideContent.php'); ?>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <?php include_once('menu.php'); ?>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="header-navbar" class="content-mini content-mini-full">
        <!-- Header Navigation Right -->
        <?php include_once('headerNavigation.php'); ?>
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
                        Areas <small>Catálogo</small>
                    </h1>
                </div>
                <div class="col-sm-5 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li>Administración</li>
                        <li><a href="m50_1_catalogos">Catálogos</a></li>
                        <li>Areas</li>
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
                        <a href="#search-documentos">Lista</a>
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
                        <!-- Agregar -->
                        <div class="block block-themed block-opt-hidden">
                            <div class="block-header bg-primary">
                                <ul class="block-options">
                                    <li>
                                        <button type="button" class="btn-open-form" data-toggle="block-option" data-action="content_toggle"></button>
                                    </li>
                                </ul>
                                <h3 class="block-title">Agregar</h3>
                            </div>
                            <div class="block-content">
                                <form class="form-horizontal push-10-t" action="#" id="form_cat" method="post">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">                                               
                                                <input class="form-control input-sm hidden" type="text" id="id_cat_form" maxlength="50" name="id_cat_form">
                                                <input class="form-control input-sm hidden" type="text" id="tipo" value="area" maxlength="50" name="tipo">
                                                <input class="form-control input-sm" type="text" value="proceso ejemplo" id="proceso" maxlength="100" name="proceso">
                                                <label for="proceso">Proceso</label>
                                            </div>
                                        </div>
                                        <!--div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" value="1" type="text" id="orden" maxlength="10" name="orden">
                                                <label for="orden">Orden</label>
                                            </div>
                                        </div-->
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" value="descripcion" type="text" id="descripcion" maxlength="254" name="descripcion">
                                                <label for="descripcion">Descripción</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <button class="btn btn-sm btn-primary" id="btn_add_cat" type="submit">Guardar</button>
                                            <button class="btn btn-sm btn-default" id="btn_add_cat_canc" type="reset">Cancelar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span class="hidden"  id="load_datos"> <i class="fa fa-cog fa-spin"></i> </span>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- End Agregar -->
                        <div class="row">&nbsp;</div>
                        <!-- Lista -->
                        <div class="table-responsive" >
                            <div class="border-b push-30">
                                <h2 class="push-10"> <span id="label_find_cat"></span> <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                            </div>
                            <table id="table_cat" class="table table-striped table-vcenter table-condensed ">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-left">Proceso</th>
                                        <!--th class="text-left">Orden</th-->
                                        <th class="text-left">Descripción</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--tr>
                                        <td class="text-center">1</td>
                                        <!--td>Libro</td>
                                        <td>Valor del Ítem</td>
                                        <td>Descripción del Ítem</td>
                                        <td class="text-center">12-12-2016</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="#">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr-->  
                                    <div class="row js-draggable-items">
                                    <div class="draggable-column">
                                    <?php foreach ($getAreas as $key => $value): ?>  

                                    <span id="" class="block draggable-item">
                                    <tr id="id_cat_<?=$value->id  ?>">
                                        <td class="text-center index"> <?=$key+1; ?> </td>
                                        <td><?=$value->des  ?></td>
                                        <td><?=$value->deslarga  ?></td>
                                        <td class="text-center"><?=date('Y-m-d', strtotime( $value->date_created ) )   ?></td>
                                        <td class="text-center">
                                            <div class="btn-group">    
                                                <span class="btn draggable-handler text-gray" style="padding:0; padding-right:0.5em">
                                                    <i class="si si-cursor-move"></i>
                                                </span>                                           
                                                <span class="btn btn-primary btn-xs" data-toggle="tooltip" onclick="editCatalogoform(<?=$value->id; ?>)" data-placement="top" title="Editar" href="#">
                                                    <i class="fa fa-pencil"></i>
                                                </span>
                                                <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" onclick="delCatalogopar(<?=$value->id; ?>)" data-placement="top" title="Eliminar">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>  
                                    </span>
                                    <?php endforeach ?>
                                    </div>
                                    </div>
                                </tbody>
                                
                            </table>

                        </div>
                        <!-- End Lista -->

                        <!-- prueba Lista -->
                        
                            <!-- Block -->
                            <!--div class="block draggable-item">
                                <span class="draggable-handler text-gray">
                                    <i class="si si-cursor-move"></i>
                                </span>
                            </div-->
                            <table>
                                <head>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-left">Proceso</th>
                                        <!--th class="text-left">Orden</th-->
                                        <th class="text-left">Descripción</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </head>
                                <body>
                                    <div class="col-sm-12 draggable-column" style="overflow: hidden">
                                    <span id="" class="col-sm-12 block draggable-item">
                                    <tr>
                                    <td class="text-center index"> 1 </td>
                                    <td>dsdcds</td>
                                    <td>cas</td>
                                    <td class="text-center">cdas</td>
                                    <td class="text-center">
                                        <div class="btn-group">    
                                                                                      
                                            <span class="btn btn-primary btn-xs" data-toggle="tooltip" onclick="editCatalogoform(1)" data-placement="top" title="Editar" href="#">
                                                <i class="fa fa-pencil"></i>
                                            </span>
                                            <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" onclick="delCatalogopar(1)" data-placement="top" title="Eliminar">
                                                <i class="fa fa-times"></i>
                                            </button>
                                            <span class="btn draggable-handler text-gray" style="padding:0; padding-right:0.5em">
                                                <i class="si si-cursor-move"></i>
                                            </span> 
                                        </div>
                                    </td>
                                    </tr>
                                </span>
                                <!-- END Block -->
                                <!-- Block -->
                                <span class="block draggable-item col-sm-12">
                                    <tr>
                                    <td class="text-center index"> 2 </td>
                                    <td>dsdcds</td>
                                    <td>cas</td>
                                    <td class="text-center">cdas</td>
                                    <td class="text-center">
                                        <div class="btn-group">    
                                                                                      
                                            <span class="btn btn-primary btn-xs" data-toggle="tooltip" onclick="editCatalogoform(1)" data-placement="top" title="Editar" href="#">
                                                <i class="fa fa-pencil"></i>
                                            </span>
                                            <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" onclick="delCatalogopar(1)" data-placement="top" title="Eliminar">
                                                <i class="fa fa-times"></i>
                                            </button>
                                            <span class="btn draggable-handler text-gray" style="padding:0; padding-right:0.5em">
                                                <i class="si si-cursor-move"></i>
                                            </span> 
                                        </div>
                                    </td>
                                    </tr>
                                </span>
                            </div>    
                                
                            <!-- END Block -->
                                </body>
                            </table>    
                                                

                        <!-- prueba Lista -->



                    </div>
                    <!-- END Documentos -->
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <?php include_once('footer.php'); ?>
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
                            <div class="bg-image" style="background-image: url('assets/img/photos/photo25.jpg');">
                                <div class="block-content block-content-full bg-black-op text-center">
                                    <div class="push-10"><img class="img-avatar img-avatar-thumb" src="assets/img/avatars/avatar9.jpg" alt="">
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
                            <div class="bg-image" style="background-image: url('assets/img/photos/photo25.jpg');">
                                <div class="block-content block-content-full bg-black-op text-center">
                                    <div class="push-10"><img class="img-avatar img-avatar-thumb" src="assets/img/avatars/avatar9.jpg" alt="">
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
<!-- Modal confirmacion catalogo -->
        <div class="modal fade" id="modal_confirmar_add_cat" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">¡Confirmación!</h3>
                        </div>
                        <div class="block-content">
                            <div class="col-md-12 text-center">
                                <p>¿Agregar Catalogo?</p>
                            </div>             
                            <div class="clearfix"></div>               
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-sm btn-primary" onclick="addcatalogo_confirm()" type="button" data-dismiss="modal"><i class="fa fa-check"></i>Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal confirmacion catalogo -->
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

<!-- Page JS Plugins -->
<script src="assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/js/plugins/jquery-validation/validateMsessage.js" type="text/javascript"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/base_forms_wizard.js"></script>

<!-- funciones catalogos -->

<script src="content/vendor/js/catalogos_users.js"></script>

<!-- Page JS Plugins -->
<script src="assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="assets/js/plugins/bootstrap-datetimepicker/moment.min.js"></script>
<script src="assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script src="assets/js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="assets/js/plugins/select2/select2.full.min.js"></script>
<script src="assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
<script src="assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<script src="assets/js/plugins/dropzonejs/dropzone.min.js"></script>
<script src="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/base_ui_chat.js"></script>

<!-- Page JS Code -->
<script>
    $(function () {
        // Init page helpers (BS Datepicker + BS Datetimepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
        App.initHelpers(['datepicker', 'datetimepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
    });
</script>

<script>
    jQuery(function () {
        // Init page helpers (jQueryUI)
        //App.initHelpers('draggable-items');
    });
</script>
</body>
</html>