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

        <!-- Page JS Plugins -->
        <script src="<?=JS ?>plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="<?=JS ?>plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?=JS ?>pages/base_forms_wizard.js"></script>

        <script src="../content/vendor/js/pat/pat_add_equipo_trabajo.js"></script>
    </head>
    <body>
        <div class="hidden" id="sup_bandera_url"> <?=URL ?> </div>
        <div class="hidden" id="id_revision"> <?=$id_revision ?> </div>

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
                                Detalle <small>Equipo de trabajo</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Planeación anual</li>
                                <li><a class="link-effect" href="">Equipo de trabajo</a></li>
                                <li>Detalle</li>
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
                                <a href="#search-team">Equipo de trabajo</a>
                            </li>
                            <li>
                                <a href="#search-auditors">Auditores</a>
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
                            <!-- Equipo -->
                            <div class="tab-pane fade fade-up in active" id="search-team">
                                <div class="row">
                                    <div class="col-md-12">
                                            <div class="block-content block-content-full bg-primary clearfix">
                                                <i class="si si-users fa-2x text-white pull-right"></i>
                                                <span class="h4 font-w700 text-white"></span>
                                                <span class="h4 text-white-op">-Revisión-</span>
                                            </div>
                                    </div>
                                </div>

                                <div class="row">&nbsp;</div>

                                <div class="border-b push-30">
                                    <h2 class="push-10"> <span id="label_equipo_trabajo">0</span> <span class="h5 font-w400 text-muted">Auditores encontrados</span></h2>
                                </div>
                                <table class="table table-striped table-vcenter table-condensed" id="table_equipo_trabajo">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class="text-left">Rol</th>
                                            <th class="text-left">Nombre</th>
                                            <th class="text-left">Puesto</th>
                                            <th class="text-center">Quitar</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                    
                                    <?php foreach ($get_usuarios as $key => $value): ?>
                                    <?php $id_user =  trim($value->id_user);
                                        $query = "SELECT * FROM pat_equipo_trabajo WHERE id_revision = $id_revision and id_usuario = $id_user";        
                                        $info_equipo_t = $this->db->query($query)->row();
                                     ?>
                                        <?php if (isset ($info_equipo_t->activo) ): ?>
                                            <?php if ($info_equipo_t->activo == 0): ?>
                                                <tr id="user_trx_<?= trim($value->id_user) ?>">
                                                    <td class="index"><?=$key+1; ?></td> 
                                                    <td class="text-left">

                                                        <?php 
                                                        $roles = "";
                                                            if ($info_equipo_t->rol_titular == 0) {
                                                                $roles .= "Titular, ";
                                                            }
                                                            if ($info_equipo_t->rol_cordinador == 0) {
                                                                $roles .= "Coordinador, ";
                                                            }
                                                            if ($info_equipo_t->rol_jefe_grupo == 0) {
                                                                $roles .= "Jefe de grupo, ";
                                                            }
                                                            if ($info_equipo_t->rol_auditor == 0) {
                                                                $roles .= "Auditor, ";
                                                            }
                                                            if ($info_equipo_t->rol_consulta == 0) {
                                                                $roles .= "Consulta, ";
                                                            }
                                                            if (empty($roles)) {
                                                                echo "N/A";
                                                            }else
                                                            echo $roles;

                                                         ?>
                                                    </td>
                                                    <td class="text-left"><?=$value->nombre;?></td>
                                                    <td class="text-left"> <?=$value->id_user;?> </td>
                                                    <td class="text-center">
                                                        <button class="btn btn-xs btn-danger" onclick="initValidationChangeStatus('<?= $value->id_user ?>',1)" type="button" onclick="">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php else: ?>
                                            <!--tr id="user_trx_<?= trim($value->id_user) ?>" class="hidden">
                                                <td class="index"><?=$key+1; ?></td>
                                                <td class="text-left"><?=$value->activo;?></td>
                                                <td class="text-left"><?=$value->nombre;?></td>
                                                <td class="text-left"> <?=$value->id_user;?> </td>
                                                <td class="text-center">
                                                    <button class="btn btn-xs btn-danger" onclick="initValidationChangeStatus('<?= $value->id_user ?>',1)" type="button" onclick="">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr-->
                                            <?php endif ?>     
                                        
                                                                                                                                        
                                        <?php endif ?>                                        
                                    <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                            <script type="text/javascript">
                            $(function(){
                                var trs = $("#table_equipo_trabajo tbody tr:not(.hidden)").length;
                                $("#label_equipo_trabajo").text(trs);
                                var trs = $("#table_equipo_auditores tbody tr").length;
                                $("#label_equipo_auditores").text(trs);

                                
                            })
                            </script>
                            <!-- END Equipo -->
                            <!-- Auditores -->
                            <div class="tab-pane fade fade-up" id="search-auditors">
                                <div class="border-b push-30">
                                    <h2 class="push-10"> <span id="label_equipo_auditores">0</span> <span class="h5 font-w400 text-muted">Auditores encontrados</span></h2>
                                </div>
                                <table class="table table-striped table-vcenter table-condensed" id="table_equipo_auditores">
                                    <thead>
                                        <tr>
                                            <th><i class="fa fa-check-square-o"></i></th>
                                            <th class="text-left">Rol</th>
                                            <th class="text-left">Nombre</th>
                                            <th class="text-left">Puesto</th>
                                            <th class="text-center">Experiencia</th>
                                            <th class="text-center">Detalle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($get_usuarios as $key => $value): ?>
                                        <?php 
                                            $id_user =  trim($value->id_user);
                                            $query = "SELECT * FROM pat_equipo_trabajo WHERE id_revision = $id_revision and id_usuario = $id_user";  
                                            //id_user para pruebas     358       
                                             $info_equipo = $this->db->query($query)->row();
                                         ?> 
                                         <tr id="user_tr_<?= trim($value->id_user) ?>">
                                            <td>
                                                <label class="css-input css-checkbox css-checkbox-primary">
                                                    <?php if (isset ($info_equipo->activo) ): ?>                                                    
                                                        <?php if ($info_equipo->activo == 0): ?>
                                                             <input id="activo_user_<?= trim($value->id_user); ?>" onchange="initValidationChangeStatus('<?= $value->id_user ?>',0)" type="checkbox" checked><span></span>
                                                        <?php else: ?>
                                                            <input id="activo_user_<?= trim($value->id_user); ?>" onchange="initValidationChangeStatus('<?= $value->id_user ?>',0)" type="checkbox" ><span></span>
                                                        <?php endif ?>                                                       
                                                    <?php else: ?>
                                                        <input id="activo_user_<?= trim($value->id_user); ?>" onchange="initValidationChangeStatus('<?= $value->id_user ?>',0)" type="checkbox"><span></span>
                                                    <?php endif ?>
                                                    
                                                </label>
                                            </td>

                                            <td>
                                                <select class="form-control select_rol" onchange="initValidationChangeRoles('<?= $value->id_user ?>')" name="rol" multiple>
                                                    <!--option></option--> 
                                                    <?php foreach($get_equipo_rol as $row){ 
                                                        if (!empty ($info_equipo) ) { 
                                                        //47 : titular ; 48 : coordinador; 49 : jefe_grupo; 50: auditor; 51 : consulta    
                                                            if ($row->id == 47) { //47 : titular
                                                                if ($info_equipo->rol_titular == 0) {
                                                                    echo '<option value="'.$row->id.'" selected>'. $row->des.'</option>';
                                                                }else{
                                                                    echo '<option value="'.$row->id.'">'. $row->des.'</option>';  
                                                                }                                                                
                                                            }else if($row->id == 48){//coordinador
                                                                if ($info_equipo->rol_cordinador == 0) {
                                                                    echo '<option value="'.$row->id.'" selected>'. $row->des.'</option>';
                                                                }else{
                                                                    echo '<option value="'.$row->id.'">'. $row->des.'</option>';  
                                                                }
                                                            }else if($row->id == 49){//jefe_grupo
                                                                if ($info_equipo->rol_jefe_grupo == 0) {
                                                                    echo '<option value="'.$row->id.'" selected>'. $row->des.'</option>';
                                                                }else{
                                                                    echo '<option value="'.$row->id.'">'. $row->des.'</option>';  
                                                                }
                                                            }else if($row->id == 50){//auditor
                                                                if ($info_equipo->rol_auditor == 0) {
                                                                    echo '<option value="'.$row->id.'" selected>'. $row->des.'</option>';
                                                                }else{
                                                                    echo '<option value="'.$row->id.'">'. $row->des.'</option>';  
                                                                }   
                                                            }else if($row->id == 51){//consulta
                                                                if ($info_equipo->rol_consulta == 0) {
                                                                    echo '<option value="'.$row->id.'" selected>'. $row->des.'</option>';
                                                                }else{
                                                                    echo '<option value="'.$row->id.'">'. $row->des.'</option>';  
                                                                }
                                                            }
    
                                                        }else{
                                                            echo '<option value="'.$row->id.'">'. $row->des.'</option>';
                                                        }
                                                      
                                                     } ?>
                                                    <!--option value="ti">Titular</option>
                                                    <option value="co">Coordinador</option>
                                                    <option value="ta">Consulta</option>
                                                    <option value="au">Auditor</option>
                                                    <option value="co" selected>Jefe de grupo</option-->
                                                </select>
                                            </td>
                                            <td><?=$value->nombre. " " . $value->apellidop ." ". $value->apellidom; ?> </td>
                                            <td><?=$value->n_cod_p;?></td> 
                                            <td class="text-center">
                                                <span class="badge badge-primary"> <?=$value->experiencia;?> </span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal_show_consulta_<?= trim($value->id_user); ?>" type="button">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                        <!--tr>
                                            <td>
                                                <label class="css-input css-checkbox css-checkbox-primary">
                                                    <input type="checkbox" checked><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <select class="form-control" multiple>
                                                    <option></option>
                                                    <option value="ti">Titular</option>
                                                    <option value="co">Coordinador</option>
                                                    <option value="ta">Consulta</option>
                                                    <option value="au">Auditor</option>
                                                    <option value="co" selected>Jefe de grupo</option>
                                                </select>
                                            </td>
                                            <td>Oscar Osorio</td>
                                            <td>Puesto XXXXXXXX</td>
                                            <td class="text-center">
                                                <span class="badge badge-primary">6</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-large" type="button">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr-->
                                        <!--tr>
                                            <td>
                                                <label class="css-input css-checkbox css-checkbox-primary">
                                                    <input type="checkbox" checked><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option value="au" selected>Auditor</option>
                                                    <option value="co">Jefe de grupo</option>
                                                </select>
                                            </td>
                                            <td>Eduardo Martínez Martínez</td>
                                            <td>Puesto XXXXXXXX</td>
                                            <td class="text-center">
                                                <span class="badge badge-primary">6</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-large" type="button">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr-->
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Auditores -->
                            <div class="tab-pane" id="btabs-alt-static-settings">
                                <h4 class="font-w300 push-15">Opciones</h4>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-5">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
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
            <script type="text/javascript">
                var check_prop = {};                
                var array_conten = new Array();
                <?php foreach($get_equipo_rol as $row){ ?>
                    check_prop['<?php echo $row->id; ?>'] = '<?php echo $row->des; ?>';                    
                <?php } ?>
                var check_prop_u = check_prop;
                //console.log(check_prop_u);
                $(".select_rol_basura").on('change',function(){                    
                    $(".select_rol option").each(function(){
                        var value_rol = $(this).val();
                        var id_rol = $(this).val();
                        var estatus = $( this.option +'[value='+id_rol+']' ).attr('selected');
                        //$( "#myselect option:selected" ).text();
                        //console.log( estatus );
                        //if (value_rol =="Titular") {
                        //    console.log( $(this.selected)  );
                        //};
                        

                    });
                })
            </script>
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

         <?php foreach ($get_usuarios as $key => $value): ?> 
                                    
<!-- MOSTRAR CONSULTA MODAR -->    
<!-- Large Modal -->
        <div class="modal" id="modal_show_consulta_<?= trim($value->id_user); ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Competencias</h3>
                        </div>
                        <div class="block-content">
                            <p>Puesto: <strong><?=$value->n_cod_p ?></strong></p>
                            <p>Licenciatura: <strong> <!--Título de la licenciatura--> <?=$value->desgrado ?></strong></p> 
                            <p>Años de experiencia: <strong><?=$value->experiencia ?></strong></p>  
                            <?php $search_id_user = trim($value->id_user); ?>
                            <div class="block">
                                <ul class="nav nav-tabs" data-toggle="tabs">
                                    <li class="active">
                                        <a href="#search-info_<?= $search_id_user; ?>">Info</a>
                                    </li>
                                    <li>
                                        <a href="#search-edu_<?= $search_id_user; ?>">Educación</a>
                                    </li>
                                    <li>
                                        <a href="#search-hab_<?= $search_id_user; ?>">Habilidades</a>
                                    </li>
                                    <li>
                                        <a href="#search-cer_<?= $search_id_user; ?>">Certificaciones</a>
                                    </li>
                                    <li>
                                        <a href="#search-cur_<?= $search_id_user; ?>">Cursos</a>
                                    </li>
                                    <li>
                                        <a href="#search-epr_<?= $search_id_user; ?>">Experiencia profesional</a>
                                    </li>
                                    <li>
                                        <a href="#search-aex_<?= $search_id_user; ?>">Áreas de experiencia</a>
                                    </li>
                                </ul>
                                <div class="block-content tab-content bg-white">
                                    <!-- Info -->
                                    <div class="tab-pane fade fade-up in active" id="search-info_<?= $search_id_user; ?>">
                                        <?php 
                                            $id_user =  trim($value->id_user);
                                            $query = "SELECT users.id_user, users.usuario as nameuser, rol.des as rol,  
                                            nombre, apellidop, apellidom, users.fecha_nac, users.sexo as sexo, est_civil.des as estado_civil, users.curp, users.lugar_nac, nacionalidad.des as nacionalidad, 
                                            users.estructura, users.n_expediente, area.des as desarea , cargo.des as descargo, 
                                            nivel.des as desnivel, users.nivel_codigo, n_status.des as n_status, n_cod_p.des as n_cod_p,   
                                            grado.des as desgrado, users.grado_codigo, users.grado_cedula, users.grado_iniciales, users.email_cnbv,
                                            users.email_personal, users.celular as celular, users.telefono, users.telefono_ext ,
                                            users.direccion, users.torre, users.piso, users.coordenada 
                                            from coreuser as users
                                            left join user_data_cat grado on grado.id = users.grado
                                            left join user_data_cat n_cod_p on n_cod_p.id = users.nivel_codigo_puesto 
                                            left join user_data_cat n_status on n_status.id = users.nivel_status 
                                            left join user_data_cat rol on rol.id = users.rol_permiso 
                                            left join user_data_cat cargo on cargo.id = users.cargo 
                                            left join user_data_cat area on area.id = users.area
                                            left join user_data_cat nivel on nivel.id = users.nivel 
                                            left join user_data_cat est_civil on est_civil.id = users.estado_civil 
                                            left join user_data_cat nacionalidad on nacionalidad.id = users.nacionalidad 
                                            where id_user = $id_user and users.estatus = 0;";  
                                            //id_user para pruebas     358       
                                             $info = $this->db->query($query)->row();
                                         ?> 
                                                 <div class="content">
                                                    <div class="block">
                                                        <!-- DATOS GENERALES -->
                                                        <legend>Datos generales</legend>
                                                        <div class="col-sm-5">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->nameuser; ?>
                                                                <label for="rol_permisos">usuario</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->rol; ?>
                                                                <label for="rol_permisos">Rol</label>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-sm-6">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->nombre . ' ' . $info->apellidop. ' ' . $info->apellidom ?>
                                                                <label for="rol_permisos">Nombre</label>
                                                            </div>
                                                        </div>     
                                                        <div class="col-sm-6">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->fecha_nac ?>&nbsp;
                                                                <label for="rol_permisos">Fecha de nacimiento</label>
                                                            </div>
                                                        </div>   
                                                        <div class="clearfix"></div> 
                                                        <div class="col-sm-4">
                                                            <div class="form-material form-material-primary">
                                                                 <!--Femenino, Masculino-->
                                                                <?php if ($info->sexo == 0): ?>
                                                                Femenino
                                                                <?php else: ?>
                                                                Masculino
                                                                <?php endif ?>
                                                                &nbsp;
                                                                <label for="rol_permisos">Sexo</label>
                                                            </div>
                                                        </div>  
                                                        <div class="col-sm-4">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->estado_civil ?>&nbsp;
                                                                <label for="rol_permisos">Estado civil</label>
                                                            </div>
                                                        </div>   
                                                        <div class="col-sm-4">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->curp ?>&nbsp;
                                                                <label for="rol_permisos">CURP</label>
                                                            </div>
                                                        </div>  
                                                        <div class="clearfix"></div>
                                                        <div class="col-sm-5">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->lugar_nac ?>&nbsp;
                                                                <label for="rol_permisos">Lugar de nacimiento</label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-sm-5">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->nacionalidad ?> &nbsp;
                                                                <label for="rol_permisos">Nacionalidad </label>
                                                            </div>
                                                        </div>   
                                                        <div class="clearfix"></div>    
                                                        <!-- DATOS LABORALES-->                                        
                                                        <legend>Datos laborales</legend>
                                                        <div class="col-sm-2">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->estructura == 0 ? 'Si' : 'No' ?> &nbsp;
                                                                <label for="rol_permisos">Estructura </label>
                                                            </div>
                                                        </div> 
                                                         <div class="col-sm-2">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->n_expediente ?> &nbsp;
                                                                <label for="rol_permisos">No. Expediente </label>
                                                            </div>
                                                        </div>      
                                                        <div class="col-sm-5">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->desarea ?> &nbsp;
                                                                <label for="rol_permisos">Área </label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-sm-3">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->descargo ?> &nbsp;
                                                                <label for="rol_permisos">Cargo </label>
                                                            </div>
                                                        </div> 
                                                         <!-- division -->
                                                        <div class="clearfix"></div>
                                                        <div class="col-sm-3">
                                                            <div class="form-material form-material-primary"> 
                                                                <?= $info->desnivel ?> &nbsp;
                                                                <label for="rol_permisos">Nivel </label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-sm-3">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->nivel_codigo ?> &nbsp;
                                                                <label for="rol_permisos">Código </label>
                                                            </div>
                                                        </div>  
                                                        <div class="col-sm-3">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->n_status ?> &nbsp;
                                                                <label for="rol_permisos">Estatus </label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-sm-3">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->n_cod_p ?> &nbsp;
                                                                <label for="rol_permisos">Codigo puesto</label>
                                                            </div>
                                                        </div>
                                                        <!-- division -->
                                                        <div class="clearfix"></div>
                                                        <div class="col-sm-3">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->desgrado ?> &nbsp;
                                                                <label for="rol_permisos">Grado</label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-sm-2">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->grado_codigo ?> &nbsp;
                                                                <label for="rol_permisos">Código </label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-sm-2">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->grado_cedula ?> &nbsp;
                                                                <label for="rol_permisos">Cedula</label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-sm-2">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->grado_iniciales ?> &nbsp;
                                                                <label for="rol_permisos"> Iniciales</label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-sm-3">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->email_cnbv ?> &nbsp;
                                                                <label for="rol_permisos">Correo electronico CNBV</label>
                                                            </div>
                                                        </div> 
                                                        <!-- division -->
                                                        <div class="clearfix"></div>
                                                        <div class="col-sm-4">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->email_personal ?> &nbsp;
                                                                <label for="rol_permisos">Correo electronico personal</label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-sm-3">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->celular ?> &nbsp;
                                                                <label for="rol_permisos">Celular</label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-sm-3">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->telefono ?> &nbsp;
                                                                <label for="rol_permisos">Teléfono</label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-sm-2">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->telefono_ext ?> &nbsp;
                                                                <label for="rol_permisos">Extención</label>
                                                            </div>
                                                        </div> 

                                                        <!-- division -->
                                                        <div class="clearfix"></div>

                                                        <div class="col-sm-6">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->direccion ?> &nbsp;
                                                                <label for="rol_permisos">Dirección</label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-sm-2">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->torre ?> &nbsp;
                                                                <label for="rol_permisos">Torre</label>
                                                            </div>
                                                        </div>  
                                                        <div class="col-sm-2">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->piso ?> &nbsp;
                                                                <label for="rol_permisos">Piso</label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-sm-2">
                                                            <div class="form-material form-material-primary">
                                                                <?= $info->coordenada ?> &nbsp;
                                                                <label for="rol_permisos">Coordenada</label>
                                                            </div>
                                                        </div> 

                                                        <!-- division -->
                                                        <div class="clearfix"></div>

                                                    </div>
                                                 </div>
                                                 
                                       
                                    </div>
                                    <!-- END Info -->
                                    <!-- Educación -->
                                    <div class="tab-pane fade fade-up" id="search-edu_<?= $search_id_user; ?>">
                                        <table class="table table-striped table-vcenter table-condensed">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="text-left">Institución</th>
                                                    <th class="text-left">Título</th>
                                                    <th class="text-center">Desde</th>
                                                    <th class="text-center">Hasta</th>
                                                    <th class="text-center">Años</th>
                                                    <th class="text-center">Estatus</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                                
                                                <?php                                                
                                                $query = "SELECT  id_esc.des as esc_instituto , id_titulo.des as esc_titulo, esc.esc_ini_fecha,
                                                             esc.esc_fin_fecha, esc.esc_anos, id_doc.des as documento ,  id_estatus.des as esc_estatus   
                                                            from user_escolaridad as esc
                                                            left join user_data_cat id_esc on id_esc.id = esc.esc_instituto
                                                            left join user_data_cat id_titulo on id_titulo.id = esc.esc_titulo
                                                            left join user_data_cat id_doc on id_doc.id = esc.esc_doc
                                                            left join user_data_cat id_estatus on id_estatus.id = esc.esc_estatus
                                                            where id_user = $id_user and esc.estatus = 0;";        
                                                $get_escolaridad = $this->db->query($query)->result();
                                                foreach ($get_escolaridad as $key => $value): ?>                                              
                                                    <tr>
                                                        <td> <?=$key+1 ?> </td>
                                                        <td> <?=$value->esc_instituto ?></td>
                                                        <td><?=$value->esc_titulo ?></td>
                                                        <td class="text-center"><?= $value->esc_ini_fecha  ?></td>
                                                        <td class="text-center"><?= $value->esc_fin_fecha  ?></td>
                                                        <td class="text-center">
                                                            <span class="badge badge-primary"> <?=$value->esc_anos ?> </span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="badge badge-warning"><?=$value->esc_estatus ?></span>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Educación -->
                                    <!-- Habilidades -->
                                    <div class="tab-pane fade fade-up" id="search-hab_<?= $search_id_user; ?>">
                                        <table class="table table-striped table-vcenter table-condensed">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="text-left">Habilidad</th>
                                                    <th class="text-center">Nivel</th>
                                                    <th class="text-center">Años</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php                                                 
                                                $query = "SELECT  id_hab.des as hab_habilidad, id_nivel.des as hab_nivel, hab_anos 
                                                            from user_habilidad as hab 
                                                            left join user_data_cat id_hab on id_hab.id = hab.hab_habilidad
                                                            left join user_data_cat id_nivel on id_nivel.id = hab.hab_nivel
                                                            where id_user = $id_user and hab.estatus = 0;";        
                                                $get_habilidad = $this->db->query($query)->result();
                                                foreach ($get_habilidad as $key => $value): ?>    
                                                    <tr>
                                                        <td> <?= $key+1 ?> </td>
                                                        <td> <?= $value->hab_habilidad ?> </td>
                                                        <td class="text-center">
                                                            <span class="badge badge-default"> <?= $value->hab_nivel ?></span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="badge badge-primary"> <?= $value->hab_anos ?> </span>
                                                        </td>
                                                    </tr>
                                                <?php endforeach ?>
                                     
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Habilidades -->
                                    <!-- Certificaciones -->
                                    <div class="tab-pane fade fade-up" id="search-cer_<?= $search_id_user; ?>">
                                        <table class="table table-striped table-vcenter table-condensed">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="text-left">Certificación</th>
                                                    <th class="text-center">Año</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php                                                 
                                                $query = "SELECT  id_cer.des as cer_certificacion, cer_ano 
                                                            from user_certificacion as cer 
                                                            left join user_data_cat id_cer on id_cer.id = cer.cer_certificacion
                                                            where id_user = $id_user and cer.estatus = 0;";        
                                                $get_certificacion = $this->db->query($query)->result();
                                                foreach ($get_certificacion as $key => $value): ?> 
                                                    <tr>
                                                        <td> <?= $key+1 ?> </td>
                                                        <td><?= $value->cer_certificacion ?></td>
                                                        <td class="text-center"><?= $value->cer_ano ?></td>
                                                    </tr>
                                                <?php endforeach ?>                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Certificaciones -->
                                    <!-- Cursos -->
                                    <div class="tab-pane fade fade-up" id="search-cur_<?= $search_id_user; ?>">
                                        <table class="table table-striped table-vcenter table-condensed">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="text-left">Cursos</th>   
                                                    <th class="text-center">Duración</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $query = "SELECT  id_cur.des as cur_curso, 
                                                                cur.cur_ini_fecha, cur.cur_fin_fecha, cur.cur_duracion, id_titulo.des as cur_instituto   
                                                                from user_curso as cur
                                                                left join user_data_cat id_cur on id_cur.id = cur.cur_curso
                                                                left join user_data_cat id_titulo on id_titulo.id = cur.cur_instituto
                                                                where id_user = $id_user and cur.estatus = 0;";        
                                                $get_curso = $this->db->query($query)->result();
                                                foreach ($get_curso as $key => $value): ?> 
                                                    <tr>
                                                        <td><?= $key+1 ?> </td>
                                                        <td><?= $value->cur_curso; ?></td>
                                                        <!--td class="text-center"><?= $value->cur_ini_fecha;  ?></td-->
                                                        <!--td class="text-center"><?= $value->cur_fin_fecha; ?></td-->
                                                        <td class="text-center"><?= $value->cur_duracion; ?></td>
                                                    </tr>
                                                <?php endforeach ?>
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Cursos -->
                                    <!-- Experiencia profesional -->
                                    <div class="tab-pane fade fade-up" id="search-epr_<?= $search_id_user; ?>">
                                        <table class="table table-striped table-condensed">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="text-left">Empresa</th>
                                                    <th class="text-left">Giro</th>
                                                    <th class="text-left">Puesto</th>
                                                    <th class="text-center">Desde</th>
                                                    <th class="text-center">Hasta</th>
                                                    <th class="text-left">Actividades</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php $query = "SELECT  * from user_experiencia where id_user = $id_user and estatus = 0;";        
                                                $get_experiencia = $this->db->query($query)->result();
                                                foreach ($get_experiencia as $key => $value): ?> 
                                                    <tr>
                                                        <td><?= $key+1 ?></td>
                                                        <td><?= $value->exp_empresa ?></td> 
                                                        <td><?= $value->exp_giro ?></td>
                                                        <td><?= $value->exp_puesto  ?></td>
                                                        <td class="text-center"><?= $value->exp_ini_fecha;  ?></td>
                                                        <td class="text-center"><?= $value->exp_fin_fecha;  ?></td>
                                                        <td> <?= $value->exp_actividades  ?> </td>
                                                    </tr>
                                                <?php endforeach ?>
                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Experiencia profesional -->
                                     <!-- Áreas de experiencia -->
                                    <div class="tab-pane fade fade-up" id="search-aex_<?= $search_id_user; ?>">
                                        <table class="table table-striped table-vcenter table-condensed">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="text-left">Área</th>
                                                    <th class="text-left">Subárea</th>
                                                    <th class="text-center">Tiempo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $query = "SELECT  id_area.des as area_area, id_sub_area.des as sub_area, id_tiempo.des as area_tiempo 
                                                from user_experiencia_area as exp_area
                                                left join user_data_cat id_area on id_area.id = exp_area.area_area 
                                                left join user_data_cat id_sub_area on id_sub_area.id = exp_area.area_subarea
                                                left join user_data_cat id_tiempo on id_tiempo.id = exp_area.area_tiempo 
                                                where id_user = $id_user and exp_area.estatus = 0;";        
                                                $get_experiencia_area = $this->db->query($query)->result();
                                                foreach ($get_experiencia_area as $key => $value): ?> 
                                                    <tr>
                                                        <td><?= $key+1 ?></td>
                                                        <td><?= $value->area_area ?></td>
                                                        <td><?= $value->sub_area ?></td>
                                                        <td class="text-center"><?= $value->area_tiempo ?></td>
                                                    </tr>
                                                <?php endforeach ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Certificaciones -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Large Modal -->
                                            <!-- END MOSTRAR CONSULTA MODAR -->
    <?php endforeach; ?>


        
    </body>
</html>