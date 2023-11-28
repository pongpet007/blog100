<div class="col-lg-3">
    <div class="shop-sidebar-wrapper gray-bg-7 mrg-top-md mrg-top-sm">
        <?php if(sizeof($categorysproduct)>0){ ?>
            <div class="shop-widget">
                <h4 class="shop-sidebar-title" style="margin-bottom: 30px;"><?=lang('All Category') ?></h4>
                <div class="shop-catigory">
                    <ul id="faq" style="font-size: 16px;">
                        <?php foreach ($categorysproduct as $key => $categorysproducts) { 
                            $cat_url = $categorysproducts[0]->cat_url;
                            $cname = $categorysproducts[0]->cat_name;
                            $cname = str_replace(array(':','\\','/',',','.','%20','(',')'),'',$cname);

                            $cat_id = $categorysproducts[0]->cat_id;
                            ?>
                            <?php if ($cname != "") { ?>
                                <li>
                                    <a href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-category/$cat_url");?>"><?=$cname ?></a>
                                    <?php   if(isset($categorysproducts['sub1'])){
                                        $categorys2 = $categorysproducts['sub1'];
                                        ?>
                                        <a data-toggle="collapse" data-parent="#faq" href="#shop-catigory-<?php echo $categorysproducts[0]->cat_id; ?>"><i style="margin-top: -15px;" class="ion-ios-arrow-down"></i></a>    
                                        <ul id="shop-catigory-<?php echo $categorysproducts[0]->cat_id; ?>" class="panel-collapse collapse show">
                                            <?php foreach ($categorys2 as $key2 => $category2) { 
                                                $cat_url = $category2[0]->cat_url;
                                                $cname2 = $category2[0]->cat_name;
                                                $cname2 = str_replace(array(':','\\','/',',','.','%20','(',')'),'',$cname2);
                                                $cat_id2 = $category2[0]->cat_id;
                                                ?> 
                                                <li><a href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-category/$cat_url");?>"><?=$cname2 ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </li>
                            <?php } ?>

                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php } ?>

        <?php if(sizeof($brand)>1){ ?>
            <div class="shop-widget shop-sidebar-border pt-35">
                <h4 class="shop-sidebar-title">
                    <?=lang('All Brand')?></h4>
                    <div class="sidebar-list-style mt-20">
                        <ul>
                            <?php foreach ($brand as $key => $brandall) { 
                                $brand_name = $brandall->brand_name;
                                $brand_url = $brandall->brand_url;
                                ?>
                                <li>
                                    <a href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-brand/$brand_url");?>"><?=$brand_name ?></a>
                                </li>
                            <? } ?>
                        </ul>
                    </div>
                </div>
            <?php } ?>

            <?php if(sizeof($promotions)>0){ ?>
             <div class="shop-widget">
                <h4 class="shop-sidebar-title"><?=lang('All Promotion') ?></h4>
                <div class="shop-catigory">
                    <ul id="faq">
                        <?php foreach ($promotions as $promotion) { ?>
                            <li>
                                <a href="<?php echo base_url();?>Products/?promotion_id=<?= $promotion->promotion_id ?>">
                                    <?=$promotion->promotion_name ?>                        
                                </a>                          
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php } ?>
        <div class="shop-widget shop-sidebar-border pt-35">
            <h4 class="shop-sidebar-title" style=""><?=lang('Product TAGS') ?></h4>
            <?
            /*?>
            <p id="tagsall" class="more-sidebar bluetags hidden"><?php echo $lang=='EN'?'Hide':'ย่อ' ?></p>
            <p id="tagsalla" class="more-sidebar bluetags "><?php echo $lang=='EN'?'Show All':'แสดงทั้งหมด' ?></p>
            <?*/
            ?>

            <div class="shop-tags mt-25 scrollbar" id="tags">
                <div class="force-overflow">
                    <ul>
                        <?php foreach ($tags as $key => $tag) { ?> 
                            <li class="tag-item">
                              <a href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-tags/$key"); ?>" class="tag-link">
                                <?php echo $tag ?>                                    
                              </a>
                            </li>
                        <?php } ?>  
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .more-sidebar {
        color: #fff;
        float: right;
        background-color: #dc0000;
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 3px;
        padding-top: 3px;
    }
    .bluetags:hover{
        color: #fff;
        background-color: #7b0000;
    }
    .hidden {
        display: none;
    }
    .scrollbar
    {
        max-height: 670px;
        overflow-y: auto;
        margin-bottom: 25px;
        margin-right: -18px;
    }
    .highlight {
        height: 385px;
        overflow: hidden;
    }
    #tags::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #292928;
    }
    #tags::-webkit-scrollbar
    {
        width: 6px;
        background-color: #F5F5F5;
    }
    #tags::-webkit-scrollbar-thumb
    {
        background-color: #007434;
    }
    .force-overflow
    {
        min-height: 450px;
    }

    #wrapper
    {
        text-align: center;
        width: 500px;
        margin: auto;
    }
    .shop-catigory > ul {
        margin: 0px;
    }
    .shop-sidebar-border {
        border: 0px;
    }
</style>