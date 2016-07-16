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
                <div class="col-sm-4">
                    <h1 class="page-heading">
                        Agregar riesgo <small>Mapa de riesgos</small>
                    </h1>
                </div>
                <div class="col-sm-8 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li>Planeación anual</li>
                        <li><a class="link-effect" href="mapa_riesgos">Mapa de riesgos</a></li>
                        <li>Agregar</li>
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
                        <a href="#search-escolaridad">Lista de riesgos</a>
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
                    <!-- Escolaridad -->
                    <div class="tab-pane fade fade-up in active" id="search-escolaridad">
                        <!-- Agregar -->
                        <div class="block block-themed block-opt-hidden">
                            <div class="block-header bg-primary">
                                <ul class="block-options">
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                    </li>
                                </ul>
                                <h3 class="block-title">Riesgos</h3>
                            </div>
                            <div class="block-content">
                                <form class="form-horizontal push-10-t" action="#" method="post">

                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="descripcion" name="descripcion">
                                                <label for="descripcion">Descripción del riesgo</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="impacto_x" name="impacto_x">
                                                <label for="impacto_x">Impacto (X)</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="impacto_y" name="impacto_y">
                                                <label for="impacto_y">Impacto (Y)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="cuadrante" name="cuadrante">
                                                <label for="cuadrante">Cuadrante</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="riesgo_ponderado" name="riesgo_ponderado">
                                                <label for="riesgo_ponderado">Riesgo ponderado</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                            <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- End Agregar -->
                        <div class="row">&nbsp;</div>
                        <!-- Lista -->
                        <div class="border-b push-30">
                            <h2 class="push-10" id="total"><?php echo $get_tot_riesg; ?> <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped table-vcenter table-condensed">
                                <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-left">Descripción</th>
                                    <th class="text-center" data-toggle="tooltip" data-placement="top" title="IMPACTO 0.6">Imp(x)</th>
                                    <th class="text-center" data-toggle="tooltip" data-placement="top" title="PROBABILIDAD 0.4">Pro(y)</th>
                                    <th class="text-center">Cuadrante</th>
                                    <th class="text-center" data-toggle="tooltip" data-placement="top" title="RIESGO PONDERADO">RP</th>
                                    <th class="text-center" data-toggle="tooltip" data-placement="top" title="ACCIONES">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($get_riesgos as $key => $valuea): ?>
                                    <tr>
                                        <td><?= $valuea->id_riesgo; ?></td>
                                        <td class="text-left"><?= $valuea->descripcion; ?></td>
                                        <td class="text-center"><?= $valuea->impacto; ?></td>
                                        <td class="text-center"><?= $valuea->probabilidad; ?></td>
                                        <td class="text-center"><?= $valuea->cuadrante; ?></td>
                                        <td class="text-left"><?= $valuea->riesgo_ponderado; ?></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="" href="#" data-original-title="Editar">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- End Lista -->
                    </div>
                    <!-- End Escolaridad -->
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



<!-- Page JS Plugins -->
<script src="<?=JS ?>plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="<?=JS ?>plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="<?=JS ?>pages/base_forms_wizard.js"></script>

<!-- Page JS Code -->
<script src="<?=JS ?>pages/base_forms_validation.js"></script>

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
<script>
    $(function () {
        // Init page helpers (BS Datepicker + BS Datetimepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
        App.initHelpers(['datepicker', 'datetimepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
    });
</script>
</body>
</html>