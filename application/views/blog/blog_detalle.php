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

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="<?=JS ?>plugins/magnific-popup/magnific-popup.min.css">

    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="<?=CSS ?>bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="<?=CSS ?>oneui.css">

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
    <?php $this->load->view('core/sideContent');?>
    <!-- END Side Overlay -->

    <!-- Sidebar --><?php $this->load->view('core/menu');?>
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
        <?php foreach ($get_blog as $key => $value): ?>
        <div class="content bg-gray-lighter">
            <div class="row items-push">
                <div class="col-sm-7">
                    <h1 class="page-heading">
                        <?php echo $value->blog_titulo; ?> <small><?php echo $value->blog_tipo?></small>
                    </h1>
                </div>
                <div class="col-sm-5 text-right hidden-xs">
                    <ol class="breadcrumb push-10-t">
                        <li><a href="blogLista">Blog</a></li>
                        <li>Detalle</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END Page Header -->

        <!-- Page Content -->
        <div class="content">
            <div class="block block-rounded">
                <div class="block-content block-content-full block-content-narrow">
                <?php //foreach ($get_blog as $key => $value): ?>
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-4">
                            <a class="block block-link-hover3 text-center">
                                <div class="block-content block-content-full">
                                    <i class="fa fa-newspaper-o fa-4x text-info"></i>
                                    <div class="font-w600 push-15-t"><?php echo $value->blog_tipo?></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="push-30 push-30-t">
                        <p class="text-justify">
                        <?php echo $value->blog_des?>
                        </p>
                    </div>

                    <div class="row items-push js-gallery">
                        <div class="col-sm-6 col-md-6 fadeIn">
                            <a class="img-link img-thumb" href="<?php echo $value->link1?>">
                                <img class="img-responsive" src="<?=URL . $value->img1_url?>" alt="img1_name">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-6 fadeIn">
                            <a class="img-link img-thumb" href="<?php echo $value->link2?>">
                                <img class="img-responsive" src="<?=URL . $value->img2_url?>" alt="img2_name">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-6 fadeIn">
                            <a class="img-link img-thumb" href="<?php echo $value->link3?>">
                                <img class="img-responsive" src="<?=URL . $value->img3_url?>" alt="img3_name">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-6 fadeIn">
                            <a class="img-link img-thumb" href="<?php echo $value->link4?>">
                                <img class="img-responsive" src="<?=URL . $value->img4_url?>" alt="img4_name">
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="block">
                            <div class="block-header">
                                <h3 class="block-title">Links</h3>
                            </div>
                            <div class="block-content">
                                <div class="row items-push">
                                    <div class="col-sm-6">
                                        <a class="link-effect" href="<?php echo $value->link1?>">Link a una página web</a>
                                    </div>
                                </div>
                                <div class="row items-push">
                                    <div class="col-sm-6">
                                        <a class="link-effect" href="<?php echo $value->link2?>">Link a una página web</a>
                                    </div>
                                </div>
                                <div class="row items-push">
                                    <div class="col-sm-6">
                                        <a class="link-effect" href="<?php echo $value->link3?>">Link a una página web</a>
                                    </div>
                                </div>
                                <div class="row items-push">
                                    <div class="col-sm-6">
                                        <a class="link-effect" href="<?php echo $value->link4?>">Link a una página web</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php //endforeach ?>
                </div>
            </div>
        </div>
        <?php endforeach ?>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <?php $this->load->view('core/footer');?>
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
<script src="<?=JS ?>plugins/magnific-popup/magnific-popup.min.js"></script>

<!-- Page JS Code -->
<script>
    jQuery(function () {
        // Init page helpers (Magnific Popup plugin)
        App.initHelpers('magnific-popup');
    });
</script>


</body>
</html>