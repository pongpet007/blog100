<?php 
$json = json_decode($companyData->header_footer_json); 
?>
<footer class="footer-area" style="padding: 45px 0 ; <?=$json->footer_type==1?'background-image: url('.base_url("images/bgfooter.png").');':'' ?> <?=$json->footer_type==2?'background-color: '.$json->footer_top_bg_color.';':'' ?> background-size: 100% 100%; background-repeat: no-repeat;border-top: 0px solid #ffdd00;">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align:center;">
                <p style="font-size: 20px;line-height: 30px;font-weight: 500;color: #FFF;margin-bottom: 0px;">สงวนลิขสิทธ์ 2566 บริษัท แบรนด์เด็กซ์ ไดเร็กทอรี่ จำกัด </p>
                <p style="font-size: 20px;line-height: 30px;font-weight: 500;color: #FFF;margin-bottom: 0px;">หน้าแรก | 100 B2B BLOG | สนใจลงโฆษณา</p>
                <p style="font-size: 20px;line-height: 30px;font-weight: 500;color: #FFF;margin-bottom: 0px;">นโยบายความเป็นส่วนตัว | นโยบายคุกกี้</p>
            </div>
        </div>
    </div>
</footer>
<style type="text/css">
    #mc_embed_signup_scroll button.btn {
        background-color: #FFC301;    
        border-color: #FFC301;
        color: #000;
    }
    .footer-contact li a:hover {
        color: #C49F06;
    }
    .footer-content ul li:hover a {
        color: #C49F06;
    }
</style>