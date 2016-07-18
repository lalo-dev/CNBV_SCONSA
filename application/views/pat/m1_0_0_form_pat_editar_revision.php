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
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
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
            <?php //include_once ('menu.php');?>
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
                        <div class="col-sm-5">
                            <h1 class="page-heading">
                                Agregar revisión <small>Revisiones</small>
                            </h1>
                        </div>
                        <div class="col-sm-7 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Planeación anual</li>
                                <li>PAT</li> 
                                <li><a class="link-effect" href="<?=URL ?>m1_0_0_form_pat/<?=$pat_ano ?>">Revisiones</a></li>
                                <li>Agregar Revisión</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content">
                    <div class="hidden" id="sup_bandera_url"> <?=URL ?> </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Material Forms Validation -->
                            <div class="block">
                                <div class="block-content block-content-narrow">
                                    <!-- jQuery Validation (.js-validation-material class is initialized in js/pages/base_forms_validation.js) -->
                                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form class="js-validation-material form-horizontal push-10-t" action="" id="add_revision" method="post">
                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm hidden" type="text" id="id_rev_form" name="id_rev_form" value="<?=$get_revision->id_rev ?>">
                                                    <input class="form-control input-sm" type="text" value="<?=$get_revision->no_revision ?>" maxlength="60" id="no_revision" name="no_revision">
                                                    <label for="no_revision">No. revisión</label> 
                                                </div>
                                            </div>
                                            <div class="col-sm-3">                                    
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="tipo_revision" name="tipo_revision">
                                                        <!--option></option-->
                                                        <?php foreach($getpat_tipo_revision as $row){
                                                            if ($row->des == $get_revision->tipo_revision) {
                                                                echo '<option value="'.$row->id.'" selected>'. $row->des .'</option>';
                                                            }else{
                                                                echo '<option value="'.$row->id.' ">'. $row->des .'</option>';
                                                            } 
                                                         } ?> 
                                                    </select>
                                                    <label for="tipo_revision">Tipo revisión</label>
                                                </div>
                                            </div>                                           
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="prog_adic" name="prog_adic">
                                                        <!--option></option-->
                                                        <?php foreach($getpat_prog_adic as $row){ 
                                                            if ($row->des == $get_revision->prog_adic) {
                                                                echo '<option value="'.$row->id.'" selected>'. $row->des .'</option>';
                                                            }else{
                                                                echo '<option value="'.$row->id.' ">'. $row->des .'</option>';
                                                            }                                                          
                                                         } ?> 
                                                    </select>
                                                    <label for="prog_adic">P/A/C</label>  <!-- Prog / Adic / Canc -->
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="clave" name="clave">
                                                        <!--option></option-->
                                                        <?php foreach($getpat_clave as $row){ 
                                                            if ($row->des == $get_revision->clave) {
                                                                echo '<option value="'.$row->id.'" selected>'. $row->des .'</option>';
                                                            }else{
                                                                echo '<option value="'.$row->id.' ">'. $row->des .'</option>';
                                                            } 
                                                         } ?> 
                                                    </select>
                                                    <label for="clave">Clave</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="instancia" name="instancia">
                                                        <!--option></option-->
                                                        <?php foreach($getpat_instancia as $row){ 
                                                            if ($row->des == $get_revision->instancia) {
                                                                echo '<option value="'.$row->id.'" selected>'. $row->des .'</option>';
                                                            }else{
                                                                echo '<option value="'.$row->id.' ">'. $row->des .'</option>';
                                                            } 
                                                         } ?> 
                                                    </select>
                                                    <label for="instancia">Instancia</label>
                                                </div>
                                            </div>                                             
                                            <div class="col-sm-9">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="justificacion" name="justificacion">
                                                        <!--option></option-->
                                                        <?php foreach($getpat_justificacion as $row){ 
                                                            if ($row->des == $get_revision->justificacion) {
                                                                echo '<option value="'.$row->id.'" selected>'. $row->des .'</option>';
                                                            }else{
                                                                echo '<option value="'.$row->id.' ">'. $row->des .'</option>';
                                                            } 
                                                         } ?> 
                                                    </select>
                                                    <label for="justificacion">Justificación</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-11">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="area_revizar" name="area_revizar">
                                                        <!--option></option-->
                                                        <?php foreach($getpat_area_revizar as $row){                                                             
                                                                echo '<option value="'.$row->id.' ">'. $row->des .'</option>';                                                            
                                                         } ?>
                                                        </select>
                                                    <label for="area_revizar">Área a revisar</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-material form-material-primary">
                                                    <button class="btn btn-success btn-sm push-5-r push-10" id="btn_area" type="button">
                                                        <i class="fa fa-plus"></i></button>
                                                    <label for="val-skill4">&nbsp;</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <table class="table table-striped table-vcenter table-condensed" id="table_areas">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th class="text-left">Área a revisar</th>
                                                        <th class="text-center">ACCIONES</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($get_areas_rev as $key => $value): ?>
                                                        <tr id="tr_area_<?=$value->id_area ?>">
                                                            <td class="index"><?=$key+1 ?></td> 
                                                            <td><?=$value->des ?></td>
                                                            <!--td class="text-center">1</td-->
                                                            <td class="text-center" > 
                                                                <div class="btn-group">
                                                                    <button class="btn btn-danger btn-xs" type="button" onclick="delAreaList('<?=$value->id_area; ?>')" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                                        <i class="fa fa-times"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material form-material-primary floating">
                                                    <textarea class="form-control input-sm" id="descripcion" maxlength="1000" name="descripcion" rows="6"><?=$get_revision->descripcion; ?></textarea>
                                                    <label for="descripcion">Descripción</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material form-material-primary floating">
                                                    <textarea class="form-control input-sm" id="objetivo" maxlength="1000" name="objetivo" rows="6"><?=$get_revision->objetivo; ?></textarea>
                                                    <label for="objetivo">Objetivo</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="semana_ini" name="semana_ini">
                                                        <!--option></option-->
                                                         <?php 
                                                            $semana_ini = (int)$getpat_sem_ini[0]->des;
                                                            $semana_fin = (int)$getpat_sem_ini[0]->deslarga;
                                                             for ($i=$semana_ini; $i <= $semana_fin ; $i++) { 
                                                                if ($i == $get_revision->semana_ini) {
                                                                    echo '<option value="'.$i.'" selected> Semana '.$i.'</option>';
                                                                }else{
                                                                    echo '<option value="'.$i.'"> Semana '.$i.'</option>';
                                                                }
                                                                
                                                             }
                                                          ?>
                                                        
                                                    </select>
                                                    <label for="semana_ini">Semana Inicio</label>
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="semana_fin" name="semana_fin">
                                                        <!--option></option-->
                                                        <?php 
                                                            $semana_ini = (int)$getpat_sem_fin[0]->des;
                                                            $semana_fin = (int)$getpat_sem_fin[0]->deslarga;
                                                             for ($i=$semana_ini; $i <= $semana_fin ; $i++) { 
                                                                if ($i == $get_revision->semana_fin) {
                                                                    echo '<option value="'.$i.'" selected> Semana '.$i.'</option>';
                                                                }else{
                                                                    echo '<option value="'.$i.'"> Semana '.$i.'</option>';
                                                                }
                                                             }
                                                          ?>
                                                        
                                                    </select>
                                                    <label for="semana_fin">Semana Fin</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="ts_revision" name="ts_revision">
                                                        <!--option></option-->
                                                        <?php 
                                                            $semana_ini = (int)$getpat_ts_revision[0]->des;
                                                            $semana_fin = (int)$getpat_ts_revision[0]->deslarga;
                                                             for ($i=$semana_ini; $i <= $semana_fin ; $i++) { 
                                                                if ($i == $get_revision->ts_revision) {
                                                                    echo '<option value="'.$i.'" selected> Semana '.$i.'</option>';
                                                                }else{
                                                                    echo '<option value="'.$i.'"> Semana '.$i.'</option>';
                                                                }
                                                             }
                                                          ?>
                                                    </select>
                                                    <label for="ts_revision">TS. Revisión</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" value="0" type="text" id="ts_hombre" name="ts_hombre" readonly>                                                    
                                                    <label for="ts_hombre">TS. Hombre</label>
                                                </div>
                                            </div>                      
                                            <?php $periodo_ini = date('d-m-Y', strtotime( $get_revision->periodo_ini ) ); ?>                       
                                            <div class="col-md-2">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="js-datepicker form-control input-sm" value="<?=$periodo_ini  ?>" type="text" id="periodo_ini" name="periodo_ini" data-date-format="mm/dd/yy">
                                                    <label for="periodo_ini">Periodo Revisión Inicio</label>
                                                </div>
                                            </div>
                                            <?php $periodo_fin = date('d-m-Y', strtotime( $get_revision->periodo_fin ) ); ?> 
                                            <div class="col-md-2">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="js-datepicker form-control input-sm" type="text" value="<?=$periodo_fin  ?>" id="periodo_fin" name="periodo_fin" data-date-format="mm/dd/yy">
                                                    <label for="periodo_fin">Periodo Revisión Fin</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="aud_precedente" name="aud_precedente">
                                                        <!--option></option-->
                                                        <?php foreach($getpat_aud_pre as $row){ 
                                                            if ($row->des == $get_revision->aud_precedente) {
                                                                echo '<option value="'.$row->id.'" selected>'. $row->des .'</option>';
                                                            }else{
                                                                echo '<option value="'.$row->id.' ">'. $row->des .'</option>';
                                                            }
                                                         } ?>
                                                    </select>
                                                    <label for="aud_precedente">Auditoría precedente</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="muestra" name="muestra">
                                                        <!--option></option-->
                                                        <?php foreach($getpat_muestra as $row){ 
                                                            if ($row->des == $get_revision->muestra) {
                                                                echo '<option value="'.$row->id.'" selected>'. $row->des .'</option>';
                                                            }else{
                                                                echo '<option value="'.$row->id.' ">'. $row->des .'</option>';
                                                            }
                                                         } ?>
                                                    </select>
                                                    <label for="muestra">Muestra</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="universo" name="universo">
                                                        <!--option></option-->
                                                        <?php foreach($getpat_universo as $row){ 
                                                            if ($row->des == $get_revision->universo) {
                                                                echo '<option value="'.$row->id.'" selected>'. $row->des .'</option>';
                                                            }else{
                                                                echo '<option value="'.$row->id.' ">'. $row->des .'</option>';
                                                            }
                                                         } ?>
                                                    </select>
                                                    <label for="universo">Universo</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-11">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm hidden" type="text" value="" id="id_riesgos_list" name="id_riesgos_list">
                                                    <select class="form-control input-sm" id="riesgo" name="riesgo">
                                                        <!--option></option-->
                                                        <?php foreach($get_riesgos as $row){ 
                                                          echo '<option value="'.$row->id_riesgo.'">'. $row->descripcion .'</option>';
                                                         } ?>
                                                        <!--option value="1">Supervisores beneficiados a traves de acuerdos con entidades supervisadas.</option>
                                                        <option value="2">Autorizaciones otorgadas en forma deficiente.</option>
                                                        <option value="3">Denuncias de captacion irregular por entidades no autorizadas atendida inoportunamente.</option>
                                                        <option value="4">Informacion incorrecta de emisoras bursatiles detectada inoportunamente.</option-->
                                                    </select> 
                                                    <label for="riesgo">Riesgo</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-material form-material-primary">
                                                    <button class="btn btn-success btn-sm push-5-r push-10" id="btn_riesgo" type="button">
                                                        <i class="fa fa-plus"></i></button>
                                                    <label for="val-skill4">&nbsp;</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <table class="table table-striped table-vcenter table-condensed" id="table_riesgos">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th class="text-left">Riesgo</th>
                                                        <!--th class="text-left">Cuadrante</th-->
                                                        <th class="text-center">ACCIONES</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($get_riesgos_rev as $key => $value): ?>
                                                        <tr id="tr_riesgo_<?=$value->id_riesgo ?>">
                                                            <td class="index"><?=$key+1 ?></td> 
                                                            <td><?=$value->descripcion ?></td>
                                                            <!--td class="text-center">1</td-->
                                                            <td class="text-center" > 
                                                                <div class="btn-group">
                                                                    <button class="btn btn-danger btn-xs" type="button" onclick="delRiesgoList('<?=$value->id_riesgo ?>')" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                                        <i class="fa fa-times"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                    <!--tr>
                                                        <td class="text-center">1</td>
                                                        <td>Supervisores beneficiados a traves de acuerdos con entidades supervisadas.</td>
                                                        <td class="text-center">1</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td>Autorizaciones otorgadas en forma deficiente.</td>
                                                        <td class="text-center">1</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td>Denuncias de captacion irregular por entidades no autorizadas atendida inoportunamente.</td>
                                                        <td class="text-center">1</td>
                                                    </tr-->
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <button class="btn btn-sm btn-primary" id="btn_datos_gen"  type="submit">Actualizar</button>
                                                <button class="btn btn-sm btn-default" id="btn_datos_cancelar" type="reset">Cancelar</button>
                                                <a class="btn btn-sm btn-success hidden" id="btn_datos_gen_otro" href="javascript:location.reload()">Guardar otra revisión</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <span class="hidden"  id="load_datos_gen"> <i class="fa fa-cog fa-spin"></i> </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Material Forms Validation -->
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
        <!--script src="< ?=JS ?>pages/base_forms_validation.js"></script-->
        <script src="../../content/vendor/js/pat/pat_add_revision.js"></script>


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

        <script>
            var check_prop = {};
            var check_prop_u = {};
            var array_conten = new Array();
            var array_clean = new Array();
            <?php foreach($get_riesgos as $row){ ?>
                check_prop['<?php echo $row->id_riesgo; ?>'] = '<?php echo $row->descripcion; ?>';
                check_prop_u['<?php echo $row->id_riesgo; ?>'] = '<?php echo $row->descripcion; ?>';                    
            <?php } ?>
            <?php foreach($get_riesgos_rev as $row){ ?>
                array_clean.push('<?php echo $row->id_riesgo; ?>');                    
            <?php } ?>
            var parador_prop = check_prop;
            $("#btn_riesgo").click(function(){
                var id_riesgo = $("#riesgo option:selected").val();
                var value_riesgo = $("#riesgo option:selected").text();
                var trs =$("#table_riesgos tr").length;
                //add lista
                if ($.trim(value_riesgo) != "") {
                    var nuevaFila='<tr id="tr_riesgo_'+id_riesgo+'"> <td class="index">'+(trs)+' </td>';
                    nuevaFila+='<td>'+value_riesgo+'</td>';
                    nuevaFila+='<td class="text-center" > <div class="btn-group">';
                    nuevaFila+= '<button class="btn btn-danger btn-xs" type="button" onclick="delRiesgoList('+id_riesgo+')" data-toggle="tooltip" data-placement="top" title="Eliminar">';
                    nuevaFila+= '<i class="fa fa-times"></i>';
                    nuevaFila+= '</button>';
                    nuevaFila+= '</div></td>'; 
                    nuevaFila+='</tr>';
                    $("#table_riesgos").append(nuevaFila);
                };               
                if (typeof( id_riesgo) == "string") {
                    array_conten.push(id_riesgo);
                    parador_prop[id_riesgo] = ""; //limpiando
                    $('#riesgo option').remove();                
                    $.each(parador_prop, function(index, value) {                     
                        if ($.trim(value) != "") {
                            $('#riesgo').append( $("<option></option>").attr("value",index).text(value) );
                            //console.log(index +' <=> ' +value );
                        };                    
                    });
                    add_riesgo_ajax(id_riesgo);//envio de riesgo
                }
                 
              })
            clean_select();

            function clean_select(){
                $('#riesgo option').remove(); 
                $.each(array_clean, function(index, value) {                     
                    if ($.trim(value) != "") {
                        parador_prop[value] = "";
                    };                    
                });
                $.each(parador_prop, function(index, value) {                     
                    if ($.trim(value) != "") {
                        $('#riesgo').append( $("<option></option>").attr("value",index).text(value) );
                    };                    
                });                
            }

            function add_riesgo_ajax(riesgo){
                var revision =  $("#id_rev_form").val();
                var compensacion = $.trim($("#sup_bandera_url").text() );
                base_url = compensacion+'PatController/update_revision_riesgo_add';
                  $.ajax({
                    url: base_url,                    
                    type: "post",
                    dataType: 'json',
                    data: {id_revision : revision, id_riesgo : riesgo},
                    beforeSend:function(){},
                    success:function(data){                        
                        //*
                        if (data) {}else{ //some error
                          alert('Error Interno, recargue la pagina');
                        };
                        //*
                    }
                }); 
            }

            function delRiesgoList(id){    
                var tr = $("#tr_riesgo_"+id);
                var array_refresh = new Array(); //tr.css("background-color","#FF3700");        
                tr.fadeOut(400, function(){ 
                    tr.remove(); 
                    reset_table_index();
                });
                parador_prop[id] = check_prop_u[id];
                array_conten.splice(array_conten.indexOf(id),1); 
                $('#riesgo option').remove();                
                $.each(parador_prop, function(index, value) {                     
                    if ($.trim(value) != "") {
                        $('#riesgo').append( $("<option></option>").attr("value",index).text(value) );
                    };                    
                });
                del_riesgo_ajax(id); //delete riesgo ajax                
              }

              function reset_table_index(){
                $('td:first-child', $("#table_riesgos tbody") ).each(function (i) {
                    $(this).text(i +1);          
                });
              } 
              function del_riesgo_ajax(riesgo){
                var revision =  $("#id_rev_form").val();
                var compensacion = $.trim($("#sup_bandera_url").text() );
                base_url = compensacion+'PatController/update_revision_riesgo_delete';
                  $.ajax({
                    url: base_url,                    
                    type: "post",
                    dataType: 'json',
                    data: {id_revision : revision, id_riesgo : riesgo},
                    beforeSend:function(){},
                    success:function(data){                        
                        //*
                        //console.log(data);
                        if (data) {                            
                        }else{ //some error
                          alert('Error Interno, recargue la pagina');
                        };
                        //*
                    }
                }); 
              }

              //FUNCIONES PARA AREAS A REVIZAR
            var check_prop_a = {};
            var check_prop_a_u = {};
            var array_conten_a = new Array();
            var array_clean_a = new Array();
            <?php foreach($getpat_area_revizar as $row){ ?>
            check_prop_a['<?php echo $row->id; ?>'] = '<?php echo $row->des; ?>';
            check_prop_a_u['<?php echo $row->id; ?>'] = '<?php echo $row->des; ?>';                    
            <?php } ?>
            <?php foreach($get_areas_rev as $row){ ?>
                array_clean_a.push('<?php echo $row->id_area; ?>');                    
            <?php } ?>
            var parador_prop_a = check_prop_a;
            //console.log(array_clean_a)
            clean_select_area();

            function clean_select_area(){
                $('#area_revizar option').remove(); 
                $.each(array_clean_a, function(index, value) {                     
                    if ($.trim(value) != "") {
                        parador_prop_a[value] = "";
                    };                    
                });
                //console.log(parador_prop_a)
                $.each(parador_prop_a, function(index, value) {                     
                    if ($.trim(value) != "") {
                        $('#area_revizar').append( $("<option></option>").attr("value",index).text(value) );
                    };                    
                });                
            }

            $("#btn_area").click(function(){
                var id_area = $("#area_revizar option:selected").val();
                var value_area = $("#area_revizar option:selected").text();
                var trs =$("#table_areas tr").length;                
                if ($.trim(value_area) != "") { //add riesgo en la lista
                    var nuevaFila='<tr id="tr_area_'+id_area+'"> <td class="index">'+(trs)+' </td>';
                    nuevaFila+='<td>'+value_area+'</td>';
                    nuevaFila+='<td class="text-center" > <div class="btn-group">';
                    nuevaFila+= '<button class="btn btn-danger btn-xs" type="button" onclick="delAreaList('+id_area+')" data-toggle="tooltip" data-placement="top" title="Eliminar">';
                    nuevaFila+= '<i class="fa fa-times"></i>';
                    nuevaFila+= '</button>';
                    nuevaFila+= '</div></td>'; 
                    nuevaFila+='</tr>';
                    $("#table_areas").append(nuevaFila);
                };      

                if (typeof( id_area) == "string") {
                    array_conten_a.push(id_area);
                    parador_prop_a[id_area] = ""; 
                    //limpiando
                    $('#area_revizar option').remove();                
                    $.each(parador_prop_a, function(index, value) {                     
                        if ($.trim(value) != "") {
                            $('#area_revizar').append( $("<option></option>").attr("value",index).text(value) );
                        };                    
                    });
                    add_area_ajax(id_area); //envio de area
                };                 
              })

            function add_area_ajax(area){
                var revision =  $("#id_rev_form").val();
                var compensacion = $.trim($("#sup_bandera_url").text() );
                base_url = compensacion+'PatController/update_revision_areas_revisar_add';
                  $.ajax({
                    url: base_url,                    
                    type: "post",
                    dataType: 'json',
                    data: {id_revision : revision, id_area : area},
                    beforeSend:function(){},
                    success:function(data){                        
                        //*
                        if (data) {}else{ //some error
                          alert('Error Interno, recargue la pagina');
                        };
                        //*
                    }
                }); 
            }

            function delAreaList(id){   
                var tr = $("#tr_area_"+id);
                var array_refresh = new Array(); //tr.css("background-color","#FF3700");        
                tr.fadeOut(400, function(){ 
                    tr.remove(); 
                    reset_table_index_area();
                });
                parador_prop_a[id] = check_prop_a_u[id];
                console.log(parador_prop_a)
                array_conten_a.splice(array_conten_a.indexOf(id),1); 
                $('#area_revizar option').remove();                
                $.each(parador_prop_a, function(index, value) {                     
                    if ($.trim(value) != "") {
                        $('#area_revizar').append( $("<option></option>").attr("value",index).text(value) );
                    };                    
                });                
                del_area_ajax(id);
              }

              function reset_table_index_area(){
                $('td:first-child', $("#table_areas tbody") ).each(function (i) {
                    $(this).text(i +1);          
                });
              }

              function del_area_ajax(area){
                var revision =  $("#id_rev_form").val();
                var compensacion = $.trim($("#sup_bandera_url").text() );
                base_url = compensacion+'PatController/update_revision_areas_revisar_delete';
                  $.ajax({
                    url: base_url,                    
                    type: "post",
                    dataType: 'json',
                    data: {id_revision : revision, id_area : area},
                    beforeSend:function(){},
                    success:function(data){                        
                        //*
                        console.log(data);
                        if (data) {                           
                        }else{ //some error
                          alert('Error Interno, recargue la pagina');
                        };
                        //*
                    }
                }); 
              }


      //end javascript
        </script>

         <!-- Modal confirmacion addpres -->
        <div class="modal fade" id="modal_confirmar_add" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <p>¿Agregar Registro?</p>
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
    </body>
</html>