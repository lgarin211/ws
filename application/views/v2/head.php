<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>WS</title>
    <link href="<?= base_url('assets/'); ?>two.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('/assets/bs-digishop-mini/') ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url('/assets/bs-digishop-mini/') ?>assets/css/new.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="<?= base_url('/assets/bs-digishop-mini/') ?>assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="<?= base_url('/assets/bs-digishop-mini/') ?>assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="<?= base_url('/assets/bs-digishop-mini/') ?>assets/css/style.css" rel="stylesheet" />
    <!-- <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet"> -->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <nav class="navbar site-header sticky-top navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url('assets/img/produk/head.jpg'); ?>" width="150px" class="d-inline-block align-top">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= base_url('/') ?>">Home</a></li>
                    <li><a href="#">Article</a></li>
                    <li><a href="<?= base_url('/auth') ?>"><?= $san ?></a></li>
                    <li class="row">
                        <a class="" href="<?= base_url('/dagang/keranjang') ?>"><i class="fas fa-box-open fa-fw"></i><span class="badge badge-danger badge-counter"><?= $keranjang ?></span></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Support<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><strong>Call: </strong> <?= $asesoris['No_HP'] ?></a></li>
                            <li><a href="#"><strong>Mail: </strong> <?= $asesoris['email'] ?></a></li>
                            <li class="divider"></li>
                            <li><a href="#"><strong>Address: </strong>
                                    <div>
                                        <?= $asesoris['Alamat'] ?>
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                </ul>
                <!-- <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" placeholder="Enter Keyword Here ..." class="form-control">
                    </div>
                    &nbsp;
                    <button type="submit" class="btn btn-primary">Search</button>
                </form> -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container-fluid">