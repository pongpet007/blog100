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
        <div class="row"> 
            <form id="frmsearch" name="frmsearch" action="<?=base_url("customeradmin/CompanyProduct/view/$com_id")?>" method="post">
            <div class="col-md-12" style="padding-bottom: 10px;">
               <div style="margin-top: 0px;font-size: 14px;">Total <span style="color:red;"><?=$countrows;?></span> item(s)
               
               </div>
            </div>
            </form>
           
           <div class="row">
                <div class="col-md-12">                                                        
                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <tr>
                                <td><?=("Date/time"); ?></td>
                                <td><?=("Fullname"); ?></td>
                                <td><?=("Company"); ?></td>
                                <td><?=("E-mail"); ?></td>                                
                                <td><?=("Phone"); ?></td>
                                <td><?=("Fax"); ?></td>
                                <td><?=("Detail"); ?></td>
                            </tr>
                            <?php foreach ($quotations as $quotation) { ?>                                        
                             <tr <?=($quotation->new_status ==1 )?"class=\"text-success\"":' ' ?>>
                                <td><?=$quotation->cdate ?></td>
                                <td><?=$quotation->fullname ?></td>
                                <td><?=$quotation->company ?></td>
                                <td><?=$quotation->email ?></td>                               
                                <td><?=$quotation->phone ?></td>
                                <td><?=$quotation->fax ?></td>
                                <td>
                                    <a href="<?=base_url("customeradmin/CompanyQuotation/quotation_item/$quotation->quotation_id")?>" class="btn btn-success" target="_blank">Detail</a>
                                </td>                                            
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>                        
                        

            <div class="col-md-12"><?=$links ?></div>

        </div>       
      </section>
      <!-- /.content -->
   </div>
   <!-- end: page -->
</section>