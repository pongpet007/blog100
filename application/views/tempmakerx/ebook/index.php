<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ol class="breadcrumb">
              <li><a href="<?=base_url()?>"><?=$lang=='EN'?'Home':'หน้าแรก'?></a></li>
              <li><?=$lang=='EN'?'Download':'ดาวน์โหลด' ?></li>
            </ol>            
        </div>
    </div>
</div>
<div class="blog-area pt-30 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="margin-bottom: 30px;">
                <h3 style="margin-bottom: 2.0rem;"><?=$lang=='EN'?'Download':'ดาวน์โหลด' ?></h3>
            </div>
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12 ebook">
                <?php foreach ($ebook as $key => $allebook) { ?>
                <div class="col-xl-3 col-lg-3 col-md-4 col-12" style="padding-left: 0px;padding-right: 0px;">
                    <div class="blog-wrapper mb-20 main-blog cscs">
                        <div class="">
                            <img src="<?php echo base_url() ?>images/ebook/<?php echo $allebook->ebook_id ?>.jpg" alt="Avatar" class="image">
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <h4><?=$lang=='EN'?$allebook->name_th:$allebook->name_en ?></h4>
                                <p><?=$lang=='EN'?$allebook->detail_en:$allebook->detail_th ?></p>
                                <a class="btn btn-info" href="<?php echo $allebook->link ?>">click me</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12">
                <div class="pagination-total-pages">
                    <div class="pagination-style">
                        <?=$links?> 
                    </div>
                </div>
            </div>
        </div>
                
        <?php 
            function DateThai($valid_date){
                $strYear = date("Y",strtotime($valid_date))+543;
                $strMonth= date("n",strtotime($valid_date));
                $strDay= date("j",strtotime($valid_date));
            
                $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
                $strMonthThai=$strMonthCut[$strMonth];
                return "$strDay $strMonthThai $strYear";
            } ?>
    </div>
</div>
</div>