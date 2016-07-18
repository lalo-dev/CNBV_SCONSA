<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>CNBV</title>

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="../assets/img/favicons/favicon.png">

    <link rel="icon" type="image/png" href="../assets/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="../assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../assets/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="../assets/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="../assets/img/favicons/favicon-192x192.png" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="../assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="../assets/css/oneui.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
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
                <div class="col-sm-3">
                    <h1 class="page-heading">
                        Detalle <small>Modificaci&oacute;n</small>
                    </h1>
                </div>
                <div class="col-sm-9 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li>Auditoría</li>
                        <li>Planeación detallada</li>
                        <li>Oficio complementario</li>
						<li>
							<a href="../oficio_complementario">Modificaci&oacute;n</a>
						</li>
						<li>Detalle</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END Page Header -->

        <!-- Page Content -->
        <div class="content">
            <div class="block">
                <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
                    <li class="active">
                        <a href="#search-info">Info</a>
                    </li>
					<li>
                        <a href="#search-modificacion">Modificaci&oacute;n</a>
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
                                                                <div class="font-s12 text-muted text-center push-20-t push-15"><em>Yesterday</em></div>
                                                                <div class="block block-rounded block-transparent push-15 push-50-l">
                                                                    <div class="block-content block-content-full block-content-mini bg-gray-lighter">Hi there!</div>
                                                                </div>
                                                                <div class="font-s12 text-muted text-center push-20-t push-10"><em>Today</em></div>
                                                                <div class="block block-rounded block-transparent push-15 push-50-r">
                                                                    <div class="block-content block-content-full block-content-mini bg-gray-light">Hi!!!</div>
                                                                </div>
                                                                <!-- END Messages -->
                                                            </div>
                                                            <div class="js-chat-form block-content block-content-full block-content-mini">
                                                                <form action="base_ui_chat.html" method="post">
                                                                    <input class="js-chat-input form-control" type="text" data-target-chat-id="3" placeholder="Type a message and hit enter..">
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
                                                        <span class="h4 font-w700 text-white">Modificación</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a class="block block-link-hover2" href="#">
                                                    <div class="block-content block-content-full bg-primary clearfix">
                                                        <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                        <span class="h4 font-w700 text-white">Modificación</span>
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

                    <!-- Modificaciones -->
                    <div class="tab-pane fade fade-up" id="search-modificacion">

						<div class="border-b push-30">
                            <h2 class="push-10">* <span class="h5 font-w400 text-muted">Modificaci&oacute;n del objeto o periodo </span></h2>
                        </div>
						<div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal push-10-t" id="formOfic" onsubmit="return false;" action="" method="post" >


                                    <div class="form-group">
                                        <div class="col-md-4 col-md-offset-2">
                                            <label class="css-input switch switch-primary" title="Verificado">
                                                <?php
                                                if (isset($get_registro->id_of_co)){
                                                    if($get_registro->verificado == 1){
                                                        echo '<input type="checkbox" id="verif" name="verif" checked><span></span> Verficado';
                                                    }else{
                                                        echo '<input type="checkbox" id="verif" name="verif"><span></span> Verficado';
                                                    }
                                                }else{
                                                    echo '<input type="checkbox" id="verif" name="verif" ><span></span> Verficado';
                                                }
                                                ?>
                                            </label>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="css-input switch switch-success" title="Validado">
                                                <?php
                                                if (isset($get_registro->id_of_co)){
                                                    if($get_registro->validado == 1){
                                                        echo '<input type="checkbox" id="valid" name="valid" checked><span></span> Validado';
                                                    }else{
                                                        echo '<input type="checkbox" id="valid" name="valid"><span></span> Validado';
                                                    }
                                                }else{
                                                    echo '<input type="checkbox" id="valid" name="valid" ><span></span> Verficado';
                                                }
                                                ?>
                                            </label>
                                        </div>
                                    </div>


                                    <input type="text" id="id_revision" name="id_revision" value="<?= $id_revision; ?>" style="display:none;">
                                    <?php
                                    if (isset($get_registro->id_of_co)){

                                        echo '<input type="text" id="id_oficio" name="id_oficio" value="'.$get_registro->id_of_co.'" style="display:none;" >';
                                    }else{
                                        echo '<input type="text" id="id_oficio" name="id_oficio" value="" style="display:none;" >';
                                    }
                                    ?>
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <div class="form-material floating">
                                                <textarea  class="form-control" id="orden" name="orden" rows="2" readonly>DATO SE CARGA DE ORDEN DE AUDITORIA</textarea>
                                                <label for="orden">Orden</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-material floating">
                                                <select class="form-control" id="auditor" name="auditor" size="1">
                                                    <option></option>
                                                    <?php foreach ($get_audit as $key => $valuea): ?>
                                                        <?php
                                                        $chek = "";
                                                        if($valuea->id_user == $get_registro->id_us_auditor){
                                                            $chek = "selected='selected'";
                                                            echo "<option value=".$valuea->id_user." ".$chek.">".$valuea->nombre."</option>";
                                                        }
                                                        else{
                                                            echo "<option value=".$valuea->id_user.">".$valuea->nombre."</option>";
                                                        }
                                                        ?>
                                                    <?php endforeach; ?>
                                                </select>
                                                <label for="auditor">Usuario Auditor</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">&nbsp;</div>
                                        <div class="col-md-4">
                                            <div class="form-material floating">
                                                <?php
                                                if (isset($get_registro->id_of_co)){
                                                    echo '<input type="text" class="js-datepicker form-control" data-date-format="yyyy/mm/dd" id="fecha2" name="fecha2" value="'.$get_registro->fecha.'">';
                                                }else{
                                                    echo '<input type="text" class="js-datepicker form-control" data-date-format="yyyy/mm/dd" id="fecha2" name="fecha2" value="">';
                                                }
                                                ?>
                                                <label for="fecha2">Fecha</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-material floating">
                                                <select class="form-control" id="objeto" name="objeto" size="1">
                                                    <option></option>
                                                    <option value="1">Modificación del objeto</option>
                                                    <option value="2">Periodo a revisar de la auditoría</option>
                                                    <option value="2">Visita de inspección o revisión</option>
                                                </select>
                                                <label for="objeto">Objeto / Periodo</label>
                                            </div>
                                        </div>
										<div class="col-md-4">
                                            <div class="form-material floating">
                                                <select class="form-control" id="revisar" name="revisar" size="1">
                                                    <option></option>
                                                    <?php foreach ($get_revisar as $key => $valuea): ?>
                                                        <?php
                                                        $chek = "";
                                                        if($valuea->id == $get_registro->id_revisar){
                                                            $chek = "selected='selected'";
                                                            echo "<option value=".$valuea->id." ".$chek.">".$valuea->des."</option>";
                                                        }
                                                        else{
                                                            echo "<option value=".$valuea->id.">".$valuea->des."</option>";
                                                        }
                                                        ?>
                                                    <?php endforeach; ?>
                                                </select>
                                                <label for="revisar">Revisar</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select class="form-control" id="fundamento" name="fundamento" size="1">
                                                <option></option>
                                                <option value="1">Fundamento 1</option>
                                                <option value="2">Fundamento 2</option>
                                                <option value="3">Fundamento 3</option>
                                            </select>
                                            <label for="fundamento">Fundamentos</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="form-material floating">
                                                <?php
                                                if (isset($get_registro->id_of_co)){
                                                    echo '<textarea class="form-control" id="motivo" name="motivo" rows="3">'.$get_registro->motivo.'</textarea><label for="motivo">Motivo:</label>';
                                                }else{
                                                    echo '<textarea class="form-control" id="motivo" name="motivo" rows="3"></textarea><label for="motivo">Motivo:</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="form-material floating">

                                                <?php
                                                if (isset($get_registro->id_of_co)){
                                                    echo '<textarea class="form-control" id="ob_period" name="ob_period" rows="3">'.$get_registro->ob_period.'</textarea><label for="ob_period">Objeto / Periodo:</label>';
                                                }else{
                                                    echo '<textarea class="form-control" id="ob_period" name="ob_period" rows="3"></textarea><label for="ob_period">Objeto / Periodo:</label>';
                                                }
                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button class="btn btn-sm btn-primary" type="submit" id="addoc_confirm">Guardar</button>
                                            <button class="btn btn-sm btn-default" type="reset" id="addoc_confirm_can">Cancelar</button>
                                            <span class="hidden"  id="load_datos"> <i class="fa fa-cog fa-spin"></i> </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                       
                    </div>
                    <!-- END Modificaciones -->

                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->


    <!-- Modal confirmacion catalogo -->
    <div class="modal fade" id="modal_confirmar_add_oficio" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <button class="btn btn-sm btn-primary" onclick="addmap_confirm()" type="button" data-dismiss="modal"><i class="fa fa-check"></i>Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal confirmacion catalogo -->
    <!-- From Right Modal -->
    <div class="modal fade" id="modal_msn" data-dismiss="modal" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h3 class="block-title">¡Alerta!</h3>
                        </div>
                    </div>
                    <div class="block-content">
                        <strong>
                            <p id="msj"> </p>
                        </strong>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END From Right Modal -->


    <!-- Footer -->
    <?php $this->load->view('core/footer.php'); ?>
    <!-- END Footer -->
</div>
<!-- END Page Container -->


<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/core/jquery.slimscroll.min.js"></script>
<script src="../assets/js/core/jquery.scrollLock.min.js"></script>
<script src="../assets/js/core/jquery.appear.min.js"></script>
<script src="../assets/js/core/jquery.countTo.min.js"></script>
<script src="../assets/js/core/jquery.placeholder.min.js"></script>
<script src="../assets/js/core/js.cookie.min.js"></script>
<script src="../assets/js/app.js"></script>

<!-- Page JS Plugins -->
<script src="../assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="../assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="../assets/js/pages/base_forms_wizard.js"></script>

<!-- Page JS Code -->
<script src="../assets/js/pages/base_forms_validation.js"></script>

<!-- Page JS Plugins -->
<script src="../assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="../assets/js/plugins/bootstrap-datetimepicker/moment.min.js"></script>
<script src="../assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script src="../assets/js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="../assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="../assets/js/plugins/select2/select2.full.min.js"></script>
<script src="../assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
<script src="../assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<script src="../assets/js/plugins/dropzonejs/dropzone.min.js"></script>
<script src="../assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>

<!-- Page JS Code -->
<script>
    $(function () {
        // Init page helpers (BS Datepicker + BS Datetimepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
        App.initHelpers(['datepicker', 'datetimepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
    });
</script>
<!-- Page JS Code -->
<script src="../assets/js/pages/base_ui_chat.js"></script>
<script type="text/javascript">
    //ADD USUARIOS

    $(document ).ready(function() {

        //llenar campos para editar o insertar

            //add oficio
        $("#addoc_confirm").click(function (){ //confirma

            //console.log($("#formOfic").serialize());
            jQuery('#formOfic').validate({  //valida
                ignore: [],
                errorClass: 'help-block animated fadeInDown',
                errorElement: 'div',
                errorPlacement: function(error, e) {
                    jQuery(e).parents('.form-group > div').append(error);
                },
                highlight: function(e) {
                    var elem = jQuery(e);
                    elem.closest('.form-group').removeClass('has-error').addClass('has-error');
                    elem.closest('.help-block').remove();
                },
                success: function(e) {
                    var elem = jQuery(e);
                    elem.closest('.form-group').removeClass('has-error');
                    elem.closest('.help-block').remove();
                },
                rules: {
                'orden': { required: true },
                'objeto': { required: true },
                'revisar': { required: true },
                'motivo': { required: true },
                'fundamento': { required: true },
                'ob_period': { required: true }
                },messages: {
                    orden: "Campo orden requerido",
                    objeto: "Campo objeto requerido",
                    revisar: "Campo revisar requerido",
                    motivo: "Campo motivo requerido",
                    fundamento: "Campo fundamento requerido",
                    ob_period: "Campo objeto / periodo requerido"
                },
                submitHandler: function(form){
                    $("#modal_confirmar_add_oficio").modal('show');
                }
            }); //fin valida
        }); //fin btn confirma

    });
    function addmap_confirm(){

        form = $("#formOfic");
        base_url = '../OficiocomplementarioController/oficio_complementario_form_add';

        //console.log($(form).serialize());

        $.ajax({
            url: base_url,
            type: "post",
            dataType: 'json',
            data: $(form).serialize(),
            beforeSend:function(){
                //$( "#addoc_confirm" ).prop( "disabled", true );
                //$( "#addoc_confirm_can" ).prop( "disabled", true );
            },
            success:function(data){
                //console.log(data);
                $("#id_oficio").val(data.id_of_co);

                if(data.oper == "add"){
                    //alert("Registro agregado correctamente");
                    $("#load_datos").addClass("hidden");
                    $("#msj").text("Registro agregado correctamente");
                    $("#modal_msn").modal('show');

                }else{
                    $( "#load_datos" ).addClass( "hidden" );
                    $("#msj").text("Registro actualizado correctamente");
                    $("#modal_msn").modal('show');
                }
            },
        });
    }

</script>
</body>
</html>