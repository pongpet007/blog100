<!doctype html>
<html class="no-js" lang="zxx">
    <?php $this->load->view($theme_path.'/inc/header-meta') ?>
    <body>
        
        <?php $this->load->view($theme_path.'/inc/header') ?>

        <?php $this->load->view($theme_path.'/news/index') ?>       

        <?php $this->load->view($theme_path.'/inc/footer') ?>

        <?php $this->load->view($theme_path.'/inc/footer-js') ?>
       	<style type="text/css">
       		.blog-wrapper h3 {
		        overflow: hidden;
		        text-overflow: ellipsis;
		        display: -webkit-box;
		        -webkit-line-clamp: 2;
		        line-clamp: 2;
		        -webkit-box-orient: vertical;
		        max-height: 55px;
		        min-height: 55px;
		    }
		    .blog-wrapper p {
		        overflow: hidden;
		        text-overflow: ellipsis;
		        display: -webkit-box;
		        -webkit-line-clamp: 3;
		        line-clamp: 3;
		        -webkit-box-orient: vertical;
		        max-height: 74px;
		        min-height: 74px;
		    }
		    .blog-img img {
			    width: 100%;
			    height: 195px;
			    object-fit: cover;
			}
		    @media (max-width: 767px) and (min-width: 300px) {
		    	.blog-img img {
				    height: 180px;
				}
		    }
		    @media (max-width: 991px) and (min-width: 768px) {
		    	.blog-img img {
				    height: 171px;
				}
		    }
		    @media (max-width: 1199px) and (min-width: 992px) {
		    	.blog-img img {
				    height: 147px;
				}
		    }
		    @media (max-width: 1400px) and (min-width: 1200px) {}
		    @media (min-width: 1401px) {}
		</style>
    </body>
</html>