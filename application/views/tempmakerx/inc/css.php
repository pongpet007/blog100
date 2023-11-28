<style type="text/css">
	/*
  Theme Name:  Industrial - Industry HTML Template
  Theme URL: 
  Author: udayraj
  Author URI: https://themeforest.net/user/udayraj
  Creation Date: 30 April 2017
  Description: A default stylesheet for Industrial - Industry HTML Template
  Version: 1.0
*/

/*=======================================================================
							[Table of Contents]
=========================================================================

01. Typography 
02. General
03. Top Bar
04. Navigation
05. Home Slider
06. Solutions
07. Featured Product
08. Quote
09. About
10. Testimonials
11. Counter
12. Team
13. Clients
14. Call Out
15. Footer
16. Page Baner
17. About Us Page
18. Team Page
19. Get Quote Page
20. Contact Page
21. Testimonials Page
22. Projects Page
23. Project Details
24. News Grid Page
25. News List Page
26. Single Post Page
27. My Account Page
28. Cart Page
29. Checkout Page
30. Shop Page
31. Single Product Page
32. Solution Details
33. Faq Page
34. We Are
35. News Two
36. Footer Top
37. Call Out Two
38. We Are Two
39. Features
40. Featured Product Two
41. Testimonial Two
42. Clients Two
43. Preloader

/* =============== Colors Used=====================
  Yellow: #FFD202;
  Dark Yellow: #ECC53F;
  Black Tone: #252525;
  Dark Gray: #222222;
  White: #FFF;
 ===================================================*/

/* ================================= */
		/*===== Typography =====*/
/* ================================= */
body {  
  font-size: 14px;
  font-weight: 400;
  /*font-family: 'Poppins', sans-serif;*/
}
html {
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
  font-weight: 400;
}
@-moz-document url-prefix() {
  .footer-widget ul li,
  .footer-news ul li,
  .footer-address li,
  .subscribe-form .form-control,
  label,
  .form-control,
  .project-description ul li,
  .meta-tags li,
  .rct-news-widget .date,
  .comments-date,
  .address-dtl-block ul li, 
  .address-dtl-block ul li a,
  .address-dtl-block a,
  p {
    font-weight: 300 !important;
  }
}
html,
body {
  height: 100%;
}
h1, h2, h3, h4, h5, h6 { 
  /*font-family: 'Roboto', sans-serif;*/
  font-weight: 900;
  margin: 0;
  color: #222;
}
h1 {
  font-size: 44px;
}
h2 {
  font-size: 34px;
}
h3 {
  font-size: 26px;  
}
h4 {
  font-size: 19px;
}
h5 {
  font-size: 18px;
}
h6 {
  font-size: 16px;
}
a {  
  color: #888;
  -webkit-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
a:hover, 
a:focus {
  color: #3485B1;
  text-decoration: none;
}
a:active {
  color: #82BA01;
  text-decoration: none;
}
p {
  font-size: 13px;
  font-weight: 400;
  /*font-family: 'Poppins', sans-serif;*/
  color: #888;
}
ul {
  list-style: none;
  margin: 0;
  padding: 0; 
}
.clr-white {
  color: #FFF;
}
.clr-black {
  color: #000;
}

/* ================================= */
    /*===== General =====*/
/* ================================= */
.overlay-bg {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  /*background: rgba(0,0,0,0.5); */  
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;      
}
.parallax {
  width: 100%;
  background-position: 50% 0;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;   
  position: relative;      
}
.btn-default {
  border-radius: 0;
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 13px;
  font-weight: 900;
  line-height: 1.69;
  letter-spacing: 0.3px;
  text-align: center;
  color: #FFF;
  border: none;
  border-radius: 4px;
  padding: 12px; 
  text-transform: uppercase;
  background-color: #ECC53F;
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;  
}
.btn-default:hover {
  color: #FFF;
  background-color: #252525;
}
.btn-white {
  border-radius: 0;
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 13px;
  font-weight: 900;
  line-height: 1.69;
  letter-spacing: 0.4px;
  text-align: center;
  color: #1B1C1E;
  background-color: #FFF;
  border: none;
  border-radius: 4px;
  padding: 12px; 
  text-transform: uppercase;
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;  
}
.btn-white:hover {
  color: #FFF;
  background-color: #ECC53F;
}
.btn-grey {
  border-radius: 2px;
  background-color: #EEE;
  font-size: 12px;
  color: #555;
  border: solid 1px #E8E8E8;
  padding: 12px 30px;
}
.btn-grey:hover {  
  border-radius: 2px;
  background-color: #ECC53F;
  border: solid 1px #ECC53F;
}
.section {
  margin-bottom: 35px;
}
.section-heading {
  color: #222;
}
.section-heading span {
  font-weight: 700;
}
.section-sub-heading {
  font-size: 18px;
  font-weight: 900;
  letter-spacing: 4.8px;
  color: #FFF;
}
.section-sub-heading span {  
  color: #FFF;
  background-color: #9F9E9A;
}
.page-banner-main {
  width: 100%;
  height: 200px;
  background-position: 50% 0;
  background-repeat: no-repeat;
  background-size: cover;  
  position: relative;    
}
.breadcrumb-block {
  box-shadow: 0.5px 0.9px 3px 0 #EEE;
}
.breadcrumb {
  background-color: transparent;
  margin-bottom: 0;
  list-style: none;
  padding-top: 17px;
}
.breadcrumb li,
.breadcrumb li a {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 14px;
  font-weight: 700;
  letter-spacing: 0.4px;
  color: #555;
}
.breadcrumb li a:hover {
  color: #222;
}
.breadcrumb>li+li:before {
  font: normal normal normal 14px/1 FontAwesome;
  color: #555;
  /*content: "\f105";*/
}
.breadcrumb-btn {
  text-align: right;
}
.breadcrumb-btn .btn-default {
  border-radius: 0;
  font-weight: 700;
  padding: 15px 18px;
}
.owl-dots {
  margin: 0 auto;
  left: 0;
  right: 0;
  text-align: center;
}
.owl-dot {
  width: 10px;
  height: 10px;
  border-radius: 100%;
  border: 1px solid #000;
  background: transparent;
  margin-right: 5px;
  display: inline-block; 
}
.owl-dot.active {
  border: 1px solid #0891FF;
  background: #0891FF;
}
@media(max-width:767px) {  
  .owl-nav {
    visibility: hidden;
  }  
  .breadcrumb-btn {
    display: none;
  } 
}
.pad-0 {
  padding: 0;
}
.plain-btn {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 13px;
  font-weight: 700;
  line-height: 1.85;
  letter-spacing: 0.7px;
  color: #3485B1;
  text-transform: uppercase;
}
.form-control {
  height: 45px;
  border-radius: 3px;
  border: solid 1px #E8E8E8;
}
.form-control:focus {
  border: solid 1px #E8E8E8;
  -webkit-box-shadow: none;
  box-shadow: none;
}
textarea:focus {
  outline: -webkit-focus-ring-color auto 0;
}
label {
  font-size: 14px;
  line-height: 1.71;
  letter-spacing: 0.4px;
  color: #666;
  font-weight: 400;
}
label span {  
  color: #999;
}

/* ================================= */
    /*===== Top Bar =====*/
/* ================================= */
.top-bar {
  width: 100%;
  height: 46px;
  background-repeat: repeat-x;     
  position: relative; 
  background-color: black;
}
.info-bar p {       
  /*font-family: 'Roboto', sans-serif;*/
  padding: 14px 0;
  letter-spacing: 0.4px;
  color: #888;
}
.top-social-icon  {
  text-align: right;
}
.top-social-icon li {
  display: inline-block;
  letter-spacing: 1px;
  line-height: 1.3;  
  padding: 14px 0;
}
.top-social-icon li a {
  color: #999;
  font-size: 20px;
}
.top-social-icon li a:hover {
  color: #FFD202;
}
@media(max-width:992px) {  
  .info-nav {
    display: none;
  }
}
@media(max-width:767px) { 
  .logo a img {
    margin: 0 auto;
    left: 0;
    right: 0;
    display: block;
  }
  .nav-bar .btn-default {
    display: none;
  }
}

/* ================================= */
    /*===== Navigation =====*/
/* ================================= */
.nav-bar {
  padding: 45px 0 0; 
  background: -moz-linear-gradient(to top, rgba(0,0,0,0.05), rgba(255,255,255,0.05)), linear-gradient(rgba(255,255,255,0.05), rgba(255,255,255,0.05));
  background: -webkit-linear-gradient(to top, rgba(0,0,0,0.05), rgba(255,255,255,0.05)), linear-gradient(rgba(255,255,255,0.05), rgba(255,255,255,0.05));
  background: -o-linear-gradient(to top, rgba(0,0,0,0.05), rgba(255,255,255,0.05)), linear-gradient(rgba(255,255,255,0.05), rgba(255,255,255,0.05));
  background: -ms-linear-gradient(to top, rgba(0,0,0,0.05), rgba(255,255,255,0.05)), linear-gradient(rgba(255,255,255,0.05), rgba(255,255,255,0.05));
  background: linear-gradient(to top, rgba(0,0,0,0.05), rgba(255,255,255,0.05)), linear-gradient(rgba(255,255,255,0.05), rgba(255,255,255,0.05));
}
.info-nav {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 14px;  
  line-height: 1.57;
  letter-spacing: 0.3px;  
}
.info-nav-heading { 
  font-size: 14px; 
  font-weight: 300;
  color: #777;
}
.info-nav-dtl,
.info-nav-dtl a {
  font-size: 14px;
  font-weight: 500;
  color: #232323;
}
.navigation {
  margin: 38px 0 0;
  background-color: #2F2F2F;
  z-index: 99;
  position: relative;
}
#cssmenu > ul > li a {
  border-left: 1px solid rgba(255,255,255,0.08);
}
#cssmenu > ul > li {
  border-bottom: 4px solid transparent;
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;    
}
#cssmenu > ul > li:hover,
#cssmenu > ul > li.active {
  border-bottom: 4px solid #ECC53F;
}
#cssmenu > ul > li.has-sub > a {
  margin-right: 25px;
}
#cssmenu ul ul {    
  margin-top: 4px;
}
.request-model-body {
  margin: 0 auto;
  left: 0;
  right: 0;
}
.request-model-body .form-control {
  width: 60%;
  border-radius: 4px;
  background-color: #FFF;
  border: solid 1px #E8E8E8;
  text-align: left;
  margin: 0 auto;
}
.request-model-body textarea {    
  padding-top: 10px;
  padding-left: 15px;
  width: 60%;
  border-radius: 4px;
  border: 1px solid #E8E8E8;
}
.nav-right {
  margin: 38px 0 0; 
  background-color: #222;
  max-height: 78px;
}
.nav-right ul li {
  display: inline-block;
}
.download-btn {
  padding: 28px 15px 30px;
  border-right: 1px solid rgba(255,255,255,0.08);
}
.download-btn a {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 14px;
  font-weight: 700;
  letter-spacing: 0.4px;
  color: #999;
  text-transform: uppercase;
}
.download-btn a i {
  color: #ECC53F;
}
.search-btn {
  width: 40px;
}
.search-btn a {
  font-size: 15px;
  line-height: 1.73;
  letter-spacing: 0.3px;
  color: #AAA;
  text-align: center;
}
/*Search*/
.search {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 60px;
  padding-top: 10;    
  z-index: 999999;
  opacity: 1;
  background-color: #222;
  -webkit-transform: translateX(-100%);
  -moz-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  -o-transform: translateX(-100%);
  transform: translateX(-100%);
  -webkit-transition: transform 0.5s linear;
  -moz-transition: transform 0.5s linear;
  -ms-transition: transform 0.5s linear;
  -o-transition: transform 0.5s linear;
  transition: transform 0.5s linear;    
}
.search .container {
  position: relative;
  margin-top: 20px;
}
.search.active {
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
}
.search-box {
  width: 95%;
  border: none;
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 14px;  
  color: #999;
  text-transform: uppercase;
  background: none;
}
.search-box::-webkit-input-placeholder {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 14px;
  font-weight: 900;
  color: #999;
  text-transform: uppercase;
}
.search-close {
  position: absolute;
  right: 0;
  top: 0;
  padding: 5px 15px;
  color: #999;
  background: #222;
}
.search-close:hover {  
  color: #ECC53F;
}
.search input:focus {
  outline: none!important;
  border-color: none;   
  -webkit-box-shadow: none;
  box-shadow: none;
}
@media(max-width:768px) {  
  #cssmenu.small-screen #menu-button {  
  color: #FFF;
  }
  #cssmenu.small-screen #menu-button:before {   
    background: #FFF;
  }
  #cssmenu.small-screen #menu-button:after {   
    border-top: 2px solid #FFF;
    border-bottom: 2px solid #FFF;
  }
  #cssmenu.small-screen #menu-button.menu-opened:before {
    background: #FFF;
  }
  #cssmenu.small-screen #menu-button.menu-opened:after {
    background: #FFF;
  }
  #cssmenu > ul > li > a {
    margin: 11px 0;
    color: #FFF;
  }
  #cssmenu.small-screen li > ul > li {
    background: #FFF; 
  }
  #cssmenu.small-screen li > ul > li a {
    color: #777; 
  }
  #cssmenu.small-screen li > ul > li:hover {
    background: #ECC53F; 
  }
  #cssmenu.small-screen li > ul > li:hover a {
    color: #222; 
  }  
  .nav-right {
    max-height: 46px;
  }
  .search-btn {
    visibility: hidden;
    display: none;
  }
  .download-btn {
    display: none;
    visibility: hidden;
  }
}
@media(max-width:767px) {  
  .nav-right {
    display: none;
  }
}
@media(min-width: 768px) and (max-width: 992px) {  
  #cssmenu > ul > li.has-sub > a {
    margin-right: 5px;
  }
  #cssmenu > ul > li.has-sub > a {
    padding-right: 14px;
  }
  #cssmenu > ul > li > a {
    padding: 5px 10px;
  }
  .search-btn {
    visibility: hidden;
    display: none;
  }
}

/* ================================= */
    /*===== Home Slider =====*/
/* ================================= */
.home-slider-bg {    
  width: 100%;
  
  background-position: 50% 0;
  background-repeat: no-repeat;
  background-size: cover;  
  position: relative;    
}
.slider-dtl {
  width: 509px;
  position: absolute;
  top: 50%;
  transform: translate(0, -50%);
}
.slider-heading {
  color: #FFF;
}
.slider-heading span {
  color: #ECC53F;
}
.slider-sub-heading {
  color: #FFF;
  font-weight: 400;  
  line-height: 1.44;
  margin: 13px 0 37px;
}
.slider-dtl .btn-default {
  color: #333333;
}
.slider-dtl .btn-default:hover {
  color: #FFF;
}
.home-slider .owl-prev {
  left: 30px;
}
.home-slider .owl-next {
  right: 30px;
}
.home-slider .owl-prev,
.home-slider .owl-next { 
  color: #FFF;
  font-size: 20px;
  position: absolute; 
  top: 50%;
  transform: translate(0, -50%);
  width: 0;
  height: 50px;
  background-color: rgba(0,0,0,0.6);
  text-align: center;
  line-height: 54px;
  z-index: 10;
  cursor: pointer;
  opacity: 0;
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.home-slider .owl-prev:hover,
.home-slider .owl-next:hover {  
  background-color: rgba(0,0,0,1);
  color: #FFF;
}
.home-slider:hover .owl-prev,
.home-slider:hover .owl-next {
  opacity: 1;
  width: 30px;
}
@media(max-width:767px) {  
  .slider-dtl {
    width: 300px; 
  }
}

/*===== Slider Effects =====*/
.home-slider.owl-carousel .owl-item .slider-dtl {
  -webkit-transition: all 1s ease;
  -ms-transition: all 1s ease;
  -o-transition: all 1s ease;
  -moz-transition: all 1s ease;
  transition: all 1s ease;
  -webkit-transition-delay: 1.3s;
  -ms-transition-delay: 1.3s;
  -o-transition-delay: 1.3s;
  -moz-transition-delay: 1.3s;
  transition-delay: 1.3s;  
}
.home-slider.owl-carousel .owl-item .slider-dtl.top-effect {
  opacity: 0; 
  top: 0;  
}
.home-slider.owl-carousel .owl-item.active .slider-dtl.top-effect { 
  opacity: 1;  
  top: 50%;
}
.home-slider.owl-carousel .owl-item .slider-dtl.left-effect {
  opacity: 0; 
  margin-left: -500px;  
  overflow: hidden;
}
.home-slider.owl-carousel .owl-item.active .slider-dtl.left-effect { 
  opacity: 1;  
  margin-left: 0;
}

/* ================================= */
    /*===== Solutions =====*/
/* ================================= */
.solutions-main-block {
  padding: 60px 0 28px;
}
.solution-block {
  padding: 0 0 30px;
}
.solution-img {
  position: relative;
  overflow: hidden;  
}
.solution-block .solution-img {
  border-radius: 4px;
}
.solution-block .solution-img img {   
  -webkit-transform:scale(1);
  -moz-transform:scale(1);
  -ms-transform:scale(1);
  -o-transform:scale(1);
  transform:scale(1);
  -webkit-transition: all 3s ease;
  -ms-transition: all 3s ease;
  -o-transition: all 3s ease;
  -moz-transition: all 3s ease;
  transition: all 3s ease;
}
.solution-block:hover .solution-img img {   
  -webkit-transform:scale(1.3);
  -moz-transform:scale(1.3);
  -ms-transform:scale(1.3);
  -o-transform:scale(1.3);
  transform:scale(1.3);
}
.solution-block .overlay-bg {   
  left: 0;
  top: 0;
  width: 70px;
  height: 100%;
  opacity: 1;
  background: rgba(34,34,34,0.9);
}
.solution-block:hover .overlay-bg {   
  width: 100%;
}
.solution-block .overlay-bg i {
  color: #E7B60D;
  font-size: 34px;
  line-height: 50px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.solution-block .overlay-bg i:hover {
  color: #FFF;
}
.solution-dtl {
  height: auto;
  font-size: 13px;
  line-height: 1.69;
  letter-spacing: 0.3px;
  margin-left: 75px;
}
.solution-heading {
  margin: 28px 0 15px;
  letter-spacing: 0.4px;
  font-weight: 400;
}
.solution-dtl p { 
  line-height: 1.69;
  letter-spacing: 0.3px;
}

/* ================================= */
    /*===== Featured Product =====*/
/* ================================= */
.featured-main-block {
  background-color: #333;
  position: relative;
  padding-bottom: 80px;
}
.featured-main-block .section {
  background-color: #222;
  margin-bottom: 0;
}
.featured-main-block .section-heading {
  color: #FFF;
  position: relative;
  padding: 26px 0;
}
.featured-block {
  position: relative;
  overflow: hidden;
  margin: 50px 0 0; 
}
.featured-img,
.featured-img img {
  position: relative;
  overflow: hidden;
  border-radius: 4px;
}
.featured-img .overlay-bg {
  width: 100%;
  /*background: rgba(0,0,0,0.8);*/
  opacity: 0; 
  border-radius: 4px;
  -webkit-transform:scale(0);
  -moz-transform:scale(0);
  -ms-transform:scale(0);
  -o-transform:scale(0);
  transform:scale(0);
}
.featured-block:hover .featured-img .overlay-bg {
  opacity: 1; 
  -webkit-transform:scale(1);
  -moz-transform:scale(1);
  -ms-transform:scale(1);
  -o-transform:scale(1);
  transform:scale(1);
}
.featured-heading {
  line-height: 1.22;
  color: #FFF;
}

.featured-dtl {
  position:absolute;
  background-color: rgba(0,0,0,0.4);
  padding: 5px;
  border-radius: 10px;
  top: 70%;
  left: 15px;
  margin-right: -50%;
  transform: translate(0, -50%);
  max-width: 300px;
  width: 90%;
  opacity: 0;
  -webkit-transition: all 1s ease;
  -ms-transition: all 1s ease;
  -o-transition: all 1s ease;
  -moz-transition: all 1s ease;
  transition: all 1s ease;
}
.featured-dtl h4{
  font-size: 15px;
}
.featured-dtl a ,.featured-dtl p {
  color: white; 
}
.featured-block:hover .featured-dtl {
  opacity: 1; 
}
.featured-dtl .btn-default {
  margin-top: 20px;
  color: #2C2C2C;
}
.featured-dtl .btn-default:hover {
  color: #FFF;
}
.featured-main-block .owl-prev {
  right: 50px;
}
.featured-main-block .owl-next {
  right: 0;
}
.featured-main-block .owl-prev,
.featured-main-block .owl-next { 
  color: #FFF;
  font-size: 22px;
  position: absolute; 
  top: 0px;
  width: 40px;
  height: 40px;  
  background-color: #393939;  
  border-radius: 4px;
  text-align: center;
  line-height: 40px;
  z-index: 10;
  cursor: pointer;
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.featured-main-block .owl-prev:hover,
.featured-main-block .owl-next:hover {    
  color: #666;
}

/* ================================= */
    /*===== Portfalio Product =====*/
/* ================================= */
.portfalio-main-block {
  background-color: unset;
  position: relative;
  padding-bottom: 80px;
}
.portfalio-main-block .section {
  background-color: unset;
  margin-bottom: 0;
}
.portfalio-main-block .section-heading {
  color: #FFF;
  position: relative;
  padding: 26px 0;
}
.portfalio-block {
  position: relative;
  overflow: hidden;
  margin: 50px 0 0; 
}
.portfalio-img,
.portfalio-img img {
  position: relative;
  overflow: hidden;
  border-radius: 4px;
}
.portfalio-img .overlay-bg {
  width: 100%;
  /*background: rgba(0,0,0,0.8);*/
  opacity: 0; 
  border-radius: 4px;
  -webkit-transform:scale(0);
  -moz-transform:scale(0);
  -ms-transform:scale(0);
  -o-transform:scale(0);
  transform:scale(0);
}
.portfalio-block:hover .portfalio-img .overlay-bg {
  opacity: 1; 
  -webkit-transform:scale(1);
  -moz-transform:scale(1);
  -ms-transform:scale(1);
  -o-transform:scale(1);
  transform:scale(1);
}
.portfalio-heading {
  line-height: 1.22;
  color: #FFF;
}
.portfalio-dtl {
  position:absolute;
  background-color: rgba(255,255,255,0.4);
  padding: 5px;
  border-radius: 10px;
  top: 70%;
  left: 15px;
  margin-right: -50%;
  transform: translate(0, -50%);
  max-width: 300px;
  width: 90%;
  opacity: 0;
  -webkit-transition: all 1s ease;
  -ms-transition: all 1s ease;
  -o-transition: all 1s ease;
  -moz-transition: all 1s ease;
  transition: all 1s ease;
}
.portfalio-dtl h4{
  font-size: 15px;
}
.portfalio-dtl a ,.portfalio-dtl p {
  color: black;
}
.portfalio-block:hover .portfalio-dtl {
  opacity: 1; 
}
.portfalio-dtl .btn-default {
  margin-top: 20px;
  color: #fff;
}
.portfalio-dtl .btn-default:hover {
  color: #FFF;
}
.portfalio-main-block .owl-prev {
  right: 50px;
}
.portfalio-main-block .owl-next {
  right: 0;
}
.portfalio-main-block .owl-prev,
.portfalio-main-block .owl-next { 
  color: #FFF;
  font-size: 22px;
  position: absolute; 
  top: -60px;
  width: 40px;
  height: 40px;  
  background-color: #393939;  
  border-radius: 4px;
  text-align: center;
  line-height: 40px;
  z-index: 10;
  cursor: pointer;
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.portfalio-main-block .owl-prev:hover,
.portfalio-main-block .owl-next:hover {    
  color: #666;
}

/* ================================= */
    /*===== Quote =====*/
/* ================================= */
.quote-main-block {
  padding: 50px 0;
  width: 100%;
  background-position: 50% 0;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;   
}
.quote-text {  
  max-width: 825px;
  margin: 0 auto;
  left: 0;
  right: 0; 
}
.quote-text p {
  /*font-family: 'Roboto', sans-serif;*/
  font-weight: 300;
  font-size: 24px;
  line-height: 1.42;
  letter-spacing: 0.5px;
  text-align: center;
  color: #222;
}
@media(max-width:992px) {  
  .quote-text {  
    max-width: 80%;
  }
}

/* ================================= */
    /*===== About =====*/
/* ================================= */
.about-main-block {
  padding: 70px 0 43px;
}
.about-heading {
  padding: 0 0 18px;
}
.about-block p {
  padding: 2px 0 5px;
  line-height: 1.85;
  letter-spacing: 0.3px;
}
.about-features-block {
  padding-bottom: 37px;
}
.about-features-heading {
  padding: 0 0 14px;
  font-weight: 400;
}
.about-features-dtl p {
  line-height: 1.65;
}
.about-features-block .about-features-icon {
  margin: 0 auto;
  left: 0;
  right: 0;
  width: 72px;
  height: 72px;  
  border-radius: 4px;
  color: #FFD202;
  font-size: 34px;
  line-height: 80px;
  text-align: center;
  background: url(../images/icons/icons-bg.jpg);
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.about-img img {
  border-radius: 4px;
}
@media(max-width:767px) {  
  .about-block {
    margin-bottom: 30px;
  }
}

/* ================================= */
    /*===== Testimonials =====*/
/* ================================= */
.testimonials-main-block {
  background-color: #F8F8F8;  
  padding: 69px 0;
  background-repeat: repeat-x;     
  position: relative; 
}
.testimonial-detail {
  position: relative; 
  box-shadow: 1px 1.7px 3px 0 rgba(0, 0, 0, 0.05);
}
.testimonial-detail p {
  /*font-family: 'Roboto', sans-serif;*/
  background-color: #FFF;
  font-size: 16px;
  padding: 40px 60px 40px 40px;  
}
.testimonial-arrow {
  width: 30px;
  height: 30px;
  position: absolute;
  bottom: -20px;
  left: 50px;
}
.testimonial-img {
  width: 65px;
  height: 65px;
  border-radius: 4px;
  display: inline-block;
  margin: 13px 0 0 30px;
}
.testimonial-img img {
  border-radius: 4px;
}
.testimonial-client-dtl {
  margin-left: 22px;
  display: inline-block;
}
.testimonial-client {
  /*font-family: 'Roboto', sans-serif;*/
  font-weight: 400;
  font-size: 15px;
  line-height: 1.73;
  color: #232323;
}
.testimonial-client span {
  /*font-family: 'Poppins', sans-serif;*/
  font-size: 13px;
  font-weight: 300;
  line-height: 2;
  letter-spacing: 0.4px;
  color: #777;
}
.rating {
  margin: 10px 0 0;
  text-align: left;
}
.rating li {
  display: inline-block;
  color: #E7B60D;
}
.rating li.disable {
  color: #C2C2C2;
}
.testimonials-main-block .owl-prev {
  right: 50px;
}
.testimonials-main-block .owl-next {
  right: 0;
}
.testimonials-main-block .owl-prev,
.testimonials-main-block .owl-next { 
  color: #232323;
  font-size: 22px;
  position: absolute; 
  top: -70px;
  width: 40px;
  height: 40px;
  background-color: #FFF;
  background: url(../images/icons/testimonial-arrow.png);
  border-radius: 4px;
  text-align: center;
  line-height: 40px;
  z-index: 10;
  cursor: pointer;
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.testimonials-main-block .owl-prev:hover,
.testimonials-main-block .owl-next:hover {    
  color: #999;
}

/* ================================= */
    /*===== Counter =====*/
/* ================================= */
.counter-main-block .parallax {   
  padding: 77px 0 82px;
}
.counter-main-block .overlay-bg {
  opacity: 0.9;
  background-repeat: repeat;  
}
.counter-main-block .counter-heading {
  color: #FFF; 
}
.counter-main-block .counter-heading span {
  color: #FFD202;
}
.counter-block {
  padding: 10px 0 0;
}
.counter-number {
  color: #FFF; 
  font-size: 45px;
  font-weight: 300;
  line-height: 0.67;
  display: inline-block;
}
.counter-number-spec {
  color: #FFF; 
  font-size: 45px;
  font-weight: 300;
  line-height: 0.67;
  display: inline-block;
}
.counter-text {
  font-size: 14px;
  line-height: 2.14;
  color: #FFF;
  font-weight: 400;
  text-transform: uppercase;
}
@media(max-width:767px) {  
  .counter-block {
    text-align: center;
  }  
}
@media(max-width:992px) {  
  .counter-block {
    margin: 30px 0 0;
  }
  .counter-main-block .overlay-bg {
    background-repeat: repeat;  
  }
}

/* ================================= */
    /*===== Team =====*/
/* ================================= */
.team-main-block {
  padding: 80px 0 73px;
}
.team-main-block .section {
  margin-bottom: 20px;
}
.team-img {
  position: relative;
  overflow: hidden;
}
.team-social {
  position: absolute;
  bottom: -20px;
  width: 100%;
  background-color: rgba(236,197,63,0.7);
  opacity: 0;
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.team-member:hover .team-social {
  opacity: 1;
  bottom: 0;
}
.team-social ul li {
  display: inline-block;
  padding: 10px 5px 8px;
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.team-social ul li a {
  color: #222;
  font-size: 15px;
}
.team-social ul li:hover {
  padding: 10px 10px 8px;
  background-color: #ECC53f;
}
.team-block p {
  line-height: 1.85;
  letter-spacing: 0.3px;
}
.team-block p a {
  color: #3485B1;
}
.team-name {
  margin-top: 20px;
}
.team-post {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 13px;
  font-weight: 300;
  line-height: 2;
  letter-spacing: 0.4px;
  color: #777;
  text-transform: uppercase;
}
.team-contact {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 14px;
  font-weight: 300;
  line-height: 1.86;
  letter-spacing: 0.4px;
  color: #777;
  margin-top: 06px;
}
.team-mail {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 15px;
  font-weight: 300;
  line-height: 1.73;
  letter-spacing: 0.5px;
  color: #777;
}
@media(max-width:767px) {  
  .team-block {
    margin-bottom: 30px;
  }
  .team-main-block .team-img img {
    width: 100%;
  }
}
@media(max-width:992px) {  
  .team-main-block {
    padding: 80px 0 43px;
  }
  .team-main-block .team-member {
    margin-bottom: 30px;
  }
}

/* ================================= */
    /*===== Clients =====*/
/* ================================= */
.clients-main-block {
  background-color: #F8F8F8;
  padding: 58px 0 68px;
}

/* ================================= */
    /*===== Call Out =====*/
/* ================================= */
.call-out-main-block {
  background-color: #ECC53F;
  padding: 34px 0 31px; 
  box-shadow: 1px 5.7px 10px 0 rgba(0, 0, 0, 0.5);
  z-index: 999;
  position: relative;
}
.call-block {
  padding: 10px 0 0; 
  font-size: 22px;
  font-weight: 500;  
  color: #FFF;
}
.call-out-heading {
  color: #FFF;
}
.call-btn {
  text-align: right;
}
.call-btn .btn-default {  
  background-color: #252525;
  color: #FFF;
  padding: 13px 26px 11px;
}
.call-btn .btn-default:hover {
  background-color: #FFF;
  color: #222;  
}
@media(max-width:767px) {  
  .call-out-main-block .call-block {
    margin-bottom: 30px;
    text-align: center;
  }
  .call-btn {
    text-align: center;
  }
}
@media(min-width: 768px) and (max-width: 992px) {  
  .call-btn .btn-default {
    padding: 13px 10px 11px;
  }
}

/* ================================= */
    /*===== Footer =====*/
/* ================================= */
.footer-main-block {
  background-color: #2A2A2A;
  background-repeat: repeat-x;
}
.footer-block {
  padding: 70px 0 37px;
}
.footer-heading {
  color: #FFF;
  font-size: 18px;
  font-weight: 500;
  line-height: 4.13;
  letter-spacing: 0.8px;
  text-transform: uppercase;
}
.footer-about p {
  font-size: 14px;
  line-height: 1.57;
  padding: 12px 0 0;
  color: #888;
}
.footer-solutions ul li {
  font-size: 13px;
  font-weight: 400;
  line-height: 1.85;
  letter-spacing: 0.3px;
  padding: 10px 0 10px;
  color: #888;
  border-bottom: 1px solid #949494;
}
.footer-solutions ul li:last-child {  
  /*border-bottom: 0 solid #949494;*/
}
.footer-news ul li {
  font-size: 13px;
  line-height: 1.85;
  font-weight: 400;
  color: #888;
  padding: 10px 0 10px;
  border-bottom: 1px solid #949494;
}
.footer-news ul li:last-child {  
  /*border-bottom: 0 solid #949494;*/
}
.footer-contact p {
  padding: 4px 0 10px;
  line-height: 1.69;
  font-weight: 400;
}
.footer-address li {
  font-size: 13px;
  line-height: 1.85;
  color: #fff;
  padding: 10px 0 0;
}
.footer-address li span {  
  color: #AAA;
}
.copyright {
  padding: 25px 0 13px;
  background-color: #FFF; 
  background-repeat: repeat-x;
  box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.3);
}
.copyright-text p {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 14px;
}
.footer-nav ul {
  text-align: right;
}
.footer-nav ul li {
  display: inline-block;
  padding: 0 5px;
}
.footer-nav ul li:last-child {
  padding: 0 0;
}
.footer-nav ul li a {
  /*font-family: 'Roboto', sans-serif;*/
  display: inline-block;
  font-weight: 300;
  color: #888;
   padding: 0 5px;
}
.footer-nav ul li a:hover {
  color: #ECC53F;
}
@media(max-width:767px) {  
  .copyright-text p {
    text-align: center;
  }
  .footer-nav ul {
    text-align: center;
  }
}
@media(max-width:992px) {  
  .footer-widget {
    margin-bottom: 30px;
  }  
}
@media(min-width: 768px) and (max-width: 992px) {  
  .copyright {  
    background-repeat: round;
  }
}

/* ================================= */
    /*===== Page Baner =====*/
/* ================================= */
.page-banner-main-block {
  width: 100%;
  padding: 80px 0 85px;
  background-position: 50% 0;
  background-repeat: no-repeat;
  background-size: cover; 
  position: relative;  
}
.page-banner-heading {
  font-size: 40px;
  color: #333;
}

/* ================================= */
    /*===== About Us Page =====*/
/* ================================= */
.about-page-main-block {
  padding: 72px 0 50px;
}
.about-page-heading {
  font-weight: 300;
  line-height: 1.33;
  letter-spacing: 0.5px;
  margin-bottom: 26px;
}
.about-page-block p {
  line-height: 1.71;
  letter-spacing: 0.3px;
}
.about-page-img {
  margin-bottom: 30px;
}
.about-page-img img {
  border-radius: 4px;
}
.team-abt-main-block {
  padding: 65px 0 76px;
}
.team-abt-main-block .section {
  margin-bottom: 35px;
}
.team-abt-main-block .team-img img {
  width: 100%;
}
@media(max-width:992px) {  
  .team-abt-main-block {
    padding: 65px 0 46px;
  }
  .team-abt-main-block .team-member {
    margin-bottom: 30px;
  }
}
@media(min-width: 768px) and (max-width: 992px) {  
  .about-page-img img {
    width: 100%;
  }
}

/* ================================= */
    /*===== Team Page =====*/
/* ================================= */
.team-page-main-block {
  padding: 70px 0 20px;
}
.team-page-main-block .team-member {
  margin-bottom: 60px;
}
.team-page-main-block .team-img img {
  width: 100%;
}
.team-page-main-block .team-post {    
  margin-bottom: 10px;
}
.team-member p {
  line-height: 1.69;
  letter-spacing: 0.3px;
}
.team-page-main-block .team-mail a {
  color: #3485B1;
}
.join-team-main-block {
  padding: 68px 0;
  background-repeat: repeat-x;
}
.join-team-heading {
  font-size: 28px;
  font-weight: 500;
  color: #252525;
  margin-bottom: 24px;
}

/* ================================= */
    /*===== Get Quote Page =====*/
/* ================================= */
.quote-page-main-block {
  padding: 70px 0 80px;
}
.quote-heading {
  font-size: 28px;
  font-weight: 900;
  line-height: 2.21;
  color: #232323;
}
.quote-section p {
  line-height: 1.86;
  letter-spacing: 0.4px;
  color: #666;
}
.quote-section p a {
  font-weight: 500;
  color: #232323;
}
.quote-form {
  margin-top: 20px;
}
.quote-form textarea.form-control {
  height: 220px;
  border-radius: 3px;
}
.quote-form .btn-default {    
  width: 100%;
  margin-top: 15px;
  border-radius: 2px;
  border: solid 1px #E8E8E8;
}

/* ================================= */
    /*===== Contact Page =====*/
/* ================================= */
.contact-page-main-block {
  padding: 68px 0 83px;
}
.contact-map {
  width: 100%;
  height: 550px;
  background-color: #E4E4E4;
}
.contact-page-main-block .contact-heading {
  font-size: 28px;
  font-weight: 900;
  line-height: 2.21;
  color: #232323;
}
.contact-page-main-block .contact-section p {
  line-height: 1.86;
  letter-spacing: 0.4px;
  color: #666;
}
.contact-form {
  margin-top: 20px;
}
.contact-form textarea.form-control {
  height: 150px;
  border-radius: 3px;
}
.address-block {
  background-color: #ECC53F;
  margin-top: -131px;
}
.address-top-block {
  width: 100%;
  background-color: #E5BF3D; 
  padding-left: 40px; 
  border-bottom: 1px solid rgba(35,35,35,0.3);
}
.address-heading {
  font-size: 20px;
  font-weight: 700;
  line-height: 3.1;
  color: #222;
}
.address-dtl-block {
  padding: 32px 60px 20px 40px; 
}
.address-dtl-heading {
  line-height: 1.28;
  color: #FFF;
  margin-bottom: 20px;
}
.address-dtl-block ul li,
.address-dtl-block ul li a {
  font-size: 13px;
  line-height: 1.69;
  letter-spacing: 0.4px;
  color: #fff;
  padding-top: 6px;
  text-decoration: none;
}
.address-dtl-block ul li span {
  font-weight: 700;
}
.address-dtl-block a {
  color: #FFF;
  text-decoration: underline;
  line-height: 5;
}
.address-block hr {
  margin: 0;
  border-top: 1px solid rgba(35,35,35,0.7);
  opacity: 0.2;
}
.address-arrow ul {
  width: 100%;
}
.address-arrow ul li {
  text-align: center;
  display: inline-block;
  text-align: center;
  width: 177px;
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.address-arrow ul li a {
  font-size: 30px;
  color: #FFF;
}
.address-arrow ul li:hover {
  background-color: #012043;
}
@media(max-width:767px) {  
  .address-block {
    margin-top: 30px;
  }
  .address-arrow ul li {    
    width: 160px;
  }
}
@media(min-width: 768px) and (max-width: 992px) {  
  .address-top-block {
    padding-left: 15px;
  }
  .address-dtl-block {
    padding: 32px 60px 20px 15px;
  }
  .address-arrow ul li {    
    width: 100px;
  }
}

/* ================================= */
    /*===== Testimonials Page =====*/
/* ================================= */
.love-us-main-block {
  margin: 70px 0 80px;
}
.love-us-main-block .section {
  margin-bottom: 10px;
}
.love-us-main-block .section-heading {
  color: #222;
  line-height: 1.35;
  font-weight: 700;
}
.love-us-block {
  max-width: 734px;
  margin: 0 auto;
  left: 0;
  right: 0;
}
.love-us-block .rating {
  text-align: center;
  margin: 0;
}
.love-us-block p {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 18px;
  font-weight: 300;
  line-height: 1.67;
}
.love-us-client {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 15px;
  font-weight: 400;
  line-height: 1.73;
  color: #232323;
}
.love-us-client span {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 13px;
  font-weight: 300;
  line-height: 2;
  letter-spacing: 0.4px;
  color: #777;
}
.love-us-gallery {
  max-width: 853px;
  margin: 0 auto;
  left: 0;
  right: 0;
  padding-top: 73px;
}
.love-us-gallery .love-us-img img {
  border-radius: 4px;
}

/* ================================= */
    /*===== Projects Page =====*/
/* ================================= */
.projects-page-main-block {
  padding-bottom: 50px;
}
.projects-filter ul {
  border-bottom: 1px solid #EEE;
  margin: 37px 0 40px;
}
.projects-filter ul li {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 12px;
  font-weight: 500;
  line-height: 4.17;
  letter-spacing: 0.4px;
  color: #999;
  text-transform: uppercase;
  border-bottom: 3px solid transparent;
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.projects-filter ul li:hover {  
  color: #222;
  border-bottom: 3px solid #ECC53F;
}
.scale-anm {
  transform: scale(1);
}
.mfp-title {
  color: #FFF;
  text-transform: uppercase;
}
.projects-gallery .featured-block {
  margin: 0 0 30px;
}
@media(max-width:767px) {  
  .projects-page-main-block .featured-img img {
    width: 100%;
  }
}

/* ================================= */
    /*===== Project Details =====*/
/* ================================= */
.project-dtl-main-block {
  padding: 62px 0 60px;
}
.project-dtl-block {
  background-color: #F6F6F6;
  padding: 40px 47px 40px 37px;
  border-left: 3px solid #ECC53F;
  margin-bottom: 34px;
}
.project-dtl-heading {
  font-size: 22px;
  line-height: 1.59;
  border-bottom: 1px solid #E5E5E5;
  position: relative;
  margin-bottom: 17px;
}
.project-dtl-heading:after {
  content: " ";
  width: 35px;
  height: 3px;
  background-color: #ECC53F;
  color: #ECC53F;
  position: absolute;
  bottom: 0;
  left: 0;
}
.project-dtl-block ul li {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 15px;
  line-height: 2.33;  
  font-weight: 300;
  color: #777;
}
.project-dtl-block ul li span { 
  font-weight: 500;
  color: #555;
  margin-right: 10px;
}
.project-description {
  padding-bottom: 7px;
}
.description-heading {
  font-size: 20px;
  line-height: 1.75;
  border-bottom: 1px solid #E5E5E5;
  margin-bottom: 20px;
}
.project-description p {
  line-height: 1.85;
  letter-spacing: 0.4px;
  color: #777;
}
.project-description ul li {
  font-size: 13px;
  line-height: 1.85;
  letter-spacing: 0.4px;
  color: #777;
}
.project-description ul li::before {
  content: "• ";
  color: #ECC53F; 
  font-size: 15px;
}
.project-dtl-img {
  margin-bottom: 20px;
}
.project-dtl-img img {
  border-radius: 4px;
}
.project-nav-main-block {
  box-shadow: 0 -1px 1px 0 #EEE;  
}
.project-nav-block {
  background-color: #FFF;
  padding: 36px 0;
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.project-nav-block:hover {
  background-color: #FCFCFC;
}
.project-nav-block a {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 13px;
  font-weight: 700;
  line-height: 1.69;
  letter-spacing: 0.3px;
  color: #777;
  text-transform: uppercase;
}
.project-nav-block:hover a {  
  color: #222;
}
@media(max-width:767px) {  
  .sol-dtl-block {
    margin-top: 60px;
  }
}

/* ================================= */
    /*===== News Grid Page =====*/
/* ================================= */
.news-grid-main-block {
  padding: 63px 0 74px;
}
.news-grid-img img {
  border-radius: 4px 4px 0 0;
}
.news-grid-block {
 border: solid 1px #EEE;
 border-radius: 4px 4px 0 0;
 margin-bottom: 40px;
}
.news-grid-dtl {
  padding: 30px 20px 32px 30px;
}
.news-grid-heading {
  font-weight: 700;
  line-height: 1.33;
  color: #222;
}
.news-grid-dtl .date {
  font-size: 13px;
  line-height: 1.92;
  letter-spacing: 0.4px;
  color: #777;
  margin-bottom: 10px;
}
.news-grid-dtl p {
  line-height: 1.85;
  letter-spacing: 0.3px;
}
.pagination {
  margin: 0;
}
.pagination>li>a, 
.pagination>li>span {   
  padding: 6px 12px;  
  font-size: 14px;
  font-weight: 700;
  /*font-family: 'Roboto', sans-serif;*/
  color: #292929;
  background-color: #F0F0F0;
  border: 0 solid #F0F0F0;
  margin-right: 5px;
  border-radius: 4px;
}
.pagination>li.active>a, 
.pagination>li.active>span,
.pagination>li.active>a:hover, 
.pagination>li.active>span:hover,
.pagination>li>a:hover, 
.pagination>li>span:hover   {
  color: #FFF;
  background-color: #ECC53F;
  border: 0 solid #ECC53F;
}

/* ================================= */
    /*===== News List Page =====*/
/* ================================= */
.news-list-main-block {
  padding: 63px 0 80px;
}
.news-list-block {
  border-bottom: 1px solid #EEE;
  padding-bottom: 40px;
  margin-bottom: 50px;
}
.news-list-img img {
  border-radius: 4px;
}
.news-list-dtl {
  margin-top: 38px;
}
.news-list-heading {
  font-size: 28px;
  line-height: 0.86;
  color: #222;
}
.meta-tags {
  margin: 14px 0 22px;
}
.meta-tags li {
  display: inline-block;
  border-right: 1px solid #777;
  font-size: 13px;
  letter-spacing: 0.4px;
  color: #777;
  padding-right: 10px;
}
.meta-tags li:last-child {
  border-right: 0 solid #777;
}
.news-list-dtl p {
  line-height: 2;
  letter-spacing: 0.4px;
  color: #777;
}
.news-list-dtl .btn-default {
  margin-top: 15px;
  background-color: #EEE;
  font-size: 12px;
  color: #555;
}

/*===== Side Bar Widgets =====*/
.sidebar-widget {
  margin-bottom: 40px;
}
.sidebar-widget:last-child {
  margin-bottom: 0;
}
.widget-heading {
  font-size: 15px;
  letter-spacing: 0.5px;
  color: #222;
  text-transform: uppercase;
  margin-bottom: 30px;
}
.search-widget {
  position: relative;
}
.search-widget .search-form .form-control {
  /*font-family: 'Roboto', sans-serif;*/
  height: 45px;
  border: solid 1px #E8E8E8;
  font-size: 14px;
  color: #999;
  border-radius: 2px;
}
.search-form a {
  font-size: 14px;
  color: #AAA;
  position: absolute;
  bottom: 12px;
  right: 15px;
}
.rct-news-widget ul li {
  border-bottom: 1px solid #E8E8E8;
  padding-bottom: 14px;
  margin-bottom: 17px;
}
.rct-news-widget ul li:last-child {
  margin-bottom: 0;
}
.rct-news-widget .rct-news-title {
  font-size: 15px;
  line-height: 1.2;
  color: #222;
}
.rct-news-widget .date {
  font-size: 12px;
  line-height: 2.08;
  letter-spacing: 0.4px;
  color: #777;
}
.cat-widget ul li {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 14px;
  letter-spacing: 0.4px;
  color: #777;
  border-bottom: 1px solid #E8E8E8;
  padding: 15px 0;
}
.cat-widget ul li:first-child {
  padding: 0 0 15px;
}
.cat-widget ul li a:hover {  
  color: #292929;
}
.cat-widget ul li::before {
  content: "• ";
  color: #ECC53F; 
  font-size: 15px;
}
.tag-widget ul li {
  display: inline-block;
  font-size: 12px;
  font-weight: 300;
  padding: 8px 15px 6px;
  letter-spacing: 0.4px;
  color: #777;
  text-align: center;
  border: 1px solid #E8E8E8;
  border-radius: 2px;
  margin-bottom: 10px;
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.tag-widget ul li:hover {
  background-color: #ECC53F;
}
.tag-widget ul li:hover a {
  color: #FFF;
}
@media(max-width:767px) {  
  .news-list-sidebar {
    margin-top: 60px;
  }
}

/* ================================= */
    /*===== Single Post Page =====*/
/* ================================= */
.single-post-main-block {
  padding: 63px 0 80px;
}
.news-list-block.single-post-block {
  margin-bottom: 20px;
  overflow: hidden;
}
.single-post-point {
  margin-bottom: 38px
}
.single-post-point:last-child {
  margin-bottom: 0
}
.post-point-heading {
  margin-bottom: 17px;
}
.single-post-point p {
  line-height: 2;
  letter-spacing: 0.4px;
  color: #777;
}
.post-point-img {
  position: relative;
  overflow: hidden;
  width: 100%;
}
.post-point-img img {
  border-radius: 4px;
}
.post-point-img-caption {
  padding: 17px 37px;
  position: absolute;
  bottom: 0;
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 14px;
  line-height: 1.43;
  letter-spacing: 0.4px;
  text-align: center;
  color: #FFF;
  background-color: rgba(0,0,0,0.7);
}
.single-post-tag-block {
  padding-bottom: 50px;
}
.single-post-tag {
  padding-top: 6px;
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 14px;
  line-height: 1.57;
  color: #232323;
}
.single-post-tag a {
  color: #777;
}
.single-post-tag a:hover {
  color: #222;
}
.single-post-share {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 14px;
  line-height: 1.57;
  color: #232323;
}
.single-post-share ul li {
  display: inline-block;
  text-align: center;    
  border-radius: 2px;
}
.single-post-share ul li a {
  display: inline-block;  
  font-size: 14px;
  line-height: 2.5;
  letter-spacing: 0.4px;
  text-align: center;
  color: #FFF;
  width: 32px;
  height: 32px;  
}
.single-post-share ul li a:hover {
  opacity: 0.9;
}
li.facebook {
  background-color: #3B5998;
}
li.twitter {
  background-color: #55ACEE;
}
li.google-plus {
  background-color: #DD4B39;
}
li.share {
  background-color: #408CFF;
}
.single-post-written {
  border-radius: 2px;
  background-color: #F6F6F6;
  padding: 30px;
  margin-bottom: 30px;
}
.written-img {
  display: inline-block;
  float: left;
}
.written-img img {
  border-radius: 4px;
}
.written-dtl {
  display: inline-block;
}
.written-by {
  font-size: 14px;
  line-height: 1.86;
  color: #222;
  margin: 10px 0;
}
.single-post-written p {
  line-height: 1.92;
  letter-spacing: 0.4px;
  color: #777;
}
.blog-comment .media {
  border: 1px solid #E8E8E8;
  padding: 30px;
}
.blog-comment .media.comments-reply {
  border: none;
  padding-bottom: 0;
}
.comments-heading {
  font-size: 22px;
  line-height: 2.82;
  color: #222;
}
.blog-comment .media-left a img {
  border-radius: 4px;
}
.blog-comment .media-heading {
  font-weight: 400;
}
.blog-comment p {
  line-height: 1.85;
  letter-spacing: 0.4px;
  color: #777;
  margin-top: 10px;
}
.reply-btn {
  font-size: 12px;
  text-align: center;
  color: #555;
  border-radius: 2px;
  background-color: #EEE;
  border: solid 1px #E8E8E8;
}
.comment-form label span {
  color: #FC4242;
}
@media(max-width:767px) {  
  .single-post-tag {
    margin-bottom: 30px;
    text-align: center;
  }
  .single-post-share {
    text-align: center;
  }
}

/* ================================= */
    /*===== My Account Page =====*/
/* ================================= */
.my-account-main-block-block {
  padding: 42px 0 73px; 
}
.my-account-heading {
  font-size: 22px;
  font-weight: 700;
  line-height: 2.82;
  color: #222;
}
.my-account-form label span {
  color: #FC4242;
}
.my-account-form .btn-grey {
  margin-top: 15px;
}
.my-account-form .checkbox {
  display: inline-block;
  padding-left: 30px;
  position: absolute;
  margin-top: 30px;
}
.my-account-form .lost-pass {
  font-size: 13px;
  font-weight: 300;
  line-height: 1.85;
  letter-spacing: 0.4px;
  color: #222;
  display: block;
  margin-top: 20px;
}

/* ================================= */
    /*===== Cart Page =====*/
/* ================================= */
.cart-main-block {
  margin: 60px 0 35px;
}
table {
  width: 100%;
  border: 1px solid #E8E8E8;
  table-layout: fixed;
}
td,
th { 
  /*font-family: 'Roboto', sans-serif;*/
  border-bottom: 1px solid #E8E8E8;
  font-size: 14px;
  color: #777;
  padding: 8px 8px;
}
th {
  font-size: 15px;
  font-weight: 500;
  color: #222;
}
td.remove-btn {
  text-align: center;
}
.remove-btn a {
  color: #FC4242;
}
.cart-product a:hover {
  color: #000;
}
.coupon-form .form-control {
  width: 157px;
  display: inline-block;
}
td.table-update {
  text-align: right;
}
.cart-total-main-block {
  padding-bottom: 80px;
}
.cart-total-block .btn-default {
  margin-top: 25px;
  width: 100%;
}
.cart-total-heading {
  font-size: 20px;
  line-height: 3.1;
  color: #222;
}
.cart-bg {
  background-color: #FCFCFC;
  border-right: 1px solid #E8E8E8;
}
.radio label {
  font-size: 14px;
  font-weight: 400;
  color: #777;
}
.radio label span {  
  color: #222;
}
.text-top {
  vertical-align: top;
} 
.cart-total-block a {
  font-size: 14px;
  font-weight: 400;
  color: #3485B1;
}
@media(max-width:992px) {  
  .coupon-form .btn-default {
    margin-top: 15px;
  }
  td.total-cart {
    overflow: hidden;
  }
}

/* ================================= */
    /*===== Checkout Page =====*/
/* ================================= */
.checkout-page-main-block {
  padding: 66px 0 80px;
}
.checkout-login {
  margin-bottom: 30px;
}
.checkout-bar {
  padding: 0 30px;
  margin-bottom: 25px;
  border-top: 3px solid #3485B1;
  background-color: #F6F6F6;
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 15px;
  font-weight: 300;
  line-height: 4.13;
  color: #555;
}
.checkout-bar span {   
  color: #222;
  font-weight: 400;
}
.checkout-login-block {
  padding: 30px;
  border: solid 1px #E8E8E8;
}
.checkout-login-block p {
  line-height: 1.85;
  color: #777;
}
.checkout-coupon {
  margin-bottom: 30px;
}
.checkout-coupon-block {
  padding: 30px;
  border: solid 1px #E8E8E8;
}
.checkout-coupon-form .form-control {
  width: 50%;
  display: inline-block;
  padding-top: -1px;
  height: 45px;
}
.checkout-heading {
  font-size: 22px;
  color: #222;
  margin-bottom: 30px;
}
.checkout-page-main-block label span {
  color: #FC4242;
}
.btn-dropdown {
  width: 100%;
  background-color: transparent;
  height: 45px;
  border-radius: 3px;
  border: solid 1px #E8E8E8;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.btn-dropdown.focus, 
.btn-dropdown:focus,
.btn-dropdown:hover,
.btn.btn-dropdown:active,
.open>.dropdown-toggle.btn-dropdown.focus, 
.open>.dropdown-toggle.btn-dropdown:focus, 
.open>.dropdown-toggle.btn-dropdown:hover  {
  color: #555;
  background-color: transparent;
  border-color: #E8E8E8;
}
.dropdown-menu {
  width: 100%;
  border-radius: 4px;
}
.btn .caret {    
  float: right;
}
.your-order-block {
  padding: 30px 0; 
}
.your-order-block .checkout-heading {
  margin-bottom: 24px;
}
.pay-method {
  padding: 28px 25px 20px;
  background-color: #F6F6F6;
}
.pay-method-info {
  padding-top: 10px;
  padding: 30px;
  background-color: #FFF;
  position: relative;
}
.pay-method-info:before {
  content: "";
  width: 32px;
  height: 16px;
  position: absolute;
  top: -8px;
  left: 30px;
  background: url(../images/icons/paymethodinfo.png);
}
.pay-method-info p {
  font-weight: 300;
  line-height: 1.85;
  color: #555;
}
a.papal {
  font-size: 12px;
  color: #3485B1;
  margin-top: -20px;
  float: right;
}
img.paypal {
  display: inline-block;
}
hr {
  margin-top: 40px;
  margin-bottom: 20px;
  border-top: 1px solid #E8E8E8;
}
@media(max-width:767px) {  
  a.papal {    
    margin-top: 0;
  }
}

/* ================================= */
    /*===== Shop Page =====*/
/* ================================= */
.shop-page-main-block {
  padding: 60px 0 80px;
}
.product-filter {
  margin-bottom: 30px;
}
.showing-result,
.showing-result a {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 14px;
  font-weight: 500;
  color: #777;
}
.showing-result a:hover {
  color: #222;
}
.product {
  margin-bottom: 40px;
}
.product-img img {
  border-radius: 4px;
}
.product-name {
  margin-top: 20px;
}
.product-price {
  font-size: 15px;
  font-weight: 700;
  color: #222;
  margin-bottom: 15px;
}
.shop-page-main-block hr {
  margin-top: 10px;
  margin-bottom: 30px;
  border-top: 1px solid #E8E8E8;
}
/* Product Category Widget*/
.pdct-cat-widget ul li {
  border: solid 1px #EEE;  
  border-left: 3px solid #E8E8E8;
  border-top: none;
  padding: 16px 20px;  
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.pdct-cat-widget ul li a {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 14px;
  font-weight: 500;
  color: #777;
}
.pdct-cat-widget ul li:first-child {
  border-top: solid 1px #EEE;
}
.pdct-cat-widget ul li:hover,
.pdct-cat-widget ul li.active {
  background-color: #FAFAFA;  
  border-left: 3px solid #ECC641;
}
/* Price Slider*/
.price-slider-amount > input {
  border: 0 none;
  font-size: 12px;
  font-weight: 700;
  color: #292929;
  line-height: 4;
  display: inline-block;
  text-transform: uppercase;
  outline: none;
  display:inline-block;
}
.slider-range {
  margin-bottom: 34px;
}
.ui-slider.ui-slider-horizontal.ui-widget.ui-widget-content.ui-corner-all {
  background: #EEE none repeat scroll 0 0;
  border: 0 none;
  height: 5px;
  position: relative;
}
.price-filter .ui-slider-handle.ui-state-default.ui-corner-all {
  background: #FFF none repeat scroll 0 0;
  border: solid 1px #E8E8E8;
  border-radius: 0;
  height: 15px;
  top: -5px;
  width: 15px;
  outline: none;
  position: absolute;
  z-index: 99;
}
.ui-slider-range.ui-widget-header.ui-corner-all {
  background: #ECC53F none repeat scroll 0 0;
  height: 5px;
  position: absolute;
}
/* Popular Product Widget*/
.popular-pdct-widget ul li {
  border-bottom: 1px solid #EEE;
  padding-bottom: 26px;
  margin-bottom: 20px;
}
.popular-pdct-widget ul li:last-child {
  border-bottom: none;
  padding-bottom: 0;
  margin-bottom: 0;
}
.popular-pdct-widget-heading {
  font-size: 14px;
  font-weight: 500;
}
.popular-pdct-widget-dtl .rating {
  font-size: 10px;
  margin: 5px 0 0;
}
.popular-pdct-widget-dtl .rating ul li {
  border-bottom: none;
  padding-bottom: 0;
  margin-bottom: 0;
}
.popular-pdct-widget-dtl .product-price {
  font-size: 14px;
}
@media(max-width:767px) {  
  .product-filter {
    margin-top: 60px;
  }
  .product-img img {
    width: 100%;
  }
}

/* ================================= */
    /*===== Single Product Page =====*/
/* ================================= */
.single-product-main-block {
  padding: 60px 0 40px;
}
.single-product-heading {
  font-size: 22px;
  font-weight: 700;
  color: #232323;
}
li.customer-review {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 13px;
  color: #777;
}
.single-product-price {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 18px;
  font-weight: 900;
  color: #222222;
}
.single-product-dtl p {
  line-height: 1.85;
  margin-top: 20px;
  letter-spacing: 0.4px;
  color: #777;
}
.product-stock {
  font-size: 13px;
  line-height: 1.85;
  letter-spacing: 0.4px;
  color: #8AA47B;
}
.product-quantity {  
  border: solid 1px #E8E8E8;
  width: 20%;
  padding: 14px 0 6px 26px;
  margin: 10px 0 34px;
  height: 45px;
  text-align: center;
  display: inline-block;
}
.product-quantity form {
  cursor: pointer;
  display: inline-block;
}
.product-quantity .select-filter {
  line-height: 0;
}
.select-filter.number {
  font-size: 16px;
  font-weight: 700;
  color: #222;
  margin-top: -8px;
}
.cart-plus-minus-box {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: 0 none;
  float: left;
  font-size: 20px;
  /*font-family: 'Roboto', sans-serif;*/
  outline: medium none;
  text-align: center;
  width: 20px;
  margin-top: 3px;
  margin-right: 5px;
}
.inc.qtybutton {
  float: left;
  color: #AAA;
}
.dec.qtybutton {
  float: none;
  color: #AAA;
}
.btn-default.add-cart {
  margin-top: -22px;
  padding: 12px 40px
}
.single-product-category {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 14px;
  font-weight: 300;
  letter-spacing: 0.4px;  
  line-height: 1.5;
  color: #777;
}
.single-product-category a {
  color: #222;
}
.single-product-category a:hover {
  color: #ECC53F;
}
.product-comment-block {
  padding: 60px 0 30px;
}
.product-dtl-tab .nav-tabs {
  border-bottom: 1px solid #E8E8E8;
  /*font-family: 'Roboto', sans-serif;*/
}
.product-dtl-tab .nav-tabs>li.active {
  margin-top: 1px;
}
.product-dtl-tab .nav-tabs>li.active>a, 
.product-dtl-tab .nav-tabs>li.active>a:focus, 
.product-dtl-tab .nav-tabs>li.active>a:hover {
  color: #222;
  font-size: 15px;
  font-weight: 500;
  border: 1px solid #E8E8E8;
  border-bottom: none;
}
.product-dtl-tab .nav-tabs>li {
  background-color: #FAFAFA;
  border-radius: 4px 4px 0 0;
}
.product-dtl-tab .nav-tabs>li a {
  color: #222;
  font-size: 15px;
  font-weight: 500;
}
.product-des-heading {
  line-height: 3.88;
  letter-spacing: 0.5px;
  color: #222;
}
.product-comment-block p {
  line-height: 1.85;
  letter-spacing: 0.4px;
  color: #777;
}
.related-product-heading {
  font-size: 22px;
  font-weight: 900;
  line-height: 2.82;
  color: #222;
}
@media(max-width:767px) {  
  .product-desc-img {
    overflow: hidden;
    margin-top: 30px;
  }
}
@media(min-width: 768px) and (max-width: 992px) {    
  .product-desc-img {
    overflow: hidden;
    margin-bottom: 60px;
  }
}

/* ================================= */
    /*===== Solution Details =====*/
/* ================================= */
.solutions-detail-main-block {
  padding: 60px 0 60px;
}
.sol-dtl-doc ul li {
  border: solid 1px #E8E8E8;
  padding: 15px;
  margin-bottom: 15px;
}
.sol-dtl-doc ul li a {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 14px;
  font-weight: 400;
  letter-spacing: 0.4px;
  color: #555;
}
.sol-dtl-doc ul li a:hover {  
  color: #222;
}
.sol-dtl-doc ul li:last-child {
  margin-bottom: 0;
}
.sol-dtl-block {
  margin-bottom: 40px;
}
.sol-dtl-block p {
  font-weight: 300;
  line-height: 1.85;
  letter-spacing: 0.4px;
  color: #777;
}
.sol-dtl-block ul {
  margin-top: 22px;
}
.sol-dtl-list-heading {
  font-size: 15px;
  line-height: 1.6;
  letter-spacing: 0.5px;
}
.sol-dtl-img img {
  border-radius: 4px;
}
.sol-dtl-block hr {
  margin-top: 50px;
  margin-bottom: 0;
  border-top: 1px solid #EEE;
}
.sol-faq-heading {
  font-size: 20px;
  padding-bottom: 20px;
  letter-spacing: 0.6px;
  color: #222;
}
.sol-dtl-faq p {
  font-weight: 300;
  line-height: 1.85;
  letter-spacing: 0.4px;
  color: #777;
}
.sol-dtl-faq .panel-group {
  margin-top: 40px;
}
.sol-dtl-faq .panel-default>.panel-heading {
  background-color: #FCFCFC;
  border-color: #E8E8E8;
  padding: 15px;
}
.sol-dtl-faq .faq-heading a {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 14px;
  color: #292929;
}
.sol-dtl-faq .panel-default {
  margin-bottom: 10px;
}
.sol-dtl-faq .faq-btn {
  font-size: 16px;
  color: #292929;
  background-color: transparent; 
  float: right;
  border: none;
}
.sol-dtl-faq .faq-btn:hover,
.sol-dtl-faq .faq-btn:focus,
.sol-dtl-faq .faq-btn:active {
  color: #ECC53F;
  background-color: transparent;
  border: none;
  outline: 0 auto -webkit-focus-ring-color;
  box-shadow: none;
}
.sol-dtl-faq .faq-btn-minus {
  display: inherit;color: #ECC53F;
}
.sol-dtl-faq .collapsed .faq-btn-minus {
  display: none;
}
.sol-dtl-faq .faq-btn-plus {
  display: none;
}
.sol-dtl-faq .collapsed .faq-btn-plus {
  display: inherit;
}

/* ================================= */
    /*===== Faq Page =====*/
/* ================================= */
.faq-page-main-block {
  padding: 60px 0 60px;
}
.faq-page-block .panel-default>.panel-heading {
  background-color: #FFF;
  border-color: #E8E8E8;
  padding: 22px;
}
.faq-page-block .faq-heading a {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 16px;
  color: #292929;
}
.faq-page-block .panel-default {
  margin-bottom: 10px;
}
.faq-page-block .faq-btn {
  font-size: 22px;
  text-align: center;
  color: #FFF;
  background-color: #2D2D2D; 
  border-radius: 2px;
  border: none;
  padding: 4px 10px;
  margin-top: -9px;
}
.faq-page-block .faq-btn:hover,
.faq-page-block .faq-btn:focus,
.faq-page-block .faq-btn:active {
  color: #FFF;
  background-color: #ECC53F;
  border: none;
  border-radius: 2px;
  outline: 0 auto -webkit-focus-ring-color;
  box-shadow: none;
}
.faq-page-block .faq-btn-minus {
  display: inherit;
  color: #FFF;
  background-color: #ECC53F;
}
.faq-page-block .collapsed .faq-btn-minus {
  display: none;
}
.faq-page-block .faq-btn-plus {
  display: none;
}
.faq-page-block .collapsed .faq-btn-plus {
  display: inherit;
}
.faq-page-block p {  
  font-weight: 300;
  line-height: 1.85;
  letter-spacing: 0.7px;
  color: #777;
}
@media(max-width:767px) {  
  .faq-page-block {
    margin-top: 60px;
  }
}

/* ================================= */
    /*===== We Are =====*/
/* ================================= */
.we-are-main-block {
  padding: 90px 0 80px;
}
.we-are-heading {
  font-size: 32px;
  font-weight: 900;
  line-height: 1;
  color: #252525;
  margin: 20px 0;
}
.we-are-dtl p {
  line-height: 1.85;
  letter-spacing: 0.3px;
  color: #888;
}
.we-are-feature {
  margin-top: 15px;
}
.we-are-feature-heading {
  line-height: 1.5;
  letter-spacing: 0.3px;
  color: #232323;
}
.we-are-feature-dtl {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 14px;
  line-height: 1.57;
  letter-spacing: 0.3px;
  color: #888;
}
.we-are-img img {
  border-radius: 4px;
}
@media(max-width:992px) { 
  .we-are-img-block {      
    margin-top: 30px; 
  } 
  .we-are-img img {
    width: 100%;
  }
}

/* ================================= */
    /*===== News Two =====*/
/* ================================= */
.news-grid-main-block.news-two {
  padding: 63px 0 40px;
} 
.news-two-slider .owl-prev {
  right: 50px;
}
.news-two-slider .owl-next {
  right: 0;
}
.news-two-slider .owl-prev,
.news-two-slider .owl-next { 
  color: #232323;
  font-size: 22px;
  position: absolute; 
  top: -70px;
  width: 40px;
  height: 40px;
  background-color: #FFF;
  background: url(../images/icons/testimonial-arrow.png);
  border-radius: 4px;
  text-align: center;
  line-height: 40px;
  z-index: 10;
  cursor: pointer;
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.news-two-slider .owl-prev:hover,
.news-two-slider .owl-next:hover {    
  color: #999;
}

/* ================================= */
    /*===== Footer Top =====*/
/* ================================= */
.footer-top-main-block {
  background: rgba(34,34,34,1);
  background: -moz-linear-gradient(left, rgba(34,34,34,1) 0%, rgba(37,37,37,1) 100%);
  background: -webkit-gradient(left top, right top, color-stop(0%, rgba(34,34,34,1)), color-stop(100%, rgba(37,37,37,1)));
  background: -webkit-linear-gradient(left, rgba(34,34,34,1) 0%, rgba(37,37,37,1) 100%);
  background: -o-linear-gradient(left, rgba(34,34,34,1) 0%, rgba(37,37,37,1) 100%);
  background: -ms-linear-gradient(left, rgba(34,34,34,1) 0%, rgba(37,37,37,1) 100%);
  background: linear-gradient(to right, rgba(34,34,34,1) 0%, rgba(37,37,37,1) 100%);  
}
.footer-map {
  background-color: #222;
  padding: 30px 15px;
}
.footer-map-heading {
  font-size: 22px;
  font-weight: 300;
  line-height: 2.27;
  color: #FFF;
}
.footer-map-dtl {
  font-size: 14px;
  line-height: 1.57;
  letter-spacing: 0.3px;
  color: #888888;
}
.footer-subscribe {
  background-color: #252525;
  padding: 30px 15px;
}
.subscribe-form label {
  /*font-family: 'Roboto', sans-serif;*/
  font-size: 17px;
  font-weight: 300;
  line-height: 1.29;
  color: #CCC;
  margin: 18px 0 10px;
}
.subscribe-form .form-control {
  width: 400px;
  height: 50px;
  background-color: #303030;
  border-radius: 4px 0 0 4px;
  border: none;
  box-shadow: 1px 1.7px 3px 0 rgba(0, 0, 0, 0.05);
  display: inline-block;
  float: left;
  color: #CCC;
}
.subscribe-form .form-group {
  margin-bottom: 0px;
}
.subscribe-form .btn-default { 
  border-radius: 0 4px 4px 0;
  color: #252525;
  height: 50px;
}
.subscribe-form .btn-default:hover { 
  background-color: #FFF;
  color: #252525;
}
.subscribe-form label.submit-label {
  position: absolute;
  top: 0;
  left: 15px;
}
@media(max-width:992px) { 
  .footer-map-heading {      
    line-height: 1.2; 
  } 
  .subscribe-form .form-control {
    width: 60%;
  }
}

/* ================================= */
    /*===== Call Out Two =====*/
/* ================================= */ 
.call-out-main-block.call-out-two {
  box-shadow: none;
}

/* ================================= */
    /*===== We Are Two =====*/
/* ================================= */ 
.we-are-two-main-block .we-are-img img {
  border-radius: 0;
}
.we-are-two-main-block .we-are-dtl {
  padding-top: 60px; 
}
.we-are-two-main-block .we-are-heading {
  font-size: 32px;
  font-weight: 900;
  line-height: 1;
  color: #252525;
}
.we-are-two-main-block p {
  line-height: 1.85;
  letter-spacing: 0.3px;
  color: #888;
}
.we-are-two-main-block .btn-default {
  font-size: 13px;
  font-weight: 500;
  color: #222;
  border: 2px solid #E5E5E5;
  background-color: #FFF;
  border-radius: 0;
}
@media(max-width:992px) {  
  .we-are-two-main-block .we-are-dtl {
    padding-bottom: 60px; 
  }
}

/* ================================= */
    /*===== Features =====*/
/* ================================= */
.features-main-block {
  background-color: #F6F6F6;
  padding: 70px 0 66px;
}
.features-main-block .features-icon {
  margin: 0 auto;
  left: 0;
  right: 0;
  width: 72px;
  height: 72px;  
  border-radius: 4px;
  color: #FFD202;
  font-size: 34px;
  line-height: 80px;
  background: url(../images/icons/icons-bg.jpg);
  -webkit-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.features-main-block .features-block:hover .features-icon {
  background: #FBCB0B;
  color: #FFF;  
}
.features-main-block .features-heading { 
  color: #222;
  padding: 25px 0 20px;
}
.features-main-block p {
  line-height: 1.69;
  letter-spacing: 0.3px;
  color: #888;
}
@media(max-width:992px) {  
  .features-main-block {
    padding: 70px 0 36px;
  }
  .features-main-block .features-block {
    margin-bottom: 30px;
  }
}

/* ================================= */
    /*===== Featured Product Two =====*/
/* ================================= */ 
.featured-main-block.featured-tow { 
  padding-bottom: 0; 
}
.featured-tow .featured-block {
  margin: 0 0 0;
}
.featured-tow .featured-img, 
.featured-tow .featured-img img {
  border-radius: 0;
}
.featured-main-block.featured-tow .owl-prev {
  right: 150px;
}
.featured-main-block.featured-tow .owl-next {
  right: 100px;
}

/* ================================= */
    /*===== Testimonial Two =====*/
/* ================================= */ 
.love-us-main-block.testimonial-two {
  margin: 0;
  padding: 80px 0 110px;
}
.love-us-main-block.testimonial-two .section-heading {
  color: #252525;
}
.testimonial-two .love-us-block img {
  width: 65px;
  height: 65px;
  display: inline-block;
  border-radius: 4px;
  margin-top: -20px;
}
.testimonial-two .love-us-client-dtl {
  display: inline-block;  
  margin-top: 30px;
  margin-left: 20px;
}
.testimonial-two .love-us-client {
  line-height: 0;
}
.testimonial-two .rating {
  padding-top: 10px;
}

/* ================================= */
    /*===== Clients Two =====*/
/* ================================= */
.clients-main-block.clients-two {
  background-color: #FFF;
}

/* ================================= */
    /*===== Preloader =====*/
/* ================================= */
.preloader { 
  background: #FFF;
  bottom: 0;
  top: 0;
  left: 0; 
  right: 0;  
  position: fixed;
  z-index: 9999999;
}
.status {
  background-image: url(../images/preloader.png);
  animation: bounce 2s infinite;
 -webkit-animation: bounce 2s infinite;
 -moz-animation: bounce 2s infinite;
 -o-animation: bounce 2s infinite;
}
.status,
.status-message {   
  text-align: center;
  text-transform: uppercase;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0; 
  right: 0;  
  background-position: center;
  background-repeat: no-repeat;     
}
.status-message {
  padding-top: 30%;
}
@-webkit-keyframes bounce {
  0% {
    -ms-transform: rotate(0);
    -moz-transform: rotate(0);
    -o-transform: rotate(0);
    -webkit-transform: rotate(0); 
    transform: rotate(0);
  }
  100% {
    -ms-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -webkit-transform: rotate(360deg); 
    transform: rotate(360deg);
  }
} 
@-moz-keyframes bounce {
  0% {
    -ms-transform: rotate(0);
    -moz-transform: rotate(0);
    -o-transform: rotate(0);
    -webkit-transform: rotate(0); 
    transform: rotate(0);
  }
  100% {
    -ms-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -webkit-transform: rotate(360deg); 
    transform: rotate(360deg);
  }
} 
@-o-keyframes bounce {
  0% {
    -ms-transform: rotate(0);
    -moz-transform: rotate(0);
    -o-transform: rotate(0);
    -webkit-transform: rotate(0); 
    transform: rotate(0);
  }
  100% {
    -ms-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -webkit-transform: rotate(360deg); 
    transform: rotate(360deg);
  }
}
@keyframes bounce {
  0% {
    -ms-transform: rotate(0);
    -moz-transform: rotate(0);
    -o-transform: rotate(0);
    -webkit-transform: rotate(0); 
    transform: rotate(0);
  }
  100% {
    -ms-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -webkit-transform: rotate(360deg); 
    transform: rotate(360deg);
  }
}
	.img-fluid {
	    max-width: 100%;
	}
	.navigation {
	    background-color: #012043;
	}
	.nav-right {
	    background-color: #001335;
	}
	.news-list-dtl .btn-default {
	    background-color: #0e2ce2;
	    color: #fff;
	}
	.news-list-dtl .btn-default:hover {
	    background-color: #EEE;
	    color: #000;
	}
	.btn-default2 {
		background-color: #fff;
	}
	.solution-dtl {
		margin-left: 0px;
	}
	.img-hover-zoom {
	    overflow: hidden;
	}
	.img-hover-zoom img {
		transition: transform .5s ease;
	}
	.img-hover-zoom:hover img {
		transform: scale(1.5);
	}
	.featured-main-block {
		background-color: #fff;
	}
	.featured-main-block .section {
	    background-color: #000;
     
	}
	.featured-main-block .owl-prev, .featured-main-block .owl-next {
	    border: 1px solid #FFFFFF;
	}
	body{
		font-family: 'Kanit', sans-serif;
	}
	.about-features-block {
	    padding-bottom: unset;
	}

	.ct-language__dropdown{
		padding-top: 8px;
		max-height: 0;
		overflow: hidden;
		position: absolute;
		top: 110%;
		left: -3px;
		-webkit-transition: all 0.25s ease-in-out;
		transition: all 0.25s ease-in-out;
		width: 100px;
		text-align: center;
		padding-top: 0;
		z-index:200;
	}
	.ct-language__dropdown li{
		background: #222;
		padding: 5px;
	}

	.ct-language__dropdown li a{
		display: block;
	}

	.ct-language__dropdown li:first-child{
		padding-top: 10px;
		border-radius: 3px 3px 0 0;
	}
	.ct-language__dropdown li:last-child{
	    padding-bottom: 10px;
	    border-radius: 0 0 3px 3px;
	}
	.ct-language__dropdown li:hover{
	    background: #444;
	}
	.ct-language__dropdown:before{
	    content: '';
	    position: absolute;
	    top: 0;
	    left: 0;
	    right: 0;
	    margin: auto;
	    width: 8px;
	    height: 0;
	    border: 0 solid transparent;
	    border-right-width: 8px;
	    border-left-width: 8px;
	    border-bottom: 8px solid #222;
	}
	.ct-language{
	    position: relative;
	    background: #000000;
	    color: #fff;
	    padding: 13px 0;
	}
	.ct-language:hover .ct-language__dropdown{
	    max-height: 200px;
	    padding-top: 8px;
	}
	.list-unstyled {
	    padding-left: 0;
	    list-style: none;
	}

	.navbar-brand>img {
		padding-top: 11px;
		width: 130px;
		margin-left: 15px;
	}

	.navbar-brand {
	    height: auto;
	    margin: 0;
	    padding: 0;
	    margin-right: 20px;
	}

	.navbar {
		background-color: #000000;
	}

	.navbar-default .navbar-nav > .active > a {
	  	padding: 8px 19px 9px !important;
	}

	.navbar-nav > li.active {
	  	padding: 8px 0px 9px 0;
	}

	.navbar-right {
	  	padding-top: 0;
	}

	.navbar-default .navbar-nav > li > a::after {
	  	background-color: transparent;
	  	border-bottom: 3px solid #d2282e;
	}

	.navbar-default .navbar-nav>li {
	  	display: inline-block;
	  	text-align: center;
	  	float: none;
	}

	.navbar-default .navbar-nav>li>a {
	    color: #fff;
	}

	.navbar-default .navbar-nav>li>a:hover {
	    color: #fff;
	    background-color: #0392CC;
	}

	.testimonial-detail p {
	    padding: 40px 40px 40px 40px;
	}

	.btn-default {
	    background-color: #0013E1;
	}
	.team-social ul li:hover {
	    background-color: #0b2be1;
	}
	.team-social ul li a {
	    color: #fff;
	}
	.team-social {
	    background-color: rgba(11, 43, 225, 0.7);
	}
	.call-out-main-block {
	    background-color: #002042;
	}

	.footer-contact p {
	    padding: 0px 0 0px;

	}
	.footer-address li span {
	    color: #fff;
	}
	.footer-address li a{
		color: #fff;
	}
	.footer-contact p {
	    color: #fff;
	}
	.footer-news li a{
		color: #fff;
	}
	.footer-solutions li a{
		color: #fff;
	}
	.footer-about p{
		color: #fff;
	}

	.breadcrumb {
	    padding: 17px 0px;
	}
	.featured-dtl .btn-default {
	    color: #fff;
	}
	.address-block {
	    background-color: #1b74bc;
	    margin-top: 0px;
	}
  .social{
    float: right;
    padding-top: 3px;
  }
  .social ul li{
    width: 40px;
    float: left;
    padding: 5px;
  }
  .fab, .far {
   
    font-size: 30px;
    color: white;
  }
  .container12{
    width: 100%;
  }
  #section12 .container-fluid{
    padding-left: 0;
    padding-right: 0;
  }
</style>