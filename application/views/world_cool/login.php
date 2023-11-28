<!doctype html>
<html class="no-js" lang="zxx">
    <?php $this->load->view($theme_path.'/inc/header-meta') ?>
    <body>
        
        <?php $this->load->view($theme_path.'/inc/header') ?>

        <div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?php echo base_url() ?>"><?=lang('Home') ?></a></li>
                <li class="active"> <?=lang('login / Register') ?> </li>
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
                            <h4> <?=lang('login') ?> </h4>
                        </a>
                        <a data-toggle="tab" href="#lg2">
                            <h4> <?=lang('Register') ?> </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form id="frmLogin" action="<?php echo base_url('User/Login') ?>" target='_blank' method="post">
                                        <input id="username" name="username" placeholder="<?=lang('E-mail') ?>" type="text" class="" />
                                        <input id="password" name="password" type="password" placeholder="<?=lang('Password') ?>" />
                                        <div class="button-box">
                                            <button type="submit"><span><?=lang('login') ?></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form target='_blank' action="<?php echo base_url('User/Register') ?>" method="post">
                                        <input type="text" name="username" placeholder="<?=lang('Fullname') ?>">
                                        <input type="password" name="userpassword" placeholder="<?=lang('Password') ?>">
                                        <input name="useremail" placeholder="<?=lang('E-mail') ?>" type="email">
                                        <div class="button-box">
                                            <button type="submit"><span><?=lang('Register') ?></span></button>
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