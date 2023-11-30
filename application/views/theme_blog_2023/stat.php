<!doctype html>
<html class="no-js" lang="th">
<?php $this->load->view('theme_blog_2023/inc/header_meta') ?>
<body class="parallax webp">
    <?php $this->load->view('theme_blog_2023/inc/header') ?>
    
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="<?php echo base_url() ?>"><?=lang('Home') ?></a></li>
                    <li class="active"><?=lang('Statistic View') ?> </li>


                </ul>
            </div>
        </div>
    </div>

    <style type="text/css">
        .breadcrumb-area {
            padding: 20px 0 20px;
            border-top: 5px solid <?=$companyData->packageBG?''.$companyData->packageBG.'':''?>;
            border-bottom: 5px solid <?=$companyData->packageBG?''.$companyData->packageBG.'':''?>;
        }
        .breadcrumb-area ul {
            padding: 0;margin-bottom: 0;
        }
        .breadcrumb-content li {
            <?=$companyData->packageBG?'color: '.$companyData->packageBG.' ;':''?>;
            display: inline-block;
            font-size: 16px;
            margin-right: 28px;
            position: relative;
        }
        .breadcrumb-content li::before {
            background-color: #aaaaaa;
            content: "";
            height: 2px;
            position: absolute;
            right: -22px;
            top: 10px;
            transform: rotate(-67deg);
            transition: all 0.4s ease 0s;
            width: 12px;
        }
        .breadcrumb-content li:last-child:before {
            background-color: #aaaaaa;
            content: "";
            height: 0px;
            position: absolute;
            right: -22px;
            top: 10px;
            transform: rotate(-67deg);
            transition: all 0.4s ease 0s;
            width: 0px;
        }
        .breadcrumb-content li a {
            color: #000;text-decoration: none;
        }
        .breadcrumb-content li a:hover {
            <?=$companyData->packageBG?'color: '.$companyData->packageBG.' ;':''?>;
        }
    </style>

    <div id="section1">
        <div class="container">
            <div class="col-md-12 statcontent text-center">
                <div class="table-responsive">
                    <table border="0" cellspacing="0" cellpadding="0" width="100%">
                        <tr>
                            <td align="center">
                                <table width="100%" border="0">
                                    <tr>
                                        <td>
                                            <table width="100%" border="0">
                                                <tr>
                                                    <td align="center">
                                                        <a class="btn btn-success" href="<?php echo base_url($this->session->userdata('site_lang_name').'/home/stat/') ?>?display=year">
                                                            <?=lang('Statistic Year') ?>
                                                        </a>
                                                    </td>
                                                    <td align="center">
                                                        <a class="btn btn-success" href="<?php echo base_url($this->session->userdata('site_lang_name').'/home/stat/') ?>?display=month&amp;y=<?=$y?>">
                                                            <?=lang('Statistic Month') ?>
                                                        </a>
                                                    </td>
                                                    <td align="center">
                                                        <a class="btn btn-success" href="<?php echo base_url($this->session->userdata('site_lang_name').'/home/stat/') ?>?display=day&amp;y=<?=$y?>&amp;m=<?=$m?>">
                                                            <?=lang('Statistic Day') ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php if($display=="year"){ ?>
                                            <table width="100%" id="tblYear" border="0" cellpadding="2" style="border:1px solid #000;" cellspacing="4" bordercolor="#000000" class="table table-striped">
                                                <tr class="fontwhite">
                                                    <th width="50%" align="center" bgcolor="#000000"><?=lang('Year') ?></th>
                                                    <th width="50%" align="center" bgcolor="#000000"><?=lang('count') ?></th>
                                                </tr>
                                                <?php foreach ($table as $row){ ?>
                                                <tr>
                                                    <td width="100" align="center">
                                                        <a href="<?php echo base_url($this->session->userdata('site_lang_name').'/home/stat/') ?>?display=month&amp;y=<?=$row->y?>">
                                                            <?=$row->y?>
                                                        </a>
                                                    </td>
                                                    <td align="center">
                                                        <?=$row->c?>
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </table>
                                            <?php } ?>
                                            <?php if($display=="month"){ ?>
                                            <table width="100%" id="tblMonth" border="0" cellpadding="2" style="border:1px solid #000;" cellspacing="4" bordercolor="#000000" class="table table-striped">
                                                <tr class="fontwhite">
                                                    <th align="center" bgcolor="#000000"><?=lang('Month') ?></th>
                                                    <th align="center" bgcolor="#000000"><?=lang('count') ?></th>
                                                </tr>
                                                <?php foreach ($table as $row){ 
                                                    $data[$row->m] =$row->c; 
                                                }

                                                for($i=0;$i<sizeof($mName);$i++){ 
                                                ?>
                                                <tr>
                                                    <td align="center">
                                                        <a href="<?php echo base_url($this->session->userdata('site_lang_name').'/home/stat/') ?>?display=day&amp;y=<?=$y?>&amp;m=<?=$i+1?>">
                                                            <?=$mName[$i]?>
                                                            <?= $y ?>
                                                        </a>
                                                    </td>
                                                    <td align="center">
                                                        <?=!isset($data[$i+1])?'0':$data[$i+1]?> 
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </table>
                                            <?php } ?>
                                            <?php if($display=="day"){ 
                                                $numDay = date('t',strtotime("$y-$m-01"));
                                            ?>
                                            <table width="100%" id="tblDay" border="0" cellpadding="2" style="border:1px solid #000;" cellspacing="4" bordercolor="#000000" class="table table-striped">
                                                <tr class="fontwhite">
                                                    <th width="50%" align="center" bgcolor="#000000"><?=lang('Day') ?></th>
                                                    <th width="50%" align="center" bgcolor="#000000"><?=lang('count') ?></th>
                                                </tr>
                                                <?php 
                                                    foreach ($table as $row){ 
                                                        $data[$row->d] = $row->c;
                                                    }

                                                    for($x=0;$x<$numDay;$x++){ ?>
                                                        <tr>
                                                            <td align="center"><?=$x+1 ?>
                                                                <?=$mName[$m-1]?>
                                                                <?=$y?>
                                                                &nbsp;
                                                            </td>
                                                            <td align="center">
                                                                <?=!isset($data[$x+1])?'0':$data[$x+1];?>
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                    </table>
                                                    <?php } ?>                          
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <style type="text/css">
                a {
                    text-decoration: none;
                }
                .fontwhite th {
                    font-size: 16px;font-weight: 500;color: <?=$companyData->packageBG?''.$companyData->packageBG.'':''?>;text-align: center;
                }
                td a {
                    font-size: 16px;font-weight: 500;color: #000000;text-align: center;
                }
                td a:hover {
                    color: <?=$companyData->packageBG?''.$companyData->packageBG.'':''?>;
                }
                #section1 {
                    padding: 60px 0;
                }
                #section1 .btn-success {
                    background: #FFFFFF;
                    color: <?=$companyData->packageBG?''.$companyData->packageBG.'':''?>;
                    border: 1px solid <?=$companyData->packageBG?''.$companyData->packageBG.'':''?>;
                }
                #section1 .btn-success:hover {
                    color: #FFFFFF;
                    background: <?=$companyData->packageBG?''.$companyData->packageBG.'':''?>;
                    border: 1px solid <?=$companyData->packageBG?''.$companyData->packageBG.'':''?>;
                }
            </style>

            <?php $this->load->view('theme_blog_2023/inc/footer') ?>
            <?php $this->load->view('theme_blog_2023/inc/footer_js') ?>

            <style type="text/css">

                @media (max-width: 767px) and (min-width: 300px) {

                }
                @media (max-width: 991px) and (min-width: 768px) {

                }
                @media (max-width: 1199px) and (min-width: 992px) {

                }
                @media (max-width: 1365px) and (min-width: 1200px) {

                }
                @media (max-width: 1599px) and (min-width: 1366px) {

                }
                @media (min-width: 1600px) {}

            </style>


            <style type="text/css">
                .fb-page,
                .fb-page span,
                .fb-page span iframe[style] {
                    max-width: 100% !important;
                }
            </style>




        </body>

        </html>

