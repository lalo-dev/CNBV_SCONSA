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
                                Crear/Editar usuario<small> </small>
                               
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Administrar</li> 
                                <li><a class="link-effect" href="<?=URL ?>adm_usuarios">Usuarios</a></li>
                                <li>Crear/Editar usuario</li>
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
                            <li>
                                <a href="#search-escolaridad">Escolaridad</a>
                            </li>
                            <li>
                                <a href="#search-habilidades">Habilidades</a>
                            </li>
                            <li>
                                <a href="#search-certificaciones">Certificaciones</a>
                            </li>
                            <li>
                                <a href="#search-cursos">Cursos</a>
                            </li>
                            <li>
                                <a href="#search-exp">Experiencia profesional</a>
                            </li>
                            <li>
                                <a href="#search-areas">Áreas de experiencia</a>
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
                            <!-- Usuario generales -->
                            <?php if (!empty($get_user)): ?>
                            <div class="tab-pane fade fade-up in active" id="search-datos">
                                <div class="bg-image" style="background-image: url('<?=IMG ?>photos/photo6@2x.jpg');">
                                    <div class="block-content bg-primary-dark-op text-center overflow-hidden">
                                        <div class="push-30-t push animated fadeInDown">
                                            <img class="img-avatar img-avatar96 img-avatar-thumb" src="<?=IMG ?>avatars/avatar4.jpg" alt="">
                                        </div>
                                        <div class="push-30 animated fadeInUp">
                                            <h2 class="h4 font-w600 text-white push-5">PAKAL AI</h2>
                                            <h3 class="h5 text-gray">CNBV OIC</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">&nbsp;</div> 
                                <!--form class="js-validation-material form-horizontal push-10-t" action="#" method="post" -->
                                <?= form_open_multipart('', 'id="addusuariogenform" class="js-validation-user-general form-horizontal push-10-t" ');?>
                                    <fieldset>
                                        <legend>Datos generales </legend>
                                        <div class="form-group">
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm hidden" type="text" id="id_user" name="id_user" value="<?= $get_user->id_user ?>">
                                                    <!--input class="form-control input-sm" type="text" id="numero" name="numero" value="123">
                                                    <label for="numero">#</label-->
                                                    <select class="form-control input-sm" id="rol_permisos" name="rol_permisos">
                                                        <!--option></option-->
                                                        <?php foreach($rol_permiso as $row){ 
                                                            if ($row->id == $get_user->rol_permiso) {
                                                                echo '<option value="'.$row->id.'" selected>'. $row->des .'</option>';
                                                            }else{
                                                                echo '<option value="'.$row->id.' ">'. $row->des .'</option>';
                                                            }                                                          
                                                         } ?> 
                                                    </select>
                                                    <label for="rol_permisos">Rol</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" id="usuario" maxlength="60" name="usuario" type="text" value="<?= $get_user->usuario ?>">
                                                    <label for="usuario">Usuario</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" id="pass" name="pass" maxlength="60" type="password" value="password">
                                                    <label for="pass">Contraseña</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" maxlength="60" id="nombre" name="nombre" value="<?= $get_user->nombre ?>">
                                                    <label for="nombre">Nombre</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" maxlength="60" id="apellidop" name="apellidop" value="<?= $get_user->apellidop ?>">
                                                    <label for="apellidop">Apellido Paterno</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" maxlength="60" id="apellidom" name="apellidom" value="<?= $get_user->apellidom ?>">
                                                    <label for="apellidom">Apellido Materno</label>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <label for="fdn">Fecha de nacimiento</label>
                                                </div>
                                            </div>
                                            <?php $fecha_nac = date('d-m-Y', strtotime( $get_user->fecha_nac ) ); ?> 
                                            <div class="col-sm-5">
                                                <div class="form-material form-material-primary">
                                                    <input class="js-datepicker form-control" type="text" id="fecha_nac" value="<?= $fecha_nac ?>" name="fecha_nac" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">                                                        
                                                    <label class="sr-only" for="fecha_nac">Fecha de nacimiento</label>
                                                </div>
                                            </div>                                           
                                            <div class="col-sm-4">
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
                                            
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="estado_civil" name="estado_civil">
                                                        <!--option></option-->                                                        
                                                         <?php foreach($estadoCivil as $row){ 
                                                            if ($row->id == $get_user->estado_civil)
                                                                echo '<option value="'.$row->id.'" selected>'. $row->des .'</option>';
                                                            else
                                                                echo '<option value="'.$row->id.' ">'. $row->des .'</option>';                                                            
                                                         } ?> 
                                                    </select>
                                                    <label for="estado_civil">Estado civil</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" maxlength="20" value="<?= $get_user->curp ?>" type="text" id="curp" name="curp">
                                                    <label for="curp">CURP</label>
                                                </div>
                                            </div>   
                                            
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm"  maxlength="60" value="<?= $get_user->lugar_nac ?>" type="text" id="lugar_nac" name="lugar_nac">
                                                    <label for="lugar_nac">Lugar de nacimiento</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="nacionalidad" name="nacionalidad">
                                                        <!--option></option-->                                                        
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
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <legend>Datos laborales</legend>

                                        <div class="form-group">                                            
                                             <div class="col-md-2">
                                                <label class="css-input switch switch-primary">                                                
                                                    <?php if ($get_user->estructura == 0): ?>
                                                        <input type="checkbox" id="estructura" name="estructura" value="estructura" checked>
                                                    <?php else: ?>
                                                        <input type="checkbox" id="estructura" name="estructura" value="estructura">
                                                    <?php endif ?>
                                                    <span></span> Estructura
                                                </label>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" maxlength="40" id="n_expediente" name="n_expediente" value="<?= $get_user->n_expediente ?>">
                                                    <label for="n_expediente">No. Expediente</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="area" name="area">
                                                        <?php foreach($getareas as $row){ 
                                                            if ($row->id == $get_user->area) 
                                                                echo '<option value="'.$row->id.'" selected>'. $row->des .'</option>';
                                                            else
                                                                echo '<option value="'.$row->id.' ">'. $row->des .'</option>';
                                                         } ?> 
                                                    </select>
                                                    <label for="area">Área</label>
                                                </div>
                                            </div>                                            
                                            
                                            <div class="col-sm-4">
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
                                        </div>
                                    </fieldset>

                                    <div class="form-group">
                                        <div class="col-sm-3">
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
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" name="nivel_codigo" maxlength="40" type="text" value="<?= $get_user->nivel_codigo ?>">
                                                <label for="nivel_codigo">Código</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="nivel_status" name="nivel_status">
                                                    <!--option></option-->
                                                    <?php foreach($nivelStatus as $row){ 
                                                        if ($row->id == $get_user->nivel_status) 
                                                            echo '<option value="'.$row->id.'" selected>'. $row->des .'</option>';
                                                        else
                                                            echo '<option value="'.$row->id.' ">'. $row->des .'</option>';
                                                     } ?> 
                                                </select>
                                                <label for="nivel_status">Estatus</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="nivel_codigo_puesto" name="nivel_codigo_puesto">
                                                    <!--option></option-->
                                                    <?php foreach($nivelCodPuesto as $row){ 
                                                      if ($row->id == $get_user->nivel_codigo_puesto) 
                                                            echo '<option value="'.$row->id.'" selected>'. $row->des .'</option>';
                                                        else
                                                            echo '<option value="'.$row->id.' ">'. $row->des .'</option>';
                                                     } ?> 
                                                </select>
                                                <label for="nivel_codigo_puesto">Codigo puesto</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="grado" name="grado">
                                                    <!--option></option-->
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
                                                <input class="form-control input-sm" type="text" maxlength="40" value="<?= $get_user->grado_codigo ?>" id="grado_codigo" name="grado_codigo">
                                                <label for="grado_codigo">Código</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" maxlength="40" name="grado_cedula" value="<?= $get_user->grado_cedula ?>">
                                                <label for="grado_cedula">Cedula</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" maxlength="40" name="grado_iniciales" value="<?= $get_user->grado_iniciales ?>">
                                                <label for="grado_iniciales">Iniciales</label>
                                            </div>
                                        </div>                                        
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" maxlength="80" id="email_cnbv" name="email_cnbv" value="<?= $get_user->email_cnbv ?>" readonly>
                                                <label for="email_cnbv">Correo electronico CNBV</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" maxlength="80" value="<?= $get_user->email_personal ?>" name="email_personal" id="email_personal" name="cpersonal">
                                                <label for="email_personal">Correo electronico personal</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" value="<?= $get_user->celular ?>" maxlength="40" id="celular" name="celular">
                                                <label for="celular">Celular</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" value="<?= $get_user->telefono ?>" maxlength="40" id="telefono" name="telefono">
                                                <label for="telefono">Teléfono</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" value="<?= $get_user->telefono_ext ?>" maxlength="40" id="telefono_ext" name="telefono_ext">
                                                <label for="telefono_ext">Extención</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" value="<?= $get_user->direccion ?>" maxlength="60" id="direccion" name="direccion">
                                                <label for="direccion">Dirección</label>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" value="<?= $get_user->torre ?>" maxlength="40" id="torre" name="torre">
                                                <label for="torre">Torre</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" value="<?= $get_user->piso ?>" maxlength="40" id="piso" name="piso">
                                                <label for="piso">Piso</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" value="<?= $get_user->coordenada ?>" maxlength="40" id="coordenada" name="coordenada">
                                                <label for="coordenada">Coordenada</label>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="col-md-12">
                                        <p class="text-info hidden" id="label_load_file">Cargando archivos...</p>
                                    </div>  
                                     <div class="row">
                                        <div class="col-md-6">
                                            <fieldset>
                                                <legend>Currículum</legend>
                                                <div class="form-group">
                                                    <div class="col-sm-2">
                                                        <?php if (!empty($getDown_curr_url->curr_url)): ?>
                                                            <!--button class="btn btn-info btn-sm" id="btn_curr" type="button"-->
                                                                <a class="btn btn-info btn-sm" id="btn_curr" type="button" href="<?php echo URL .'get_down_file'.'/'. $getDown_curr_url->id_user .'/curr';  ?>">
                                                                  <i class="fa fa-download"></i> Descargar
                                                                </a>
                                                            <!--/button-->
                                                        <?php else: ?>
                                                            <!--button class="btn btn-info btn-sm" id="btn_curr" type="button" disabled-->
                                                                <a class="btn btn-info btn-sm disabled" id="btn_curr" type="button" href="<?php echo URL .'get_down_file'.'/'. $getDown_curr_url->id_user .'/curr';  ?>">
                                                                  <i class="fa fa-download"></i> Descargar
                                                                </a>
                                                            <!--/button-->
                                                        <?php endif ?>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="col-sm-12" for="curr_file">Archivo adjunto</label>
                                                        <div class="col-sm-12">
                                                            <input type="file" class="file_clear" id="curr_file" name="curr_file">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>

                                        <div class="col-md-6">
                                            <fieldset>
                                                <legend>Perfil de puesto</legend>
                                                <div class="form-group">
                                                    <div class="col-sm-2">
                                                        <?php if (!empty($getDown_perfil_url->perfil_url)): ?>
                                                            <!--button class="btn btn-info btn-sm" id="btn_perfil" type="button"-->
                                                                <a class="btn btn-info btn-sm" id="btn_perfil" type="button" href="<?php echo URL .'get_down_file'.'/'. $getDown_curr_url->id_user .'/perfil';  ?>">
                                                                  <i class="fa fa-download"></i> Descargar
                                                                </a>
                                                        <!--/button-->
                                                        <?php else: ?>
                                                            <!--button class="btn btn-info btn-sm" id="btn_perfil" type="button" disabled-->
                                                                <a class="btn btn-info btn-sm disabled" id="btn_perfil" type="button" href="<?php echo URL .'get_down_file'.'/'. $getDown_curr_url->id_user .'/perfil';  ?>">
                                                                  <i class="fa fa-download"></i> Descargar
                                                                </a>
                                                            <!--/button-->
                                                        <?php endif ?>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="col-sm-12" for="perfil_file">Archivo adjunto</label>
                                                        <div class="col-sm-12">
                                                            <input type="file" class="file_clear" name="perfil_file" id="perfil_file">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                   <div class="row">
                                        <div class="col-md-6">
                                            <legend>Desempeño</legend>
                                            <div class="form-group">
                                                <div class="col-sm-2">
                                                    <?php if (!empty($getDown_desempeno_url->desempeno_url)): ?>
                                                        <!--button class="btn btn-info btn-sm" id="btn_desempeno" type="button"-->
                                                            <a class="btn btn-info btn-sm" id="btn_desempeno" type="button" href="<?php echo URL .'get_down_file'.'/'. $getDown_curr_url->id_user .'/desempeno';  ?>">
                                                              <i class="fa fa-download"></i> Descargar
                                                            </a>
                                                    <!--/button-->
                                                    <?php else: ?>
                                                        <!--button class="btn btn-info btn-sm" id="btn_desempeno" type="button" disabled-->
                                                            <a class="btn btn-info btn-sm disabled" id="btn_desempeno" type="button" href="<?php echo URL .'get_down_file'.'/'. $getDown_curr_url->id_user .'/desempeno';  ?>">
                                                              <i class="fa fa-download"></i> Descargar
                                                            </a>
                                                        <!--/button-->
                                                    <?php endif ?>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="col-sm-12" for="desempeno_file">Archivo adjunto</label>
                                                    <div class="col-sm-12">
                                                        <input type="file" class="file_clear" name="desempeno_file" id="desempeno_file">
                                                    </div>
                                                </div>
                                            </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <legend>Fotografia</legend>
                                            <div class="form-group">
                                                <div class="col-sm-2">
                                                    <?php if (!empty($getDown_foto_url->foto_url)): ?>
                                                        <!--button class="btn btn-info btn-sm" id="btn_foto" type="button"-->
                                                        <a class="btn btn-info btn-sm" id="btn_foto" type="button" href="<?php echo URL .'get_down_file'.'/'. $getDown_curr_url->id_user .'/foto';  ?>">
                                                          <i class="fa fa-download"></i> Descargar
                                                        </a>
                                                    <!--/button-->
                                                    <?php else: ?>
                                                        <!--button class="btn btn-info btn-sm" id="btn_foto" type="button" disabled-->
                                                            <a class="btn btn-info btn-sm disabled" id="btn_foto" type="button" href="<?php echo URL .'get_down_file'.'/'. $getDown_curr_url->id_user .'/foto';  ?>">
                                                              <i class="fa fa-download"></i> Descargar
                                                            </a>
                                                        <!--/button-->
                                                    <?php endif ?>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="col-sm-12" for="foto_file">Archivo adjunto</label>
                                                    <div class="col-sm-12">
                                                        <input type="file" class="file_clear" name="foto_file" id="foto_file">
                                                    </div>
                                                </div>
                                            </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">&nbsp;</div>
                                    <div class="row">&nbsp;</div>

                                    <div class="form-group">
                                        <div class="col-xs-12" styel="overflow:hidden"> 

                                            <!--button class="btn btn-sm btn-success hidden" >Guardar Otro</button-->                                                                                   
                                            <button class="btn btn-sm btn-primary" id="btn_datos_gen" type="submit">Actualizar</button>
                                            <button class="btn btn-sm btn-default" id="btn_datos_cancelar" type="reset">Cancelar</button> 
                                            <a class="btn btn-sm btn-success hidden" id="btn_datos_gen_otro" href="<?= URL ?>adm_usuarios_form">Guardar otro usuario</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                     
                                            <span class="hidden"  id="load_datos_gen"> <i class="fa fa-cog fa-spin"></i> </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <?php else: ?>
                            Error al obtener usuario
                            <!--div class="block-content tab-content bg-white"></div-->
                            <?php endif ?>
                            <!-- End Usuario generales -->
                            <!-- Escolaridad -->
                            <div class="tab-pane fade fade-up" id="search-escolaridad">
                                <!-- Agregar -->
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar escolaridad </h3>
                                    </div>
                                    <div class="block-content">
                                        <form class="form-horizontal push-10-t" action="" id="addusuario_escolaridad_form" method="post">

                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm hidden" type="text" value="0" id="id_esc" name="id_esc">                                                    
                                                        <select class="form-control input-sm" id="esc_instituto" name="esc_instituto">
                                                            <!--option></option-->
                                                            <?php foreach($getEsc_Intitucion as $row){ 
                                                              echo '<option value="'.$row->id.'">'. $row->des .'</option>';
                                                             } ?> 
                                                        </select>
                                                        <label for="esc_instituto">Institución</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="esc_titulo" name="esc_titulo">
                                                            <!--option></option-->
                                                            <?php foreach($getEsc_Titulo as $row){ 
                                                              echo '<option value="'.$row->id.'">'. $row->des .'</option>';
                                                             } ?> 
                                                        </select>
                                                        <label for="esc_titulo">Título</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Desde</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-material form-material-primary">
                                                        <input class="js-datepicker form-control" value="01-01-2015" type="text" id="esc_ini_fecha" name="esc_ini_fecha" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">                                                        
                                                        <label class="sr-only" for="esc_ini_fecha">Fecha</label>
                                                    </div>
                                                </div>                                                
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label  for="fdn">Hasta</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-material form-material-primary">
                                                        <input class="js-datepicker form-control" value="01-01-2016" type="text" id="esc_fin_fecha" name="esc_fin_fecha" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">                                                        
                                                        <label class="sr-only" for="esc_fin_fecha">Fecha</label>
                                                    </div>
                                                </div>                                               
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control" value="0" type="text" id="esc_anos" name="esc_anos" placeholder="0" readonly>
                                                        <!--select class="form-control input-sm" id="esc_anos" name="esc_anos">
                                                            <?php for ($i=1; $i < 11 ; $i++): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                        </select-->
                                                        <label for="esc_anos">Años</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="esc_doc" name="esc_doc">   
                                                            <!--option></option-->                            
                                                            <?php foreach($getEsc_doc as $row){ 
                                                              echo '<option value="'.$row->id.'">'. $row->des .'</option>';
                                                             } ?> 
                                                        </select>
                                                        <label for="esc_doc">Documento obtenido</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="esc_estatus" name="esc_estatus">
                                                            <!--option></option-->
                                                            <?php foreach($getEsc_estatus as $row){ 
                                                              echo '<option value="'.$row->id.'">'. $row->des .'</option>';
                                                             } ?> 
                                                        </select>
                                                        <label for="esc_estatus">Estatus</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-sm btn-primary" id="btn_datos_esc" type="submit">Guardar</button>
                                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span class="hidden"  id="load_datos_esc"> <i class="fa fa-cog fa-spin"></i> </span>
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
                                        <h2 class="push-10"> <span id="label_find_esc">0</span>  <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed" id="table_esc">
                                        <thead>
                                            <tr>
                                                <th class="text-center hidden"></th>
                                                <th class="text-center">#</th>
                                                <th class="text-left">Institución</th>
                                                <th class="text-left">Título</th>
                                                <th class="text-center">Desde</th>
                                                <th class="text-center">Hasta</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Años en la carrera">Años</th>
                                                <th class="text-left" data-toggle="tooltip" data-placement="top" title="Documento obtenido">Documento</th>
                                                <th class="text-center">Estatus</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>  
                                        <?php foreach ($get_user_esc as $key => $value): ?> 
                                            <tr id="id_esc_<?= $value->id_esc ?>">
                                                <td class="hidden" id="<?= $value->id_esc ?>"></td>
                                                <td> <?= $key+1 ?> </td>
                                                <td class="text-left"><?= $value->esc_instituto ?></td>
                                                <td class="text-left"><?= $value->esc_titulo ?></td>
                                                <td class="text-center"><?= $value->esc_ini_fecha ?></td>
                                                <td class="text-center"><?= $value->esc_fin_fecha ?></td>
                                                <td class="text-center"><?= $value->esc_anos ?></td>
                                                <td class="text-left"><?= $value->documento ?></td>
                                                <td class="text-center"><?= $value->esc_estatus ?></td>                                             
                                                <td class="text-center" > 
                                                    <div class="btn-group">
                                                        <span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editEscolaridaform('<?= $value->id_esc ?>')" title="Editar" >
                                                            <i class="fa fa-pencil"></i>
                                                        </span>
                                                        <button class="btn btn-danger btn-xs" type="button"  onclick="delEscolaridapar('<?= $value->id_esc ?>')" data-toggle="tooltip" data-placement="top" title="Eliminar">
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
                            <!-- Habilidades -->
                            <div class="tab-pane fade fade-up" id="search-habilidades">
                                <!-- Agregar -->
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar habilidad</h3>
                                    </div>
                                    <div class="block-content">
                                        <form class="form-horizontal push-10-t" action="#" method="post" id="addusuario_habilidad_form">

                                            <div class="form-group">
                                                <div class="">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm hidden" type="text" id="id_hab_form" name="id_hab_form" value="">
                                                        <input class="form-control input-sm hidden" type="text" id="hab_habilidad_des" value="Habilidad 1" maxlength="60" name="hab_habilidad_des">
                                                        <!--label for="hab_habilidad_des">Habilidad</label-->
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="hab_habilidad" name="hab_habilidad">
                                                            <!--option></option-->
                                                            <?php foreach($getHab_habilidad as $row){ 
                                                              echo'<option value="'.$row->id.'">'. $row->des .'</option>';
                                                             } ?>                                                               
                                                        </select>
                                                        <label for="hab_habilidad">Habilidad</label>
                                                    </div>
                                                </div>
                                            <!--/div>

                                            <div class="form-group"-->
                                                <div class="col-sm-3">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="hab_nivel" name="hab_nivel">
                                                            <!--option></option-->
                                                            <?php foreach($getHab_nivel as $row){ 
                                                              echo'<option value="'.$row->id.'">'. $row->des .'</option>';
                                                             } ?>   
                                                        </select>
                                                        <label for="hab_nivel">Nivel</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="hab_anos" name="hab_anos">
                                                            <!--option></option-->
                                                            <?php for ($i=1; $i < 11 ; $i++): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="hab_anos">Años</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-sm btn-primary" id="btn_datos_hab" type="submit">Guardar</button>
                                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                                    <span class="hidden"  id="load_datos_hab"> <i class="fa fa-cog fa-spin"></i> </span>
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
                                        <h2 class="push-10"> <span id="label_find_hab">0</span> <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed" id="table_hab">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-left">Habilidad</th>
                                                <th class="text-center">Nivel</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Años de experiencia">Años</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($get_user_hab as $key => $value): ?>                                                 
                                                  <tr id="id_hab_<?= $value->id_hab ?>">
                                                      <td class="text-center"><?= $key+1 ?></td>
                                                      <td class="text-left hidden"><?= $value->hab_habilidad_des ?></td>
                                                      <td class="text-left"><?= $value->hab_habilidad ?></td>
                                                      <td class="text-center"><?= $value->hab_nivel ?></td>
                                                      <td class="text-center"><?= $value->hab_anos ?></td>

                                                      <td class="text-center" > <div class="btn-group">
                                                      <span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editHabilidadform('<?= $value->id_hab ?>')" title="Editar" >
                                                      <i class="fa fa-pencil"></i>
                                                      </span>
                                                      <button class="btn btn-danger btn-xs" type="button"  onclick="delHabilidadconfirm('<?= $value->id_hab ?>')" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                      <i class="fa fa-times"></i>
                                                      </button>
                                                      </div></td>              
                                                  </tr>
                                            <?php endforeach ?> 
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Lista -->
                            </div>
                            <!-- End Habilidades -->
                            <!-- Certificaciones -->
                            <div class="tab-pane fade fade-up" id="search-certificaciones">
                                <!-- Agregar -->
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar certificación</h3>
                                    </div>
                                    <div class="block-content">
                                        <form class="form-horizontal push-10-t" action="#" method="post" id="addusuario_certificacion_form">

                                            <div class="form-group">
                                                <div class="">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm hidden" type="text" id="id_cer_form" name="id_cer_form" >
                                                        <input class="form-control input-sm hidden" type="text" id="cer_certificacion_des" value="Certificado 1" maxlength="60" name="cer_certificacion_des">
                                                        <!--label for="cer_certificacion_des">Certificación</label-->
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="cer_certificacion" name="cer_certificacion">
                                                            <!--option></option-->
                                                            <?php foreach($getCer_certificacion as $row){ 
                                                              echo'<option value="'.$row->id.'">'. $row->des .'</option>';
                                                             } ?>   
                                                        </select>
                                                        <label for="cer_certificacion">Certificación</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="cer_ano" name="cer_ano">
                                                            <!--option></option-->
                                                            <?php for ($i=1940; $i < 2017 ; $i++): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="cer_ano">Año</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-sm btn-primary" id="btn_submit_cer" type="submit">Guardar</button>
                                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                                    <span class="hidden"  id="load_datos_cer"> <i class="fa fa-cog fa-spin"></i> </span>
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
                                        <h2 class="push-10"> <span id="label_find_cer">0</span> <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed" id="table_cer">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-left">Certificación</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Años de certificación">Año</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($get_user_cer as $key => $value): ?>                                                 
                                              <tr id="id_cer_<?= $value->id_cer ?>">
                                                  <td class="text-center"><?= $key+1 ?></td>
                                                  <td class="text-left hidden"><?= $value->cer_certificacion_des ?></td>
                                                  <td class="text-left"><?= $value->cer_certificacion ?></td>
                                                  <td class="text-center"><?= $value->cer_ano ?></td>

                                                  <td class="text-center" > <div class="btn-group">
                                                  <span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editCertificacion('<?= $value->id_cer ?>')" title="Editar" >
                                                    <i class="fa fa-pencil"></i>
                                                  </span>
                                                  <button class="btn btn-danger btn-xs" type="button"  onclick="deleteCertificacionconfirm('<?= $value->id_cer ?>')" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                  <i class="fa fa-times"></i>
                                                  </button>
                                                  </div></td>              
                                              </tr>
                                            <?php endforeach ?> 
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Lista -->
                            </div>
                            <!-- End Certificaciones -->
                            <!-- Cursos -->
                            <div class="tab-pane fade fade-up" id="search-cursos">
                                <!-- Agregar -->
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar curso</h3>
                                    </div>
                                    <div class="block-content">
                                        <form class="form-horizontal push-10-t" action="#" method="post" id="addusuario_curso_form">

                                            <div class="form-group">
                                                <div class="">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm hidden" type="text" id="id_cur_form" maxlength="60" name="id_cur_form">
                                                        <input class="form-control input-sm hidden" type="text" id="cur_curso_des" maxlength="60" value="Curso 1" name="cur_curso_des">
                                                        <!--label for="cur_curso_des">Curso</label-->
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="cur_curso" name="cur_curso">
                                                            <!--option></option-->
                                                            <?php foreach($getCur_curso as $row){ 
                                                              echo'<option value="'.$row->id.'">'. $row->des .'</option>';
                                                             } ?>  
                                                        </select>
                                                        <label for="cur_curso">Curso</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Inicio</label>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-5">
                                                    <div class="form-material form-material-primary">
                                                        <input class="js-datepicker form-control" type="text" value="01-01-2015" id="cur_ini_fecha" name="cur_ini_fecha" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">                                                        
                                                        <label class="sr-only" for="cur_ini_fecha">Fecha</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Fin</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-material form-material-primary">
                                                        <input class="js-datepicker form-control" type="text" value="01-01-2016" id="cur_fin_fecha" name="cur_fin_fecha" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">                                                        
                                                        <label class="sr-only" for="cur_fin_fecha">Fecha</label>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="cur_duracion" name="cur_duracion">
                                                            <?php for ($i=10; $i <= 120 ; $i += 10 ): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="cur_duracion">Duración (Horas)</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-10">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="cur_instituto" name="cur_instituto">
                                                            <!--option></option-->
                                                            <?php foreach($getCur_institucion as $row){ 
                                                              echo'<option value="'.$row->id.'">'. $row->des .'</option>';
                                                             } ?> 
                                                        </select>
                                                        <label for="cur_instituto">Institución que imparte el curso</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-sm btn-primary" id="btn_submit_cur" type="submit">Guardar</button>
                                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                                    <span class="hidden"  id="load_datos_cur"> <i class="fa fa-cog fa-spin"></i> </span>
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
                                        <h2 class="push-10"> <span id="label_find_cur">0</span> <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed" id="table_cur">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-left">Curso</th>
                                                <th class="text-center">Inicio</th>
                                                <th class="text-center">Fin</th>
                                                <th class="text-center">Duración</th>
                                                <th class="text-left">Institución</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach ($get_user_cur as $key => $value): ?>                                                 
                                              <tr id="id_cur_<?= $value->id_cur ?>">
                                                  <td class="text-center"><?= $key+1 ?></td>
                                                  <td class="text-left hidden"><?= $value->cur_curso_des ?></td>
                                                  <td class="text-left"><?= $value->cur_curso ?></td>
                                                  <td class="text-center"><?= $value->cur_ini_fecha ?></td>
                                                  <td class="text-center"><?= $value->cur_fin_fecha ?></td>
                                                  <td class="text-center"><?= $value->cur_duracion ?></td>
                                                  <td class="text-left"><?= $value->cur_instituto ?></td>
                                                  <td class="text-center" > <div class="btn-group">
                                                  <span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editCursoform('<?= $value->id_cur ?>')" title="Editar" >
                                                    <i class="fa fa-pencil"></i>
                                                  </span>
                                                  <button class="btn btn-danger btn-xs" type="button"  onclick="deleteCursoconfirm('<?= $value->id_cur ?>')" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                  <i class="fa fa-times"></i>
                                                  </button>
                                                  </div></td>          
                                              </tr>
                                            <?php endforeach ?>                  
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Lista -->
                            </div>
                            <!-- End Cursos -->
                            <!-- Experiencia profesional -->
                            <div class="tab-pane fade fade-up" id="search-exp">
                                <!-- Agregar -->
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar experiencia profesional</h3>
                                    </div>
                                    <div class="block-content">
                                        <form class="form-horizontal push-10-t" action="#" method="post" id="addusuario_experiencia_form">

                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm hidden" type="text" maxlength="60" id="id_exp_form" name="id_exp_form">
                                                        <input class="form-control input-sm" type="text" maxlength="60" id="exp_empresa" value="Empresa" name="exp_empresa">
                                                        <label for="exp_empresa">Empresa</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm" type="text" maxlength="60" id="exp_giro" value="Giro" name="exp_giro">
                                                        <label for="exp_giro">Giro</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm" type="text" maxlength="60" id="exp_puesto" value="Puesto" name="exp_puesto">
                                                        <label for="exp_puesto">Puesto</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Desde</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="js-datepicker form-control" value="01-01-2015" type="text" id="exp_ini_fecha" name="exp_ini_fecha" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">                                                        
                                                        <label class="sr-only" for="exp_ini_fecha">Fecha</label>
                                                    </div>
                                                </div>                                               
                                               
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Hasta</label>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-5">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="js-datepicker form-control" value="01-01-2016" type="text" id="exp_fin_fecha" name="exp_fin_fecha" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">                                                        
                                                        <label class="sr-only" for="exp_fin_fecha">Fecha</label>
                                                    </div>
                                                </div>  
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="form-material form-material-primary floating">
                                                        <textarea class="form-control input-sm" id="exp_actividades" maxlength="1000" name="exp_actividades" rows="6">Resumen de activades</textarea>
                                                        <label for="exp_actividades">Actividades</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-sm btn-primary" id="btn_submit_exp" type="submit">Guardar</button>
                                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                                    <span class="hidden"  id="load_datos_exp"> <i class="fa fa-cog fa-spin"></i> </span>
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
                                        <h2 class="push-10"> <span id="label_find_exp">0</span> <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed" id="table_exp">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-left">Empresa</th>
                                                <th class="text-left">Giro</th>
                                                <th class="text-left">Puesto</th>
                                                <th class="text-center">Desde</th>
                                                <th class="text-center">Hasta</th>
                                                <th class="text-left">Actividades</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($get_user_exp as $key => $value): ?>                                                 
                                              <tr id="id_exp_<?= $value->id_exp ?>">
                                                  <td class="text-center"><?= $key+1 ?></td>
                                                  <td class="text-left"><?= $value->exp_empresa ?></td>
                                                  <td class="text-left"><?= $value->exp_giro ?></td>
                                                  <td class="text-left"><?= $value->exp_puesto ?></td>
                                                  <td class="text-center"><?= $value->exp_ini_fecha ?></td>
                                                  <td class="text-center"><?= $value->exp_fin_fecha ?></td>
                                                  <td class="text-center"><?= $value->exp_actividades ?></td>
                                                  <td class="text-center" > <div class="btn-group">
                                                  <span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editExperienciaform('<?= $value->id_exp ?>')" title="Editar" >
                                                    <i class="fa fa-pencil"></i>
                                                  </span>
                                                  <button class="btn btn-danger btn-xs" type="button"  onclick="deleteExperienciaconfirm('<?= $value->id_exp ?>')" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                  <i class="fa fa-times"></i>
                                                  </button>
                                                  </div></td>          
                                              </tr>
                                            <?php endforeach ?>  
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Lista -->
                            </div>
                            <!-- End Experiencia profesional -->
                            <!-- Áreas de experiencia -->
                            <div class="tab-pane fade fade-up" id="search-areas">
                                <!-- Agregar -->
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar área de experiencia</h3>
                                    </div>
                                    <div class="block-content">
                                        <form class="form-horizontal push-10-t" action="#" method="post" id="addusuario_area_form">

                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm hidden" type="text" id="id_area_form" name="id_area_form">
                                                        <select class="form-control input-sm" id="area_area" name="area_area">
                                                            <!--option></option-->
                                                            <?php foreach($getArea_area as $row){ 
                                                              echo'<option value="'.$row->id.'">'. $row->des .'</option>';
                                                             } ?> 
                                                        </select>
                                                        <label for="area_area">Área</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="area_subarea" name="area_subarea">
                                                            <!--option></option-->
                                                            <?php foreach($getArea_subarea as $row){ 
                                                              echo'<option value="'.$row->id.'">'. $row->des .'</option>';
                                                             } ?> 
                                                        </select>
                                                        <label for="area_subarea">Subárea</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="area_tiempo" name="area_tiempo">
                                                            <!--option></option-->
                                                            <?php foreach($getArea_tiempo as $row){ 
                                                              echo'<option value="'.$row->id.'">'. $row->des .'</option>';
                                                             } ?> 
                                                        </select>
                                                        <label for="area_tiempo">Tiempo</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-sm btn-primary" id="btn_submit_area" type="submit">Guardar</button>
                                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span class="hidden"  id="load_datos_area"> <i class="fa fa-cog fa-spin"></i> </span>
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
                                        <h2 class="push-10"> <span id="label_find_area">0</span> <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed" id="table_area">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-left">Área</th>
                                                <th class="text-left">Subárea</th>
                                                <th class="text-left">Tiempo</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php foreach ($get_user_area as $key => $value): ?>                                                 
                                              <tr id="id_area_<?= $value->id_area ?>">
                                                  <td class="text-center"><?= $key+1 ?></td>
                                                  <td class="text-left"><?= $value->area_area ?></td>
                                                  <td class="text-left"><?= $value->sub_area ?></td>
                                                  <td class="text-left"><?= $value->area_tiempo ?></td>

                                                  <td class="text-center" > <div class="btn-group">
                                                  <span class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" onclick="editAreaform('<?= $value->id_area ?>')" title="Editar" >
                                                    <i class="fa fa-pencil"></i>
                                                  </span>
                                                  <button class="btn btn-danger btn-xs" type="button"  onclick="deleteAreaconfirm('<?= $value->id_area ?>')" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                  <i class="fa fa-times"></i>
                                                  </button>
                                                  </div></td>              
                                              </tr>
                                            <?php endforeach ?>                                                                                        
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Lista -->
                            </div>
                            <!-- End Certificaciones -->
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




        <!-- Page JS Plugins -->
        <script src="<?=JS ?>plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="<?=JS ?>plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="<?=JS ?>plugins/jquery-validation/validateMsessage.js" type="text/javascript"></script>

        <!-- Page JS Code -->
        <script src="<?=JS ?>pages/base_forms_wizard.js"></script>

        <!-- Page JS Code validaciones -->
        <script src="<?=URL ?>content/vendor/js/usuarios.edit.js"></script>

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

        <script src="<?=JS ?>plugins/ajaxfileupload.js"></script>

        <!-- Page JS Code -->
        <script>
            $(function () {
                // Init page helpers (BS Datepicker + BS Datetimepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                App.initHelpers(['datepicker', 'datetimepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            $("#addusuariogenform").submit(function(e){
                //alert("cascd");
            })
           


      });
        </script>

        <!-- Modal confirmacion usuario -->
        <div class="modal fade" id="modal_confirmar_add_user" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <p>Editar usuario?</p>
                            </div>             
                            <div class="clearfix"></div>               
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-sm btn-primary" onclick="addusuario_confirm()" type="button" data-dismiss="modal"><i class="fa fa-check"></i>Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal confirmacion usuario -->

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

        <!-- Pop Out Modal -->
        <div class="modal fade" id="modal_info_add_user" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <p>¡Por favor, agregue usuario!</p>
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

        <!-- Para la emision de alertas en errores de file -->
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