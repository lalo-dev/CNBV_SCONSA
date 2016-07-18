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
                        Detalle<small> Orden de auditoría</small>
                    </h1>
                </div>
                <div class="col-sm-5 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li>Auditoría</li>
                        <li>Planeación detallada</li>
                        <li><a href="orden_auditoria">Orden de auditoría</a></li>
						<li>Detalle</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END Page Header -->

        <!-- Page Content -->
        <div id="c-mdl" class="content">
            <div class="block">
                <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
                    <li class="active">
                        <a href="#search-info">Info</a>
                    </li>
                    <li>
                        <a href="#obser2">General</a>
                    </li>
                    <li>
                        <a href="#obser3">Orden</a>
                    </li>
                </ul>
                <div class="block-content tab-content bg-white">
                    <!-- Info -->
                    <div class="tab-pane fade fade-up in active" id="search-info">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="block block-themed">
                                    <div class="block-header bg-primary-dark">
                                        <h3 class="block-title">Estatus</h3>
                                    </div>
                                    <div class="block-content">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-3">
                                                <div class="block-content block-content-full text-center">
                                                    <i class="fa fa-battery-0 fa-2x text-success"></i>
                                                    <div class="font-w600 push-8-t">En desarrollo</div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-3">
                                                <div class="block-content block-content-full text-center">
                                                    <i class="fa fa-battery-1 fa-2x text-muted"></i>
                                                    <div class="font-w600 push-8-t">Enviado a revisión</div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-3">
                                                <div class="block-content block-content-full text-center">
                                                    <i class="fa fa-battery-2 fa-2x text-muted"></i>
                                                    <div class="font-w600 push-8-t">En revisión</div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-3">
                                                <div class="block-content block-content-full text-center">
                                                    <i class="fa fa-battery-4 fa-2x text-muted"></i>
                                                    <div class="font-w600 push-8-t">Validado</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="block block-themed">
                                    <div class="block-header bg-primary-dark">
                                        <h3 class="block-title">Comentarios</h3>
                                    </div>
                                    <div class="block-content">
                                        <div class="js-chat-container content content-narrow" data-chat-mode="fixed" data-chat-height="300">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <!-- Single Chat (Chat Window 3) -->
                                                    <div class="block">
                                                        <div class="block">
                                                            <div class="js-chat-talk overflow-y-auto block-content block-content-full" data-chat-id="3">
                                                                <!-- Messages -->
                                                                <!-- END Messages -->
                                                            </div>
                                                            <div class="js-chat-form block-content block-content-full block-content-mini">
                                                                <form action="base_ui_chat.html" method="post">
                                                                    <input id="txtChat" class="js-chat-input form-control" type="text" data-target-chat-id="3" placeholder="Type a message and hit enter..">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END Single Chat (Chat Window 3) -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="block block-themed">
                                    <div class="block-header bg-primary-dark">
                                        <h3 class="block-title">Opciones</h3>
                                    </div>
                                    <div class="block-content">
                                        <div class="row">
                                            <div class="col-lg-4 col-lg-offset-2">
                                                <a class="block block-link-hover2" href="javascript:void(0)">
                                                    <div class="block-content block-content-full bg-flat clearfix">
                                                        <i class="si si-eye fa-2x text-white pull-right"></i>
                                                        <span class="h4 font-w700 text-white">Orden de auditoría</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                                    <div class="block-content block-content-full bg-primary clearfix">
                                                        <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                        <span class="h4 font-w700 text-white">Orden de auditoría</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Info -->
                    <!-- Inicia dir-g2 -->
                    <div class="tab-pane fade fade-up" id="obser2">
                        <div class="row">
                            <div class="row">
                                <div class="col-sm-1 col-sm-offset-5">
                                    <label class="css-input switch switch-primary" title="Verificado">
                                        <input type="checkbox" data-bind="checked:gral.verificado"><span></span> Verficado
                                    </label>
                                </div>
                                <div class="col-sm-1">
                                    <label class="css-input switch switch-success" title="Validado">
                                        <input type="checkbox" data-bind="checked:gral.validado"><span></span> Validado
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-offset-2">
                                <div class="form-material open">
                                    <select class="form-control" id="periodoReserva" name="periodoReserva" size="1" data-bind="value:gral.periodo_reserva">
                                        <option>  </option><!-- Empty value for demostrating material select box -->
                                        <option value="1">Periodo x</option>
                                        <option value="2">Periodo xx</option>
                                    </select>
                                    <label for="periodoReserva">Periodo de reserva</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="fundamnt" name="fundamnt" data-bind="value:gral.fundamento_legal_2">
                                    <label for="fundamnt">Fundamento legal</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-offset-2">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="amplia_reser" name="amplia_reser" data-bind="value:gral.ampli_reserva">
                                    <label for="amplia_reser">Ampliación de reserva</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="confidencial" name="confidencial" data-bind="value:gral.confidencial">
                                    <label for="confidencial">Confidencial</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-offset-2">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="fundlegal" name="fundlegal" data-bind="value:gral.fundamento_legal">
                                    <label for="fundlegal">Fundamento legal</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="clasifica" name="clasifica" data-bind="value:gral.clasifico">
                                    <label for="clasifica">Clasifico (titulos)</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-offset-2">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="fundlegal" name="fundlegal" data-bind="value:gral.fec_clasificacion">
                                    <label for="fundlegal">Fecha de clasificación</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="desclasifico" name="desclasifico" data-bind="value:gral.desclasifico">
                                    <label for="desclasifico">Desclasifico</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-offset-2">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="fdescla" name="fdescla" data-bind="value:gral.fec_des_clasificacion">
                                    <label for="fdescla">Fecha de desclasificación</label>
                                </div>
                            </div>
                            <div class="col-md-10 col-md-offset-2">
                                <div class="form-group">
                                    <button class="btn btn-sm btn-primary" type="submit" data-bind="click:saveGeneral">Guardar</button>
                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- termina obser2 -->
                    <!-- Inicia dir-g3 -->
                    <div class="tab-pane fade fade-up" id="obser3">
                        <div class="row">
                            <div class="col-sm-1 col-sm-offset-5">
                                <label class="css-input switch switch-primary" title="Verificado">
                                    <input type="checkbox" data-bind="checked:orden.verificado"><span></span> Verficado
                                </label>
                            </div>
                            <div class="col-sm-1">
                                <label class="css-input switch switch-success" title="Validado">
                                    <input type="checkbox" data-bind="checked:orden.validado"><span></span> Validado
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-2">
                                    <div class="form-material">
                                        <input type="text" class="js-datepicker form-control" data-date-format="yyyy-mm-dd" id="fecha" name="fecha" data-bind="value: orden.fecha">
                                        <label for="fecha">Fecha</label>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-2">
                                    <label>Auditores:</label>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-4">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="rol" name="rol" data-bind="value: orden.rol">
                                        <label for="rol">Rol</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="nombre" name="nombre" data-bind="value: orden.nombre">
                                        <label for="nombre">Nombre</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="grado" name="grado" data-bind="value: orden.grado">
                                        <label for="grado">Grado</label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-material open">
                                        <select class="form-control" id="coordinacb" name="coordinacb" size="1"  data-bind="value: orden.coordinado">
                                            <option>  </option><!-- Empty value for demostrating material select box -->
                                            <option value="1">Coordinado 1</option>
                                            <option value="2">Coordinado 2</option>
                                        </select>
                                        <label for="coordinacb">Coordinado</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="periodo" name="periodo" data-bind="value: orden.periodo">
                                        <label for="periodo">Periodo</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-material">
                                        <input class="form-control" type="text" id="verificar" name="verificar" data-bind="value: orden.verificar">
                                        <label for="verificar">Verificar</label>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <blockquote>
                                    <div class="col-md-12">Firmas: </div>
                                    <div class="col-md-3">
                                        <div class="form-material open">
                                            <select class="form-control" id="slt-rol" name="rol" size="1" 
                                               data-value-field="id",
                                               data-text-field="des",
                                               data-bind="source:catFirma, value: firma.rol">
                                            </select>
                                            <label for="slt-rol">Rol</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-material open">
                                            <select class="form-control" id="slt-auditor" name="auditor" size="1" 
                                               data-value-field="id",
                                               data-text-field="des",
                                               data-bind="source:catFirma, value: firma.auditor"></select>
                                            <label for="slt-auditor">Auditor</label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-material">
                                            <button class="btn btn-xs btn-success" data-bind="click:addFirma">+</button>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <table class="table table-condensed" style="font-size: 10px;">
                                            <thead>
                                            <tr>
                                                <td><strong>Rol</strong></td>
                                                <td><strong>Nombre</strong></td>
                                                <td class="text-center"><strong>Eliminar</strong></td>
                                            </tr>
                                            </thead>
                                            <tbody data-bind="source:firmas" data-template="firma-temp"></tbody>
                                        </table>
                                        <script id="firma-temp" type="text/x-kendo-template">
                                            <tr>
                                                <td>#: des #</td>
                                                <td>#: des_auditor #</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" data-original-title="" data-bind="click:deletFirma"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </script>
                                    </div>
                                    <div class="clearfix"></div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <blockquote>
                                    <div class="col-md-10">CC: </div>
                                    <div class="col-md-3">
                                        <div class="form-material open">
                                            <select class="form-control" id="slt-ccrol" name="nombr" size="1" 
                                            data-value-field="id",
                                               data-text-field="des",
                                               data-bind="source:catFirma, value: CCRol"></select>
                                            <label for="slt-ccrol">Rol</label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-material">
                                            <button class="btn btn-xs btn-success" data-bind="click:addCC">+</button>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <table class="table table-condensed" style="font-size: 10px;">
                                            <thead>
                                            <tr>
                                                <td class="text-center"><strong>CC</strong></td>
                                                <td class="text-center"><strong>Eliminar</strong></td>
                                            </tr>
                                            </thead>
                                            <tbody data-bind="source:CCs" data-template="cc-temp"></tbody>
                                        </table>
                                        <script id="cc-temp" type="text/x-kendo-template">
                                            <tr>
                                                <td class="text-center">#: des_ccrol #</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" data-original-title="" data-bind="click:deletCC"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </script>
                                    </div>
                                    <div class="clearfix"></div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button class="btn btn-sm btn-primary" type="submit" data-bind="click: saveOrden">Guardar</button>
                                <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                            </div>
                        </div>

                    </div>
                    <!-- termina obser3 -->
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

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

<script src="<?=JS ?>kendo.web.min.js"></script>
<!-- <script src="//kendo.cdn.telerik.com/2016.2.714/js/kendo.all.min.js"></script> -->

<script type="text/javascript">
 var jx = null;
 var idRevision = "<?= $id_revision ?>";
 console.log(idRevision);

    $(function(){
      jx = function(m, d, s){
            $.ajax({
              type: "POST",
              url: "<?=URL ?>AuditoriaController/"+ m,
              dataType: 'json',
              data:  (d)?d:null,
              success: function(res) {
                s(res);
              },
              error: function(res) {
                console.log("error",res);
              }
          });
        }
    })
</script>
<script src="<?=JS ?>orden.auditoria.js"></script>

<!-- Page JS Code -->
<script>
    $(function () {
        // Init page helpers (BS Datepicker + BS Datetimepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
        App.initHelpers(['datepicker', 'datetimepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
    });
</script>
<!-- Page JS Code -->
<script src="<?=JS ?>pages/base_ui_chat.js"></script>
</body>
</html>