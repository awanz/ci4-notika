<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->include('layouts/head') ?>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <?= $this->include('layouts/header') ?>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <?= $this->include('layouts/mobile_menu') ?>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <?= $this->include('layouts/navigation') ?>
    <!-- Main Menu area End-->
    <?= $this->renderSection('content') ?>
    <!-- Start Footer area-->
    <?= $this->include('layouts/footer') ?>
    <!-- End Footer area-->
    <?= $this->include('layouts/foot') ?>
</body>

</html>