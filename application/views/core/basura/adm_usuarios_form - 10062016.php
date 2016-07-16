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
                                <li><a class="link-effect" href="adm_usuarios">Usuarios</a></li>
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
                            <div class="tab-pane fade fade-up in active" id="search-datos">
                    
                                <!--form class="js-validation-material form-horizontal push-10-t" action="#" method="post" -->
                                <?= form_open_multipart('', 'id="addusuariogenform" class="js-validation-user-general form-horizontal push-10-t" ');?>
                                    <fieldset>
                                        <legend>Datos generales</legend>

                                        <div class="form-group">
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm hidden" type="text" id="id_user" name="id_user" value="">
                                                    <input class="form-control input-sm" type="text" id="numero" name="numero" value="123">
                                                    <label for="numero">#</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" id="usuario" name="usuario" type="text" value="usuario">
                                                    <label for="usuario">Usuario</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" id="pass" name="pass" type="password" value="123456">
                                                    <label for="pass">Contraseña</label>
                                                </div>
                                            </div>
                                            <!--div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" id="pass" name"pass" type="text">
                                                    <label for="pass">Contraseña</label>
                                                </div>
                                            </div-->
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="nombre" name="nombre" value="nombre usuario">
                                                    <label for="nombre">Nombre</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="apellidop" name="apellidop" value="apellido usuario">
                                                    <label for="apellidop">Apellido Paterno</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="apellidom" name="apellidom" value="apellidom usuario">
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
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="fecha_dia" name="fecha_dia">
                                                        <option value = '1'>1</option>
                                                        <?php for ($i=1; $i < 32 ; $i++): ?> 
                                                        <option value="<?= $i ?>"><?= $i ?></option>
                                                        <?php endfor; ?>
                                                    </select>
                                                    <label for="fecha_dia">Día</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="fecha_mes" name="fecha_mes">
                                                        <option value = '1'>1</option>
                                                        <?php for ($i=1; $i < 32 ; $i++): ?> 
                                                        <option value="<?= $i ?>"><?= $i ?></option>
                                                        <?php endfor; ?>
                                                    </select>
                                                    <label for="fecha_mes">Mes</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="fecha_ano" name="fecha_ano">
                                                        <option value = '1990'>1990</option>
                                                            <?php for ($i=1940; $i < 2017 ; $i++): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                    </select>
                                                    <label for="fecha_ano">Año</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="sexo" name="sexo">
                                                        <option></option>
                                                        <option value="0">Femenino</option>
                                                        <option value="1">Masculino</option>
                                                    </select>
                                                    <label for="sexo">Sexo</label>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="estado_civil" name="estado_civil">
                                                        <option></option>                                                        
                                                         <?php foreach($estadoCivil as $row){ 
                                                          echo '<option value="'.$row->id.'">'. $row->des .'</option>';
                                                         } ?> 
                                                    </select>
                                                    <label for="estado_civil">Estado civil</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="curp" name="curp">
                                                    <label for="curp">CURP</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="lugar_nac" name="lugar_nac">
                                                    <label for="lugar_nac">Lugar de nacimiento</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="nacionalidad" name="nacionalidad">
                                                        <option></option>                                                        
                                                        <?php foreach($nacionalidad as $row){ 
                                                          echo '<option value="'.$row->id.'">'. $row->des .'</option>';
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
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="n_expediente" name="n_expediente" value="6">
                                                    <label for="n_expediente">No. Expediente</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="area" name="area">
                                                        <?php foreach($getareas as $row){ 
                                                          echo '<option value="'.$row->id.'">'. $row->des .'</option>';
                                                         } ?> 
                                                    </select>
                                                    <label for="area">Área</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="cargo" name="cargo">                                                        
                                                        <?php foreach($getcargos as $row){ 
                                                          echo '<option value="'.$row->id.'">'. $row->des .'</option>';
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
                                                          echo '<option value="'.$row->id.'">'. $row->des .'</option>';
                                                         } ?> 
                                                </select>
                                                <label for="nivel">Nivel</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" name="nivel_codigo" type="text" value="NA1">
                                                <label for="nivel_codigo">Código</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="nivel_status" name="nivel_status">
                                                    <option></option>
                                                    <?php foreach($nivelStatus as $row){ 
                                                          echo '<option value="'.$row->id.'">'. $row->des .'</option>';
                                                         } ?> 
                                                </select>
                                                <label for="nivel_status">Estatus</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="nivel_codigo_puesto" name="nivel_codigo_puesto">
                                                    <option></option>
                                                    <?php foreach($nivelCodPuesto as $row){ 
                                                      echo '<option value="'.$row->id.'">'. $row->des .'</option>';
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
                                                    <option></option>
                                                    <?php foreach($GradoEstudio as $row){ 
                                                      echo '<option value="'.$row->id.'">'. $row->des .'</option>';
                                                     } ?> 
                                                </select>
                                                <label for="grado">Grado</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" value="Lic" id="grado_codigo" name="grado_codigo">
                                                <label for="grado_codigo">Código</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" name="grado_celula" value="1234567890">
                                                <label for="grado_celula">Cedula</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" name="grado_iniales" value="EMM">
                                                <label for="grado_iniales">Iniciales</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" name="email_cnbv" value="eduardo.martinez@cnbv.com">
                                                <label for="email_cnbv">Correo electronico CNBV</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" name="email_personal" id="email_personal" name="cpersonal">
                                                <label for="email_personal">Correo electronico personal</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="cedula" name="cedula">
                                                <label for="cedula">Celular</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="telefono" name="telefono">
                                                <label for="telefono">Teléfono</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="telefono_ext" name="telefono_ext">
                                                <label for="telefono_ext">Extención</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="direccion" name="direccion">
                                                <label for="direccion">Dirección</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="torre" name="torre">
                                                <label for="torre">Torre</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="piso" name="piso">
                                                <label for="piso">Piso</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="coordenada" name="coordenada">
                                                <label for="coordenada">Coordenada</label>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <fieldset>
                                        <legend>Currículum</legend>
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" name="curr_desc">
                                                    <label for="curr_desc">Descripción</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="col-sm-12" for="example-file-input">Archivo adjunto</label>
                                                <div class="col-sm-12">
                                                    <input type="file" id="curr_file" name="curr_file">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <legend>Perfil de puesto</legend>
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" name="perfil_desc">
                                                    <label for="perfil_desc">Descripción</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="col-sm-12" for="perfil_file">Archivo adjunto</label>
                                                <div class="col-sm-12">
                                                    <input type="file" name="perfil_file">
                                                </div>
                                            </div>            
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <legend>Desempeño</legend>
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" name="desempeno_des">
                                                    <label for="desempeno_des">Descripción</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="col-sm-12" for="desempeno_file">Archivo adjunto</label>
                                                <div class="col-sm-12">
                                                    <input type="file" name="desempeno_file">
                                                </div>
                                            </div>            
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <legend>Fotografía</legend>
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" name="foto_des">
                                                    <label for="foto_des">Descripción</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="col-sm-12" for="foto_file">Archivo adjunto</label>
                                                <div class="col-sm-12">
                                                    <input type="file" name="foto_file">
                                                </div>
                                            </div>            
                                        </div>
                                    </fieldset>

                                    <div class="form-group">
                                        <div class="col-xs-12" styel="overflow:hidden"> 

                                            <button class="btn btn-sm btn-success hidden" >Guardar Otro</button>                                                                                   
                                            <button class="btn btn-sm btn-primary" id="btn_datos_gen" type="submit">Guardar</button>
                                            <button class="btn btn-sm btn-default" id="btn_datos_cancelar" type="reset">Cancelar</button> 
                                            <a class="btn btn-sm btn-success hidden" id="btn_datos_gen_otro" href="javascript:location.reload()">Guardar Otro</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                     
                                            <span class="hidden"  id="load_datos_gen"> <i class="fa fa-cog fa-spin"></i> </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
                                        <h3 class="block-title">Agregar escolaridad</h3>
                                    </div>
                                    <div class="block-content">
                                        <form class="form-horizontal push-10-t" action="" id="addusuario_escolaridad_form" method="post">

                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm hidden" type="text" id="id_esc" name="id_esc">                                                    
                                                        <select class="form-control input-sm" id="esc_instituto" name="esc_instituto">
                                                            <option value="1">UNAM</option>
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
                                                            <option value="1">Doctorado</option>
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
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="esc_ini_dia" name="esc_ini_dia">
                                                            <option value = '01'>01</option>
                                                            <?php for ($i=1; $i < 32 ; $i++): ?> 
                                                            <option value="<?php printf("%02d",$i); ?>"><?php printf("%02d",$i); ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="esc_ini_dia">Día</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="esc_ini_mes" name="esc_ini_mes">
                                                            <option value = '01'>01</option>
                                                            <?php for ($i=1; $i < 13 ; $i++): ?> 
                                                            <option value="<?php printf("%02d",$i); ?>"><?php printf("%02d",$i); ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="esc_ini_mes">Mes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="esc_ini_ano" name="esc_ini_ano">
                                                            <option value = '2000'>2000</option>
                                                            <?php for ($i=1940; $i < 2017 ; $i++): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="esc_ini_ano">Año</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Hasta</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="esc_fin_dia" name="esc_fin_dia">
                                                            <option value = '01'>01</option>
                                                            <?php for ($i=1; $i < 32 ; $i++): ?> 
                                                            <option value="<?php printf("%02d",$i); ?>"><?php printf("%02d",$i); ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="esc_fin_dia">Día</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="esc_fin_mes" name="esc_fin_mes">
                                                            <option value = '01'>01</option>
                                                            <?php for ($i=1; $i < 13 ; $i++): ?> 
                                                            <option value="<?php printf("%02d",$i); ?>"><?php printf("%02d",$i); ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="esc_fin_mes">Mes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="esc_fin_ano" name="esc_fin_ano">
                                                            <option value = '2004'>2004</option>
                                                            <?php for ($i=1940; $i < 2017 ; $i++): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="esc_fin_ano">Año</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="esc_anos" name="esc_anos">
                                                            <option value="1">1</option>
                                                            <?php for ($i=1; $i < 11 ; $i++): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="esc_anos">Años</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="esc_doc" name="esc_doc">
                                                            <option value="1"> Título</option>
                                                            <option value="1">Título</option>
                                                            <option value="2">Cédula</option>
                                                            <option value="3">Otro</option>
                                                        </select>
                                                        <label for="esc_doc">Documento obtenido</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="esc_estatus" name="esc_estatus">
                                                            <option value="1">Terminado</option>
                                                            <option value="1">Terminado</option>
                                                            <option value="2">En curso</option>
                                                            <option value="3">Otro</option>
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
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm hidden" type="text" id="id_hab_form" name="id_hab_form">
                                                        <input class="form-control input-sm" type="text" id="hab_habilidad_des" name="hab_habilidad_des">
                                                        <label for="hab_habilidad_des">Habilidad</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="hab_habilidad" name="hab_habilidad">
                                                            <option></option>
                                                            <?php foreach($getHab_habilidad as $row){ 
                                                              echo'<OPTION VALUE="'.$row->id.'">'. $row->des .'</OPTION>';
                                                             } ?>                                                               
                                                        </select>
                                                        <label for="hab_habilidad">Habilidad</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-3">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="hab_nivel" name="hab_nivel">
                                                            <option></option>
                                                            <option value="1">Básico</option>
                                                            <option value="2">Intermedio</option>
                                                            <option value="3">Experto</option>
                                                        </select>
                                                        <label for="hab_nivel">Nivel</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="hab_anos" name="hab_anos">
                                                            <option></option>
                                                            <option value="1">10</option>
                                                            <option value="2">9</option>
                                                            <option value="3">8</option>
                                                            <option value="4">7</option>
                                                            <option value="5">6</option>
                                                            <option value="6">5</option>
                                                            <option value="7">4</option>
                                                            <option value="8">3</option>
                                                            <option value="9">2</option>
                                                            <option value="10">1</option>
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
                                                <div class="col-sm-5">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm hidden" type="text" id="id_cer_form" name="id_cer_form" >
                                                        <input class="form-control input-sm" type="text" id="cer_certificacion_des" name="cer_certificacion_des">
                                                        <label for="cer_certificacion_des">Certificación</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="cer_certificacion" name="cer_certificacion">
                                                            <option></option>
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
                                                            <option></option>
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
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm hidden" type="text" id="id_cur_form" name="id_cur_form">
                                                        <input class="form-control input-sm" type="text" id="cur_curso_des" name="cur_curso_des">
                                                        <label for="cur_curso_des">Curso</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="cur_curso" name="cur_curso">
                                                            <option></option>
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
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="cur_ini_dia" name="cur_ini_dia">
                                                            <option value = '1'>1</option>
                                                            <?php for ($i=1; $i < 32 ; $i++): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="cur_ini_dia">Día</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="cur_ini_mes" name="cur_ini_mes">
                                                            <option value = '1'>1</option>
                                                            <?php for ($i=1; $i < 13 ; $i++): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="cur_ini_mes">Mes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="cur_ini_ano" name="cur_ini_ano">
                                                            <option value = '1940'>1940</option>
                                                            <?php for ($i=1940; $i < 2017 ; $i++): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="cur_ini_ano">Año</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Fin</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="cur_fin_dia" name="cur_fin_dia">
                                                            <option value = '1'>1</option>
                                                            <?php for ($i=1; $i < 13 ; $i++): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="cur_fin_dia">Día</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="cur_fin_mes" name="cur_fin_mes">
                                                            <option value = '1'>1</option>
                                                            <?php for ($i=1; $i < 13 ; $i++): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="cur_fin_mes">Mes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="cur_fin_ano" name="cur_fin_ano">
                                                            <option value = '1940'>1940</option>
                                                            <?php for ($i=1940; $i < 2017 ; $i++): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="cur_fin_ano">Año</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="cur_duracion" name="cur_duracion">
                                                            <option></option>                                                            
                                                            <option value="1">120</option>
                                                            <option value="2">100</option>
                                                            <option value="3">80</option>
                                                            <option value="4">60</option>
                                                            <option value="5">40</option>
                                                            <option value="6">20</option>
                                                            <option value="7">10</option>
                                                        </select>
                                                        <label for="cur_duracion">Duración (Horas)</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-10">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="cur_instituto" name="cur_instituto">
                                                            <option></option>
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
                                                        <input class="form-control input-sm" type="text" id="exp_empresa" name="exp_empresa">
                                                        <label for="exp_empresa">Empresa</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm" type="text" id="exp_giro" name="exp_giro">
                                                        <label for="exp_giro">Giro</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm" type="text" id="exp_puesto" name="exp_puesto">
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
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="exp_ini_dia" name="exp_ini_dia">
                                                            <option value = '1'>1</option>
                                                            <?php for ($i=1; $i < 13 ; $i++): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="exp_ini_dia">Día</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="exp_ini_mes" name="exp_ini_mes">
                                                            <option value = '1'>1</option>
                                                            <?php for ($i=1; $i < 32 ; $i++): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="exp_ini_mes">Mes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="exp_ini_ano" name="exp_ini_ano">
                                                            <option value = '2000'>2000</option>
                                                            <?php for ($i=1940; $i < 2017 ; $i++): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="exp_ini_ano">Año</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Hasta</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="exp_fin_dia" name="exp_fin_dia">
                                                        <option value = '1'>1</option>
                                                            <?php for ($i=1; $i < 13 ; $i++): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="exp_fin_dia">Día</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="exp_fin_mes" name="exp_fin_mes">
                                                            <option value = '1'>1</option>
                                                            <?php for ($i=1; $i < 32 ; $i++): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="exp_fin_mes">Mes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="exp_fin_ano" name="exp_fin_ano">
                                                            <option value = '2004'>2004</option>
                                                            <?php for ($i=1940; $i < 2017 ; $i++): ?> 
                                                            <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                        <label for="exp_fin_ano">Año</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="form-material form-material-primary floating">
                                                        <textarea class="form-control input-sm" id="exp_actividades" name="exp_actividades" rows="6"></textarea>
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
                                                        <select class="form-control input-sm" id="area_area" name="area_area">
                                                            <option></option>
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
                                                            <option></option>
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
                                                            <option></option>
                                                            <option value="1">Menos de 1 año</option>
                                                            <option value="2">De 1 a 3 años</option>
                                                            <option value="3">De 4 a 5 años</option>
                                                            <option value="4">De 6 a 8 años</option>
                                                            <option value="5">De 9 a 15 años</option>
                                                            <option value="6">Más de 15 años</option>
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
        <script src="assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/validateMsessage.js" type="text/javascript"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/base_forms_wizard.js"></script>

        <!-- Page JS Code validaciones -->
        <script src="content/vendor/js/usuarios.js"></script>

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
            $("#addusuariogenform").submit(function(e){
                //alert("cascd");
            })
           


      });
        </script>
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
                        <button class="btn btn-sm btn-warning" id="btn_del_all" type="button"><i class="fa fa-check"></i>Elimnar</button>
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

    </body>
</html>