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
    <!-- favicon-icon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/images/icon.png?<?=rand()?>"> 
    <!-- theme style -->

    <link href="<? echo base_url($theme_assets_path) ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    
    <!-- fontawesome css -->
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <!-- google font -->
    <link rel="stylesheet" type="text/css" href="<? echo base_url($theme_assets_path) ?>/css/menumaker.css">
    <!-- menu css -->
    <link href="<? echo base_url($theme_assets_path) ?>/css/themify-icons.css" rel="stylesheet" type="text/css"/>
    <!-- themify icons css -->
    <link href="<? echo base_url($theme_assets_path) ?>/css/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <!-- owl carousel css -->
    <link href="<? echo base_url($theme_assets_path) ?>/css/magnific-popup.css" rel="stylesheet" type="text/css"/>    
    <!-- magnify popup css -->    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet" type="text/css"/>
    
    <?php $this->load->view($theme_path.'/inc/css') ?>    
    <script type="text/javascript" src="<? echo base_url($theme_assets_path) ?>/js/jquery.min.js"></script> <!-- jquery library js -->
</head>