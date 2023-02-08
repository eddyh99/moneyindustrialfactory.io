<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="google-site-verification" content="3uXJNPBSutQLqqojsSjh54IJIts4AOxrCa90FU8_AwI" />
    <title><?=$title?></title>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="<?=base_url()?>assets/images/favicon.png" />


    <!-- Vendor CSS Files -->
    <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendor/summernote/summernote-bs4.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendor/select2/select2.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>assets/vendor/select2/select2-bootstrap4.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css">

    <!-- Template Main CSS File -->
    <link href="<?=base_url()?>assets/css/fonts.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/mif-desktop.css" media="(min-width: 768px)" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/mif-mobile.css" media="(max-width: 767px)" rel="stylesheet">
</head>

<body>
    <div class="wrapper">

        <!-- ======= Header ======= -->
        <header class="header fixed-top">
            <div class="col-12 col-sm-12 form-group row" style="position:relative">
                <div class="d-flex justify-content-between align-items-center col-12 col-sm-12">
                    <div class="col-2 col-sm-2">
                        <a href="<?=base_url()?>" class="logo">
                            <img src="<?=base_url()?>assets/images/home/logo.png" class="image-fluid">
                        </a>
                    </div>
                    <span class="align-middle text-mif">
                        <h1>Money Industrial Factory</h1>
                    </span>
                    <span class="col-1 col-sm-1"></span>
                </div>
                <div class="col-2 col-sm-2 col-md-2" style="position:absolute;right:0;">
                    <!-- <div class="col-md-1 d-none d-md-block mt-3">
                        <select class="selectpicker" data-width="fit">
                            <option data-content='<span class="flag-icon flag-icon-us"></span> English' value="<?=base_url()?>languageSwitcher/switchlang/english" <?php echo ($_SESSION['site_lang'] == 'english') ? "selected" : "" ?>>English</option>
                            <option data-content='<span class="flag-icon flag-icon-it"></span> Italian' value="<?=base_url()?>languageSwitcher/switchlang/italia" <?php echo ($_SESSION['site_lang'] == 'italia') ? "selected" : "" ?>>Italy</option>
                            <option data-content='<span class="flag-icon flag-icon-es"></span> Spain'>Spain</option>
                            <option data-content='<span class="flag-icon flag-icon-pt"></span> Portugal'>Portugal</option>
                            <option data-content='<span class="flag-icon flag-icon-fr"></span> France' value="<?=base_url()?>languageSwitcher/switchlang/french" <?php echo ($_SESSION['site_lang'] == 'french') ? "selected" : "" ?>>France</option>
                            <option data-content='<span class="flag-icon flag-icon-de"></span> Deutch'>Deutch</option>
                            <option data-content='<span class="flag-icon flag-icon-ru"></span> Russian'>Rusia</option>
                        </select>
                    </div> -->
                    <div class="col-12 col-sm-12 col-md-1" style="height:40px;e">
                        <a href="#" class="menuBtn">
                            <span class="lines"></span>
                        </a>
                    </div>
                    <!-- <div class="col-12 col-sm-12 d-block d-sm-none">
                        <select class="selectpicker" data-width="fit">
                            <option data-content='<span class="flag-icon flag-icon-us"></span>'
                                value="<?=base_url()?>languageSwitcher/switchlang/english"
                                <?php echo ($_SESSION['site_lang'] == 'english') ? "selected" : "" ?>></option>
                            <option data-content='<span class="flag-icon flag-icon-it"></span>'
                                value="<?=base_url()?>languageSwitcher/switchlang/italia"
                                <?php echo ($_SESSION['site_lang'] == 'italia') ? "selected" : "" ?>></option>
                            <option data-content='<span class="flag-icon flag-icon-es"></span>'></option>
                            <option data-content='<span class="flag-icon flag-icon-pt"></span>'></option>
                            <option data-content='<span class="flag-icon flag-icon-fr"></span>'
                                value="<?=base_url()?>languageSwitcher/switchlang/french"
                                <?php echo ($_SESSION['site_lang'] == 'french') ? "selected" : "" ?>></option>
                            <option data-content='<span class="flag-icon flag-icon-de"></span>'></option>
                            <option data-content='<span class="flag-icon flag-icon-ru"></span>'></option>
                        </select>
                    </div> -->
                </div>
            </div>
            <nav class="mainMenu">
                <ul>
                    <li><a class="nav-link scrollto" href="<?=base_url()?>#">HOME</a></li>
                    <li><a class="nav-link scrollto" href="<?=base_url()?>#services">SERVICES</a></li>
                    <li><a class="nav-link scrollto" href="<?=base_url()?>#about">ABOUT US</a></li>
                    <li><a class="nav-link scrollto" href="<?=base_url()?>#help">INFO</a></li>
                    <li><a class="nav-link scrollto" href="<?=base_url()?>#help">HELP & SUPPORT</a></li>
                    <li><a class="nav-link scrollto" href="<?=base_url()?>#help">CONTACT US</a></li>
                </ul>
                <div>
        </header>
        <!-- End Header -->

        <main id="main">