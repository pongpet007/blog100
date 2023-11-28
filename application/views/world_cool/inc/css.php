<?php 
    if($companyData->header_id==1){
        $this->load->view($theme_path."/inc/header1/css");
    }
    elseif($companyData->header_id==2)
    {
        $this->load->view($theme_path."/inc/header2/css");
    }
    elseif($companyData->header_id==3)
    {
        $this->load->view($theme_path."/inc/header3/css");
    }
    elseif($companyData->header_id==4)
    {
        $this->load->view($theme_path."/inc/header4/css");
    }
?>

<style type="text/css">
    .header-contact-icon i {
        font-weight: bold;
    }
    .slick-slide {
        display: none;
        float: left;
        height: 80%;
        min-height: 1px;
    }

    @media (max-width: 767px) and (min-width: 300px){
        .header-contact {
            margin-top: 0px;
        }
        .header-cart {
            padding-top: 0px;
        }
        .cartcss {
            text-align: center;
        }
        .product-slider-nav.nav-style div, .product-slider-nav-2.nav-style div {
            height: 30px;
            line-height: 30px;
            width: 30px;
        }
    }
    @media (max-width: 991px) and (min-width: 768px){
        .header-cart {
            padding-top: 10px;
        }
        .header-search {
            margin-top: 15px;
        }
        .header-contact {
            margin-top: 15px;
        }
        .header-search form {
            margin-top: 0px;
            margin-bottom: 5px;
        }
    }
    @media (max-width: 1199px) and (min-width: 992px){
        .logo-mrg img {
            max-width: 100%;
        }
        .header-contact {
            margin-top: 15px;
        }
        .header-search {
            margin-top: 0px;
        }
        .header-search form {
            margin-top: 10px;
            margin-bottom: 0px;
        }
        .header-cart {
            padding-top: 10px;
        }
    } 
    @media (min-width: 1200px){
        .header-search form {
            margin-top: 5px; 
            margin-bottom: 10px
        }
        .logo-mrg img {
            max-width: 330px;
        }

    }
</style>


<?/*---------------------- Home ---------------------- */?>


<?/*---------------------- footer ---------------------- */?>
<style type="text/css">
    .footer-title > h4, .opening-time > h4 {
        color: #fff;
    }
    .footer-about > p {
        color: #fff;
    }
    .footer-content ul li a {
        color: #fff;
    }
    .footer-contact ul li, .opening-content ul li {
        color: #fff;
    }
    .footer-contact li a {
        color: #fff;
    }
    .footer-contact li a:hover {
        color: #195dc1;
    }
    .footer-content ul li:hover a {
        color: #195dc1;
    }
    .copyright > p {
        color: #fff;
    }
    .copyright > p a {
        color: #fff;
    }
    .menu-coffee-color .main-menu ul li a, .menu-red-color .main-menu ul li a {
        color: #fff;
    }
    .menu-coffee-color .main-menu ul li:hover > a {
        color: #FFF;
    }

    @media (max-width: 767px) and (min-width: 300px){
        .mobilecss {
            height: 45px;
        }
        .imagewidth {
            width: 100%;
            height: 19px;
        }
    }
    @media (max-width: 991px) and (min-width: 768px){
        .mobilecss {
            height: 45px;
        }
        .imagewidth {
            width: 100%;
            height: 19px;
        }
    }
    @media (max-width: 1199px) and (min-width: 992px){
        .imagewidth {
            width: 100%;
            height: 19px;
        }
        .main-menu ul li {
            margin-right: 70px!important;
        }
    } 
    @media (max-width: 1599px) and (min-width: 1200px){
        .newsletter-style form input {
            background: white none repeat scroll 0 0;
            border: 2px solid white;
            box-shadow: none;
            color: #75b4fb;
            font-size: 12px;
            height: 45px;
            padding: 0 75px 0 10px;
            width: 750px;
            border-radius: 0px;
        }
        .newsletter-content > h4 {
            color: #ffffff;
            font-size: 17px;
            margin: 0;
        }
        .imagewidth {
            width: 100%;
            height: 19px;
        }
    } 
    @media (max-width: 1690px) and (min-width: 1600px){
        .newsletter-style form input {
            background: white none repeat scroll 0 0;
            border: 2px solid white;
            box-shadow: none;
            color: #75b4fb;
            font-size: 12px;
            height: 45px;
            padding: 0 75px 0 10px;
            width: 1000px;
            border-radius: 0px;
        }
        .newsletter-content > h4 {
            color: #ffffff;
            font-size: 17px;
            margin: 0;
        }
        .imagewidth {
            width: 100%;
            height: 19px;
        }
    } 
    @media (min-width: 1691px){
        .imagewidth {
            width: 100%;
            height: 19px;
        }
    }
</style>


<?/*---------------------- Aboutus ---------------------- */?>
<style type="text/css">
    
    @media (max-width: 767px) and (min-width: 300px){
        
    }
    @media (max-width: 991px) and (min-width: 768px){

    }
    @media (max-width: 1199px) and (min-width: 992px){
        
    } 
    @media (min-width: 1200px){
        
    }
</style>