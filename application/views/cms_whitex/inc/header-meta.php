<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$lang=='EN'?$companyData->com_title_en:$companyData->com_title_th ?></title>
    <meta name="description" content="<?php echo $companyData->metaDescription ?>">
    <meta name="keywords" content="<?php echo $companyData->metaKeyword ?>" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="<? echo base_url() ?>" > 
    <meta name="author" content="สินค้าอุตสาหกรรม Brandex Directory Co., Ltd." /> 
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/images/icon.png?<?=rand()?>">	
    <!-- all css here -->
    <link rel="stylesheet" href="<? echo base_url($theme_assets_path) ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<? echo base_url($theme_assets_path) ?>/css/icons.css">
    <link rel="stylesheet" href="<? echo base_url($theme_assets_path) ?>/css/plugins.css">
    <?php $this->load->view($theme_path.'/inc/css') ?>
    <!-- <link rel="stylesheet" href="<? echo base_url($theme_assets_path) ?>/css/style.css"> -->
    <link rel="stylesheet" href="<? echo base_url($theme_assets_path) ?>/css/responsive.css">
    <link rel="stylesheet" href="<? echo base_url($theme_assets_path) ?>/css/google-translate.css">
    <script src="<? echo base_url($theme_assets_path) ?>/js/vendor/modernizr-2.8.3.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet">
    <script src="<? echo base_url($theme_assets_path) ?>/js/vendor/jquery-1.12.0.min.js"></script>  
    
</head>