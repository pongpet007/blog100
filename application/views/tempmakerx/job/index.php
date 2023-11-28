<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
             <ol class="breadcrumb">
                <li><a href="<? echo base_url() ?>Home"><?=$lang=='EN'?'Home':'หน้าแรก' ?></a></li>
                <li class="active"><?=$lang=='EN'?'Job':'ร่วมงานกับเรา' ?></li>
            </ol>
        </div>
    </div>
</div>
<div class="blog-area pt-30 pb-30">
    <div class="container">
        <div class="row">
                
            <div class="col-lg-12" style="margin-bottom: 30px;">
                <h3><?=$lang=='EN'?'Job':'ร่วมงานกับเรา' ?></h3>
            </div>
            <?php foreach ($job as $key => $alljob) { ?>
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="blog-wrapper mb-20 main-blog">
                        
                        <!-- <span>Design Digital</span> -->
                        <h3 style="display: inline;"><a href="<? echo base_url() ?>Job/detail/<? echo $alljob->job_id ?>"><?=$lang=='EN'?$alljob->job_name:$alljob->job_name_th ?></a></h3>
                        <h5 style="float: right;display: inline;">
                            <?php
                                $newdate = $alljob->cdate;
                                $valid_date = date( 'd-M-Y', strtotime($newdate));
                                $new_valid_date = DateThai($valid_date);
                            ?>
                            <?=$lang=='EN'?$valid_date:$new_valid_date ?>
                        </h5>

                        <p>
                                    <?=$lang=='EN'?$alljob->job_short_detail:$alljob->job_short_detail_th ?>
                                </p>
                                <p>
                                    <?=$lang=='EN'?'Salary':'เงินเดือน' ?> : <?=$alljob->salary ?>
                                </p>
                        
                        <div class="blog-meta-bundle">
                            <div class="blog-meta">
                                
                                <a href="<? echo base_url() ?>Job/detail/<? echo $alljob->job_id ?>"><?=$lang=='EN'?'Read more':'อ่านเพิ่มเติม' ?> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="blog-readmore">
                                <a href="<? echo base_url() ?>Job/detail/<? echo $alljob->job_id ?>"><?=$lang=='EN'?'Read more':'อ่านเพิ่มเติม' ?> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-total-pages">
                        <div class="pagination-style">
                            <?=$links?> 
                        </div>
                        <!-- <div class="total-pages">
                            <p>แสดง <? echo $starts ?> - <? echo $ends ?> ถึง <? echo $total_rows ?> จาก  </p>
                        </div> -->
                    </div>
                </div>
            <?php } ?>
            
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