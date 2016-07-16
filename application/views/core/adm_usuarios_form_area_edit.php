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
                                Crear/Editar usuario de área<small></small>                                
                            </h1> 
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Administrar</li>
                                <li><a class="link-effect" href="<?=URL ?>adm_usuarios">Usuarios</a></li>
                                <li>Crear/Editar usuario de área</li>
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
                                <a href="#search-datos">Datos generales</a>
                            </li>
                            <li class="pull-right">
                                <ul class="block-options push-10-t push-10-r">
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <?php if (!empty($get_user)): ?>
                        <div class="block-content tab-content bg-white">
                            <!-- Datos generales -->
                            <div class="tab-pane fade fade-up in active" id="search-datos">
                                <!--div class="border-b push-30">
                                    <h2 class="push-10">5 <span class="h5 font-w400 text-muted">Usuarios encontrados</span></h2>
                                </div-->                                
                                <form class="js-validation-material form-horizontal push-10-t" id="addusuarioareasform" action="#" method="post">
                                   
                                    <div class="form-group">
                                        <div class="hidden">
                                                <input class="form-control input-sm" type="text" maxlength="60" id="id_user" name="id_user" value="<?= $get_user->id_user ?>">                                                                                             
                                        </div>
                                        <!--div class="col-sm-3">                                             
                                            <div class="form-material form-material-primary floating">                                           

                                                <select class="form-control input-sm" id="rol_permiso" name="rol_permiso">                                                        
                                                    <?php foreach($rol_permiso as $row){ 
                                                        if ($row->id == $get_user->rol_permiso) {
                                                            echo '<option value="'.$row->id.'" selected>'. $row->des .'</option>';
                                                        }else{
                                                            echo '<option value="'.$row->id.' ">'. $row->des .'</option>';
                                                        }
                                                      
                                                     } ?> 
                                                </select>
                                                <label for="rol_permiso">Rol</label>
                                            </div>
                                        </div-->
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" maxlength="60" id="entidad" name="entidad" value="<?= $get_user->entidad; ?>"> 
                                                <label for="entidad">Entidad  </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary">
                                                <input class="form-control input-sm" type="text" id="n_expediente" maxlength="40" name="n_expediente" value="<?= $get_user->n_expediente ?>">
                                                <label for="n_expediente">No. Expediente</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">                        
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="area" name="area">
                                                    <?php foreach($getareas as $row){ 
                                                        if ($row->id == $get_user->area) {
                                                            echo '<option value="'.$row->id.'" selected>'. $row->des .'</option>';
                                                        }else{
                                                            echo '<option value="'.$row->id.' ">'. $row->des .'</option>';
                                                        }                                                        
                                                     } ?> 
                                                </select>
                                                <label for="area">Área</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="nombre" maxlength="60" name="nombre" value="<?= $get_user->nombre ?>">
                                                <label for="nombre">Nombre</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="apellidop"  maxlength="60" value="<?= $get_user->apellidop ?>" name="apellidop">
                                                <label for="apellidop">Apellido Paterno</label>
                                            </div>
                                        </div>

                                        
                                        
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" maxlength="60" value="<?= $get_user->apellidom ?>" id="apellidom" name="apellidom">
                                                <label for="apellidom">Apellido Materno</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="cargo" name="cargo">
                                                    <?php foreach($getcargos as $row){ 
                                                        if ($row->id == $get_user->cargo)
                                                            echo '<option value="'.$row->id.'" selected>'. $row->des .'</option>';
                                                        else
                                                            echo '<option value="'.$row->id.' ">'. $row->des .'</option>';                                                        
                                                     } ?> 
                                                </select>
                                                <label for="cargo">Cargo</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="nivel" name="nivel">                                                    
                                                    <?php foreach($getnivel as $row){
                                                        if ($row->id == $get_user->nivel)
                                                            echo '<option value="'.$row->id.'" selected>'. $row->des .'</option>';
                                                        else
                                                            echo '<option value="'.$row->id.' ">'. $row->des .'</option>'; 
                                                     } ?> 
                                                </select>
                                                <label for="nivel">Nivel</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" value="<?= $get_user->nivel_codigo ?>" id="nivel_codigo" name="nivel_codigo">
                                                <label for="nivel_codigo">Cod</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group"> 
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="grado" name="grado">
                                                    <?php foreach($GradoEstudio as $row){ 
                                                        if ($row->id == $get_user->grado)
                                                            echo '<option value="'.$row->id.'" selected>'. $row->des .'</option>';
                                                        else
                                                            echo '<option value="'.$row->id.' ">'. $row->des .'</option>'; 
                                                     } ?> 
                                                </select>
                                                <label for="grado">Grado</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" value="<?= $get_user->grado_codigo ?>" id="grado_codigo" name="grado_codigo">
                                                <label for="grado_codigo">Cod</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2"> 
                                            <div class="form-material form-material-primary floating">
                                                <label for="fdn">Fecha de nacimiento</label>
                                            </div>
                                        </div>
                                        <?php $fecha_nac = date('d-m-Y', strtotime( $get_user->fecha_nac ) ); ?> 
                                        <div class="col-sm-5">
                                            <div class="form-material form-material-primary">
                                                <input class="js-datepicker form-control" type="text" id="fecha_nac" value="<?=$fecha_nac  ?>" name="fecha_nac" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">                                                        
                                                <label class="sr-only" for="fecha_nac">Fecha de nacimiento</label>
                                            </div>
                                        </div>                                           
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="sexo" name="sexo">
                                                    <?php $arraysexo = array('0' => 'Femenino'  , '1' => 'Masculino'); ?>
                                                    <!--option></option-->
                                                    <?php foreach($arraysexo as $key => $value){ 
                                                        if ($key == $get_user->sexo)
                                                            echo '<option value="'.$key.'" selected>'. $value .'</option>';
                                                        else
                                                            echo '<option value="'.$key.' ">'. $value .'</option>'; 
                                                     } ?> 
                                                </select>
                                                <label for="sexo">Sexo</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" maxlength="40" id="rfc" name="rfc" value="<?= $get_user->rfc ?>">
                                                <label for="rfc">RFC</label>
                                            </div>
                                        </div>                     
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="curp" maxlength="20" name="curp" value="<?= $get_user->curp ?>">
                                                <label for="curp">CURP</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" maxlength="60" id="lugar_nac" value="<?= $get_user->lugar_nac ?>" name="lugar_nac">
                                                <label for="lugar_nac">Lugar de nacimiento</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="nacionalidad" name="nacionalidad">
                                                    <?php foreach($nacionalidad as $row){ 
                                                        if ($row->id == $get_user->nacionalidad)
                                                            echo '<option value="'.$row->id.'" selected>'. $row->des .'</option>';
                                                        else
                                                            echo '<option value="'.$row->id.' ">'. $row->des .'</option>';
                                                     } ?> 
                                                </select>
                                                <label for="nacionalidad">Nacionalidad</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="email_cnbv" value="<?= $get_user->email_cnbv ?>" maxlength="60" name="email_cnbv">
                                                <label for="email_cnbv">Correo electronico CNBV</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" maxlength="60" value="<?= $get_user->extension ?>" id="extension" name="extension">
                                                <label for="extension">Extención</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" maxlength="40" value="<?= $get_user->torre ?>" id="torre" name="torre">
                                                <label for="torre">Torre</label>
                                            </div>
                                        </div>              
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" maxlength="40" value="<?= $get_user->piso ?>" id="piso" name="piso">
                                                <label for="piso">Piso</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" maxlength="40" value="<?= $get_user->coordenada ?>" id="coordenada" name="coordenada">
                                                <label for="coordenada">Coordenada</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" maxlength="40" value="<?= $get_user->red ?>" id="red" name="red">
                                                <label for="red">Red</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <button class="btn btn-sm btn-primary" id="btn_datos_gen" type="submit">Actualizar</button>
                                            <button class="btn btn-sm btn-default" id="btn_datos_cancelar" type="reset">Cancelar</button>
                                            <a class="btn btn-sm btn-success hidden" id="btn_datos_gen_otro" href=" <?= URL ?>adm_usuarios_form_area">Guardar otro usuario</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                     
                                            <span class="hidden"  id="load_datos_gen"> <i class="fa fa-cog fa-spin"></i> </span>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <!-- End Datos generales -->
                        </div>
                         <?php else: ?>
                            <div class="block-content tab-content bg-white">Error al obtener usuario</div>
                        <?php endif ?>
                   
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


        

        <!-- Page JS Plugins -->
        <script src="<?=JS ?>plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="<?=JS ?>plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="<?=JS ?>plugins/jquery-validation/validateMsessage.js" type="text/javascript"></script>

        <!-- Page JS Code -->
        <script src="<?=JS ?>pages/base_forms_wizard.js"></script>

        <!-- Page JS Code validaciones y funciones onclikc -->
        <script src="<?=URL ?>content/vendor/js/usuarios.area.edit.js"></script>
        <!-- Page JS Code -->
        <!--script src="<?=JS ?>pages/base_forms_validation.js"></script-->

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

        <!-- Modal confirmacion usuario -->
        <div class="modal fade" id="modal_confirmar_add_user_area" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <p>¿Editar usuario?</p>
                            </div>             
                            <div class="clearfix"></div>               
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-sm btn-primary" onclick="addusuario_confirm()" type="button" data-dismiss="modal"><i class="fa fa-check"></i>Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal confirmacion usuario -->
    </body>
</html>