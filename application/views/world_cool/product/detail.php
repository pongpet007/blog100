
<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<? echo base_url() ?><?=$this->session->userdata('site_lang_name')?>/Home"><?=lang('Home') ?></a>
                </li>

                <?php if ($category->cat_name != "") { ?>
                    <?  
                    $cat_url = $category->cat_url; 
                    ?>
                    <li><a href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-category/$cat_url");?>"><?=$category->cat_name ?></a></li>
                <?php } ?>

                
                <li class="active"><?=$product->pro_name ?></li>
            </ul>
        </div>
    </div>
</div>

<div class="product-details pt-30 pb-65">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <h1 class="products-names" style="font-size: 40px;font-weight: 500;"><?=$product->pro_name ?></h1>
                <div class="pro-dec-categories" style="margin-bottom: 30px;">
                    <ul>
                        <?  
                        $cat_url  = $category->cat_url;

                        ?>
                        <li class="categories-title" style="font-weight: bold"><?=lang('Category') ?> :</li>
                        <li><a href="<?php echo base_url($this->session->userdata('site_lang_name')."/products-category/$cat_url");?>"><?=$category->cat_name ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="article-desc">
                    <?=$product->pro_desc_long ?>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="article-tags">
                    <div class="product-description-wrapper">
                        <ul>
                            <li class="categories-title" style="font-weight: bold;display: inline-block;font-size: 20px;"><?=lang('TAGS') ?> :</li>
                            <?php 
                            $arr = array();
                            $row = 0;

                            if(strstr($product->tags, ',')){
                                $keywords = explode(',', $product->tags);

                                $keywords2 = explode(',', $product->tags_url);
                                            // print_r($keywords);
                                for($i=0;$i< sizeof($keywords);$i++){
                                    $arr[$row][0] = trim($keywords[$i]);
                                    $arr[$row][1] = trim($keywords2[$i]);
                                    $row++;
                                }
                            }
                            else{

                                $arr[$row][0] = $product->tags;
                                $arr[$row][1] = $product->tags_url;
                                $row++;
                            }           
                            $newarr = array();
                            for($x =0;$x< sizeof($arr);$x++){
                                if(!in_array($arr[$x][1] , $newarr)){
                                    $newarr[$arr[$x][1]] =  $arr[$x][0];
                                }
                            }

                            $arr = array();
                            foreach ($newarr as $key => $newnewarr) {
                                $arr[] ='<li style="display: inline-block;font-size: 20px;"><a href="'. base_url($this->session->userdata('site_lang_name')."/products-tags/$key").'">'.$newnewarr .'</a></li>';
                            }

                            if(sizeof($arr)>0)
                                echo implode(' , ', $arr);
                            ?>  
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="share">
                    <div class="product-details-content">
                        <div class="products-share">
                            <h1 style="font-size: 20px;display: inline-block;">Share To : </h1>
                            <a href="https://www.facebook.com/sharer.php?u=<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/products-detail/<?=$product->pro_url?>" style="display: inline-block;"><i style="margin-right: 10px;" class="fab fa-facebook"></i></a>

                            <a href="https://social-plugins.line.me/lineit/share?url=<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/products-detail/<?=$product->pro_url?>" style="display: inline-block;"><i style="margin-right: 10px;" class="fab fa-line"></i></a>

                            <a href="https://twitter.com/share?url=<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/products-detail/<?=$product->pro_url?>" style="display: inline-block;"><i style="margin-right: 10px;" class="fab fa-twitter"></i></a>

                            <a href="mailto:?subject=<?=base_url()?><?=$this->session->userdata('site_lang_name')?>/products-detail/<?=$product->pro_url?>" style="display: inline-block;"><i style="margin-right: 10px;" class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .products-share a i {
        font-size: 26px;color: #FFFFFF;background-color: #1153c5;padding: 10px;border-radius: 30px;
    }
</style>
