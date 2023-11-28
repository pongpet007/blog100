<style type="text/css">
    .card-top{
    background-color: white;
    border:1px solid #d6d6d6;
    color: black;
    }
    .card-top>div{
    padding : 5px 0px 0px 15px;
    }
    .card-bottom{
    background-color: #fff;
    border:1px solid #d6d6d6;
    border-top: 0px;
    color: black;
    }
    .card-bottom>div{
    padding : 5px 0px 0px 15px;
    }
    .card-wrapper:hover{
    background-color: #ffc74e;
    }
    .card-wrapper:hover >.card-top{
    background-color: transparent;
    transition:all 1s;
    }
    .card-wrapper:hover >.card-bottom{
    background-color: white;
    opacity: 0.8;
    }
</style>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Welcome  <span style="color:yellow;">Brandexdirectory.com</span> System</h2>
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="#">
                    <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span> Product  &nbsp;&nbsp;&nbsp;</span></li>
            </ol>
        </div>
    </header>
    <!-- start: page -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <?php if($this->session->flashdata('msg')){ ?>  
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> <?=$this->session->flashdata('msg') ?></h4>
            </div>
            <?php } ?>
            <div class="table-responsive">
                <table  class="table table-striped"  width="100%" border="0" cellpadding="1" cellspacing="1" >
                    <tr>
                        <td colspan="10">
                            <form id="frm" name="frm" method="get" action="<?php echo base_url() ?>customeradmin/Namecard/<? echo $com_id; ?>">
                                <h2>Namecard <small>total <span class="text-danger"><?=$total_rows ?></span> records</small></h2>
                                <input name="keyword" type="text" id="keyword" placeholder="Search Keyword" class="form-control" value="<?php echo $search['keyword'] ?>" style="width:150px;display:inline;" />
                                <?php 
                                    // Category
                                    $data = array('class' =>'form-control' ,                                
                                            'style'=>'width:150px;display:inline;',
                                        );
                                    echo form_dropdown('cat_id',$categorys,$search['cat_id'],$data); 
                                    
                                    // Country
                                    $data = array('class' =>'form-control' ,                
                                            'id'=>'country_id',         
                                            'style'=>'width:150px;display:inline;',             
                                        );
                                    echo form_dropdown('country_id',$countrys,$search['country_id'],$data); 
                                    
                                    $province_id = isset($namecard)?$namecard->province_id:set_value('province_id');
                                    $data = array('class' =>'form-control ' ,              
                                            'id'=>'province_id',
                                            'style'=>'width:150px;display:inline;',          
                                            
                                    );
                                    
                                    echo form_dropdown('province_id',$provinces,$search['province_id'],$data); 
                                    
                                    
                                    $amphur_id = isset($namecard)?$namecard->amphur_id:set_value('amphur_id');
                                    $data = array('class' =>'form-control ' ,              
                                            'id'=>'amphur_id',          
                                            'style'=>'width:150px;display:inline;',
                                    );
                                    
                                    echo form_dropdown('amphur_id',array(),$search['amphur_id'],$data);
                                    
                                    $data = array(
                                    'class' =>'form-control' ,                
                                    'id'=>'brand_show', 
                                    'style'=>'width:150px;display:inline;', 
                                    );
                                    $arr = array('1' =>'brand List' ,'2'=>'brand Pictures Show' );
                                    echo form_dropdown('brand_show', $arr , $brand_show ,$data);
                                    
                                    
                                    ?>
                                <input type="submit" name="Submit" class="btn btn-success" value="Show" />
                            </form>
                        </td>
                    </tr>
                    <? if ($brand_show == 1) { ?>
                    <tr align="center" class="bg-info" >
                        <td>Category</td>
                        <td>Country</td>
                        <td>Province</td>
                        <td>Amphur</td>
                        <td>Company</td>
                        <td>Fullname</td>
                        <td>Position</td>
                        <td>Telephone</td>
                        <td>Mobile</td>
                        <td>website</td>
                    </tr>
                    <?php foreach ($namecards as $namecard) { ?>
                    <tr >
                        <td><?=$namecard->cat_name_th?></td>
                        <td><?=$namecard->short_name ?></td>
                        <td><?=$namecard->province_name?></td>
                        <td><?=$namecard->amphur_name?></td>
                        <td><?=$namecard->company_name?></td>
                        <td><?=$namecard->fullname?></td>
                        <td><?=$namecard->position_th?></td>
                        <td><?=$namecard->telephone?></td>
                        <td><?=$namecard->mobile?></td>
                        <td><?=$namecard->website?></td>
                    </tr>
                    <?php } ?>
                    <? } ?>
                </table>
                <?php foreach ($namecards as $namecard) { ?>
                <? if ($brand_show == 2) { ?>
                <div class="col-md-4" style="padding-top: 20px;">
                    <div class="card-wrapper">
                        <div class="card-top">
                            <?php 
                                $filepath = "assets/images/namecard/".$namecard->namecard_id.'.png';
                                // print_r(base_url($filepath));
                                // exit();
                                if(is_file($filepath)){
                                
                                echo '<img style="width: 100%" src="'.base_url($filepath).'?'.rand().'">';
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <? } ?>
                <? } ?>
                <?=$links ?>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- end: page -->
</section>