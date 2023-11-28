<div class="col-lg-3">
    <div class="shop-sidebar-wrapper gray-bg-7 mrg-top-md mrg-top-sm">
        <div class="shop-widget">
            <h4 class="shop-sidebar-title">หมวดหมู่ทั้งหมด</h4>
            <div class="shop-catigory">
                <ul id="faq">
                    <?php foreach ($categorysproduct as $key => $categorysproducts) { ?>
                    <li>
                        <a href="<?php echo base_url();?>Products/?cat_id=<?php echo $categorysproducts[0]->cat_id ?>"><?=$lang=='EN'?$categorysproducts[0]->cat_name:$categorysproducts[0]->cat_name_th ?>
                        <?php   if(isset($categorysproducts['sub1'])){
                            $categorys2 = $categorysproducts['sub1'];
                            ?>
                        <a data-toggle="collapse" data-parent="#faq" href="#shop-catigory-<?php echo $categorysproducts[0]->cat_id; ?>"><i style="margin-top: -15px;" class="ion-ios-arrow-down"></i></a>    
                        <ul id="shop-catigory-<?php echo $categorysproducts[0]->cat_id; ?>" class="panel-collapse collapse show">
                            <?php foreach ($categorys2 as $key2 => $category2) { ?> 
                            <li><a href="<?php echo base_url();?>Products/?cat_id=<?php echo $category2[0]->cat_id ?>"><?=$lang=='EN'?$category2[0]->cat_name:$category2[0]->cat_name_th ?></a></li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="shop-widget mt-40 shop-sidebar-border pt-35">
            <h4 class="shop-sidebar-title">แบรนด์ทั้งหมด</h4>
            <div class="sidebar-list-style mt-20">
                <ul>
                    <?php foreach ($brand as $key => $brandall) { ?>
                    <li>
                        <? if (array_key_exists($brandall->company_brand_id, $_SESSION["brand"])) { ?>
                        <input type="checkbox" data-administration="" data-dosage="" data-date="" OnClick="
                            if(this.checked){}else{location.href='<? echo base_url("Products/uset/{$brandall->company_brand_id}") ?>';}" checked/>
                        <? }else{ ?>
                        <input type="checkbox" name="chk" value="1" OnClick="
                            if(this.checked){location.href='<? echo base_url("products?brand_id={$brandall->company_brand_id}") ?>';}else{alert('Un Checked');}">
                        <? } ?>
                        <a>
                        <?php echo $lang=='EN'?$brandall->name_en:$brandall->name_th ?> 
                        </a>
                    </li>
                    <? } ?>
                </ul>
            </div>
        </div>
        <div class="shop-widget mt-40 shop-sidebar-border pt-35">
            <h4 style="display: inline;" class="shop-sidebar-title">ป้ายกำกับสินค้า</h4>
            <p style="float: right;" id="tagsall" class="bluetags hidden"><?php echo $lang=='EN'?'Hide':'ย่อ' ?></p>
            <p style="float: right;" id="tagsalla" class="bluetags "><?php echo $lang=='EN'?'Show All':'แสดงทั้งหมด' ?></p>
            <div class="shop-tags mt-25 highlight" id="tags">
                <ul>
                    <?php foreach ($tags as $tag) { ?> 
                    <li class="tag-item"><a href="<?php echo base_url("products/index?tag=$tag"); ?>" class="tag-link"><?php echo $tag ?></a></li>
                    <?php } ?> 
                </ul>
            </div>
        </div>
    </div>
</div>

