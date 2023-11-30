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
  <section class="panel">
		<header class="panel-heading">
	        <div class="panel-actions">
	        </div>
	        <h2 class="panel-title">Content <?=$method?></h2>
		</header>
		<div class="panel-body">
			<?php if($this->session->flashdata('msg')){ ?>  
			      <div class="alert alert-success alert-dismissible">
			        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			        <h4><i class="icon fa fa-check"></i> <?=$this->session->flashdata('msg') ?></h4>                
			      </div>
			<?php } ?>
			<?php if($this->session->flashdata('errors')){ ?>  
			      <div class="alert alert-danger alert-dismissible">
			        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			        <h4><i class="icon fa fa-ban"></i> มีช้อผิดพลาด</h4>   
			        <small><?=$this->session->flashdata('errors') ?></small>
			      </div>
			<?php } ?>

    <?php 
      $attributes = array('id' =>'frm' , 'class'=>'form-horizontal' , 'name'=>'frm' );  
      echo form_open_multipart("Content/$method/$content_id",$attributes); ?>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
 
  <li role="presentation" class="active"><a href="#item" aria-controls="profile" role="tab" data-toggle="tab">Manage item</a></li>
  <li role="presentation" ><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Content setting</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="item">
    
      <div class="row">
        <div class="col-md-12" style="padding-bottom: 30px; ">

          <button type="button" name="btnaddrow" id="btnaddrow" class="btn btn-success btn-xs"><i class="fa fa-plus-square"></i> เพิ่ม row</button>

        </div>
        
        <?php 
            $c = 1;
            foreach ($content_rows as $content_row) { 
              $style = "margin-left:{$content_row->margin_left}px;";
              $style .= "margin-right:{$content_row->margin_right}px;";
              $style .= "margin-bottom:{$content_row->margin_bottom}px;";
              $style .= "margin-top:{$content_row->margin_top}px;";

              $style .= "padding-left:{$content_row->padding_left}px;";
              $style .= "padding-right:{$content_row->padding_right}px;";
              $style .= "padding-bottom:{$content_row->padding_bottom}px;";
              $style .= "padding-top:{$content_row->padding_top}px;";
             

              if($content_row->bg_filename)
              {
                  $style .= "background : url('".base_url("../images/bg/$content_row->bg_filename")."'); background-size:cover;background-repeat:no-repeate; ";
              }

              if($content_row->bg_color)
              {
                  $style .= "background-color : $content_row->bg_color;";
              }

        ?>              
             
              <div class="col-md-12" style="text-align: center; " >        
                <div style="padding: 20px;display: inline-block; min-height: 150px;border: 1px solid #ccc;margin: 5px 0px;<?=$content_row->is_fullwidth==1?'width: 100%':'width: 1000px;'?>">     
                 <span class="pull-left" style="font-size: 25px;">#<?=$c++ ?></span> 
                 
                 <a  href="<?=base_url("ContentRowItem/additem/$content_row->row_id")?>" class="btn btn-info pull-left" target="_blank"><i class="fa fa-plus-square"></i> เพิ่ม component</a> 
                


                <a href="<?=base_url("ContentRow/delete/$content_row->row_id")?>" class="btn btn-danger btn-xs pull-right" target="_blank" onClick="return confirm('Are you sure ? ');" style="margin-right: 5px;"> <i class="fa fa-trash"></i> ลบ row </a> 

                <a href="javascript: editrow('<?=$content_row->row_id ?>')" class="btn btn-warning btn-xs pull-right"  style="margin-right: 5px;"> <i class="fa fa-cog" ></i> แก้ไข row </a>
            &nbsp;
                <a href="<?=base_url("ContentRow/movedown/$content_row->position")?>" class="btn btn-success btn-xs pull-right" target="_blank" style="margin-right: 5px;"><i class="fa fa-level-down"></i> เลื่อน row Down</a>&nbsp;

                <a href="<?=base_url("ContentRow/moveup/$content_row->position")?>" class="btn btn-success btn-xs pull-right" target="_blank" style="margin-right: 5px;"><i class="fa fa-level-up"></i> เลื่อน row Up</a> &nbsp; 


                <h5 style="text-align: center;"><b>Box type </b> : <b style="color:blue;"><?=$content_row->is_fullwidth==1?'Full width':' Box width'?></b> 
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Margin</b>
                  T : <b style="color:blue;"><?=$content_row->margin_top ?></b>
                  R : <b style="color:blue;"><?=$content_row->margin_right ?> </b>
                  B : <b style="color:blue;"><?=$content_row->margin_bottom ?> </b>
                  L : <b style="color:blue;"><?=$content_row->margin_left ?> </b>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b >Padding</b>
                  T : <b style="color:blue;"><?=$content_row->padding_top ?> </b>
                  R : <b style="color:blue;"><?=$content_row->padding_right ?> </b>
                  B : <b style="color:blue;"><?=$content_row->padding_bottom ?> </b>
                  L : <b style="color:blue;"><?=$content_row->padding_left ?> </b>
                </h5>

                <div class="row" style="<?=$style ?>">
                    <?php 
                      
                      foreach ($content_row->items as $item) {
                         // Text
                        if($item->template_id==1){
                            $this->load->view("template_display/item_text",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==2){ // Images
                            $this->load->view("template_display/item_image",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==3){ // Google Map
                            $this->load->view("template_display/item_google_map",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==4){ // Youtube
                            $this->load->view("template_display/item_youtube",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==5){ // VDO
                            $this->load->view("template_display/item_vdo",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==6){ // Contactus
                            $this->load->view("template_display/item_contactus",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==7){ // Product
                            $this->load->view("template_display/item_product",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==8){ // Blog
                            $this->load->view("template_display/item_blog",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==9){ // Blog
                            $this->load->view("template_display/item_contactus_information",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }

                        elseif($item->template_id==10){ // news letter
                            $this->load->view("template_display/item_newsletter",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==11){ // Blog
                            $this->load->view("template_display/item_slide",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==12){ // Blog
                            $this->load->view("template_display/item_news",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==13){ // Images Responsive Full
                            $this->load->view("template_display/item_image_responsive_full",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                        elseif($item->template_id==14){ // Gallery
                            $this->load->view("template_display/item_gallery",array('item_id'=>$item->item_id,'jsondata'=>$item->jsondata));
                        }
                       

                      } 
                    ?>
                </div>

              </div>
            </div>
          
        <?php } ?>

      </div>
  </div>    
  <div role="tabpanel" class="tab-pane " id="home">
      <div class="form-group ">
            <label class="col-md-2 control-label" for="">Content name</label>
              <div class="col-md-10">
              <?php 
              $content_name = is_object($content)?$content->content_name:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'content_name',
                  'id'=>'content_name',
                  'placeholder' => 'content_name' ,
                  'value' => set_value('content_name')?set_value('content_name'):$content_name,
              );
              echo form_input($data); ?>
              </div>
          </div>      

          <div class="form-group ">
            <label class="col-md-2 control-label" for="">Title</label>
              <div class="col-md-10">
              <?php 
              $title = is_object($content)?$content->title:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'title',
                  'id'=>'title',
                  'placeholder' => 'title' ,
                  'value' => set_value('title')?set_value('title'):$title,
              );
              echo form_input($data); ?>
              </div>
          </div>      

          <div class="form-group ">
            <label class="col-md-2 control-label" for="">Keyword</label>
              <div class="col-md-10">
              <?php 
              $keyword = is_object($content)?$content->keyword:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'keyword',
                  'id'=>'keyword',
                  'placeholder' => 'keyword' ,
                  'value' => set_value('keyword')?set_value('keyword'):$keyword,
              );
              echo form_input($data); ?>
              </div>
          </div>      

          <div class="form-group ">
            <label class="col-md-2 control-label" for="">Description</label>
              <div class="col-md-10">
              <?php 
              $description = is_object($content)?$content->description:'';
              $data = array(
                  'class' =>'form-control' ,
                  'name' =>'description',
                  'id'=>'description',
                  'placeholder' => 'description' ,
                  'value' => set_value('description')?set_value('description'):$description,
              );
              echo form_input($data); ?>
              </div>
          </div>        
        
        

          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
              </label>

              <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" name="id" id="id" value="1">
              <?php 
              $data = array(
              'class' =>'btn btn-primary' ,
              'name' =>'btn_send',
              'id'=>'btn_send',
              'value'=>'SAVE'
              );
              echo form_submit($data); 
              ?>

              </div>
          </div>
  </div>
  
</div>
<!-- Close Tab -->

      <?php echo form_close(); ?> 
 
		</div>
    </section>
    <!-- /.content -->
  </div>
	<!-- end: page -->
</section>
<script type="text/javascript">
  $(document).ready(function(){
    $('#btnaddrow').click(function(){
        $('#myModalFormtitle').html('Add Row');
        $.get('<?=base_url("ContentRow/loadform")?>',{'content_id':'<?=$content_id ?>'},function(data){
            $('#myModalFormbody').html(data);
            $('#myModalForm').modal('show');
            $('.colorpicker').colorpicker();           
        });
        

    });

  });

  function editrow(row_id) {
      $('#myModalFormtitle').html('Edit Row');
        $.get('<?=base_url("ContentRow/loadeditrow/")?>' + row_id ,function(data){
            $('#myModalFormbody').html(data);
            $('#myModalForm').modal('show');
            $('.colorpicker').colorpicker();           
      });
  }

</script>

<div class="modal fade" id="myModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalFormtitle"></h4>
      </div>
      <div class="modal-body" id="myModalFormbody">
        ...
      </div>      
    </div>
  </div>
</div>
