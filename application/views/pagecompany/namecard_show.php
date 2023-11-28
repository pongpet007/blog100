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
    .ui-menu .ui-menu-item {
        padding: 5px;
    }
</style>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Welcome  <span style="color:yellow;"><?php echo $company->com_name ?> expire :<?php echo $company->expire ?> </span> </h2>
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
                            <form id="frm" name="frm" method="get" action="<?php echo base_url() ?>customeradmin/Namecard/index/<? echo $com_id; ?>">
                                <h2>Namecard <small>total <span class="text-danger"><?=$total_rows ?></span> records</small></h2>
                                <input name="keyword" type="text" id="keyword" placeholder="Search Keyword" class="form-control typeahead"  value="<?php echo $search['keyword'] ?>" autocomplete="off" style="width:150px;display:inline;" />
                                <?php 
                                    // Market

                                    $data = array('class' =>'form-control' ,                                
                                            'style'=>'width:180px;display:inline;',
                                        );
                                    echo form_dropdown('mk_id',$markets,$search['mk_id'],$data); 
                                    
                                    // Country
                                    $data = array('class' =>'form-control' ,                
                                            'id'=>'country_id',         
                                            'style'=>'width:180px;display:inline;',             
                                        );
                                    echo form_dropdown('country_id',$countrys,$search['country_id'],$data); 
                                    
                                   
                                    $data = array('class' =>'form-control ' ,              
                                            'id'=>'province_id',
                                            'style'=>'width:180px;display:inline;',          
                                            
                                    );                                    
                                    echo form_dropdown('province_id',$provinces,$search['province_id'],$data);                                     
                                    ?>
                                <input type="submit" name="Submit" class="btn btn-success" value="Show" />
                            </form>
                        </td>
                    </tr>
                    <?php if($market->mk_type_id==1){ ?>
                    <tr align="center" class="bg-info" >
                        <td>Category</td>
                        <td>Country</td>
                        <td>Province</td>                       
                        <td>Company</td>
                        <td>Fullname</td>
                        <td>E-mail</td>                      
                    </tr>
                    <?php foreach ($namecards as $namecard) { ?>
                    <tr >
                        <td><?=$namecard->mk_name?></td>
                        <td><?=$namecard->short_name ?></td>
                        <td><?=$namecard->province_name?></td>                       
                        <td><?=$namecard->m_company?></td>
                        <td><?=$namecard->m_name?></td>
                        <td><?=$namecard->m_email?></td>                       
                    </tr>
                    <?php }}else {?>
                    <tr>
                        <td colspan="10">
                            <?php foreach ($namecards as $namecard) { ?>
                                <div class="col-md-3">
                                    <div class="item" style="height: 250px; overflow: hidden; margin-bottom: 15px;background: white;">
                                        <img src="http://www.thaimailserver.com/images/namecard/<?=$namecard->m_id ?>.jpg" class="img-responsive">
                                    </div>                                    
                                </div>   
                            <?php } ?>                         
                        </td>
                    </tr>
                   <?php } ?>
                </table>
                 <div>
                     <?=$links ?>
                 </div>
                
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- end: page -->
</section>