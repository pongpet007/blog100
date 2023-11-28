<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<? echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/home"><?=lang('Home') ?></a></li>
                <li class="active"><?=lang('Presentation') ?></li>
            </ul>
        </div>
    </div>
</div>
<div class="blog-area pt-30 pb-30">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12">
                <h3 style="margin-bottom: 2.0rem; color:#000;"><?=lang('Presentation') ?></h3>
            </div>
            <?php foreach ($blogs as $key => $allblog) { ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <iframe
                    width="100%"
                    height="215"
                    src="https://www.youtube.com/embed/<?php echo $allblog->url ?>"
                    srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/<?php echo $allblog->url ?>?autoplay=1><img src=https://img.youtube.com/vi/<?php echo $allblog->url ?>/hqdefault.jpg alt='<?=$allblog->youtube_name?>'><span>▶</span></a>"
                    frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                    title="<?=$allblog->youtube_name?>"
                    ></iframe>

                    

                    <p style="font-size: 16px;text-align: center;    overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;
                    max-height: 50px;
                    min-height: 50px;
                    color: #000;"><?=$allblog->youtube_name?></p>
                </div>
            <?php } ?>
        </div>
        <?php if ($links != "") { ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination-total-pages">
                        <div class="pagination-style">
                            <?= $links ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>