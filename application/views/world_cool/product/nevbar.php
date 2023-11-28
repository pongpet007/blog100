<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?php echo base_url() ?>"><?=lang('Home') ?></a></li>
                <?php if ($breadcrumb == 1) { ?>
                    <li><a href="<?php echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/products"><?=lang('Products') ?></a></li>
                    <li class="active"> <?=$breadcrumb_name?> </li>
                <?php }elseif ($breadcrumb == 2) { ?>
                    <li><a href="<?php echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/products"><?=lang('Products') ?></a></li>
                    <li class="active"> <?=$breadcrumb_name?> </li>
                <?php }elseif ($breadcrumb == 3) { ?>
                    <li><a href="<?php echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/products"><?=lang('Products') ?></a></li>
                    <li class="active"> <?=$breadcrumb_name?> </li>
                <?php }else { ?>
                    <li class="active"><?=lang('Products') ?> </li>
                <?php } ?>
                

            </ul>
        </div>
    </div>
</div>