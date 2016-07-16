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
        <?php $this->load->view('core/sideContent'); ?>
        <!-- END Side Overlay -->

        <!-- Sidebar -->
        <?php $this->load->view('core/menu'); ?>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="header-navbar" class="content-mini content-mini-full">
            <!-- Header Navigation Right -->
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
                            Agregar documento <small>AAI</small>
                        </h1>
                    </div>
                    <div class="col-sm-5 text-right hidden-xs">
                        <ol class="breadcrumb push-10-t">
                            <li>Normativa</li>
                            <li><a class="link-effect" href="aai">AAI</a></li>
                            <li>Agregar documento</li>
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
                            <a href="#search-escolaridad">Lista de documentos</a>
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
                                    <h3 class="block-title">Agregar documento</h3>
                                </div>
                                <div class="block-content">
                                    <?= form_open_multipart('', 'id="aaiFormAdd" class="form-horizontal push-10-t" ');?>

                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm hidden" type="text" id="id_aai_form" value="" maxlength="100" name="id_aai_form">
                                                    <input class="form-control input-sm" type="text" id="aai_nombre" name="aai_nombre">
                                                    <label for="aai_nombre">Nombre</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material form-material-primary floating">
                                                    <textarea class="form-control input-sm" id="aai_des" name="aai_des" rows="4"></textarea>
                                                    <label for="aai_des">Descripción</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="aai_tipo" name="aai_tipo">
                                                        <?php foreach($getTipo_aai as $row){
                                                            echo'<option value="'.$row->id.'">'. $row->des .'</option>';
                                                        } ?>
                                                    </select>
                                                    <label for="aai_tipo">Tipo</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-9">
                                                <label for="file1">Archivo adjunto</label>
                                                <div class="col-sm-12">
                                                    <input type="file" id="file1" name="file1">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">&nbsp;</div>

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <button class="btn btn-sm btn-primary" id="btn_datos_gen" type="submit">Guardar</button>
                                                <button class="btn btn-sm btn-default" id="btn_datos_cancelar" type="reset">Cancelar</button>
                                                <span class="hidden"  id="load_datos_gen"> <i class="fa fa-cog fa-spin"></i> </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Agregar -->
                            <div class="row">&nbsp;</div>
                            <!-- Lista -->
                            <div class="table-responsive">
                                <div class="border-b push-30">
                                    <h2 class="push-10"><span id="label_find_aai">0</span> <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                </div>
                                <table class="table table-borderless table-vcenter table-condensed" id="table_aai">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-left">Nombre</th>
                                        <th class="text-left">Descripción</th>
                                        <th class="text-center">Tipo</th>
                                        <th class="text-center">Archivo</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($get_aais as $key => $value): ?>
                                        <tr id="id_aai_<?= $value->id_aai; ?>">
                                            <td class="text-center"> <?= $key+1 ?> </td>
                                            <td class="text-left"> <?= $value->aai_nombre; ?></td>
                                            <td class="text-left"><?= $value->aai_des; ?></td>
                                            <td class="text-center"> <?= $value->aai_tipo_archivo; ?> </td>
                                            <td class="text-center">
                                                <?php if ($value->aai_tipo == 1): ?>
                                                    <div class="btn-group">
                                                        <a href="<?=URL.$value->img1_url; ?>" class="btn btn-danger" type="button" data-toggle="tooltip" title="Descargar PDF"><i class="fa fa-file-pdf-o"></i></a>
                                                    </div>
                                                <?php elseif($value->aai_tipo == 2): ?>
                                                    <div class="btn-group">
                                                        <a href="<?=URL.$value->img1_url; ?>" class="btn btn-primary" data-toggle="tooltip" title="Descargar Word"><i class="fa fa-file-word-o"></i></a>
                                                    </div>
                                                <?php elseif($value->aai_tipo == 3): ?>
                                                    <div class="btn-group">
                                                        <a href="<?=URL.$value->img1_url; ?>" class="btn btn-success" type="button" data-toggle="tooltip" title="Descargar Excel"><i class="fa fa-file-excel-o"></i></a>
                                                    </div>
                                                <?php elseif($value->aai_tipo == 4): ?>
                                                    <div class="btn-group">
                                                        <a href="<?=URL.$value->img1_url; ?>" class="btn btn-warning" type="button" data-toggle="tooltip" title="Descargar PowerPoint"><i class="fa fa-file-powerpoint-o"></i></a>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="btn-group">
                                                        <a href="<?=URL.$value->img1_url; ?>" class="btn btn-info" type="button" data-toggle="tooltip" title="Descargar Imagen"><i class="fa fa-file-image-o"></i></a>
                                                    </div>
                                                <?php endif ?>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-primary btn-xs" onclick="editblogForm(<?= $value->id_aai; ?>)"  data-toggle="tooltip" data-placement="top" title="Editar">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-xs" onclick="delLogpar(<?= $value->id_aai; ?>)" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
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
        <?php $this->load->view('core/footer'); ?>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!-- Page JS Plugins -->
    <script src="<?=JS ?>plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="<?=JS ?>plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?=JS ?>plugins/jquery-validation/validateMsessage.js" type="text/javascript"></script>

    <!-- Page JS Code -->
    <script src="<?=JS ?>pages/base_forms_wizard.js"></script>

    <!-- Page JS Code -->
    <!--script src="<?=JS ?>pages/base_forms_validation.js"></script-->
    <script src="<?=URL ?>content/vendor/js/aaiFormAdd.js"></script>

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

    <!-- Page Plugins -->
    <script src="<?=JS ?>plugins/slick/slick.min.js"></script>
    <script src="<?=JS ?>plugins/magnific-popup/magnific-popup.min.js"></script>

    <!-- Page JS Code -->
    <script>
        jQuery(function () {
            // Init page helpers (Slick Slider + Magnific Popup plugins)
            App.initHelpers(['slick', 'magnific-popup','ckeditor']);
        });
    </script>

    <!-- Modal confirmacion addaai -->
    <div class="modal fade" id="modal_confirmar_add_aai" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <p>¿Agregar Elemento?</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-primary" onclick="aaiFormAdd_confirm()" type="button" data-dismiss="modal"><i class="fa fa-check"></i>Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end Modal confirmacion addblog -->

    <!-- Modal delete addblog -->
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
                            <h3 class="block-title">¡Atención!</h3>
                        </div>
                    </div>
                    <div class="block-content">
                        <strong>
                            <p>¿Está seguro de eliminar el registro?</p>
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
    <!-- END Modal delete addblog -->
    <!-- Para la emision de alertas en errores de file -->
    <div class="hidden" id="sup_bandera_url"> <?=URL ?> </div>
    <div class="modal fade" id="modal_message_error_file" tabindex="-1" role="dialog" aria-hidden="true">
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
                        <div class="col-md-12 text-center text-left" style="color: red" id="show_message_error_file">

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
    <!-- end Para la emision de alertas en errores de file -->
    </body>
</html>