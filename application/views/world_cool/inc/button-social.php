<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" integrity="sha512-1fPmaHba3v4A7PaUsComSM4TBsrrRGs+/fv0vrzafQ+Rw+siILTiJa0NtFfvGeyY5E182SDTaF5PqP+XOHgJag==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="button-socail">
	<div class="menu-socail">
		<input type="checkbox" id="toggle" />
		<label id="show-menu" for="toggle">
			<div class="btn-1" data-bs-toggle="tooltip" data-bs-placement="left" title="ติดต่อสอบถามเพิ่มเติม">
				<i class="bi bi-chat-dots toggleBtn menuBtn fs-3"></i>
				<i class="bi bi-x toggleBtn closeBtn fs-3" title="Close"></i>
			</div>

			<?php if($companyData->location){ ?>
			<div class="btn-1 location-bt">
				<a href="<? echo $companyData->location ?>" target="__blank" class="btn btn-icon tiw-icon" data-bs-toggle="tooltip" data-bs-placement="left" title="location">
					<i style="font-size: 35px;" class="bi bi-pin-map"></i>
				</a>
			</div>
			<? } ?>

			<? if($companyData->hotline){ ?>
				<div class="btn-1 call-bt" data-bs-toggle="tooltip" data-bs-placement="left" title="โทรด่วน">
					<a href="tel:<?= $companyData->hotline ?>" target="_blank"><i style="font-size: 35px;" class="bi bi-phone-vibrate fs-3"></i></a>
				</div>
			<? } ?>
			<?php if($companyData->line_id){ ?>
				<div class="btn-1 line-bt" data-bs-toggle="tooltip" data-bs-placement="left" title="Line ID">
					<a href="https://line.me/ti/p/~<?=$companyData->line_id ?>" style="color: #fff;" target="_blank">
						<i style="font-size: 35px;" class="bi bi-line"></i>
						
					</a>
				</div>
			<? } ?>

			<?php if($companyData->facebook){ ?>
			<div class="btn-1 facebook-bt" data-bs-toggle="tooltip" data-bs-placement="left" title="Facebook">
				<a href="<? echo $companyData->facebook ?>" target="_blank"><i style="font-size: 35px;" class="bi bi-facebook fs-3"></i></a>
			</div>
			<? } ?>



			<?/*php if($companyData->facebook_messenger){ ?>
			<div class="btn-1 messager-bt" data-bs-toggle="tooltip" data-bs-placement="left" title="messager-chat">
				<a href="<? echo $companyData->facebook_messenger ?>" target="_blank" style="color: #fff;">
					<i class="bi bi-messenger"></i>
				</a>
			</div>
			<? } */?>

			
			<?php if($companyData->instargram){ ?>
			<div class="btn-1 ig-bt">
				<a href="<? echo $companyData->instargram ?>" class="btn btn-icon" data-bs-toggle="tooltip" data-bs-placement="left" title="INSTRAGRAM">
					<i class="bi bi-instagram"></i>
				</a>
			</div>
			<? } ?>
			<?php if($companyData->youtube){ ?>
			<div class="btn-1 youtube-bt">
				<a href="<? echo $companyData->youtube ?>" class="btn btn-icon" data-bs-toggle="tooltip" data-bs-placement="left" title="YOUTUBE">
					<i style="font-size: 35px;" class="bi bi-youtube"></i>
				</a>
			</div>
			<? } ?>
			<?php if($companyData->twitter){ ?>
			<div class="btn-1 shop-bt">
				<a href="<? echo $companyData->twitter ?>" target="__blank" class="btn btn-icon tiw-icon" data-bs-toggle="tooltip" data-bs-placement="left" title="twitter">
					<i style="font-size: 35px;" class="bi bi-twitter"></i>
				</a>
			</div>
			<? } ?>







			<!-- Load Facebook SDK for JavaScript -->

			<script>
				$(document).ready(function() {
					// $('[data-toggle="tooltip"]').tooltip();
				});
			</script>

		</label>
	</div>
</div>
<style type="text/css">
	.button-socail {
		position: fixed;
		bottom: 65px;
		right: 59px;
		z-index: 9999999
	}

	.menu-socail {
		margin: 0 auto;
		position: absolute;
		top: 50%;
		left: 50%;
		margin-left: -25px;
		margin-top: -25px;
	}

	.menu-socail input {
		position: absolute;
		display: none
	}

	.btn-1 {
		width: 60px;
		height: 60px;
		border-radius: 70px;
		position: absolute;
		overflow: hidden;
		cursor: pointer;
		bottom: 30px;
	}

	.material-icons.md-36 {
		font-size: 36px;
		color: #03A9F4
	}

	.btn-1 {
		background: #F13B3B;
		font-size: 35px;
		color: white;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		justify-content: center;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;

		box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);

		-webkit-transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
		transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
	}

	.btn-1:not(:first-child) {
		opacity: 0;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
		z-index: -2;

		-webkit-transition: all 0.6s cubic-bezier(.87, -.41, .19, 1.44);
		transition: all 0.6s cubic-bezier(.87, -.41, .19, 1.44);
	}

	.btn-1:nth-child(2) {
		top: 100px;
		-webkit-transition-delay: 0s;
		transition-delay: 0s
	}

	.btn-1:nth-child(3) {
		top: 100px;
		-webkit-transition-delay: 0.1s;
		transition-delay: 0.1s
	}

	.btn-1:nth-child(4) {
		top: 100px;
		;
		-webkit-transition-delay: 0.2s;
		;
		transition-delay: 0.2s
	}

	.btn-1:nth-child(5) {
		top: 100px;
		-webkit-transition-delay: 0.3s;
		transition-delay: 0.3s
	}

	.btn-1:nth-child(6) {
		top: 100px;
		-webkit-transition-delay: 0.4s;
		transition-delay: 0.4s
	}

	.btn-1:nth-child(7) {
		top: 100px;
		-webkit-transition-delay: 0.5s;
		transition-delay: 0.5s
	}

	.btn-1:nth-child(8) {
		top: 100px;
		-webkit-transition-delay: 0.6s;
		transition-delay: 0.6s
	}

	.btn-1:nth-child(9) {
		top: 100px;
		-webkit-transition-delay: 0.7s;
		transition-delay: 0.7s
	}

	/*.btn-1:nth-child(9) {top:0px;left:0px;-webkit-transition-delay: 0.7s;transition-delay: 0.7s}*/

	input#toggle:checked~#show-menu .btn-1:nth-child(2) {
		top: -140px;
		opacity: 1;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	}

	input#toggle:checked~#show-menu .btn-1:nth-child(3) {
		top: -210px;
		opacity: 1;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	}

	input#toggle:checked~#show-menu .btn-1:nth-child(4) {
		top: -280px;
		opacity: 1;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	}

	input#toggle:checked~#show-menu .btn-1:nth-child(5) {
		top: -350px;
		opacity: 1;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	}

	input#toggle:checked~#show-menu .btn-1:nth-child(6) {
		top: -420px;
		opacity: 1;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	}

	input#toggle:checked~#show-menu .btn-1:nth-child(7) {
		top: -490px;
		opacity: 1;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	}

	input#toggle:checked~#show-menu .btn-1:nth-child(8) {
		top: -560px;
		opacity: 1;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	}

	input#toggle:checked~#show-menu .btn-1:nth-child(9) {
		top: -540px;
		opacity: 1;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	}

	.menuBtn,
	.closeBtn {
		position: absolute;
		transition: all 0.3s ease;
	}

	.closeBtn {
		transform: translateY(50px);
		opacity: 0;
	}

	input#toggle:checked~#show-menu .btn-1 .menuBtn {
		transform: translateY(-50px);
		opacity: 0;
	}

	input#toggle:checked~#show-menu .btn-1 .closeBtn {
		transform: translateY(0px);
		opacity: 1;
	}

	.facebook-bt {
		background: #244adb;
		color: white;
	}

	.facebook-bt a {

		color: white;
	}

	.facebook-bt:hover {
		transition: 0.3s;
		border: solid 5px #244adb;
	}

	.line-bt {
		background: #54B848;
	}


	.line-bt:hover {
		transition: 0.3s;
		border: solid 5px #54B848;
	}

	.call-bt a {
		color: white;
	}

	.call-bt {
		background: #6C68E2;
	}

	.call-bt:hover {
		transition: 0.3s;
		border: solid 5px #6C68E2;
	}

	.shop-bt a {
		color: white;
	}

	.shop-bt {
		background: #1D8EFF;
	}

	.shop-bt:hover {
		transition: 0.3s;
		border: solid 5px #1D8EFF;
	}

	.shop-bt a i {
		font-size: 25px;
		color: #FFFFFF;
	}

	.location-bt a {
		color: white;
	}

	.location-bt {
		background: #f2b504;
	}

	.location-bt:hover {
		transition: 0.3s;
		border: solid 5px #f2b504;
	}

	.location-bt a i {
		font-size: 25px;
		color: #FFFFFF;
	}

	.youtube-bt a i {
		color: white;font-size: 25px;
	}

	.youtube-bt {
		background: #d4101dc4;
	}

	.youtube-bt:hover {
		transition: 0.3s;
		border: solid 5px #d4101dc4;
	}

	.ig-bt {
		background: #9106B9;
	}

	.ig-bt:hover {
		transition: 0.3s;
		border: solid 5px #9106B9;
	}

	.ig-bt a i {
		color: #FFFFFF;
		font-size: 25px;
	}



	.messager-bt {
		background: #FFFFFF;

	}

	.messager-bt a i {
		color: #1163F2;
		font-size: 30px;
	}

	.messager-bt:hover {
		transition: 0.3s;
		border: solid 5px #f0f0f0;
	}
</style>

		<div id="fb-root"></div>

    <!-- Your ปลั๊กอินแชท code -->
    <div id="fb-customer-chat" class="fb-customerchat" data-lazy="true">
    </div>

    <script defer>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "<?=$companyData->facebookid?>");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
