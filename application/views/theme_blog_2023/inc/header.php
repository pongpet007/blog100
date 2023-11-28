<?php 
$json = json_decode($companyData->header_footer_json);    
    // print_r($json);
    // exit();


?>
<header class="header-position">
    <div class="header_top" style="<?=$companyData->packageBG?'background-color: '.$companyData->packageBG.' ;':''?>;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="header_top_left">
                        <li class="header_top_left_one ct_language">
                            <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><?=lang('Language') ?></a>
                            <ul class="ct_language_dropdown">
                                <?php foreach ($countrys as $country) { ?>
                                    <?php $uri =  uri_string(); ?>
                                    <?php $uri = str_ireplace($this->session->userdata('site_lang_name')."/", $country->iso2."/", $uri); ?>
                                    <li><a class="dropdown-item" href="<?=base_url(strtolower($uri))?>"><?=$country->iso2?>-<?=$country->short_name ?> </a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="header_top_left_one">
                            <a class="total-visitor" href="<?php echo base_url($this->session->userdata('site_lang_name')."/home/stat") ?>">
                                <?=lang('Number of website visitors') ?> <? echo $counter; ?></a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </div>
        <div class="header_middle" style="<?=$json->header_middle_bg_color?'background-color: '.$json->header_middle_bg_color.' ;':''?>border-bottom: 1px solid #eee;">
            <div class="container">
                <div class="row" style="align-items: center;">
                    <div class="col-md-2">
                        <div class="logo logo-mrg">
                            <a href="<?php echo base_url()?>">
                                <img src="<?php echo base_url() ?>images/logo/logo.webp" alt="<?=$companyData->com_name?>" style="max-width: 100%;">
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>


    </header>

    <style type="text/css">
        .header_top {
            padding: 15px 0;
        }
        .header_top_left {
            margin-bottom: 0px;padding: 0;list-style: none;display: flex;flex-direction: row;
        }
        .header_top_left_one {
            margin-right: 15px;
        }
        .header_top_left_one a {
            font-size: 16px;
            font-weight: 400;
            <?=$companyData->package_text_color?'color: '.$companyData->package_text_color.' ;':''?>;
            text-decoration: none;
        }
        .header_top_left_one:hover a {
            <?=$companyData->category_color?'color: '.$companyData->category_color.' ;':''?>;
        }
        .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .ct_language {
            position: relative;
        }

        .ct_language_dropdown {
            display: none;
            position: absolute;
            background-color: unset;
            max-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            list-style: none;
            padding: 0;
            padding-top: 8px;
        }

        .header_top_left_one:hover .ct_language_dropdown a {
            color: black;
            background-color: #FFF;
            font-size: 16px;font-weight: 400;
            padding: 10px 10px;
            text-decoration: none;
            display: block;
        }

        .header_top_left_one:hover .ct_language_dropdown a:hover {background-color: #ddd;color: #FFFFFF}

        .ct_language:hover .ct_language_dropdown {display: block;}

        .ct_language:hover .dropbtn {background-color: #3e8e41;}
        .ct_language_dropdown:before {
            content: '';
            position: absolute;
            top: 0px;
            left: 0;
            right: 0;
            margin: auto;
            width: 8px;
            height: 0;
            border: 0 solid transparent;
            border-right-width: 8px;
            border-left-width: 8px;
            border-bottom: 8px solid #fff;
        }
    </style>