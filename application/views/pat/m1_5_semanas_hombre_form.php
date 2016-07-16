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
                                Capturar semanas <small>Semanas hombre</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Planeación anual</li>
                                <li><a class="link-effect" href="m1_5_semanas_hombre">Semanas hombre</a></li>
                                <li>Capturar</li>
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
                                <a href="#search-escolaridad">Lista de actividades</a>
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
                                <div class="block block-themed">
                                    <div class="block-content">
                                        <form class="form-horizontal push-10-t" id="add_semana_hombre" action="#" method="post">
                                            <div class="form-group">
                                            	<div class="col-md-8 col-md-offset-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="id_user" name="id_user">
                                                            <option></option>                                                           
                                                            <?php foreach($gets_users as $row){ 
                                                              echo '<option value="'. trim($row->id_user).'">'. $row->nombre. " " .$row->apellidop. " " .$row->apellidom .'</option>';
                                                             } ?> 
                                                        </select>
                                                        <label for="id_user">Usuario 
                                                            <span class="hidden"  id="load_datos_gen2"> <i class="fa fa-cog fa-spin"></i> </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="block">
				                                <div class="block-content block-content-narrow">
				                                    <form class="form-horizontal">
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="auditoria">AUDITORIA</label>
				                                            <div class="col-md-2">
                                                                <input class="form-control input-sm hidden" type="text" id="id_pres_form" name="id_pres_form">
				                                                <input class="form-control input-sm" type="text" value="0" maxlength="10" id="auditoria" name="auditoria">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="seguimiento">SEGUIMIENTO</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" value="0" maxlength="10" id="seguimiento" name="seguimiento">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="mejora_gestion">MEJORA DE LA GESTION</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" value="0" maxlength="10" id="mejora_gestion" name="mejora_gestion">
				                                            </div>
				                                        </div>                                                        
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="trans_inte_parti">TRANSFERENCIA, INTEGRIDAD Y PARTICIPACION CIUDADANA</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" value="0" maxlength="10" id="trans_inte_parti" name="trans_inte_parti">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="quejas_denuncias">QUEJAS Y DENUNCIAS</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" value="0" maxlength="10" id="quejas_denuncias" name="quejas_denuncias">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="responsabilidades">RESPONSABILIDADES</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" value="0" maxlength="10" id="responsabilidades" name="responsabilidades">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="controversia">CONTROVERSIAS Y SANCIONES EN CONTRATACIONES PÚBLICAS</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" value="0" maxlength="10" id="controversia" name="controversia">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="actividades">ACTIVIDADES QUE NO REÚNEN LOS REQUISITOS DE UNA AUDITORÍA</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" value="0" maxlength="10" id="actividades" name="actividades">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="planeacion">PLANEACION, DIRECCÓN Y SUPERVISIÓN</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" value="0" maxlength="10" id="planeacion" name="planeacion">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="informe_sfp">INFORMES A LA SFP Y OTRAS INSTANCIAS</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" value="0" maxlength="10" id="informe_sfp" name="informe_sfp">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="comite">COMITÉS</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" value="0" maxlength="10" id="comite" name="comite">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="junta_consejo">JUNTAS Y CONSEJOS</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" value="0" maxlength="10" id="junta_consejo" name="junta_consejo">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="act_adm">ACTIVIDADES ADMINISTRATIVAS</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" value="0" maxlength="10" id="act_adm" name="act_adm">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="capacitacion">CAPACITACIÓN</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" value="0" maxlength="10" id="capacitacion" name="capacitacion">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="plazas_vac">PLAZAS VACANTES</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" value="0" maxlength="10" id="plazas_vac" name="plazas_vac">
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label class="col-md-6 control-label" for="vacaciones">VACACIONES E INCAPACIDADES DEL PERSONAL</label>
				                                            <div class="col-md-2">
				                                                <input class="form-control input-sm" type="text" value="0" maxlength="10" id="vacaciones" name="vacaciones">
				                                            </div>
				                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-6 control-label" for="total">TOTAL</label>
                                                            <div class="col-md-2">
                                                                <input class="form-control input-sm" type="text" value="0" maxlength="10" id="total" name="total" readonly>
                                                            </div>
                                                        </div>
			                                            <div class="form-group">
			                                            	&nbsp;
			                                            </div>
			                                            <div class="form-group">
			                                                <div class="col-md-3">
			                                                    <button class="btn btn-sm btn-primary" id="btn_datos_gen" type="submit">Guardar</button>
			                                                    <button class="btn btn-sm btn-default" id="btn_datos_cancelar" type="reset">Cancelar</button>
                                                                <span class="hidden"  id="load_datos_gen"> <i class="fa fa-cog fa-spin"></i> </span>
			                                                </div>
			                                            </div>
				                                    </form>
				                                </div>
				                            </div>
                                    </div>
                                </div>
                                <!-- End Agregar -->
                                <div class="row">&nbsp;</div>
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
        <script src="<?=JS ?>plugins/jquery-validation/validateMsessage.js" type="text/javascript"></script>
        <!-- Page JS Code -->
        <script src="<?=JS ?>pages/base_forms_wizard.js"></script>

        <!-- Page JS Code -->
        <!--script src="<?=JS ?>pages/base_forms_validation.js"></script-->
        <script src="content/vendor/js/pat/pat_add_semana_hombre.js"></script>

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


         <!-- Modal confirmacion addpres -->
        <div class="modal fade" id="modal_confirmar_add_pres" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <p>¿Actualizar Registro?</p>
                            </div>             
                            <div class="clearfix"></div>               
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-sm btn-primary" onclick="addpresentacion_confirm()" type="button" data-dismiss="modal"><i class="fa fa-check"></i>Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Modal confirmacion addpres -->

        <!-- Modal maximo 52 -->
        <div class="modal fade" id="modal_top_max_sem" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <p>¡El máximo se semanas es de 52!</p>
                            </div>             
                            <div class="clearfix"></div>               
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Aceptar</button>
                        <!--button class="btn btn-sm btn-primary" onclick="addpresentacion_confirm()" type="button" data-dismiss="modal"><i class="fa fa-check"></i>Aceptar</button-->
                    </div>
                </div>
            </div>
        </div>
        <!-- end Modal maximo 52 -->
        <!-- Modal delete -->
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
        <!-- END Modal delete -->
    </body>
</html>