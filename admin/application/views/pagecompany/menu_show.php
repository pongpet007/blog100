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
<table width="100%"class="table table-striped"  border="0" cellspacing="0" cellpadding="0">
    <tr> 
    <td colspan="10">      
      <a href="<?=base_url("Menu/Add")?>" class="btn btn-sm btn-info" target="menu">Add Menu </a>
    </td>
   </tr>
 <tr bgcolor="#CCCCCC" class="text-center">  
          <th class="text-center" >Action</th>          
            <th >Menu</th>
            <th class="text-center" >Type</th>
            <th class="text-center" >&nbsp;</th>
            <th class="text-center" >Show header</th>
            <th class="text-center" >Show footer</th>
            <th class="text-center" >Position</th>
            <th class="text-center" >Is active</th>
            <th class="text-center" ></th>
            
          </tr>
          <? foreach ($menus as $menu) { ?>

          <tr align="center" >
            <td nowrap="">
              <a href="<?=base_url("Menu/Edit/$menu->menu_id")?>" class="btn btn-sm btn-warning" target="menu">edit</a> &nbsp; 
            <? if($menu->menu_id!=1){?>
            <a href="<?=base_url("Menu/Delete/$menu->menu_id")?>" onClick="return confirm('Are u sure? ');" class="btn btn-sm btn-danger" target="menu">del</a> 
            <? } ?>
            </td>
            <td  align="left">
              <?php 
                foreach ($menu->languages as $language) { ?>
                  <?=$language->iso2 ?> : <?=$language->menu_name ?><br>
              <?  }  ?>             
            </td>
            <td  ><b style="color: black;"><?= $menu->menu_type_name ?></b></td>
            <td  align="left">
              <?= $menu->menu_type_id==1?'Content : <b class="text-info">'.$menu->content_name.'</b>':''; ?>
              <?= $menu->menu_type_id==2?'Feature : <b class="text-info">'.$menu->feature_name.'</b>':''; ?>
              <?= $menu->menu_type_id==3?'Link : <b class="text-info">'.$menu->url.'</b>':''; ?>
                
              </td>
            <td align="" ><?= $menu->is_header==1?"Yes":"No" ?></td>
            <td align="" ><?= $menu->is_footer==1?"Yes":"No" ?></td>
            <td align="" >
            <a href="<?=base_url("Menu/moveup/$menu->position")?>"  target="_blank"><i class="fa fa-level-up"></i> Up</a> &nbsp; 
            <a href="<?=base_url("Menu/movedown/$menu->position")?>"  target="_blank"><i class="fa fa-level-down"></i> Down</a></td>
            <td align="center" ><?= $menu->is_active==1 ? "Yes":"No"  ?></td>
            <td align="left" >cby : <?= $menu->cby ?> <br>cdate : <?= $menu->cdate ?><br>
              uby : <?= $menu->uby ?> <br>udate : <?= $menu->udate ?></td>
            
          </tr>
          <? foreach ($menu->submenu as $menu2) { ?>
          <tr align="center" class="" >
            
            <td nowrap="" ><a href="<?=base_url("Menu/Edit/$menu2->menu_id")?>" class="btn btn-sm btn-warning" target="menu">edit</a> &nbsp; 
            <? if($menu2->menu_id!=1){?>
      <a href="<?=base_url("Menu/Delete/$menu2->menu_id")?>" onClick="return confirm('Are u sure? ');" class="btn btn-sm btn-danger" target="menu">del</a> 
            <? } ?>
            </td>
            <td align="left" style="padding-left: 50px;">
              <?php 
                foreach ($menu2->languages as $language) { ?>
                   - <?=$language->iso2 ?> : <?=$language->menu_name ?><br>
              <?  }  ?>  </td>
            <td ><b style="color: black;"><?= $menu2->menu_type_name ?></b></td>
            <td align="left" >
              <?= $menu2->menu_type_id==1?'Content : <b class="text-info">'.$menu2->content_name.'</b>':''; ?>
              <?= $menu2->menu_type_id==2?'Feature : <b class="text-info">'.$menu2->feature_name.'</b>':''; ?>
              <?= $menu2->menu_type_id==3?'Link : <b class="text-info">'.$menu2->url.'</b>':''; ?>
                
            </td>
            <td  ><?= $menu2->is_header==1?"Yes":"No" ?></td>
            <td  ><?= $menu2->is_footer==1?"Yes":"No" ?></td>
            <td  >
            <a href="menu-action.php?type=orders&move=up&parent_id=<?=$menu2->parent_id;?>&position=<?=$menu2->position?>"  target="menu"><i class="fa fa-level-up"></i> Up</a> &nbsp; 
            <a href="menu-action.php?type=orders&move=down&parent_id=<?=$menu2->parent_id;?>&position=<?=$menu2->position?>" target="menu"><i class="fa fa-level-down"></i> Down</a></td>
            <td align="center" ><?= $menu2->is_active==1 ? "Yes":"No"  ?></td>
            <td align="left" >cby : <?= $menu2->cby ?> <br>cdate : <?= $menu2->cdate ?><br>
              uby : <?= $menu2->uby ?> <br>udate : <?= $menu2->udate ?></td>
          </tr>
  <?  }
  } ?>
   
</table>
</div>
    </section>
    <!-- /.content -->
  </div>
	<!-- end: page -->
</section>