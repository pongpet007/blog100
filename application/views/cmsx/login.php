<!doctype html>
<html class="no-js" lang="zxx">
    <?php $this->load->view($theme_path.'/inc/header-meta') ?>
    <body>
        
        <?php $this->load->view($theme_path.'/inc/header2') ?>

        <div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active"> login </li>
            </ul>
        </div>
    </div>
</div>
<div class="login-register-area pt-60 pb-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> login </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form id="frmLogin" action="<?php echo base_url('customeradmin/User/login') ?>" method="post">
                                        <input id="username" name="username" placeholder="Username" type="text" class="" />
                                        <input id="password" name="password" type="password" placeholder="Password" />
                                        <div class="button-box">
                                            <button type="submit"><span>Login</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>      

      <?php $this->load->view($theme_path.'/inc/footer') ?>

        <?php $this->load->view($theme_path.'/inc/footer-js') ?>
       
    </body>
</html>