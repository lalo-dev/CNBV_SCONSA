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
    <?php $this->load->view('core/sideContent');?>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <?php $this->load->view('core/menu');?>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="header-navbar" class="content-mini content-mini-full">
        <!-- Header Navigation Right -->
        <?php $this->load->view('core/headerNavigation');?>
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
                        Blog <small>Dashboard</small>
                    </h1>
                </div>
                <div class="col-sm-5 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li><a href="dashboard">Dashboard</a></li>
                        <li>Blog</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END Page Header -->

        <!-- Page Content -->
        <div class="content">
            <!-- News -->
            <div class="block block-themed">
                <div class="block-header bg-primary">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title"> News</h3>
                </div>
                <div class="block-content">
                    <ul class="list list-timeline pull-t">
                        <!-- Twitter Notification -->
                        <!-- ul Noticias -->




                        <?php foreach ($get_blogs as $key => $value): ?>
                        <li>
                            <?php
                                $icono = "";
                                if($value->tipo_noticia == "1") //Info
                                    $icono = '<i class="fa fa-newspaper-o list-timeline-icon bg-info"></i>';
                                if($value->tipo_noticia == "2") //Noticia
                                    $icono = '<i class="fa fa-calendar-times-o list-timeline-icon bg-city"></i>';
                                if($value->tipo_noticia == "3") //Fecha limite de entrega
                                    $icono = '<i class="fa fa-newspaper-o list-timeline-icon bg-default"></i>';
                                if($value->tipo_noticia == "4") //Documentos entregados
                                    $icono = '<i class="<i class="fa fa-cog list-timeline-icon bg-primary-dark"></i>';
                                if($value->tipo_noticia == "5") //Actualización del sistema
                                    $icono = '<i class="fa fa-newspaper-o list-timeline-icon bg-info"></i>';
                                if($value->tipo_noticia == "6") //Cumpleaños
                                    $icono = '<i class="fa fa-newspaper-o list-timeline-icon bg-info"></i>';
                            ?>
                            <!--<div class="list-timeline-time">12 Dic 2015</div>-->
                            <div class="list-timeline-time"><?php echo $value->date_created; ?></div>
                            <?php echo $icono; ?>
                            <div class="list-timeline-content">
                                <p class="font-w600"><?php echo $value->blog_titulo; ?></p>
                                <p class="font-s13"><?php echo substr($value->blog_des, 0, 650); ?>...</p>
                                <div class="row items-push js-gallery">
                                    <div class="col-sm-6 col-lg-3">
                                        <!--<a class="img-link" href="assets/img/photos/photo2@2x.jpg">-->
                                        <a class="img-link" href="<?php echo $value->link1; ?>">
                                            <!--<img class="img-responsive" src="assets/img/photos/photo2.jpg" alt="">-->
                                            <img class="img-responsive" src="<?=URL . $value->img1_url; ?>" alt="<?php echo $value->img1_name; ?>">
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <!--<a class="img-link" href="assets/img/photos/photo8@2x.jpg">-->
                                        <a class="img-link" href="<?php echo $value->link2; ?>">
                                            <!--<img class="img-responsive" src="assets/img/photos/photo8.jpg" alt="">-->
                                            <img class="img-responsive" src="<?=URL . $value->img2_url; ?>" alt="<?php echo $value->img2_name; ?>">
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <!--<a class="img-link" href="assets/img/photos/photo2@2x.jpg">-->
                                        <a class="img-link" href="<?php echo $value->link3; ?>">
                                            <!--<img class="img-responsive" src="assets/img/photos/photo2.jpg" alt="">-->
                                            <img class="img-responsive" src="<?=URL . $value->img3_url; ?>" alt="<?php echo $value->img3_name; ?>">
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <!--<a class="img-link" href="assets/img/photos/photo2@2x.jpg">-->
                                        <a class="img-link" href="<?php echo $value->link4; ?>">
                                            <!--<img class="img-responsive" src="assets/img/photos/photo2.jpg" alt="">-->
                                            <img class="img-responsive" src="<?=URL . $value->img4_url; ?>" alt="<?php echo $value->img4_name; ?>">
                                        </a>
                                    </div>
                                </div>
                                <p class="font-s13"><a href="blog_detalle/<?php echo $value->id_blog?>">Leer más >></a></p>
                                <!--<p class="font-s13"><a href="blog_detalle">Leer más >></a></p>-->
                            </div>
                        </li>
                        <?php endforeach ?>
                    </ul>






                    <!--END ul Noticias--> 
                </div>
            </div>
            <!-- END News -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <?php $this->load->view('core/footer');?>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- Small Modal -->
<div class="modal" id="modal-small" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Comentarios</h3>
                </div>
                <div class="block-content">
                    <!-- Single Chat (Chat Window 3) -->
                    <div class="block">
                        <div class="block">
                            <div class="bg-image" style="background-image: url('assets/img/photos/photo25.jpg');">
                                <div class="block-content block-content-full bg-black-op text-center">
                                    <div class="push-10"><img class="img-avatar img-avatar-thumb" src="assets/img/avatars/avatar9.jpg" alt="">
                                    </div>
                                    <h3 class="h4"><span class="text-white">Coordinador</span></h3>
                                </div>
                            </div>
                            <div class="js-chat-talk overflow-y-auto block-content block-content-full" data-chat-id="3">
                                <!-- Messages -->
                                <div class="font-s12 text-muted text-center push-20-t push-15"><em>Ayer</em></div>
                                <div class="block block-rounded block-transparent push-15 push-50-l">
                                    <div class="block-content block-content-full block-content-mini bg-gray-lighter">Revisa, la propuesta, sls</div>
                                </div>
                                <div class="font-s12 text-muted text-center push-20-t push-10"><em>Hoy</em></div>
                                <div class="block block-rounded block-transparent push-15 push-50-r">
                                    <div class="block-content block-content-full block-content-mini bg-gray-light">Todo OK</div>
                                </div>
                                <!-- END Messages -->
                            </div>
                            <div class="js-chat-form block-content block-content-full block-content-mini">
                                <form action="m1_0_0_form_pat_completo.php" method="post">
                                    <input class="js-chat-input form-control" type="text" data-target-chat-id="3" placeholder="Type a message and hit enter..">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END Single Chat (Chat Window 3) -->
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- END Small Modal -->

<!-- Small Modal -->
<div class="modal" id="modal-small2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Comentarios</h3>
                </div>
                <div class="block-content">
                    <!-- Single Chat (Chat Window 3) -->
                    <div class="block">
                        <div class="block">
                            <div class="bg-image" style="background-image: url('assets/img/photos/photo25.jpg');">
                                <div class="block-content block-content-full bg-black-op text-center">
                                    <div class="push-10"><img class="img-avatar img-avatar-thumb" src="assets/img/avatars/avatar9.jpg" alt="">
                                    </div>
                                    <h3 class="h4"><span class="text-white">Titular</span></h3>
                                </div>
                            </div>
                            <div class="js-chat-talk overflow-y-auto block-content block-content-full" data-chat-id="3">
                                <!-- Messages -->
                                <div class="font-s12 text-muted text-center push-20-t push-15"><em>Ayer</em></div>
                                <div class="block block-rounded block-transparent push-15 push-50-l">
                                    <div class="block-content block-content-full block-content-mini bg-gray-lighter">Revisa, la propuesta, sls</div>
                                </div>
                                <!-- END Messages -->
                            </div>
                            <div class="js-chat-form block-content block-content-full block-content-mini">
                                <form action="m1_0_0_form_pat_completo.php" method="post">
                                    <input class="js-chat-input form-control" type="text" data-target-chat-id="3" placeholder="Type a message and hit enter..">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END Single Chat (Chat Window 3) -->
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- END Small Modal -->

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


</body>
</html>