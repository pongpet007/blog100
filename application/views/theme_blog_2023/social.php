<!doctype html>
<html class="no-js" lang="th">
<?php $this->load->view('theme_blog_2023/inc/header_meta') ?>

<body class="parallax webp">

    <?/*php
    require_once("slide/slider.php");
    */ ?>
    <div class="container">
        <div class="row">           
            <div class="col-md-6 py-4">
                <h1>Hybridauth</h1>
                <a href="<?= base_url("LoginSocial/loginHybrid/GitHub") ?>" class="d-none btn btn-info my-2">GitHub Login</a><br />
                <a href="<?= base_url("LoginSocial/loginHybrid/Google") ?>" class="btn btn-info my-2">Google Login</a><br />
                <a href="<?= base_url("LoginSocial/loginHybrid/Facebook") ?>" class="d-none btn btn-info my-2">Facebook Login</a> <br />
                <a href="<?= base_url("LoginSocial/loginHybrid/Twitter") ?>" class="d-none btn btn-info my-2">Twitter Login</a> <br />
            </div>
        </div>
    </div>

    <?php $this->load->view('theme_blog_2023/inc/footer_js') ?>
</body>

</html>