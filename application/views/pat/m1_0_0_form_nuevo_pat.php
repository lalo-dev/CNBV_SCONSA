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
            <?php $this->load->view('core/sideContent.php'); ?>
            <!-- END Side Overlay -->

            <!-- Sidebar -->            
            <?php //include_once ('menu.php');?>
             <?php $this->load->view('core/menu.php'); ?>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <?php //include_once('headerNavigation.php'); ?>
                 <?php $this->load->view('core/headerNavigation.php'); ?>
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
                                Nuevo<small> PAT</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Planeación anual</li>
                                <li><a class="link-effect" href="m1_0_pat">PAT</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->
                <!-- Page Content -->
                <div class="content">
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="block">
                                <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
                                    <li class="active">
                                        <a href="#obser1">PAT'S</a>
                                    </li>
                                </ul>
                                <div class="block-content tab-content bg-white">
                                    <!-- inicia obser1 -->
                                    <div class="tab-pane fade fade-up in active" id="obser1">
                                        <div class="row">
                                            <div class="col-md-5 col-md-offset-4">
                                                <table class="table table-condensed">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">AÑO</th>
                                                            <th class="text-center">ACTIVO</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($getPats as $key => $value): ?>
                                                        <tr>
                                                            <td class="text-center"><?= $value->pat_ano  ?></td>
                                                            <td class="text-center">
                                                                <!--label class="css-input switch switch-primary">
                                                                    <input type="checkbox"><span></span>
                                                                </label-->
                                                                <?php if ($value->pat_activo == 0): ?>
                                                                    <!--input id="activo_user_area_<?= trim($value->id_user); ?>" onchange="initValidationChangeStatus_area('<?= $value->id_user ?>')" type="checkbox" checked><span></span-->
                                                                    <label class="css-input switch switch-primary">
                                                                        <input id="activo_pat_<?= trim($value->id_pat); ?>" onchange="initValidationChangeStatus('<?= $value->id_pat ?>')"  type="checkbox" checked><span></span>
                                                                    </label>
                                                                <?php else: ?>
                                                                <label class="css-input switch switch-primary">
                                                                    <input id="activo_pat_<?= trim($value->id_pat); ?>" onchange="initValidationChangeStatus('<?= $value->id_pat ?>')" type="checkbox"><span></span>
                                                                </label>
                                                                    <!--input id="activo_user_area_<?= trim($value->id_user); ?>" onchange="initValidationChangeStatus_area('<?= $value->id_user ?>')" type="checkbox"><span></span-->
                                                                <?php endif; ?>
                                                            </td>
                                                        </tr>                                                            
                                                        <?php endforeach ?>
                                                        <!--tr>
                                                            <td class="text-center">2026</td>
                                                            <td class="text-center">
                                                                <label class="css-input switch switch-primary">
                                                                    <input type="checkbox"><span></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2025</td>
                                                            <td class="text-center">
                                                                <label class="css-input switch switch-primary">
                                                                    <input type="checkbox"><span></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2024</td>
                                                            <td class="text-center">
                                                                <label class="css-input switch switch-primary">
                                                                    <input type="checkbox"><span></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2023</td>
                                                            <td class="text-center">
                                                                <label class="css-input switch switch-primary">
                                                                    <input type="checkbox"><span></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2022</td>
                                                            <td class="text-center">
                                                                <label class="css-input switch switch-primary">
                                                                    <input type="checkbox"><span></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2021</td>
                                                            <td class="text-center">
                                                                <label class="css-input switch switch-primary">
                                                                    <input type="checkbox"><span></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2020</td>
                                                            <td class="text-center">
                                                                <label class="css-input switch switch-primary">
                                                                    <input type="checkbox"><span></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2019</td>
                                                            <td class="text-center">
                                                                <label class="css-input switch switch-primary">
                                                                    <input type="checkbox"><span></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2018</td>
                                                            <td class="text-center">
                                                                <label class="css-input switch switch-primary">
                                                                    <input type="checkbox"><span></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2017</td>
                                                            <td class="text-center">
                                                                <label class="css-input switch switch-primary">
                                                                    <input type="checkbox"><span></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2016</td>
                                                            <td class="text-center">
                                                                <label class="css-input switch switch-primary">
                                                                    <input type="checkbox" checked><span></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2015</td>
                                                            <td class="text-center">
                                                                <label class="css-input switch switch-primary">
                                                                    <input type="checkbox" checked><span></span>
                                                                </label>
                                                            </td>
                                                        </tr-->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- termina obser1 -->
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
             <?php $this->load->view('core/footer.php'); ?>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->


        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/base_forms_wizard.js"></script>

        <!-- Page JS Code -->
        <!--script src="assets/js/pages/base_forms_validation.js"></script-->

        <script src="content/vendor/js/pat/pat_nuevo.js"></script>

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
        <script>
            $(function () {
                // Init page helpers (BS Datepicker + BS Datetimepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                App.initHelpers(['datepicker', 'datetimepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            });
        </script>

        <!-- Pop Out Modal -->
        <div class="modal fade" id="modal_change_pat_off" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">¡Alerta!</h3>
                        </div>
                        <div class="block-content">
                            <div class="col-md-12 text-center">
                                <p>¡Operacion no permitida!</p>
                            </div>             
                            <div class="clearfix"></div>               
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i>Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Pop Out Modal -->

        <!-- Pop Out Modal -->
        <div class="modal fade" id="modal_change_pat_false" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">¡Alerta!</h3>
                        </div>
                        <div class="block-content">
                            <div class="col-md-12 text-center">
                                <p>¡Operacion no permitida, El Pat que intenta activar aun no esta disponible!</p>
                            </div>             
                            <div class="clearfix"></div>               
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i>Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Pop Out Modal -->
    </body>
</html>