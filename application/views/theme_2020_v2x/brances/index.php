<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?php echo base_url() ?>">หน้าแรก</a></li>
                <li class="active">วีดีโอสื่อการสอน</li>
            </ul>
        </div>
    </div>
</div>
<div class="about-us-area pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h4>วีดีโอสื่อการสอน</h4>
                <h6>เราสอนวิธีการทำเและวิธีการใช้งานผลิตภัณฑ์ของเรา</h6>
            </div>
        </div>
        <div class="row">
            <?php foreach ($youtube as $key => $youtubeall) { ?>
            <?php if ($youtubeall->media_type == 2) { ?>
            <div class="col-lg-4">
                <iframe width="100%" height="210" src="<?php echo $youtubeall->url ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <?php } ?>
            <?php if ($youtubeall->media_type == 1) { ?>
                <div class="col-lg-4">
                    <iframe src="<?php echo $youtubeall->url ?>" width="100%" height="210" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
                </div>
            
            <?php } ?>
            <?php } ?>                   
        </div>
    </div>
</div>