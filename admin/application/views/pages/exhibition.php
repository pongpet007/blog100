  <div class="container">
                <div class="row">

                    <div class="col-md-9">
                        
                        <!-- block tab products -->
                        <div class="block-tab-products-opt1">

                            <div class="block-title">
                                <ul class="nav" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tabproduct1"  role="tab" data-toggle="tab">Events Calendar <span style="color: red;"><?php echo date('Y') ?></span></a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tabproduct2" role="tab" data-toggle="tab">Events  <span style="color: red;"><?php echo date('F') ?></span></a>
                                    </li>                                   
                                </ul>
                            </div>

                            <div class="block-content tab-content">

                                <!-- tab 1 -->
                                <div role="tabpanel" class="tab-pane active fade in " id="tabproduct1">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="30" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "480":{"items":2},
                                        "480":{"items":2},
                                        "768":{"items":3},
                                        "992":{"items":3}
                                    }'>
                                        <?php 

                                            foreach ($exhibition as $ban_id) { 

                                        ?>
                                        
                                        <div class="product-item  product-item-opt-1 " style="border: ">
                                                <!-- <div class="product-item-photo">
                                                    <img src="<?php echo base_url("assets/images/exhibition/banner{$ban_id->ban_id}.gif") ?>">
                                                </div> -->
                                            
                                                <div class="product-item-detail">
                                                    <?php echo $ban_id->ban_text; ?>
                                                </div>
                                                
                                                <?php 
                                                $filepath = "assets/images/exhibition/banner{$ban_id->ban_id}.gif";
                                                //echo ($filepath);
                                                if(is_file($filepath)){
                                                echo '<img src="'.base_url($filepath).'?'.rand().'"  class="img-responsive"><br>';
                                                }            
                                                // echo 'URL : '.$ban_id->link;
                                            ?>
                                        </div>
                                        
                                        <?php } ?>
                                    </div>
                                </div><!-- tab 1 -->

                                <!-- tab 2 -->
                                <div role="tabpanel" class="tab-pane fade" id="tabproduct2">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="30" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "480":{"items":2},
                                        "480":{"items":2},
                                        "768":{"items":3},
                                        "992":{"items":3}
                                    }'>

                                        <?php 

                                            foreach ($exhibitionmonth as $ban_id) { 

                                        ?>
                                        
                                        <div class="product-item  product-item-opt-1 " style="border: ">
                                                <!-- <div class="product-item-photo">
                                                    <img src="<?php echo base_url("assets/images/exhibition/banner{$ban_id->ban_id}.gif") ?>">
                                                </div> -->
                                            
                                                <div class="product-item-detail">
                                                    <?php echo $ban_id->ban_text; ?>

                                                </div>
                                                
                                                <?php 
                                                $filepath = "assets/images/exhibition/banner{$ban_id->ban_id}.gif";
                                                //echo ($filepath);
                                                if(is_file($filepath)){
                                                echo '<img src="'.base_url($filepath).'?'.rand().'"  class="img-responsive"><br>';
                                                }            
                                                // echo 'URL : '.$ban_id->link;
                                            ?>
                                        </div>
                                        
                                        <?php } ?>
                                    </div>
                                </div><!-- tab 2 -->

                            </div>

                        </div><!-- block tab products -->

                    </div>

                    <div class="col-md-3">

                        <!-- block deals  of -->
                        <div class="block-deals-of block-deals-of-opt1">
                            <div class="block-title ">
                                <span class="icon"></span>
                                <div class="heading-title">Upcoming Events</div>
                            </div>
                            <div class="block-content">
                                
                                <div class="owl-carousel" 
                                    data-nav="true" 
                                    data-dots="true" 
                                    data-margin="30" 
                                    data-responsive='{
                                    "0":{"items":1},
                                    "480":{"items":2},
                                    "768":{"items":3},
                                    "992":{"items":1},
                                    "1200":{"items":1}
                                    }'>
                                    <?php 

                                            foreach ($exhibitionmonth1 as $ban_id) { 

                                        ?>
                                    <div class="product-item  product-item-opt-1 ">
                                        <div class="deals-of-countdown">
                                            
                                            <div class="count-down-time" data-countdown="<?php echo $ban_id->expire; ?>"></div>
                                        </div>
                                        <!-- <div class="product-item-detail">
                                                    <?php echo $ban_id->ban_text; ?>

                                                </div> -->
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <?php 
                                                $filepath = "assets/images/exhibition/banner{$ban_id->ban_id}.gif";
                                                //echo ($filepath);
                                                if(is_file($filepath)){
                                                echo '<img src="'.base_url($filepath).'?'.rand().'"  class="img-responsive"><br>';
                                                }            
                                                // echo 'URL : '.$ban_id->link;
                                            ?>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <!-- <button type="button" class="btn btn-cart"><span>Add to Cart</span></button> -->
                                            </div>
                                            <!--<div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$108.00</span>
                                                        <span class="old-price">(-20%)</span>
                                                    </div>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div><?php } ?>
                                    <!-- <div class="product-item  product-item-opt-1 ">
                                        <div class="deals-of-countdown">
                                            
                                            <div class="count-down-time" data-countdown="2016/11/25"></div>
                                        </div>
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name" src="<?php echo base_url(); ?>assets_front/images/media/index1/deals-of2.jpg" ></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Sale Couple of Smartphones</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">(-20%)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="product-item  product-item-opt-1 ">
                                        <div class="deals-of-countdown">
                                            
                                            <div class="count-down-time" data-countdown="2016/12/30"></div>
                                        </div>
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href=""><img alt="product name" src="<?php echo base_url(); ?>assets_front/images/media/index1/deals-of3.jpg" ></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Sale Couple of Smartphones</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">(-20%)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>    
                                            
                            </div>
                        </div><!-- block deals  of -->

                    </div>

                </div>
            </div>