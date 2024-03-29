<section role="main" class="content-body">
	<header class="page-header">
		
	
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="#">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span> Home  &nbsp;&nbsp;&nbsp;</span></li>
				
			</ol>
	
			
		</div>
	</header>

	<!-- start: page -->
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">      

    <!-- Main content -->
    <section class="content">
<?php if($this->session->flashdata('msg')){ ?>  
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> <?=$this->session->flashdata('msg') ?></h4>                
      </div>
<?php } ?>

<div class="table-responsive">
<table  class="table"  width="100%" border="0" cellpadding="1" cellspacing="1" >           
  <tr>
    <td colspan="5">
      <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      Total <b class="text-danger"><?=count($newss)?></b> records <a href="<?php echo base_url('News/add/') ?>" class="btn btn-success" target="_blank"> Add news </a>
      <?php 

                $data = array(
                  'class' =>'form-control' ,                 
                  'id'=>'news_type',
                  'style'=>'width:200px;display:inline;'
                );

                echo form_dropdown('news_type', $news_types , $search['news_type'] ,$data);
                ?>
        <?php 
              $data = array(
              'class' =>'btn btn-info' ,
              'name' =>'btn_send',
              'id'=>'btn_send',
              'value'=>'Search'
              );
              echo form_submit($data); 
              ?>        
      </form>
    </td>
  </tr>
  
  <tr align="center" class="bg-info" >
      <th ><span class="">Picture </span> </th>     
      <th>Title</th>      
      <th>news type</th>      
      <th>Active</th>      
      <th>Datetime</th>      
      <th width="100" class="">Action</th>
  </tr>
  <?php foreach ($newss as $news) { ?>
    <tr align="center"   >
      <td align="left" width="200">
          <?php 
           $filepath = "../images/news/news{$news->news_id}_title.jpg";
           $filepath2 = "../images/news/news{$news->news_id}_1.jpg";
            if(is_file($filepath)){
                echo '<img src="'.base_url($filepath).'?'.rand().'" class="img-responsive"><br>';
            } 
            if(is_file($filepath2)){
                echo '<img src="'.base_url($filepath2).'?'.rand().'" class="img-responsive"><br>';
            }            
            
           ?>
      </td>  
      <td align="left">
        <b>EN : </b><?php echo $news->news_title; ?><br>
        <b>TH : </b><?php echo $news->news_title_th; ?><br>        
        <b>Open URL : </b> <span style="color: red"><?php echo $news->news_url; ?></span><br>
        <b>From to : </b> <span style="color: blue"><?php echo $news->news_from; ?> to <?php echo $news->news_to; ?></span>
      </td> 
      <td align="left" nowrap=""><b> EN : </b><?php echo $news->news_type_name_en; ?><br><b> TH : </b><?php echo $news->news_type_name_th; ?></td>         
      <td align="left" nowrap=""><?php echo $news->is_active==1?'Yes':'No'; ?></td>                  
      <td align="left" nowrap="">
        <b> create : </b><?php echo $news->cdate; ?><br>
        <b> update : </b><?php echo $news->udate; ?><br>
        <b> create by : </b><?php echo $news->cby; ?><br>
        <b> update by : </b><?php echo $news->uby; ?>
      </td>                  
      <td align="left" nowrap="">  
        <a class="btn btn-warning" href="<?php echo base_url('News/edit/'.$news->news_id) ?>" target="_blank">edit</a>    
        <a href="<?php echo base_url('News/delete/'.$news->news_id ); ?>" class="btn btn-danger" onClick="return confirm('Are you sure ? ');" target="_blank" > del</a>
        &nbsp;
      </td>          
    </tr>      
  <? } ?>
  </table>
</div>
    </section>
    <!-- /.content -->
  </div>
	<!-- end: page -->
</section>