<?php 
    $json = json_decode($companyData->header_footer_json);    
?>
<style type="text/css">

body {
    font-weight: 400;
    font-style: normal;
    font-size: 14px;
    color: #000;
}
.img {
    max-width: 100%;
    transition: all 0.3s ease-out 0s;
}
a,
.btn {
    -webkit-transition: all 0.3s ease-out 0s;
    -moz-transition: all 0.3s ease-out 0s;
    -ms-transition: all 0.3s ease-out 0s;
    -o-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;
}

.btn {
    border-radius: 0px;
    font-size: 14px;
    padding: 0px 15px;
    height: 30px;
    line-height: 30px;
    
}

a:focus,
.btn:focus {
    text-decoration: none;
    outline: none;
}
a:hover {
    color: red;
    text-decoration: none;
}
a:focus {
    text-decoration: none;
}
button:focus {
    outline: 0px dotted;
}
a,
button,
input {
    outline: medium none;
    color: #000;
}
.uppercase {
    text-transform: uppercase
}
.capitalize {
    text-transform: capitalize
}
h1,
h2,
h3,
h4,
h5,
h6 {
    font-weight: normal;
    color: #000;
    margin-top: 0px;
    font-style: normal;
    font-weight: 400;
}
h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a {
    color: #000;
}
h1 {
    font-size: 46px;
    font-weight: 500;
}
h2 {
    font-size: 37px;
}
h3 {
    font-size: 28px;
}
h4 {
    font-size: 22px;
}
h5 {
    font-size: 18px;
}
h6 {
    font-size: 16px;
}
ul {
    margin: 0px;
    padding: 0px;
}
p {
    font-size: 14px;
    font-weight: 400;
    line-height: 24px;
    color: #000;
    margin-bottom: 15px;
}
hr {
    margin: 60px 0;
    padding: 0px;
    border-bottom: 1px solid #eceff8;
    border-top: 0px;
}
hr.style-2 {
    border-bottom: 1px dashed #f10;
}
hr.mp-0 {
    margin: 0;
    border-bottom: 1px solid #eceff8;
}
hr.mtb-40 {
    margin: 40px 0;
    border-bottom: 1px solid #eceff8;
    border-top: 0px;
}
label {
    font-size: 15px;
    font-weight: 400;
    color: #000;
}
*::-moz-selection {
    background: #4fc1f0;
    color: #fff;
    text-shadow: none;
}
::-moz-selection {
    background: #4fc1f0;
    color: #fff;
    text-shadow: none;
}
::selection {
    background: #4fc1f0;
    color: #fff;
    text-shadow: none;
}
.mark,
mark {
    background: #4fc1f0 none repeat scroll 0 0;
    color: #ffffff;
}
span.tooltip-content {
    color: #00a9da;
    cursor: help;
    font-weight: 600;
}
.f-left {
    float: left
}
.f-right {
    float: right
}
.fix {
    overflow: hidden
}


/***************************
    transtion
****************************/

a.button::after,
a.button-small::after {
    -webkit-transition: all 0.3s ease-out 0s;
    -moz-transition: all 0.3s ease-out 0s;
    -ms-transition: all 0.3s ease-out 0s;
    -o-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;
}
.share ul,
.share:hover ul {
    transition: all 0.4s ease-in-out;
    -webkit-transition: all 0.4s ease-in-out;
    -ms-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
}
a.button-border span,
a.button-border-white span,
input,
select,
textarea {
    -webkit-transition: all 0.5s ease-out 0s;
    -moz-transition: all 0.5s ease-out 0s;
    -ms-transition: all 0.5s ease-out 0s;
    -o-transition: all 0.5s ease-out 0s;
    transition: all 0.5s ease-out 0s;
}


/*************************
    Input
*************************/

input {
    background: #eceff8;
    border: 2px solid #eceff8;
    height: 45px;
    box-shadow: none;
    padding-left: 10px;
    font-size: 14px;
    color: #626262;
    width: 100%;
}
select {
    width: 100%;
    background: transparent;
    border: 0px solid #eceff8;
    box-shadow: none;
    font-size: 14px;
    color: #626262;
}
option {
    background: #fff;
    border: 0px solid #626262;
    padding-left: 10px;
    font-size: 14px;
}

input:focus {
    background: transparent;
    border: 2px solid #4FC1F0;
}
textarea {
    resize: vertical;
    background: #eceff8;
    border: 2px solid #eceff8;
    padding: 10px;
    width: 100%;
    font-size: 14px;
}
textarea:focus {
    background: transparent;
    border: 2px solid #4FC1F0;
    outline: none;
}
.input-group.divcenter.input-group .form-control {
    padding-left: 0px
}


/*************************
  Basic margin padding
*************************/

.m-0 {
    margin-top: 0;
    margin-right: 0;
    margin-bottom: 0;
    margin-left: 0;
}
.p-0 {
    padding-top: 0;
    padding-right: 0;
    padding-bottom: 0;
    padding-left: 0;
}


/*************************
    Margin top
*************************/

.mt-0 {
    margin-top: 0
}
.mt-10 {
    margin-top: 10px
}
.mt-12 {
    margin-top: 12px
}
.mt-15 {
    margin-top: 15px
}
.mt-20 {
    margin-top: 20px
}
.mt-25 {
    margin-top: 25px
}
.mt-30 {
    margin-top: 30px
}
.mt-35 {
    margin-top: 35px
}
.mt-37 {
    margin-top: 37px
}
.mt-40 {
    margin-top: 40px
}
.mt-45 {
    margin-top: 45px
}
.mt-50 {
    margin-top: 50px
}
.mt-55 {
    margin-top: 55px
}
.mt-60 {
    margin-top: 60px
}
.mt-65 {
    margin-top: 65px
}
.mt-70 {
    margin-top: 70px
}
.mt-75 {
    margin-top: 75px
}
.mt-80 {
    margin-top: 80px
}
.mt-84 {
    margin-top: 84px
}
.mt-90 {
    margin-top: 90px
}
.mt-95 {
    margin-top: 95px
}
.mt-100 {
    margin-top: 100px
}
.mt-110 {
    margin-top: 110px
}
.mt-120 {
    margin-top: 120px
}
.mt-130 {
    margin-top: 130px
}
.mt-140 {
    margin-top: 140px
}
.mt-160 {
    margin-top: 160px
}
.mt-179 {
    margin-top: 179px
}
.mt-150 {
    margin-top: 150px
}
.mt-200 {
    margin-top: 200px
}
.mt-290 {
    margin-top: 290px
}
.mt-285 {
    margin-top: 285px
}
.mt-280 {
    margin-top: 280px
}


/*************************
    Margin right
*************************/

.mr-0 {
    margin-right: 0px
}
.mr-10 {
    margin-right: 10px
}
.mr-12 {
    margin-right: 12px
}
.mr-15 {
    margin-right: 15px
}
.mr-20 {
    margin-right: 20px
}
.mr-30 {
    margin-right: 30px
}
.mr-35 {
    margin-right: 35px
}
.mr-40 {
    margin-right: 40px
}
.mr-50 {
    margin-right: 50px
}
.mr-60 {
    margin-right: 60px
}
.mr-70 {
    margin-right: 70px
}
.mr-80 {
    margin-right: 80px
}
.mr-90 {
    margin-right: 90px
}
.mr-100 {
    margin-right: 100px
}
.mr-110 {
    margin-right: 110px
}
.mr-120 {
    margin-right: 120px
}
.mr-130 {
    margin-right: 130px
}
.mr-140 {
    margin-right: 140px
}
.mr-150 {
    margin-right: 150px
}
.mr-170 {
    margin-right: 170px
}


/*************************
    Margin bottom
*************************/

.mb-0 {
    margin-bottom: 0
}
.mb-2 {
    margin-bottom: 2px
}
.mb-5 {
    margin-bottom: 5px!important;
}
.mb-10 {
    margin-bottom: 10px
}
.mb-12 {
    margin-bottom: 12px
}
.mb-15 {
    margin-bottom: 15px
}
.mb-20 {
    margin-bottom: 20px
}
.mb-25 {
    margin-bottom: 25px
}
.mb-30 {
    margin-bottom: 30px
}
.mb-35 {
    margin-bottom: 35px
}
.mb-40 {
    margin-bottom: 40px
}
.mb-45 {
    margin-bottom: 45px
}
.mb-50 {
    margin-bottom: 50px
}
.mb-55 {
    margin-bottom: 55px
}
.mb-60 {
    margin-bottom: 60px
}
.mb-65 {
    margin-bottom: 65px
}
.mb-70 {
    margin-bottom: 70px
}
.mb-75 {
    margin-bottom: 75px
}
.mb-80 {
    margin-bottom: 80px
}
.mb-90 {
    margin-bottom: 90px
}
.mb-100 {
    margin-bottom: 100px
}
.mb-110 {
    margin-bottom: 110px
}
.mb-120 {
    margin-bottom: 120px
}
.mb-130 {
    margin-bottom: 130px
}
.mb-140 {
    margin-bottom: 140px
}
.mb-150 {
    margin-bottom: 150px
}

/*************************
    Margin left
*************************/

.ml-0 {
    margin-left: 0
}
.ml-10 {
    margin-left: 10px
}
.ml-12 {
    margin-left: 12px
}
.ml-15 {
    margin-left: 15px
}
.ml-20 {
    margin-left: 20px
}
.ml-30 {
    margin-left: 30px
}
.ml-40 {
    margin-left: 40px
}
.ml-50 {
    margin-left: 50px
}
.ml-60 {
    margin-left: 60px
}
.ml-70 {
    margin-left: 70px
}
.ml-80 {
    margin-left: 80px
}
.ml-90 {
    margin-left: 90px
}
.ml-100 {
    margin-left: 100px
}
.ml-110 {
    margin-left: 110px
}
.ml-120 {
    margin-left: 120px
}
.ml-125 {
    margin-left: 125px
}
.ml-130 {
    margin-left: 130px
}
.ml-140 {
    margin-left: 140px
}
.ml-150 {
    margin-left: 150px
}
.ml-285 {
    margin-left: 285px
}


/*************************
    Padding top
*************************/

.pt-0 {
    padding-top: 0
}
.pt-4 {
    padding-top: 4px
}
.pt-10 {
    padding-top: 10px
}
.pt-12 {
    padding-top: 12px
}
.pt-15 {
    padding-top: 15px
}
.pt-20 {
    padding-top: 20px
}
.pt-25 {
    padding-top: 25px
}
.pt-30 {
    padding-top: 30px
}
.pt-35 {
    padding-top: 35px
}
.pt-37 {
    padding-top: 37px
}
.pt-40 {
    padding-top: 40px
}
.pt-45 {
    padding-top: 45px
}
.pt-50 {
    padding-top: 50px
}
.pt-55 {
    padding-top: 55px
}
.pt-60 {
    padding-top: 60px
}
.pt-65 {
    padding-top: 65px
}
.pt-70 {
    padding-top: 70px
}
.pt-75 {
    padding-top: 75px
}
.pt-80 {
    padding-top: 80px
}
.pt-85 {
    padding-top: 85px
}
.pt-95 {
    padding-top: 95px
}
.pt-90 {
    padding-top: 90px
}
.pt-97 {
    padding-top: 97px
}
.pt-100 {
    padding-top: 100px
}
.pt-95 {
    padding-top: 95px
}
.pt-105 {
    padding-top: 105px
}
.pt-110 {
    padding-top: 110px
}
.pt-115 {
    padding-top: 115px
}
.pt-120 {
    padding-top: 120px
}
.pt-125 {
    padding-top: 125px
}
.pt-130 {
    padding-top: 130px
}
.pt-135 {
    padding-top: 135px
}
.pt-140 {
    padding-top: 140px
}
.pt-145 {
    padding-top: 145px
}
.pt-150 {
    padding-top: 150px
}
.pt-155 {
    padding-top: 155px
}
.pt-160 {
    padding-top: 160px
}
.pt-169 {
    padding-top: 169px
}
.pt-165 {
    padding-top: 165px
}
.pt-172 {
    padding-top: 172px
}
.pt-175 {
    padding-top: 175px
}
.pt-180 {
    padding-top: 180px
}
.pt-190 {
    padding-top: 190px
}
.pt-205 {
    padding-top: 205px
}
.pt-200 {
    padding-top: 200px
}
.pt-210 {
    padding-top: 210px
}
.pt-220 {
    padding-top: 220px
}
.pt-250 {
    padding-top: 250px
}
.pt-290 {
    padding-top: 290px
}
.pt-285 {
    padding-top: 285px
}
.pt-280 {
    padding-top: 280px
}
.pt-330 {
    padding-top: 330px
}
.pt-345 {
    padding-top: 345px
}
.pt-350 {
    padding-top: 350px
}
.pt-335 {
    padding-top: 335px
}
.pt-365 {
    padding-top: 365px
}
.pt-355 {
    padding-top: 355px
}
.pt-370 {
    padding-top: 370px
}
.pt-380 {
    padding-top: 380px
}


/*************************
    Padding right
*************************/

.pr-0 {
    padding-right: 0
}
.pr-10 {
    padding-right: 10px
}
.pr-15 {
    padding-right: 15px
}
.pr-20 {
    padding-right: 20px
}
.pr-25 {
    padding-right: 25px
}
.pr-30 {
    padding-right: 30px
}
.pr-40 {
    padding-right: 40px
}
.pr-50 {
    padding-right: 50px
}
.pr-55 {
    padding-right: 55px
}
.pr-60 {
    padding-right: 60px
}
.pr-70 {
    padding-right: 70px
}
.pr-80 {
    padding-right: 80px
}
.pr-90 {
    padding-right: 90px
}
.pr-100 {
    padding-right: 100px
}
.pr-110 {
    padding-right: 110px
}
.pr-120 {
    padding-right: 120px
}
.pr-130 {
    padding-right: 130px
}
.pr-140 {
    padding-right: 140px
}
.pr-155 {
    padding-right: 155px
}
.pr-155 {
    padding-right: 155px
}
.pr-180 {
    padding-right: 180px
}
.pr-195 {
    padding-right: 195px
}
.pr-215 {
    padding-right: 215px
}

/*************************
    Padding bottom
*************************/

.pb-0 {
    padding-bottom: 0
}
.pb-5 {
    padding-bottom: 5px
}
.pb-6 {
    padding-bottom: 6px
}
.pb-10 {
    padding-bottom: 10px
}
.pb-12 {
    padding-bottom: 12px
}
.pb-13 {
    padding-bottom: 13px
}
.pb-15 {
    padding-bottom: 15px
}
.pb-20 {
    padding-bottom: 20px
}
.pb-25 {
    padding-bottom: 25px
}
.pb-30 {
    padding-bottom: 30px
}
.pb-38 {
    padding-bottom: 38px
}
.pb-35 {
    padding-bottom: 35px
}
.pb-40 {
    padding-bottom: 40px
}
.pb-45 {
    padding-bottom: 45px
}
.pb-50 {
    padding-bottom: 50px
}
.pb-55 {
    padding-bottom: 55px
}
.pb-60 {
    padding-bottom: 60px
}
.pb-65 {
    padding-bottom: 65px
}
.pb-70 {
    padding-bottom: 70px
}
.pb-72 {
    padding-bottom: 72px
}
.pb-75 {
    padding-bottom: 75px
}
.pb-80 {
    padding-bottom: 80px
}
.pb-85 {
    padding-bottom: 85px
}
.pb-90 {
    padding-bottom: 90px
}
.pb-95 {
    padding-bottom: 95px
}
.pb-97 {
    padding-bottom: 97px
}
.pb-100 {
    padding-bottom: 100px
}
.pb-105 {
    padding-bottom: 105px
}
.pb-107 {
    padding-bottom: 107px
}
.pb-110 {
    padding-bottom: 110px
}
.pb-115 {
    padding-bottom: 115px
}
.pb-120 {
    padding-bottom: 120px
}
.pb-125 {
    padding-bottom: 125px
}
.pb-130 {
    padding-bottom: 130px
}
.pb-135 {
    padding-bottom: 135px
}
.pb-140 {
    padding-bottom: 140px
}
.pb-145 {
    padding-bottom: 145px
}
.pb-150 {
    padding-bottom: 150px
}
.pb-155 {
    padding-bottom: 155px
}
.pb-160 {
    padding-bottom: 160px
}
.pb-169 {
    padding-bottom: 169px
}
.pb-178 {
    padding-bottom: 178px
}
.pb-170 {
    padding-bottom: 170px
}
.pb-172 {
    padding-bottom: 172px
}
.pb-180 {
    padding-bottom: 180px
}
.pb-190 {
    padding-bottom: 190px
}
.pb-200 {
    padding-bottom: 200px
}
.pb-210 {
    padding-bottom: 210px
}
.pb-230 {
    padding-bottom: 230px
}
.pb-212 {
    padding-bottom: 212px
}
.pb-250 {
    padding-bottom: 250px
}
.pb-280 {
    padding-bottom: 280px
}
.pb-210 {
    padding-bottom: 210px
}
.pb-285 {
    padding-bottom: 285px
}
.pb-290 {
    padding-bottom: 290px
}
.pb-280 {
    padding-bottom: 280px
}
.pb-285 {
    padding-bottom: 285px
}
.pb-200 {
    padding-bottom: 200px
}
.pb-215 {
    padding-bottom: 215px
}
.pb-295 {
    padding-bottom: 295px
}
.pb-440 {
    padding-bottom: 440px
}
.pb-450 {
    padding-bottom: 450px
}

/*************************
    Padding left
*************************/

.pl-0 {
    padding-left: 0
}
.pl-10 {
    padding-left: 10px
}
.pl-15 {
    padding-left: 15px
}
.pl-20 {
    padding-left: 20px
}
.pl-25 {
    padding-left: 25px
}
.pl-30 {
    padding-left: 30px
}
.pl-40 {
    padding-left: 40px
}
.pl-45 {
    padding-left: 45px
}
.pl-50 {
    padding-left: 50px
}
.pl-55 {
    padding-left: 55px
}
.pl-60 {
    padding-left: 60px
}
.pl-65 {
    padding-left: 65px
}
.pl-70 {
    padding-left: 70px
}
.pl-80 {
    padding-left: 80px
}
.pl-90 {
    padding-left: 90px
}
.pl-100 {
    padding-left: 100px
}
.pl-110 {
    padding-left: 110px
}
.pl-120 {
    padding-left: 120px
}
.pl-125 {
    padding-left: 125px
}
.pl-130 {
    padding-left: 130px
}
.pl-140 {
    padding-left: 140px
}
.pl-140 {
    padding-left: 140px
}
.pl-170 {
    padding-left: 170px
}
.pl-155 {
    padding-left: 155px
}
.pl-190 {
    padding-left: 190px
}
.pl-195 {
    padding-left: 195px
}
.pl-200 {
    padding-left: 200px
}


/***************************
    Page section padding 
****************************/

.ptb-0 {
    padding: 0
}
.ptb-10 {
    padding: 10px 0
}
.ptb-15 {
    padding: 15px 0
}
.ptb-20 {
    padding: 20px 0
}
.ptb-30 {
    padding: 30px 0
}
.ptb-32 {
    padding: 32px 0
}
.ptb-37 {
    padding: 37px 0
}
.ptb-40 {
    padding: 40px 0
}
.ptb-50 {
    padding: 50px 0
}
.ptb-60 {
    padding: 60px 0
}
.ptb-70 {
    padding: 70px 0
}
.ptb-75 {
    padding: 75px 0
}
.ptb-80 {
    padding: 80px 0
}
.ptb-90 {
    padding: 90px 0
}
.ptb-100 {
    padding: 100px 0
}
.ptb-110 {
    padding: 110px 0
}
.ptb-120 {
    padding: 120px 0
}
.ptb-130 {
    padding: 130px 0
}
.ptb-135 {
    padding: 135px 0
}
.ptb-140 {
    padding: 140px 0
}
.ptb-150 {
    padding: 150px 0
}
.ptb-160 {
    padding: 160px 0
}
.ptb-170 {
    padding: 170px 0
}
.ptb-177 {
    padding: 177px 0
}
.ptb-180 {
    padding: 180px 0
}
.ptb-190 {
    padding: 190px 0
}
.ptb-200 {
    padding: 200px 0
}
.ptb-210 {
    padding: 210px 0
}
.ptb-220 {
    padding: 220px 0
}
.ptb-250 {
    padding: 250px 0
}
.ptb-290 {
    padding: 290px 0
}
.ptb-310 {
    padding: 310px 0
}


/***************************
    Page section margin 
****************************/

.mtb-0 {
    margin: 0
}
.mtb-10 {
    margin: 10px 0
}
.mtb-15 {
    margin: 15px 0
}
.mtb-20 {
    margin: 20px 0
}
.mtb-30 {
    margin: 30px 0
}
.mtb-40 {
    margin: 40px 0
}
.mtb-50 {
    margin: 50px 0
}
.mtb-60 {
    margin: 60px 0
}
.mtb-70 {
    margin: 70px 0
}
.mtb-80 {
    margin: 80px 0
}
.mtb-90 {
    margin: 90px 0
}
.mtb-100 {
    margin: 100px 0
}
.mtb-110 {
    margin: 110px 0
}
.mtb-120 {
    margin: 120px 0
}
.mtb-130 {
    margin: 130px 0
}
.mtb-140 {
    margin: 140px 0
}
.mtb-150 {
    margin: 150px 0;
}
.mtb-290 {
    margin: 290px 0;
}


/*************************************
    Background variation set 
 **************************************/

/*colored background*/
.white-bg {
    background: #174ea9;
}
.black-bg {
    background: #282829
}
.black-bg-2 {
    background: #242426
}
.black-bg-3 {
    background: #000
}
.black-bg-4 {
    background: #212121
}
.black-bg-5 {
    background: #0c0c0c
}
.black-bg-6 {
    background: #152129
}
.black-bg-7 {
    background: #1d2b35
}
.black-bg-8 {
    background: #152129
}
.black-bg-9 {
    background: #222222
}
.black-bg-10 {
    background: #111111
}
.theme-bg {
    background: #174ea9;
}
.theme-bg-2 {
    background: #0aa493;
}
.theme-bg-3 {
    background: #df2121;
}
.theme-bg-4 {
    background: #174ea9;
}
.theme-bg-5 {
    background: #873964;
}
.theme-bg-6 {
    background: #624455;
}
.gray-bg {
    background: #f8f9f9;
}
.gray-bg-2 {
    background: #f5f6fa;
}
.gray-bg-3 {
    background: #f6f7f7;
}
.gray-bg-4 {
    background: #f4f4f4;
}
.gray-bg-5 {
    background: #f1f1f1;
}
.gray-bg-6 {
    background: #f3f3f3;
}
.gray-bg-7 {
    background: #eeeeee;
}
.gray-bg-8 {
    background: #f0f0f0;
}
.blue-bg {
    background: #4FC1F0;
}
.default-bg {
    background: #50C1F0;
}
.pink-bg {
    background: #ffe8e8;
}
.pink-bg-2 {
    background: #ee3875;
}
.yellow-bg {
    background: #ffd200;
}
.yellow-bg-2 {
    background: #fcb800;
}
.persian-green {
    background: #008886;
}
.transparent-bg {
    background: transparent;
}

/*Opacity background*/
/* black overlay */
[data-overlay] {
    position: relative;
}
[data-overlay]::before {
    background: #252525 none repeat scroll 0 0;
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1;
}
[data-overlay="3"]::before {
    opacity: 0.3;
}
[data-overlay="4"]::before {
    opacity: 0.4;
}
[data-overlay="5"]::before {
    opacity: 0.5;
}
[data-overlay="56"]::before {
    opacity: 0.56;
}
[data-overlay="6"]::before {
    opacity: 0.6;
}
[data-overlay="7"]::before {
    opacity: 0.7;
}
[data-overlay="8"]::before {
    opacity: 0.8;
}
/*image background*/
.bg-1,
.bg-2,
.bg-3,
.bg-4,
.bg-5,
.bg-6,
.bg-7,
.bg-8,
.bg-9,
.bg-10 {
    background-attachment: fixed;
    background-clip: initial;
    background-color: rgba(0, 0, 0, 0);
    background-origin: initial;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    z-index: 0;
}
.bg-1 {
    background: url(../../images/bg/1.jpg);
}
.bg-img {
    background-position: center center;
    background-size: cover;
}
:focus {
    outline: -webkit-focus-ring-color auto 0px;
}
:focus {
    outline: -mos-focus-ring-color auto 0px;
}
:focus {
    outline: none;
}
.header-search form button {
    outline: medium none;
}
.relative {
    position: relative;
}
.overflow {
    overflow: hidden;
}
.border-bottom-1 {
    border-bottom: 1px solid #1d73d2;
}
.border-bottom-2 {
    border-bottom: 1px solid #ebebeb;
}
.border-bottom-3 {
    border-bottom: 1px solid #2d2d2d;
}
.border-bottom-4 {
    border-bottom: 1px solid #3d3d3f;
}
.border-bottom-5 {
    border-bottom: 1px solid #323232;
}
.border-bottom-6 {
    border-bottom: 1px solid #e54d4d;
}
.border-bottom-7 {
    border-bottom: 1px solid #725766;
}
.border-bottom-8 {
    border-bottom: 1px solid #2d383f;
}
.border-top-1 {
    border-top: 1px solid #d7d7d7;
}
.border-top-2 {
    border-top: 1px solid #ebebeb;
}
.border-top-3 {
    border-top: 1px solid #323232;
}
.border-top-4 {
    border-top: 1px solid #2d2d2d;
}
.border-top-5 {
    border-top: 1px solid #27292a;
}
.border-top-6 {
    border-top: 1px solid #323232;
}
.border-top-7 {
    border-top: 1px solid #e1e1e1;
}
.border-top-8 {
    border-top: 1px solid #141414;
}
.border-top-9 {
    border-top: 1px solid #2d383f;
}
.overly-style {
    position: relative;
}
.overly-style:before {
    position: relative;
}
#mobile-menu-active {
    display: none;
}
/* scrollUp */
#scrollUp {
    background: #195dc1 none repeat scroll 0 0;
    bottom: 85px;
    color: #ffffff;
    cursor: pointer;
    display: none;
    font-size: 20px;
    height: 40px;
    line-height: 40px;
    position: fixed;
    left: 12px;
    text-align: center;
    width: 38px;
    z-index: 9999;
}
#scrollUp:hover {
    background: #770f00 none repeat scroll 0 0;
}
/* button */
.btn-style {
    background-color: transparent;
    border: 2px solid #eeeeee;
    color: #000;
    display: block;
    font-size: 14px;
    font-weight: 500;
    padding: 14px 20px 12px;
    text-align: center;
    text-transform: uppercase;
    transition: all 0.3s ease 0s;
}
.btn-style:hover {
    background-color: #195dc1;
    border: 2px solid #195dc1;
    color: #fff;
}
.btn-style-2 {
    background-color: #174ea9;
    border-radius: 3px;
    color: #fff;
    display: inline-block;
    font-size: 13px;
    font-weight: 500;
    line-height: 1;
    padding: 17px 37px 18px;
    text-transform: uppercase;
}
.btn-style-2:hover {
    background-color: #000;
    color: #fff;
}
.height-100vh {
    height: 100vh;
}
#mobile-menu-active {
    display: none;
}

/*------------------------
    2. Index page style
--------------------------*/

.notification-padding-1 {
    padding: 8px 0 12px;
}
.notification-img-1 {
    background-image: url("../../assets/img/bg/bg-1.jpg");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}
.notification-wrapper {
    display: flex;
    justify-content: space-between;
}
.notification-content p {
    color: #ffffff;
    font-size: 14px;
    margin: 0;
}
.notification-content p a {
    color: #ffdc38;
}
.notification-content p a {
    border-bottom: 1px solid #ffdc38;
    color: #ffdc38;
}
.notification-content p a:hover {
    border-bottom: 1px solid #174ea9;
    color: #174ea9;
}
.notification-icon button {
    background: transparent none repeat scroll 0 0;
    border: medium none;
    color: #fff;
    cursor: pointer;
    font-size: 14px;
    line-height: 1;
    padding: 6px 0 0 5px;
    transition: all .3s ease 0s;
}
.notification-icon button:hover {
    color: #174ea9;
}
/* header top */
.header-top-left {
    display: flex;
}
.language-currency {
    margin-right: 42px;
    position: relative;
}
.language-currency:last-child {
    margin-right: 0px;
}
.language-currency::before {
    background-color: #fff;
    content: "";
    height: 16px;
    position: absolute;
    right: -21px;
    top: 3px;
    width: 1px;
}
.language-currency:last-child::before {
    display: none;
}
.language-currency.lang-curr-mrg {
    line-height: 1;
    margin-top: 4px;
}
.language-currency span {
    color: #fff;
    display: inline-block;
    float: left;
    font-size: 12px;
    margin-right: 9px;
}
.lang-curr-dropdown {
    display: inline-block;
    float: left;
}
.lang-curr-dropdown ul li {
    list-style: outside none none;
    position: relative;
}
.lang-curr-dropdown ul li a {
    color: #000;
    font-size: 12px;
}
.lang-curr-dropdown .language-click{
    color: white;
}
.lang-curr-dropdown ul li a:hover,
.header-top-right ul li a:hover {
    color: #888888;
}
.lang-curr-dropdown ul li a i {
    font-size: 10px;
    margin-left: 5px;
}
/*.lang-curr-dropdown ul li ul {
    background: #000 none repeat scroll 0 0;
    border: medium none;
    border-radius: 2px;
    box-shadow: 0 0 7px 0.5px rgba(0, 0, 0, 0.15);
    display: none;
    left: 0;
    padding: 15px 14px;
    position: absolute;
    width: 100px;
    z-index: 99;
    top: 150%;
}*/
.lang-curr-dropdown ul li ul li {
    padding-bottom: 6px;
}
.lang-curr-mrg .lang-curr-dropdown ul li ul li {
    padding-bottom: 7px;
}
.lang-curr-dropdown ul li ul li:last-child,
.lang-curr-mrg .lang-curr-dropdown ul li ul li:last-child {
    padding-bottom: 0px;
}
/*.lang-curr-dropdown ul li ul li > a {
    color: #000;
    text-transform: capitalize;
    display: block;
}*/
/*.lang-curr-dropdown ul li ul li > a:hover {
    color: #174ea9;
    padding-left: 5px;
}*/
/* header middle */
.logo.logo-mrg {
    margin-top: 4px;
}
.header-contact {
    margin-top: 30px;
}
.header-search {
    margin-top: 20px;
}
.header-contact-icon {
    display: inline-block;
    float: left;
    margin-right: 14px;
}
.header-contact-icon i {
    color: #4475BA;
    font-size: 35px;
}
.header-contact-content {
    display: inline-block;
    float: left;
    overflow: hidden;
}
.header-contact-content > p {
    color: #ffffff;
    line-height: 18px;
    margin: 0;
}
.middle-same {
    display: inline-block;
    float: left;
    margin-left: 45px;
}
.middle-same:first-child,
.header-top-right ul li:first-child {
    margin-left: 0px;
}
.header-cart {
    position: relative;
}
button.icon-cart {
    background-color: #FFFFFF;
    border: 0px solid #b2b2b2;
    cursor: pointer;
    /*padding: 9px 12px 6px;*/
    position: relative;
}
.fa-file-alt:before{
    color: #4D4D4D;
}
.same-action .fa-file-alt:before{
    color: #fff;
}
button.icon-cart i.cart-bag {
    color: #fff;
    font-size: 27px;
}
button.icon-cart i.cart-down {
    color: #76b4fa;
    font-size: 12px;
    margin-left: 5px;
    position: relative;
    top: -6px;
}
button.icon-cart i.cart-bag {
    /*border-right: 1px solid #1d73d2;*/
    color: #195dc1;
    font-size: 27px;
    /*margin-right: 7px;
    padding-right: 10px;*/
    transition: all .3s ease 0s;
}
button.icon-cart span.count-amount {
    color: #313233;
    font-size: 14px;
    font-weight: 500;
    position: relative;
    top: -6px;
    transition: all .3s ease 0s;
}
button.icon-cart span.count-style {
    background-color: red;
    border-radius: 100%;
    display: inline-block;
    font-size: 12px;
    font-weight: 400;
    height: 26px;
    left: -13px;
    line-height: 26px;
    position: absolute;
    top: -13px;
    width: 26px;
    color: #fff;
}
.header-cart:hover button.icon-cart i.cart-bag,
.header-cart:hover > button.icon-cart span.count-amount {
    color: #313233;
}

.shopping-cart-content {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #ebebeb;
    border-radius: 5px;
    display: none;
    padding: 31px 35px 10px;
    position: absolute;
    right: 0;
    top: 100%;
    width: 340px;
    z-index: 9999;
}
.shopping-cart-content::after {
    border-bottom: 8px solid #fff;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    content: "";
    height: 0;
    position: absolute;
    right: 35px;
    top: -8px;
    width: 0;
}
.shopping-cart-content ul li {
    border-bottom: 1px solid #ebebeb;
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 20px;
    padding-bottom: 15px;
}
.shopping-cart-img {
    flex: 0 0 82px;
    margin-right: 15px;
}
.shopping-cart-title > h4 {
    color: #000;
    font-size: 14px;
    line-height: 18px;
    margin: 0;
}
.shopping-cart-title > h4 a {
    color: #000;
    display: block;
}
.shopping-cart-title > h4 a:hover {
    color: #174ea9;
}
.shopping-cart-title > h6 {
    color: #555;
    font-size: 13px;
    margin: 5px 0 10px;
}
.shopping-cart-title > span {
    color: #555;
    font-size: 14px;
}
.shopping-cart-delete {
    display: flex;
    flex-grow: 100;
    justify-content: flex-end;
}
.shopping-cart-delete > a {
    border: 2px solid #999;
    border-radius: 50px;
    color: #666;
    display: inline-block;
    font-size: 12px;
    height: 20px;
    line-height: 15px;
    margin-top: 2px;
    text-align: center;
    width: 20px;
}
.shopping-cart-delete > a:hover {
    border: 2px solid #195dc1;
    color: #195dc1;
}
.shopping-cart-total {
    margin: 25px 0 0;
}
.shopping-cart-total > h4 {
    font-size: 14px;
    margin-bottom: 17px;
}
.shopping-cart-total > h4:last-child {
    margin-bottom: 0px;
}
.shopping-cart-total > h4 span {
    float: right;
    color: #000;
}
.shopping-cart-total > h4 span.shop-total {
    color: #174ea9;
    font-weight: 500;
}
.shopping-cart-btn {
    margin-top: 23px;
}
.shopping-cart-btn a {
    margin-bottom: 15px;
}
.header-top-right {
    float: right;
}
.header-top-right ul li {
    display: inline-block;
    float: left;
    list-style: outside none none;
    margin-left: 30px;
}
.header-top-right ul li a {
    color: #ffffff;
    font-size: 12px;
}
/* header middle */
.main-menu ul li {
    display: inline-block;
    list-style: outside none none;
    margin-right: 100px;
    position: relative;
}
.main-menu ul li a {
    font-size: 16px;
    color: #ffffff;
    display: inline-block;
    font-weight: 300;
    line-height: 55px;
    text-transform: uppercase;
}
.main-menu.elec-menu nav > ul > li:hover > a {
    color: #ddd;
}
.main-menu ul li a i {
    color: #76b4fa;
    font-size: 12px;
    margin-left: 6px;
}
.main-menu nav > ul > li > ul.submenu {
    background: #fff none repeat scroll 0 0;
    border-top: 1px solid #dcdcdc;
    box-shadow: 0 0 7px 0.5px rgba(0, 0, 0, 0.15);
    display: block;
    left: 0;
    padding: 20px 20px 24px;
    position: absolute;
    top: 100%;
    transition: all 0.5s ease 0s;
    visibility: hidden;
    width: 230px;
    z-index: 999;
    transform: rotateX(90deg);
    transform-origin: center top 0;
}
.header-bottom {
    position: relative;
}
.main-menu nav > ul > li > ul.mega-menu {
    background-color: rgba(255, 255, 255, 0.97);
    border-top: 1px solid #dcdcdc;
    display: block;
    left: 0;
    padding: 33px 0px 62px 0;
    position: absolute;
    text-align: left;
    top: 100%;
    transform: rotateX(90deg);
    transform-origin: center top 0;
    transition: all 0.5s ease 0s;
    visibility: hidden;
    width: 100%;
    z-index: 999;
}
.main-menu nav > ul > li:hover > ul.submenu,
.main-menu nav > ul > li:hover > ul.mega-menu {
    transform: rotateX(0deg);
    visibility: visible;
}
.main-menu ul li ul li {
    margin-right: 0;
    display: block;
}
.main-menu ul li ul li a,
.sidebar-menu ul li ul li a ,
.category-menu ul li ul li a {
    color: #555;
    font-weight: 400;
    line-height: 28px;
    text-transform: capitalize;
    display: block;
    text-align: left;
}
.main-menu ul li ul li a:hover {
    color: #174ea9;
    padding-left: 10px;
}

.main-menu ul li.mega-menu-position {
    position: static;
}
.main-menu nav > ul > li > ul.mega-menu > li {
    width: 1170px;
    margin: 0 auto;
}

.main-menu ul li ul > li.mega-menu-title,
.sidebar-menu ul li ul > li.mega-menu-title,
.category-menu ul li ul > li.category-mega-menu-title {
    color: #000;
    font-size: 14px;
    font-weight: 500;
    margin: 0 0 17px;
}
.main-menu nav > ul > li > ul.mega-menu > li > ul > li {
    border-right: 1px solid #ebebeb;
    display: inline-block;
    float: left;
    margin-right: 16px;
    width: 16%;
}
.main-menu nav > ul > li > ul.mega-menu > li > ul > li:last-child {
    border-right: none;
}
.main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a ,
.sidebar-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a {
  display: inline-block;
  position: relative;
}
.main-menu.elec-menu nav > ul > li > ul.mega-menu > li > ul > li > ul > li:hover > a {
  color: #174ea9;
}

.main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a span ,
.sidebar-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a span {
  border-radius: 3px;
  color: #fff;
  font-size: 13px;
  line-height: 1;
  padding: 2px 5px 3px;
  position: absolute;
  right: -40px;
  top: 7px;
}
.header-bottom-autoparts .main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a span {
    padding: 3px 5px 2px;
    font-size: 14px;
}
.main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a span.blue{
  background-color: #174ea9;
}
.main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a span.red{
  background-color: #df2121;
}
.main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a span.coffee{
  background-color: #174ea9;
}
.main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a span.yellowgreen{
  background-color: #9bb70d;
}
.main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a span.red-2{
  background-color: #cc2121;
}
.main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a span.green{
  background-color: #0aa493;
}
.main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a span.orange {
  background-color: #f2640a;
}
.sidebar-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a span.watch {
  background-color: #a8741a;
}
.main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a span.yellow {
  background-color: #f1ac06;
}
.main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a span.goldenbell {
  background-color: #aa8d74;
}

.main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a span.byzantine {
  background-color: #873964;
}
.main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a span.limegreen {
  background-color: #174ea9;
}
.main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a span.red-3 {
  background-color: #dd1c1c;
}
.main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a span.bouquet {
  background-color: #624455;
}
.main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a span.persiangreen {
  background-color: #fcb800;
}
.main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li a span.pink {
  background-color: #ee3875;
}


/* slider area */
.slider-content h5 {
    color: #fff;
    font-size: 18px;
    margin: 0;
}
.slider-content h2 {
    color: #fff;
    font-size: 48px;
    line-height: 48px;
    margin: 15px 0 22px;
    letter-spacing: -0.5px;
}
.slider-content h3 {
    color: #fff;
    font-size: 48px;
    margin: 0;
}
.slider-content h3 span {
    font-size: 18px;
}
.slider-btn a {
    background-color: transparent;
    border: 2px solid #ffffff;
    border-radius: 5px;
    color: #fff;
    display: inline-block;
    font-weight: 500;
    padding: 13px 37px;
    text-transform: uppercase;
}
.slider-btn a:hover {
    background-color: #174ea9;
    color: #fff;
    border: 2px solid #174ea9;
}
.slider-btn.slider-btn-3 a:hover {
    background-color: #fff;
    color: #174ea9;
    border: 2px solid #fff;
}
.slider-active.owl-carousel .owl-item .slider-img img {
    width: 100%;
}
.owl-dot-style .owl-dot {
    background: #4b4f53 none repeat scroll 0 0;
    border-radius: 50px;
    display: inline-block;
    height: 7px;
    margin: 0 2px;
    width: 7px;
}
.owl-dot-style .owl-dot.active {
    background: #fff none repeat scroll 0 0;
    height: 10px;
    position: relative;
    top: 2px;
    width: 10px;
}
.owl-dot-style .owl-dots {
    bottom: 40px;
    left: 0px;
    position: absolute;
    right: 0;
    text-align: center;
}




.slider-height-1 {
    min-height: 763px;
}

.slider-height-2 {
    min-height: 420px;
}

.slider-height-3 {
    min-height: 587px;
}
.slider-height-4 {
    min-height: 614px;
}
.slider-height-5 {
    min-height: 642px;
}
.slider-height-6 {
    min-height: 520px;
}
.slider-height-7 {
    min-height: 755px;
}
.slider-height-8 {
    min-height: 638px;
}
.slider-height-9 {
    min-height: 636px;
}
.slider-height-10 {
    min-height: 765px;
}
.slider-height-11 {
    min-height: 668px;
}
.slider-height-12 {
    min-height: 607px;
}
.slider-height-13 {
    min-height: 904px;
}

.slider-height-14 {
    min-height: 515px;
}

.slider-height-15 {
    min-height: 913px;
}
.slider-height-16 {
    min-height: 641px;
}
.slider-height-17 {
    min-height: 473px;
}

.slider-height-18 {
    min-height: 537px;
}
.slider-height-19 {
    min-height: 754px;
}
.slider-height-20 {
    min-height: 425px;
}

.slider-height-21 {
    min-height: 672px;
}

.slider-height-22 {
    min-height: 459px;
}
.slider-height-23 {
    min-height: 585px;
}

.slider-height-24 {
    min-height: 422px;
}

.slider-height-25 {
    min-height: 496px;
}













/* Default Slider Animations */
.owl-item .slider-content * {
    -webkit-animation-duration: 1.3s;
    animation-duration: 1.3s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}
.owl-item.active .slider-content * {}
.owl-item.active .slider-animated-1 h5 {
    -webkit-animation-delay: 0.7s;
    animation-delay: 0.7s;
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft;
}
.owl-item.active .slider-animated-1 h2 {
    -webkit-animation-delay: 1.0s;
    animation-delay: 1.0s;
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft;
}
.owl-item.active .slider-animated-1 h4 {
    -webkit-animation-delay: 1.3s;
    animation-delay: 1.3s;
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft;
}
.owl-item.active .slider-animated-1 p {
    -webkit-animation-delay: 1.3s;
    animation-delay: 1.3s;
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft;
}
.owl-item.active .slider-animated-1 h3 {
    -webkit-animation-delay: 1.3s;
    animation-delay: 1.3s;
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft;
}
.owl-item.active .slider-animated-1 a {
    -webkit-animation-delay: 1.6s;
    animation-delay: 1.6s;
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft;
}
.owl-item.active .slider-animated-2 h5 {
    -webkit-animation-delay: 0.7s;
    animation-delay: 0.7s;
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp;
}
.owl-item.active .slider-animated-2 h2 {
    -webkit-animation-delay: 1.0s;
    animation-delay: 1.0s;
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp;
}
.owl-item.active .slider-animated-2 .slider-single-img img {
    -webkit-animation-delay: 1.6s;
    animation-delay: 1.6s;
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp;
}
.owl-item.active .slider-animated-3 h2 {
    -webkit-animation-delay: 0.7s;
    animation-delay: 0.7s;
    -webkit-animation-name: fadeInRight;
    animation-name: fadeInRight;
}
.owl-item.active .slider-animated-3 h4 {
    -webkit-animation-delay: 1.0s;
    animation-delay: 1.0s;
    -webkit-animation-name: fadeInRight;
    animation-name: fadeInRight;
}
.owl-item.active .slider-animated-3 a {
    -webkit-animation-delay: 1.6s;
    animation-delay: 1.6s;
    -webkit-animation-name: fadeInRight;
    animation-name: fadeInRight;
}
.owl-item.active .slider-animated-1 .slider-single-img-1 img,
.owl-item.active .slider-animated-1 .slider-single-img-2 img,
.owl-item.active .slider-animated-1 .slider-single-img-3 img {
    -webkit-animation-delay: 1.6s;
    animation-delay: 1.6s;
    -webkit-animation-name: fadeInRight;
    animation-name: fadeInRight;
}
/* banner area */
.banner-img img {
    width: 100%;
}
.banner-negative-mrg-2 {
    margin-top: -1px;
}
.banner-hover {
    position: relative;
}
.banner-hover::before,
.banner-hover::after {
    bottom: 0;
    content: "";
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    transition: all 0.5s ease 0s;
    z-index: 1;
}
.banner-hover:hover::after {
    background-color: rgba(255, 255, 255, 0.3);
    bottom: 50%;
    top: 50%;
}
.banner-hover:hover::before {
    background-color: rgba(255, 255, 255, 0.3);
    left: 50%;
    right: 50%;
}
/* product area */
.custom-row {
    display: flex;
    flex-wrap: wrap;
}
.custom-col-5 {
    flex: 0 0 20%;
    max-width: 20%;
}
.custom-col-4 {
    flex: 0 0 25%;
    max-width: 25%;
}
.custom-col-3 {
    flex: 0 0 33.333%;
    max-width: 33.333%;
}
.custom-col-2 {
    flex: 0 0 50%;
    max-width: 50%;
}
.tab-content.jump > .tab-pane {
    display: block;
    height: 0;
    opacity: 0;
    overflow: hidden;
}
.tab-content.jump > .tab-pane.active {
    display: block;
    height: auto;
    opacity: 1;
    overflow: visible;
}
.product-tab-list,
.product-tab-list-3 {
    display: flex;
    justify-content: center;
    position: relative;
}
.product-tab-list-3 {
    z-index: 99;
}
.product-tab-list::before,
.product-tab-list::after {
    background-color: #eee;
    content: "";
    height: 0px;
    position: absolute;
    top: 25px;
    transition: all 0.4s ease 0s;
    width: 300px;
}
.product-tab-list::before {
    left: 0px;
}
.product-tab-list::after {
    right: 0px;
}
.product-tab-list > a {
    margin: 0 5px;
}
.product-tab-list > a h4 {
    border: 2px solid #eee;
    display: inline-block;
    font-size: 14px;
    /*font-weight: 500;*/
    padding: 8px 25px 8px;
    transition: all .3s ease 0s;
}
.product-tab-list > a:hover h4 {
    border: 2px solid #195dc1;
    color: #195dc1;
}
.product-tab-list > a.active h4 {
    background-color: #195dc1;
    border: 2px solid #195dc1;;
    color: #fff;
}
.product-action-wrapper-2 > p {
    color: #818181;
    font-size: 12px;
    line-height: 18px;
    margin: 9px 0 17px;
}
.devita-product-2 {
    background: #fff none repeat scroll 0 0;
    border-radius: 4px;
    position: relative;
    text-align: left;
    transition: all 0.4s ease-out 0s;
    word-wrap: break-word;
    z-index: 1;
    margin: 15px 4px;
}
.devita-product-2.mrg-inherit {
    margin: 0;
}
.devita-product-2:hover {
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    z-index: 3;

}
.devita-product-2 .list-col .gridview {
    display: block;
    margin: 0;
    padding: 0px 5px 60px 0px;
    position: relative;
    text-align: center;
    transition: all 0.3s ease-out 0s;
}
.devita-product-2:hover .list-col .gridview {
    margin-bottom: -166px;
}
.devita-product-2 .product-action-wrapper-2 {
    margin: -181px -15px -15px;
    opacity: 0;
    padding: 26px 23px 0;
    transition: all 0.3s ease-out 0s;
}
.devita-product-2:hover .product-action-wrapper-2 {
    margin: -15px;
    opacity: 1;
}
.devita-product-2.mb-30 {
    margin-bottom: 28px;
}
.product-slider-nav.nav-style , 
.product-slider-nav-2.nav-style {
    float: right;
    margin-top: -42px;
    position: relative;
    z-index: 99;
    margin-bottom: 0;
}
.product-slider-nav.nav-style div , 
.product-slider-nav-2.nav-style div {
    background-color: #efefef;
    border-radius: 5px;
    color: #000;
    display: inline-block;
    font-size: 16px;
    height: 35px;
    line-height: 35px;
    opacity: 1;
    text-align: center;
    transition: all 0.3s ease 0s;
    width: 35px;
    cursor: pointer;
    position: absolute;
    right: 0;
    top: 0;
}
.nav-style.nav-center.nav-style-sunglass.owl-carousel .owl-nav div , 
.nav-style.nav-center.nav-style-watch.owl-carousel .owl-nav div {
    right: 0;
    bottom: 150px;
    transform: translateY(0);
    top: auto;
}
.nav-style.nav-center.nav-style-sunglass-2.owl-carousel .owl-nav div {
    right: 0;
    bottom: 338px;
    transform: translateY(0);
    top: auto;
}
.product-slider-nav.nav-style div:hover , 
.product-slider-nav-2.nav-style div:hover {
    background-color: #185cb8;
    color: #fff;
}
.product-slider-nav-2.nav-style.nav-style-game div {
    background-color: #1c1c1c;
    color: #ccc;
}
.product-slider-nav-2.nav-style.nav-style-game div:hover {
    background-color: #df2121;
    color: #fff;
}
.product-slider-nav.nav-style div.owl-prev , 
.product-slider-nav-2.nav-style div.owl-prev {
    margin-right: 40px;
}
.height-empty{
    height: 1px;
}
.product-slider {
    width: auto;
    z-index: 0;
    overflow: hidden;
}
.product-slider:hover {
    z-index: 2;
    overflow: visible;
}
.product-slider .owl-stage-outer {
    margin-top: -160px;
    padding: 0px 0 160px;
    transform: translateY(160px);
}
.devita-product-2.mb-45 {
    margin-bottom: 45px;
}
.owl-item .devita-product-2 .product-img {
    padding: 10px 10px 10px;
    position: relative;
}
.borblog {
    border-bottom: 1px solid #eee;
}
.blog h4 a {
    color: #000 !important;
}
.borblog .blog p {
    color: #808080 !important;
    padding-left: 10px;
    padding-right: 10px;
}

.product-img img {
    width: 100%;
}
.product-content {
    padding: 3px 18px 0;
}
.mrg-inherit .product-content {
    padding: 3px 10px 0;
}
.product-img > span {
    background-color: #174ea9;
    border-radius: 3px;
    color: #fff;
    left: 15px;
    line-height: 1;
    padding: 6px 14px 5px;
    position: absolute;
    top: 15px;
    z-index: 99;
}
.product-content > span {
    color: #555;
    font-size: 13px;
}
.product-content > h4 {
    font-size: 14px;
    line-height: 18px;
    margin: 8px 0 13px;
}
.product-content > h4 a:hover {
    color: #195dc1;
}
.product-content > h4 a {
    color: #000;
}
.product-price-wrapper > span {
    color: #000;
    margin: 0 2px;
}
.product-price-wrapper > span.product-price-old {
    text-decoration: line-through;
}
.product-rating i {
    color: #b2b2b2;
    font-size: 17px;
}
.product-rating i.theme-star {
    color: #174ea9;
}
.product-action-wrapper > p {
    color: #000;
    font-size: 12px;
    line-height: 18px;
    margin: 9px 0 17px;
}
.product-action {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 0 -10px;
}
.product-action > a {
    margin: 0 3px;
}
.product-action > a i {
    text-align: center;
}
.product-action > a.same-action {
    background-color: #195dc1;
    border-radius: 3px;
    color: #fff;
    font-size: 16px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    width: 35px;
}
.product-action > a.action-cart {
    background-color: #195dc1;
    border-radius: 3px;
    color: #fff;
    display: inline-block;
    font-size: 12px;
    font-weight: 500;
    padding: 9px 20px 8px;
    text-transform: uppercase;
}
.product-action > a.same-action:hover {
    background-color: #43A3D7;
    color: #fff;
}

.product-action > a.action-cart:hover {
    background-color: #0071A7;
    color: #fff;
}

.product-rating {
    position: relative;
}
.product-rating::before, .product-rating::after {
  background-color: #eef0f1;
  content: "";
  height: 1px;
  position: absolute;
  top: 11px;
  transition: all 0.4s ease 0s;
  width: 52px;
}
.product-rating::before {
  left: 0;
}
.product-rating::after {
  right: 0;
}
.product-price-wrapper {
    display: block;
    transition: all 0.3s ease 0s;
}


.product-img-slider .cr-navigation {
    background: rgba(239, 239, 239, 0.9) none repeat scroll 0 0;
    border-radius: 100%;
    color: #000;
    cursor: pointer;
    display: inline-block;
    font-size: 20px;
    height: 36px;
    left: 10px;
    line-height: 36px;
    opacity: 0;
    position: absolute;
    text-align: center;
    top: 50%;
    transition: all 0.3s ease-out 0s;
    width: 36px;
    z-index: 1;
    transform: translateY(-50%);
}
.product-img-slider .cr-navigation.cr-navigation-next {
    left: auto;
    right: 10px;
}
.devita-product-2:hover .cr-navigation {
    opacity: 1;
}
.product-img-slider .cr-navigation:hover {
    color: #fff;
    background: rgba(148 18 22 / 0.8) none repeat scroll 0 0;
}
/* banner area */
.connect-content > h2 {
    font-size: 48px;
    font-weight: 300;
    letter-spacing: -0.5px;
    line-height: 48px;
    margin: 0;
}
.connect-content > p {
    font-size: 18px;
    font-weight: 300;
    margin: 41px 0 14px;
    width: 46%;
}
.connect-content > h4 {
    color: #174ea9;
    font-size: 30px;
    margin: 0 0 75px;
}
/* best selling area */
.tab-content.jump > .tab-pane {
    display: block;
    height: 0;
    opacity: 0;
    overflow: hidden;
}
.tab-content.jump > .tab-pane.active {
    display: block;
    height: auto;
    opacity: 1;
    overflow: visible;
}
.section-border {
    margin-right: 94px;
    overflow: hidden;
    position: relative;
}
.section-border::before {
    background-color: #eeeeee;
    content: "";
    height: 1px;
    left: 0;
    position: absolute;
    top: 15px;
    transition: all 0.4s ease 0s;
    width: 100%;
    z-index: 1;
}
.section-title-wrapper {
    display: inline-block;
    float: left;
}
.section-bg-gray {
    background-color: #f8f9f9;
    position: relative;
    z-index: 1;
}
.section-bg-white {
    background-color: #fff;
    position: relative;
    z-index: 9;
}
.section-bg-white-2 {
    background-color: #fff;
    position: relative;
    z-index: 1;
}
.product-tab-list-2 {
    display: inline-block;
    float: right;
    padding: 0 0px 0 20px;
}
.section-title {
    float: left;
    font-size: 25px;
    font-weight: 500;
    margin: 0;    
    /*padding-left: 50px;*/
    padding-right: 50px;
    display: inline-block;
   
}
.product-tab-list-2 a {
    display: inline-block;
    margin-left: 15px;
}
.product-tab-list-2 a:first-child {
    margin-left: 0px;
}
.product-tab-list-2 a h4 {
    color: #777;
    font-size: 14px;
    transition: all .3s ease 0s;
}
.product-tab-list-2 a.active h4 {
    color: #000;
}
.best-selling-pro-wrapper {
    background-color: #fff;
    border-radius: 3px;
    display: flex;
    transition: all .3s ease 0s;
}
.best-selling-pro-wrapper:hover {
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.best-selling-bundle {
    margin-top: 15px;
}
.best-selling-pro-wrapper .product-img > span {
    left: 20px;
    top: 20px;
}
.best-selling-pro-wrapper .product-img {
    flex: 0 0 180px;
    position: relative;
}
.product-content.best-pro-content {
    padding: 13px 13px 5px 10px;
}
.product-action.best-pro-action > a.action-cart {
    padding: 8px 20px 9px;
}
.product-action.best-pro-action {
    margin: 16px 0 0;
    opacity: 0;
    transform: translateY(-30%);
    transition: all 0.3s ease 0s;
    justify-content: left;
}
.best-selling-pro-wrapper:hover .product-action.best-pro-action {
    opacity: 1;
    transform: translateY(0%);
}
.best-selling-active div[class^="col-"] {
    flex: 0 0 100%;
    max-width: 100%;
}
.nav-style.owl-carousel .owl-nav div {
    background-color: #efefef;
    border-radius: 3px;
    color: #000;
    display: inline-block;
    font-size: 16px;
    height: 35px;
    line-height: 35px;
    opacity: 1;
    position: absolute;
    right: 0;
    text-align: center;
    top: 0;
    transition: all 0.3s ease 0s;
    width: 35px;
}

.nav-style.owl-carousel .owl-nav div:hover,
.featured-product-active.owl-carousel > .owl-nav div:hover {
    background-color: #174ea9;
    color: #fff;
}
.nav-style-green.nav-style.owl-carousel .owl-nav div:hover ,
.product-slider-nav.nav-style.nav-style-green div:hover{
    background-color: #0aa493;
}
.nav-style.owl-carousel .owl-nav div.owl-prev,
.featured-product-active.owl-carousel > .owl-nav div.owl-prev {
    right: 38px;
}
.best-selling-active.nav-style.owl-carousel .owl-nav div {
    top: -54px;
}
.featured-product-active.owl-carousel > .owl-nav div {
    top: -43px;
}
.headphone-slider-active-2.owl-carousel > .owl-nav div {
    top: -43px;
}
/* headphone product */
.product-slider-style-2 .devita-product {
    margin: 15px 4px;
}
.product-slider-style.product-slider-style-2 .product-content {
    padding: 3px 18px 0x;
}
.product-slider-style-2.owl-carousel .owl-item img {
    display: inline-block;
    width: 100%;
}
.headphone-slider-active.nav-style.owl-carousel .owl-nav div {
    top: -44px;
}

.headphone-slider-active {
  z-index: 2;
}
.devita-product.height-inherit:hover .product-wrapper .product-action-wrapper {
    display: block;
    height: auto;
    margin: 0;
    transition: all 0.4s ease-in-out 0s;
    visibility: visible;
}

/* brand logo */
.brand-logo-active.owl-carousel .owl-item img {
    text-align: center;
    width: auto;
    display: inline-block;
}
.single-brand-logo {
  cursor: pointer;
  text-align: center;
}
/* shop services */
.shop-service-wrapper {
    border: 1px solid #323232;
    padding: 15px 10px 17px;
}
.shop-service-content {
    position: relative;
}
.shop-service-content::before,
.shop-service-content-3::before {
    background-color: #323232;
    content: "";
    height: 32px;
    position: absolute;
    right: 0;
    top: 3px;
    transition: all 0.4s ease 0s;
    width: 1px;
}
.shop-service-content.border-none::before,
.shop-service-content-3.border-none::before {
    display: none;
}
.shop-service-content > h4 {
    color: #ffffff;
    font-size: 14px;
    font-weight: 500;
    margin: 0 0 2px;
}
.shop-service-content > p {
    color: #757575;
    font-size: 13px;
    line-height: 18px;
    margin: 0;
}
/* footer */
.footer-title > h4,
.opening-time > h4 {
    color: #fff;
    font-size: 20px;
    font-weight: 500;
    margin: 0;
}
.footer-about > p {
    color: #fff;
    margin: 0px;
}
.footer-map {
    margin: 8px 0 21px;
}

.footer-map > a {
    color: #000;
}
.footer-map > a:hover {
    color: #000;
}
.footer-map > a i {
    margin-right: 9px;
    font-size: 18px;
}
.social-icon {
    margin-top: 22px;
}
.social-icon ul li {
    display: inline-block;
    list-style: outside none none;
    margin: 0 8px 10px 0;
}
.social-icon li a {
    font-size: 18px;
    width: 38px;
    height: 38px;
    border-radius: 50px;
    line-height: 36px;
    color: #fff;
    display: inline-block;
    text-align: center;
}
.social-icon li a.facebook {
    background-color: #3c5b9b;
    border: 2px solid #3c5b9b;
}
.social-icon li a.facebook:hover {
    background-color: #fff;
    border: 2px solid #fff;
    color: #3c5b9b;
}
.social-icon li a.twitter {
    background-color: #40c1df;
    border: 2px solid #40c1df;
}
.social-icon li a.twitter:hover {
    background-color: #fff;
    border: 2px solid #fff;
    color: #40c1df;
}
.social-icon li a.instagram {
    background-color: #c619b8;
    border: 2px solid #c619b8;
}
.social-icon li a.instagram:hover {
    background-color: #fff;
    border: 2px solid #fff;
    color: #c619b8;
}
.social-icon li a.googleplus {
    background-color: #ed3c32;
    border: 2px solid #ed3c32;
}
.social-icon li a.googleplus:hover {
    background-color: #fff;
    border: 2px solid #fff;
    color: #ed3c32;
}
.social-icon li a.rss {
    background-color: #eb8314;
    border: 2px solid #eb8314;
}
.social-icon li a.rss:hover {
    background-color: #fff;
    border: 2px solid #fff;
    color: #eb8314;
}
.social-icon li a.dribbble {
    background-color: #c72982;
    border: 2px solid #c72982;
}
.social-icon li a.dribbble:hover {
    background-color: #fff;
    border: 2px solid #fff;
    color: #c72982;
}
.social-icon li a.vimeo {
    background-color: #82a418;
    border: 2px solid #82a418;
}
.social-icon li a.vimeo:hover {
    background-color: #fff;
    border: 2px solid #fff;
    color: #82a418;
}
.social-icon li a.pinterest {
    background-color: #c62a21;
    border: 2px solid #c62a21;
}
.social-icon li a.pinterest:hover {
    background-color: #fff;
    border: 2px solid #fff;
    color: #c62a21;
}
.social-icon li a.skype {
    background-color: #07a4c6;
    border: 2px solid #07a4c6;
}
.social-icon li a.skype:hover {
    background-color: #fff;
    border: 2px solid #fff;
    color: #07a4c6;
}
.footer-content ul li {
    list-style: outside none none;
    padding-bottom: 15px;
}
.footer-content ul li:last-child {
    padding-bottom: 0px;
}
.footer-content ul li a {
    color: #fff;
    display: block;
}
.footer-content ul li:hover a {
    color: #fff;
    padding-left: 5px;
}
.footer-contact ul li,
.opening-content ul li {
    color: #fff;
    font-size: 14px;
    list-style: outside none none;
    margin: 0 0 8px;
}
.footer-contact li:last-child,
.opening-content ul li:last-child {
    margin: 0 0 0px;
}
.footer-contact li a {
    color: #fff;
}
.footer-contact li a:hover {
    color: #fff;
}
.opening-content ul li span {
    color: #fff;
}
.opening-time > h4 {
    margin: 21px 0 22px;
}
.footer-tag ul li {
    display: inline-block;
    margin: 0 10px 5px;
    position: relative;
}
.footer-tag ul li::before {
    background-color: #666;
    content: "";
    height: 2px;
    position: absolute;
    right: -19px;
    top: 11px;
    transform: rotate(-67deg);
    transition: all 0.4s ease 0s;
    width: 15px;
}
.footer-tag ul li:last-child::before {
    display: none;
}
.footer-tag ul li a {
    color: #ddd;
}
.footer-tag ul li a:hover {
    color: #fff;
}
.footer-middle {
    padding: 0 12px;
}
.payment-icon img {
    max-width: 100%;
}
.copyright > p {
    color: #fff;
    margin: 0;
}
.copyright > p a {
    color: #fff;
}
.copyright > p a:hover {
    text-decoration: underline;
}
/* newsletter */
.newsletter-img {
    background-image: url("../../assets/img/bg/bg-2.jpg");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}
.newsletter-content-wrapper {
    display: flex;
}
.newsletter-img > img {
    flex: 0 0 73px;
    margin: 0 30px 0 0;
}
.newsletter-content > p {
    color: #ffffff;
    font-size: 18px;
    font-weight: 300;
    margin: 0;
}
.newsletter-content > h4 {
    color: #ffffff;
    font-size: 20px;
    margin: 0;
}
.newsletter-style form input {
    background: white none repeat scroll 0 0;
    border: 2px solid white;
    box-shadow: none;
    color: #75b4fb;
    font-size: 12px;
    height: 45px;
    padding: 0 75px 0 10px;
    width: 1200px;
    border-radius: 0px;
}
.newsletter-style form input::-moz-placeholder {
    color: #000;
    opacity: 1;
}
.newsletter-style form input::-webkit-input-placeholder {
    color: #000;
    opacity: 1;
}
.newsletter-style form {
    position: relative;
}
.newsletter-style form .mc-form {
    position: relative;
}
.mc-form .mc-news {
    display: none;
}
.subscribe-form .mc-form .clear {
    background: rgb(226 29 36) url(../../assets/img/icon-img/send.png) no-repeat scroll right 25px center;
    border-radius: 0px;
    bottom: 0;
    display: inline-block;
    padding: 0 6px;
    position: absolute;
    right: 0px;
    transition: all 0.3s ease 0s;
    z-index: 999;
    cursor: pointer;
}
.subscribe-form .mc-form .clear:hover {
    background: rgb(221, 221, 221) url("../../assets/img/icon-img/send.png") no-repeat scroll right 25px center;
}
.clear .btn {
    color: #fff;
}
.subscribe-form .clear input {
    border: medium none;
    cursor: pointer;
    padding: 0;
    text-indent: -99999px;
    width: 0px;
}
.newsletter-content {
    margin-top: 10px;
}
.newsletter-from-close {
    display: flex;
    justify-content: space-between;
    margin-top: 0px;
}
.newsletter-close > button {
    background-color: transparent;
    border: medium none;
    color: #ffffff;
    font-size: 18px;
    margin: 10px 0 0;
    padding: 0;
    cursor: pointer;
}
.newsletter-close > button:hover {
    color: #ddd;
}

/*---------------------------
    3. Home electronics 2
-----------------------------*/

/* header index-electronics-2 */
.notification-img-2 {
    background-image: url("../../assets/img/bg/bg-3.jpg");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}
.header-top-color-2 .lang-curr-dropdown ul li a,
.header-top-color-2 .language-currency span,
.header-top-color-2 .header-top-right ul li a,
.header-middle-color-2 .header-contact-content > p,
.header-middle-color-2 .header-contact-icon i,
.header-middle-color-2 button.icon-cart span.count-amount {
    color: #000000;
}
.header-top-color-2 .header-top-right ul li a:hover {
    color: #1d73d2;
}
.header-top-color-2 .language-currency::before {
    background-color: #fff;
}
.header-top-color-2 .header-search form input {
    border: 2px solid #ebebeb;
    color: #a5a5a5;
}
.search-color-elec.header-search form input[type="text"]::-moz-placeholder {
    color: #000 !important;
    opacity: 1;
}
.search-color-elec.header-search form input[type="text"]::-webkit-input-placeholder {
    color: #000 !important;
    opacity: 1;
}
.search-color-elec.header-search form input[type="text"]::-ms-input-placeholder {
    color: #000 !important;
    opacity: 1;
}
.header-middle-color-2 .header-search form button:hover {
    background-color: #000;
    color: #fff;
}
.header-top-color-2 .header-search form input::-moz-placeholder {
    color: #a5a5a5;
    opacity: 1;
}
.header-top-color-2 .header-search form input::-webkit-input-placeholder {
    color: #a5a5a5;
    opacity: 1;
}
.header-middle-color-2 button.icon-cart i.cart-bag {
    border-right: 1px solid #ebebeb;
    color: #0074f5;
}
.header-middle-color-2 button.icon-cart i.cart-down {
    color: #a4a4a4;
}
.header-middle-color-2 .header-cart:hover button.icon-cart i.cart-bag,
.header-middle-color-9.header-cart:hover button.icon-cart i.cart-bag,
.header-middle-color-2 .header-cart:hover > button.icon-cart span.count-amount,
.header-middle-color-9.header-cart:hover > button.icon-cart span.count-amount {
    color: #666;
}
/* index-electronics-2 slider */
.slider-content-2 h5 {
    color: #174ea9;
    font-size: 18px;
    margin: 0;
}
.slider-content-2 h2 {
    color: #000;
    font-size: 36px;
    line-height: 36px;
    margin: 9px 0 19px;
}
.slider-content-2 h3 {
    color: #000;
    font-size: 36px;
    margin: 0;
}
.slider-content-2 h3 span {
    font-size: 18px;
}
.slider-btn.slider-btn-2 a {
    color: #174ea9;
    border: 2px solid #174ea9;
}
.slider-btn.slider-btn-2 a:hover {
    color: #fff;
}
.owl-dot-style-2 .owl-dot {
    background: #d8d9d9 none repeat scroll 0 0;
    border-radius: 50px;
    display: inline-block;
    height: 10px;
    margin: 0 5px;
    width: 10px;
}
.owl-dot-style-2 .owl-dot.active {
    background: #174ea9 none repeat scroll 0 0;
    height: 13px;
    position: relative;
    top: 2px;
    width: 13px;
}
.owl-dot-style-2 .owl-dots ,
.owl-dot-style-4 .owl-dots  ,
.owl-dot-style-5 .owl-dots {
    bottom: 25px;
    left: 0px;
    position: absolute;
    right: 0;
    text-align: center;
}
.slider-banner-area .row {
    margin-left: -5px;
    margin-right: -5px;
}
.slider-banner-area .row div[class^="col-"] {
    padding-left: 5px;
    padding-right: 5px;
}
/* index-electronics-2 service-area */
.service-area .row {
    margin-left: -5px;
    margin-right: -5px;
}
.service-area .row div[class^="col-"] {
    padding-left: 5px;
    padding-right: 5px;
}
.shop-service-content-2 {
    background-color: #f8f9f9;
    padding: 17px 10px 18px;
}
.shop-service-content-2 > h4 {
    font-size: 14px;
    font-weight: 500;
    margin: 0;
}
.shop-service-content-2 > p {
    color: #000;
    font-size: 13px;
    line-height: 18px;
    margin: 0;
}
/* index-electronics-2 deals-area */
.timer-style-1 {
    text-align: center;
    margin-top: 7px;
}
.timer-style-1 span {
    border: 2px solid #ebebeb;
    color: #000;
    display: inline-block;
    margin: 0 3px;
    padding: 12px;
    position: relative;
    text-align: center;
}
.timer-style-1 span p {
    color: #000;
    margin: 20px 0 -44px;
}
.add-to-cart > a {
    font-weight: 500;
    text-transform: uppercase;
    color: #fff;
    display: inline-block;
    background-color: #174ea9;
    line-height: 1;
    padding: 15px 30px 14px;
    border-radius: 3px;
}
.add-to-cart > a:hover {
    background-color: #000;
}
.deals-wrapper .product-content {
    padding: 0 45px;
}
h4.sidebar-title {
    font-size: 20px;
    font-weight: 500;
    margin: 0px;
    position: relative;
    display: inline-block;
    padding-right: 10px;
}
.related-product-area .section-border {
    margin-right: 85px;
}
.deals-slider-active.nav-style.owl-carousel .owl-nav div ,
.deals-slider-active-2.nav-style.owl-carousel .owl-nav div ,
.latest-products-active.nav-style.owl-carousel .owl-nav div {
    top: -64px;
}


/* related-product index-electronics-2 */
.related-product-wrapper {
    display: flex;
    margin-bottom: 22px;
}
.related-product-wrapper:last-child {
    margin-bottom: 0px;
}
.related-product-img {
    margin-right: 10px;
    flex: 0 0 90px;
}
.related-product-wrapper .product-content {
    padding: 0 25px 0 0;
}
.related-product-active.nav-style.owl-carousel .owl-nav div {
    top: -60px;
}
h4.sidebar-title.sidebar-title-width-2::before {
    right: -35px;
    width: 20px;
}
/* featured product index-electronics-2 */
.featured-product-active .devita-product .product-img img {
    width: 100%;
}
.devita-product.height-inherit .product-wrapper {
    min-height: auto;
}
.product-slider-nav-2.nav-style.nav-style-bundle {
  margin-top: -46px;
}
.product-slider-style .product-action > a.action-cart {
    padding: 9px 12px 8px;
}

.product-slider-style .product-content {
    padding: 3px 10px 0;
}
.product-slider-style .devita-product .product-wrapper {
    padding: 11px 11px 26px;
}
/* new arrivals index-electronics-2 */
.single-product-wrapper {
    display: flex;
    margin: 0 0 31px;
}
.single-product-wrapper:last-child {
    margin: 0 0 0px;
}
.single-product-img {
    flex: 0 0 100px;
    margin-right: 10px;
}
.single-product-wrapper .product-content {
    padding: 0;
}
.product-slider-active-2.nav-style.owl-carousel .owl-nav div {
    top: -71px;
}
/* footer index-electronics-2 */
.footer-title.footer-title-color-2 > h4,
.opening-time.footer-title-color-2 > h4 {
    color: #000;
}
.footer-map.footer-map-color-2 > a,
.opening-content.opening-content-color-2 ul li span {
    color: #174ea9;
}
.footer-content.footer-content-color-2 ul li:hover a,
.footer-contact.footer-content-color-2 li a:hover,
.footer-middle-color-2 .footer-tag ul li a:hover {
    color: #174ea9;
}
.logo.mobile-logo {
    display: none;
}
#mobile-menu-active {
    display: none;
}
.mobile-menu-area {
    display: none;
}

/*---------------------------
    4. Home electronics 3
-----------------------------*/

.header-position {
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 999;
}
.main-menu.main-border nav > ul > li {
    margin-right: 0px;
    padding-left: 25px;
}
.main-menu.main-border nav > ul > li.mega-menu-position {
    margin-right: 0px;
    padding-left: 0px;
}
.main-menu.main-border nav > ul > li > a {
    padding-right: 21px;
}
.main-menu.main-border nav > ul > li.mega-menu-position > a {
    padding-left: 25px;
    padding-right: 21px;
    position: relative;
}
.main-menu.main-border nav > ul > li > a:before {
    position: absolute;
    content: "";
    left: 0;
    top: 0;
    height: 100%;
    width: 1px;
    background-color: #1b71d0;
}
.main-menu.main-border nav > ul > li > a.menu-border:after {
    position: absolute;
    content: "";
    right: 0;
    top: 0;
    height: 100%;
    width: 1px;
    background-color: #1b71d0;
}
.owl-dot-style-3 .owl-dots {
    bottom: 40px;
    left: 0;
    position: absolute;
    right: 0;
    text-align: center;
}
.owl-dot-style-3 .owl-dot {
    background: #297ad3 none repeat scroll 0 0;
    border-radius: 50px;
    display: inline-block;
    height: 10px;
    margin: 0 5px;
    width: 10px;
}
.owl-dot-style-3 .owl-dot.active {
    background: #fff none repeat scroll 0 0;
    height: 13px;
    position: relative;
    top: 2px;
    width: 13px;
}
/* banner index-electronics-3 */
.banner-mrg-right {
    margin-right: 5px;
}
.banner-mrg-left {
    margin-left: 5px;
}
/* best-selling hm-3 */
.best-selling-pro-wrapper .product-img.best-selling-img {
    flex: 0 0 380px;
}
.product-list ul li {
    color: #000;
    list-style: outside none none;
    margin: 0 0 5px;
    padding: 0 0 0 15px;
    position: relative;
}
.product-list ul li::before {
    background-color: #888;
    border-radius: 50px;
    content: "";
    height: 5px;
    left: 0;
    position: absolute;
    top: 7px;
    width: 5px;
}
.product-list ul li:last-child {
    margin: 0 0 0px;
}
.product-list {
    margin: 28px 0 31px;
}
.best-pro-action-2 a {
    background-color: #eef0f1;
    border-radius: 3px;
    color: #000;
    display: inline-block;
    font-size: 12px;
    font-weight: 500;
    margin: 0 7px 0 0;
    text-transform: uppercase;
}
.best-pro-action-2 a:hover {
    background-color: #174ea9;
    color: #fff;
}
.best-pro-action-2 {
    display: flex;
    flex-wrap: wrap;
}
.best-pro-action-2 a.action-cart {
    padding: 8px 43px 9px;
}
.best-pro-action-2 a.same-action {
    border-radius: 3px;
    font-size: 16px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    width: 35px;
}
.product-content.best-pro-content.best-selling-style-2 {
    padding: 40px 13px 5px 10px;
}
.best-selling-bundle-2 .row {
    margin-left: -10px;
    margin-right: -10px;
}
.best-selling-bundle-2 .row div[class^="col-"] {
    padding-left: 10px;
    padding-right: 10px;
}
.best-selling-active-2.nav-style.owl-carousel .owl-nav div {
    top: -67px;
}
/* footer index-electronics-3 */
.footer-newsletter > p {
    color: #ddd;
    margin: 0;
}
.subscribe-form-2 {
    margin: 16px 0 0;
}
.subscribe-form-2 form input {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background: transparent none repeat scroll 0 0;
    border-color: #fff;
    border-image: none;
    border-style: none none solid;
    border-width: medium medium 1px;
    box-shadow: none;
    color: #fff;
    font-size: 13px;
    height: 45px;
    padding-left: 0;
    width: 100%;
}
.subscribe-form-2 form input::-moz-placeholder {
    color: #fff;
    opacity: 1;
}
.subscribe-form-2 form input::-webkit-input-placeholder {
    color: #fff;
    opacity: 1;
}
.clear-2 {
    margin: 39px 0 0;
}
.subscribe-form-2 form .clear-2 input {
    background-color: #174ea9;
    border: medium none;
    border-radius: 3px;
    color: #fff;
    cursor: pointer;
    font-weight: 500;
    height: inherit;
    line-height: 1;
    padding: 17px 46px;
    text-transform: uppercase;
    width: inherit;
}
.subscribe-form-2 form .clear-2 input:hover {
    background-color: #fff;
    color: #174ea9;
}

/*---------------------------
    5. Home electronics 4
-----------------------------*/

/* slider index-electronics-4 */
.slider-content-3 h5 {
    color: #174ea9;
    font-size: 18px;
}
.slider-content-3 h2 {
    font-size: 48px;
    font-weight: 500;
}
.owl-dot-style-2.owl-dot-4 .owl-dots {
    bottom: 40px;
}
/* banner index-electronics-4 */
.banner-img.banner-mrg-left-2 {
    margin-left: -10px;
}

/*---------------------------
    6. Home medical
-----------------------------*/

.header-middle-color-3 .header-contact-content > p,
.header-middle-color-7 .header-contact-content > p,
.header-middle-color-3 .header-contact-icon i,
.header-middle-color-7 .header-contact-icon i,
.header-middle-color-3 button.icon-cart span.count-amount,
.header-middle-color-3 button.icon-cart i.cart-down {
    color: #000;
}
.header-middle-color-3 button.icon-cart i.cart-bag {
    border-right: 1px solid #ebebeb;
    color: #0aa493;
}
.header-top-color-3 .lang-curr-dropdown ul li ul li > a:hover,
.header-top-color-3 .lang-curr-dropdown ul li a:hover,
.header-top-color-2.header-top-color-3 .header-top-right ul li a:hover {
    color: #0aa493;
}

.header-middle-color-3 button.icon-cart span.count-style,
.header-middle-color-3 .header-search form button {
    background-color: #0aa493;
}
.header-middle-color-3 .header-search form button:hover {
    color: #fff;
    background-color: #333;
}
.header-middle-color-3 button.icon-cart {
    border: 2px solid #0aa493;
}
.header-middle-color-3 .header-search form input {
    border: 2px solid #ebebeb;
    color: #000;
}
.header-middle-color-3 .header-search form input::-moz-placeholder {
    color: #000 !important;
    opacity: 1;
}
.header-middle-color-3 .header-search form input::-webkit-input-placeholder {
    color: #000 !important;
    opacity: 1;
}
.header-bottom-color-2 .main-menu ul li a i {
    color: #fff;
}
.header-bottom-color-2 .main-menu ul li ul li a:hover {
    color: #0aa493;
}
.shopping-cart-green .btn-style:hover {
    background-color: #0aa493;
    border: 2px solid #0aa493;
    color: #fff;
}
.shopping-cart-green .shopping-cart-total > h4 span.shop-total,
.shopping-cart-green .shopping-cart-title > h4 a:hover,
.header-middle-color-3 .header-cart:hover button.icon-cart i.cart-bag,
.header-middle-color-3 .header-cart:hover > button.icon-cart span.count-amount {
    color: #0aa493;
}
.header-middle-color-3 .shopping-cart-delete > a:hover {
    border: 2px solid #0aa493;
    color: #0aa493;
}
/* slider index-medical */
.slider-content-4 h5 {
    font-size: 18px;
    margin: 0;
}
.slider-content-4 h2 {
    font-size: 48px;
    letter-spacing: -0.5px;
    line-height: 48px;
    margin: 12px 0 31px;
}
.slider-content-4.slider-animated-1 > p {
    font-size: 18px;
    margin: 0;
    width: 50%;
}
.slider-btn-5 a {
    background-color: #0aa493;
    border-radius: 3px;
    color: #fff;
    display: inline-block;
    font-size: 13px;
    font-weight: 500;
    line-height: 1;
    padding: 18px 37px;
    text-transform: uppercase;
}
.slider-btn-5 a:hover {
    background-color: #000;
    color: #fff;
}
.owl-dot-style-2.owl-dot-green .owl-dot.active {
    background: #0aa493 none repeat scroll 0 0;
}
/* product index-medical */
.product-tab-list.tab-list-green > a.active h4 {
    border: 2px solid #0aa493;
    color: #0aa493;
}
.devita-product-green .product-action > a.same-action:hover,
.devita-product-green .product-action > a.action-cart:hover,
.devita-product-green .product-img > span,
.devita-product-green .best-pro-action-2 a:hover {
    background-color: #0aa493;
}
.devita-product-green .product-img-slider .cr-navigation:hover {
    background: rgba(10, 164, 147, 0.8) none repeat scroll 0 0;
}
.devita-product-green .product-rating i.theme-star,
.devita-product-green .product-wrapper:hover .product-content > h4 a,
.devita-product-green .product-content > h4 a:hover,
.devita-product-green.product-wrapper:hover .product-content > h4 a {
    color: #0aa493;
}
/* banner index-medical */
.madial-banner .row {
    margin-left: -10px;
    margin-right: -10px;
}
.madial-banner .row div[class^="col-"] {
    padding-left: 10px;
    padding-right: 10px;
}
/* blog index-medical */
.blog-wrapper {
    border: 1px solid #eeeeee;
    padding: 30px 30px 27px;
}
.blog-wrapper > span {
    background-color: #0aa493;
    border-radius: 3px;
    color: #ffffff;
    display: inline-block;
    line-height: 1;
    padding: 5px 13px 7px;
}
.blog-wrapper h3 {
    font-size: 18px;
    font-weight: 500;
    line-height: 24px;
    margin: 15px 0 10px;
}
.blog-wrapper h3 a:hover,
.blog-meta ul li a:hover {
    color: #0aa493;
}
.blog-wrapper > p {
    color: #444;
    margin: 0;
}
.blog-meta ul li {
    color: #000;
    display: inline-block;
    font-size: 13px;
    line-height: normal;
    margin-right: 15px;
    position: relative;
}
.blog-meta ul li::before {
    background-color: #000;
    content: "";
    height: 1px;
    position: absolute;
    right: -16px;
    top: 8px;
    transform: rotate(-58deg);
    transition: all 0.4s ease 0s;
    width: 12px;
}
.blog-meta ul li:last-child::before {
    display: none;
}
.blog-meta-bundle {
    border-top: 1px solid #eeeeee;
    margin: 14px 0 0;
    padding: 20px 0 0;
}
.blog-readmore > a {
    color: #0aa493;
    font-size: 13px;
    font-weight: 500;
    text-transform: uppercase;
}
.blog-readmore > a:hover {
    color: #000;
}
.blog-readmore > a i {
    margin-left: 6px;
}
.blog-meta-bundle {
    position: relative;
}
.blog-meta {
    opacity: 1;
    transform: translateY(0px);
    transition: all .3s ease 0s;
}
.blog-wrapper:hover .blog-meta {
    opacity: 0;
    transform: translateY(-15px);
}
.blog-readmore {
    left: 0;
    opacity: 0;
    position: absolute;
    top: 21px;
    transition: all 0.4s ease-in-out 0s;
}
.blog-wrapper:hover .blog-readmore {
    opacity: 1;
}
.blog-slider-active.nav-style.owl-carousel .owl-nav div {
    top: -68px;
}
/* footer index-medical */
.shop-service-wrapper.service-green {
    border: 1px solid #ebebeb;
}
.service-green .shop-service-content > h4,
.footer-widget-green .footer-content ul li:hover a {
    color: #0aa493;
}
.service-green .shop-service-content::before {
    background-color: #ebebeb;
}
.footer-widget-green .footer-title > h4 {
    color: #000;
}
.footer-widget-green .subscribe-form-2 form .clear-2 input {
    background-color: #0aa493;
    color: #fff;
}
.footer-widget-green .subscribe-form-2 form .clear-2 input:hover {
    background-color: #000;
    color: #fff;
}
.green-color .copyright > p a,
.green-color .footer-tag ul li a:hover,
.footer-widget-green .footer-contact li a:hover {
    color: #0aa493;
}
.footer-widget-green .subscribe-form-2 form input {
    color: #000;
    border-color: #aaa;
}
.footer-widget-green .subscribe-form-2 form input::-moz-placeholder {
    color: #000;
    opacity: 1;
}
.footer-widget-green .subscribe-form-2 form input::-webkit-input-placeholder {
    color: #000;
    opacity: 1;
}

/*---------------------------
    7. Home book
-----------------------------*/

/* header index book */
.notification-img-3 {
    background-image: url("../../assets/img/bg/bg-5.jpg");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}
.notification-content.notification-red-color p a {
    border-bottom: 1px solid #bf2222;
    color: #bf2222;
}
.notification-content.notification-red-color p a:hover {
    border-bottom: 1px solid #000;
    color: #000;
}
.header-middle-color-4 button.icon-cart span.count-style,
.header-middle-color-4 .header-search form button {
    background-color: #df2121;
}
.header-middle-color-4 .header-search form button:hover {
    color: #fff;
    background-color: #333;
}
.header-middle-color-4 button.icon-cart {
    border: 2px solid #3a3a3a;
}
.header-middle-color-4 .header-search form input {
    border: 2px solid #3a3a3a;
    color: #fff;
}
.header-middle-color-4 .header-search form input::-moz-placeholder {
    color: #fff !important;
    opacity: 1;
}
.header-middle-color-4 .header-search form input::-webkit-input-placeholder{
    color: #fff !important;
    opacity: 1;
}
.header-middle-color-5 .header-search form input::-moz-placeholder,
.header-middle-color-6 .header-search form input::-moz-placeholder,
.middle-yellowgreen-color .header-search form input::-moz-placeholder {
    color: #000 !important;
    opacity: 1;
}
.header-middle-color-5 .header-search form input::-webkit-input-placeholder,
.header-middle-color-6 .header-search form input::-webkit-input-placeholder,
.middle-yellowgreen-color .header-search form input::-webkit-input-placeholder {
    color: #000 !important;
    opacity: 1;
}
.header-middle-color-4 button.icon-cart i.cart-bag {
    border-right: 1px solid #3a3a3a;
}
.header-middle-color-4 button.icon-cart i.cart-down {
    color: #6d6d6d;
}
.lang-curr-red .lang-curr-dropdown ul li ul li > a:hover {
  color: #df2121;
}
.header-middle-color-4 .btn-style:hover,
.header-middle-color-5 .btn-style:hover {
    background-color: #df2121;
    border: 2px solid #df2121;
}
.header-middle-color-4 .shopping-cart-total > h4 span.shop-total,
.header-middle-color-5 .shopping-cart-total > h4 span.shop-total,
.header-middle-color-4 .shopping-cart-title > h4 a:hover,
.header-middle-color-5 .shopping-cart-title > h4 a:hover {
    color: #df2121;
}
.header-middle-color-4 .shopping-cart-delete > a:hover,
.header-middle-color-5 .shopping-cart-delete > a:hover {
    border: 2px solid #df2121;
    color: #df2121;
}
.header-bottom-color-3 .main-menu ul li a i {
    color: #666;
}
.language-currency.lang-curr-border::before {
    background-color: #000;
}
.header-bottom-color-3 .main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li:hover > a,
.header-bottom-color-3 .main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li:hover > a {
    color: #df2121;
}
.menu-hover-red .main-menu ul li ul li a:hover {
  color: #df2121;
}


/* slider index book */
.slider-btn.red-color a:hover,
.slider-btn.red-color-2 a:hover {
    background-color: #df2121;
    border: 2px solid #df2121;
    color: #fff;
}
/* product index book */
.devita-product-red .product-action > a.same-action:hover,
.devita-product-red .product-action > a.action-cart:hover,
.devita-product-red .product-img > span,
.devita-product-red .best-pro-action-2 a:hover {
    background-color: #df2121;
}
.product-tab-list.tab-list-red > a.active h4 {
    border: 2px solid #df2121;
    color: #df2121;
}
.devita-product-red .product-rating i.theme-star,
.devita-product-red .product-content > h4 a:hover,
.devita-product-red.product-wrapper:hover .product-content > h4 a {
    color: #df2121;
}
.devita-product-red .product-img-slider .cr-navigation:hover {
    background: rgba(223, 33, 33, 0.8) none repeat scroll 0 0;
    color: #fff;
}
.headphone-slider-active-2 .product-action > a.action-cart {
  padding: 9px 12px 8px;
}


/* banner index book */

.book-offer > h2 {
    font-size: 48px;
    font-weight: 300;
    letter-spacing: -0.5px;
    margin: 0;
}
.book-offer > p {
    font-weight: 300;
    margin: 31px auto 30px;
    width: 65%;
}
.book-offer > h4 {
    font-size: 36px;
    margin: 0 0 79px;
}
.book-offer > h4 span {
    font-size: 18px;
}
.book-offer-btn a.btn-style {
    border: 2px solid #000;
    border-radius: 3px;
    display: inline-block;
    padding: 13px 35px;
}
.book-offer-btn a.btn-style:hover {
    background-color: #df2121;
    border: 2px solid #df2121;
}
/* special book section index-book */
.special-book-img {
    flex: 0 0 101px;
    margin-right: 10px;
}
.special-book-wrapper {
    display: flex;
    margin-bottom: 20px;
}
.special-book-wrapper:last-child {
    margin-bottom: 0;
}
.special-book-wrapper .product-content {
    padding: 0 0px 0 0;
}
.special-book-area {
    border: 3px solid #ebebeb;
    border-radius: 3px;
    padding: 20px 15px;
}
.special-book-active .product-content > h4 a:hover {
    color: #df2121;
}
.nav-style-3.owl-carousel > .owl-nav div {
    color: #c6c6c6;
    display: inline-block;
    font-size: 20px;
    opacity: 1;
    position: absolute;
    right: 0;
    top: -67px;
    transition: all 0.3s ease 0s;
}
.nav-style-3.owl-carousel > .owl-nav div:hover {
    color: #df2121;
}
.nav-style-3.owl-carousel .owl-nav div.owl-prev {
    right: 20px;
}
.special-book-area .section-border {
    margin-right: 40px;
}
.special-book-area .section-border::before {
    top: 12px;
}
/* sidebar blog index-book */
.sidebar-blog-wrapper {
    display: flex;
    margin: 0 25px 20px 0;
}
.sidebar-blog-wrapper:last-child {
    margin: 0 25px 0px 0;
}
.sidebar-blog-img {
    flex: 0 0 82px;
    margin-right: 18px;
}
.sidebar-blog-content > h4 {
    font-size: 14px;
    font-weight: 500;
    line-height: 18px;
    margin: 0 0 7px;
}
.sidebar-blog-content > h4 a:hover {
    color: #df2121;
}
.sidebar-blog-content > span {
    color: #555;
    font-size: 13px;
}
.sidebar-blog .section-border {
    margin-right: 40px;
}
.sidebar-blog .section-border::before {
    top: 12px;
}
.nav-style-red.nav-style.owl-carousel .owl-nav div:hover ,
.product-slider-nav-2.nav-style.nav-style-red div:hover ,
.product-slider-nav.nav-style.nav-style-red div:hover {
    background-color: #df2121;
}
.nav-style-red .product-img-slider .cr-navigation:hover {
    background: rgba(223, 33, 33, 0.8) none repeat scroll 0 0;
    color: #fff;
}
/* footer index-book */
.footer-widget-red .subscribe-form-2 form .clear-2 input,
.footer-widget-red-2 .subscribe-form-2 form .clear-2 input {
    background-color: #df2121;
    color: #fff !important;
}
.footer-widget-red .subscribe-form-2 form .clear-2 input:hover {
    background-color: #fff;
    color: #df2121 !important;
}
.copyright.copyright-white > p a {
    color: #fff;
}
.copyright.copyright-white > p a:hover {
    text-decoration: underline;
}

/*---------------------------
    8. Home book 2
-----------------------------*/

/* header index-book-2 */
.notification-img-4 {
    background-image: url("../../assets/img/bg/bg-7.jpg");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}
.header-top-color-2.header-top-red .header-top-right ul li a:hover {
    color: #df2121;
}
.header-top-red .lang-curr-dropdown ul li ul li > a:hover {
    color: #df2121;
    padding-left: 5px;
}
.header-middle-color-5 .header-contact-content > p,
.header-middle-color-5 .header-contact-icon i,
.header-middle-color-5 button.icon-cart span.count-amount {
    color: #000;
}
.header-middle-color-5 .header-search form input,
.header-middle-color-6 .header-search form input,
.middle-yellowgreen-color .header-search form input {
    border: 2px solid #ebebeb;
    color: #000;
}
.header-middle-color-5 button.icon-cart span.count-style,
.header-middle-color-5 .header-search form button {
    background-color: #df2121;
}
.header-middle-color-5 .header-search form button:hover {
    background-color: #000;
    color: #fff;
}
.header-middle-color-5 button.icon-cart,
.header-middle-color-6 button.icon-cart,
.middle-yellowgreen-color button.icon-cart {
    border: 2px solid #ebebeb;
}
.header-middle-color-5 button.icon-cart i.cart-bag {
    border-right: 1px solid #ebebeb;
    color: #df2121;
}
.header-middle-color-5 button.icon-cart span.count-amount,
.header-middle-color-6 button.icon-cart span.count-amount {
    color: #000;
}
.header-middle-color-5 button.icon-cart i.cart-down {
    color: #a4a4a4;
}
.header-middle-color-5 .header-cart:hover button.icon-cart i.cart-bag,
.header-middle-color-5 .header-cart:hover > button.icon-cart span.count-amount {
    color: #df2121;
}
.header-top-color-2 .language-currency.lang-curr-border-2::before {
    background-color: #ebebeb;
}
.header-bottom-color-4 .main-menu ul li a i {
    color: #f7c3c3;
}
.header-bottom-color-4 .main-menu nav > ul > li > ul.mega-menu > li > ul > li ul li:hover > a{
    color: #df2121;
}


/* slider index-book-2 */
.slider-content-5 {
    margin-left: -60px;
}
.slider-content-5 h2 {
    font-size: 40px;
    letter-spacing: -0.5px;
    line-height: 40px;
    margin: 0;
}
.slider-content-5 h4 {
    font-size: 18px;
    margin: 23px 0 0;
}
.slider-btn.red-color-2 a {
    border: 2px solid #000;
    color: #000;
}
.owl-dot-style-2.owl-dot-red .owl-dots {
    bottom: 40px;
}
.owl-dot-style-2.owl-dot-red .owl-dot.active {
    background: #df2121 none repeat scroll 0 0;
}
.owl-dot-style-2.owl-dot-red .owl-dot {
    background: #b7bebe none repeat scroll 0 0;
}
/* product index-book-2 */
.featured-book-active.nav-style.owl-carousel .owl-nav div {
    top: -38px;
}
.single-product-red .product-content > h4 a:hover {
    color: #df2121;
}
/* deals product index-book-2 */
.deals-img > img {
    width: 100%;
}
.deals-content > h2 {
    font-size: 36px;
    font-weight: 500;
    margin: 5px 0 24px;
}
.deals-content > h2 span {
    color: #df2121;
}
.deals-content > p {
    margin: 0 auto;
    width: 92%;
}
.timer-style-2 span {
    border: 2px solid #ebebeb;
    border-radius: 3px;
    color: #000;
    display: inline-block;
    font-size: 18px;
    font-weight: 500;
    padding: 7px 13px 6px;
    margin: 0 9px;
}
.timer-style-2 span p {
    color: #000;
    font-size: 13px;
    font-weight: 400;
    margin: 9px 0 0;
    position: relative;
}
.timer-style-2 span p::before {
    background-color: #efefef;
    border-radius: 100%;
    content: "";
    height: 1px;
    left: 0;
    position: absolute;
    top: -3px;
    transition: all 0.4s ease 0s;
    width: 100%;
}
.deals-btn .btn-style-2 {
    background-color: #df2121;
}
.deals-btn .btn-style-2:hover {
    background-color: #000;
}
.deals-content.text-center {
    margin: 85px -48px 0 27px;
}
.deals-img {
    margin: 0 -5px 0 -29px;
}
/* service index-book-2 */
.service-white .shop-service-content > h4 {
    color: #000;
}
.service-white.shop-service-wrapper {
    border: 1px solid #ebebeb;
}
.service-white .shop-service-content::before {
    background-color: #ebebeb;
}
.shop-service-content.service-black-color > p {
    color: #000;
}
/* footer index-book-2 */
.footer-widget-red-2 .footer-title > h4,
.footer-widget-red .footer-title > h4 {
    color: #000;
}
.footer-widget-red .footer-title.white-footer-title > h4 {
    color: #fff;
}
.copyright-red.copyright > p a,
.footer-widget-red .footer-content ul li:hover a,
.footer-widget-red .footer-contact li a:hover {
    color: #df2121;
}
.copyright-red.copyright > p a:hover {
    text-decoration: underline;
}
.footer-widget-red-2 .subscribe-form-2 form input {
    border-color: #ebebeb;
    color: #a4a4a4;
}
.footer-widget-red-2 .subscribe-form-2 form input,
.footer-widget-coffee .subscribe-form-2 form input {
    border-color: #ebebeb;
    color: #a4a4a4;
}
.footer-widget-red-2 .subscribe-form-2 form input::-moz-placeholder,
.footer-widget-coffee .subscribe-form-2 form input::-moz-placeholder {
    color: #a4a4a4;
    opacity: 1;
}
.footer-widget-red-2 .subscribe-form-2 form input::-webkit-input-placeholder,
.footer-widget-coffee .subscribe-form-2 form input::-webkit-input-placeholder {
    color: #a4a4a4;
    opacity: 1;
}
.footer-widget-red-2.footer-black-color .subscribe-form-2 form input,
.footer-widget-coffee .subscribe-form-2 form input {
    border-color: #e1e1e1;
    color: #000;
}
.footer-widget-red-2.footer-black-color .subscribe-form-2 form input::-moz-placeholder,
.footer-widget-coffee.footer-black-color .subscribe-form-2 form input::-moz-placeholder {
    color: #000;
    opacity: 1;
}
.footer-widget-red-2.footer-black-color .subscribe-form-2 form input::-webkit-input-placeholder,
.footer-widget-coffee.footer-black-color .subscribe-form-2 form input::-webkit-input-placeholder {
    color: #000;
    opacity: 1;
}
.footer-widget-red-2 .subscribe-form-2 form .clear-2 input:hover {
    background-color: #000;
    color: #fff;
}
.red-color .footer-tag ul li a,
.coffee-color .footer-tag ul li a {
    color: #a4a4a4;
}
.red-color .footer-tag ul li a:hover {
    color: #df2121;
}
.red-color .footer-tag ul li::before,
.coffee-color .footer-tag ul li::before {
    background-color: #a4a4a4;
}
.footer-black-color .footer-about > p,
.footer-black-color .footer-contact ul li,
.footer-black-color .opening-content ul li,
.footer-black-color .footer-contact li a,
.footer-black-color .footer-content ul li a,
.footer-black-color .footer-newsletter > p,
.footer-black-color.red-color .footer-tag ul li a,
.footer-black-color.copyright > p,
.footer-black-color .footer-tag ul li a {
    color: #000;
}
.footer-black-color .footer-tag ul li a:hover {
    color: #666;
}
/*---------------------------
    9. Home coffee
-----------------------------*/

/* header index-coffee */
.header-middle-bg-img {
    padding: 14px 0px;
}
.header-top-coffee .lang-curr-dropdown ul li ul li > a:hover,
.header-top-coffee .header-top-right ul li a:hover {
    color: #000;
}
.header-middle-bg-img .middle-same {
    margin-left: 25px;
}
.header-middle-bg-img .middle-same:first-child {
    margin-left: 0px;
}/*
.header-search.header-search-coffee form button {
    background-color: #174ea9;
}
.header-search.header-search-coffee form button:hover {
    color: #000;
}*/
/*.header-search.header-search-coffee form input {
    border: 2px solid #174ea9;
    color: #CCC;
    background-color: #ffffff;
}*/
/*.header-search.header-search-coffee form input[type="text"]::-moz-placeholder {
    color: #949494 !important;
    opacity: 1;
}*/

.header-cart-coffee button.icon-cart span.count-style {
    background-color: #174ea9;
}
.header-cart-coffee button.icon-cart {
    border: 2px solid #3b3232;
}
.header-cart-coffee button.icon-cart i.cart-bag {
    border-right: 1px solid #322b2c;
    color: #174ea9;
}
.header-cart-coffee button.icon-cart i.cart-down {
    color: #645b5b;
}
.header-cart-coffee .btn-style:hover,
.header-cart-coffee .btn-style:hover {
    background-color: #174ea9;
    border: 2px solid #174ea9;
}
.header-cart-coffee .shopping-cart-total > h4 span.shop-total,
.header-cart-coffee .shopping-cart-title > h4 a:hover {
    color: #174ea9;
}
.header-cart-coffee .shopping-cart-delete > a:hover {
    border: 2px solid #174ea9;
    color: #174ea9;
}
/*------ menu index-coffee -------*/
/*.menu-coffee-color .main-menu ul li a,
.menu-red-color .main-menu ul li a {
    color: #000;
}*/
.menu-coffee-color .main-menu ul li:hover > a {
    color: #d70818;
}
.menu-coffee-color .main-menu ul li ul li a {
    color: #7a7a7a;
}
.menu-coffee-color .main-menu ul li ul li a:hover {
    color: #174ea9;
}
.menu-coffee-color .main-menu ul li a i,
.menu-red-color .main-menu ul li a i {
    color: #c1c1c1;
}
.buy > a {
    color: #174ea9;
    float: right;
    font-size: 16px;
    font-weight: 500;
    padding: 14px 0 0;
}
.buy > a:hover {
    color: #000;
}
.menu-coffee-color .row div[class^="col-"] ,
.menu-byzantine-color .row div[class^="col-"] ,
.header-middle-color-15 .row div[class^="col-"] ,
.main-menu-position .row div[class^="col-"] {
    position: static;
}
/*------ slider index-coffee -------*/
.slider-content-6 h3 {
    color: #174ea9;
    font-size: 36px;
    font-weight: bold;
    /*font-family: 'Arvo', serif;*/
    margin: 0;
}
.slider-content-6 h2 {
    color: #171e26;
    /*font-family: "Arvo", serif;*/
    font-size: 60px;
    font-weight: bold;
    line-height: 55px;
    margin: 0 0 15px;
}
.slider-content-6 h4 {
    color: #000;
    font-size: 18px;
    margin: 0;
}
.slider-content-6.slider-negative-mrg {
    margin-left: -38px;
    margin-right: -37px;
}
.slider-btn.slider-btn-coffee a {
    background-color: #174ea9;
    border: 2px solid #174ea9;
}
.slider-btn.slider-btn-coffee a:hover {
    background-color: #171e26;
    border: 2px solid #171e26;
}
.owl-dot-style-3.owl-dot-coffee .owl-dot.active {
    background: #174ea9 none repeat scroll 0 0;
}
.owl-dot-style-3.owl-dot-coffee .owl-dot {
    background: #dedede none repeat scroll 0 0;
}


/*------ product index-coffee -------*/

.devita-product-coffee .product-rating i.theme-star,
.devita-product-coffee .product-content > h4 a:hover,
.devita-product-coffee.product-wrapper:hover .product-content > h4 a {
    color: #174ea9;
}
.devita-product-coffee .product-action > a.same-action:hover,
.devita-product-coffee .product-action > a.action-cart:hover,
.devita-product-coffee .product-img > span {
    background-color: #174ea9;
}
.nav-style-coffee.nav-style.owl-carousel .owl-nav div:hover ,
.product-slider-nav-2.nav-style.nav-style-coffee div:hover ,
.product-slider-nav.nav-style.nav-style-coffee div:hover {
    background-color: #174ea9;
}
/* testimonial index-coffee */
.quote-icon i {
    color: #453f3c;
    font-size: 60px;
}
.single-testimonial > p {
    color: #fff;
    font-size: 16px;
    font-style: italic;
    font-weight: 300;
    margin: 0 auto;
    width: 92%;
}
.testimonial-rating i {
    color: #fff;
    font-size: 20px;
}
.testimonial-rating {
    margin: 37px 0 18px;
}
.testimonial-rating i.theme-star-coffee {
    color: #174ea9;
}
.single-testimonial > h4 {
    color: #fff;
    font-size: 13px;
    font-weight: 500;
    text-transform: uppercase;
}
.single-testimonial > h4 span {
    color: #fff;
    font-size: 12px;
    font-weight: 400;
    margin-left: 7px;
    text-transform: capitalize;
}
.quote-icon {
    margin: 0 0 40px;
}
.testimonials-img > img {
    width: 100%;
}
.testimonial-active .owl-dot {
    background: #38343c none repeat scroll 0 0;
    border-radius: 50px;
    display: inline-block;
    height: 7px;
    margin: 0 4px;
    width: 7px;
}
.testimonial-active .owl-dot.active {
    background: #174ea9 none repeat scroll 0 0;
    height: 11px;
    position: relative;
    top: 2px;
    width: 11px;
}
.testimonial-active .owl-dots {
    margin: 33px 0 0;
    text-align: center;
}
.testimonial-active {
    padding: 0 40px 0 60px;
}
/* product index-coffee */
.devita-product-coffee .best-pro-action-2 a:hover {
    background-color: #174ea9;
}
/* discount-area index-coffee */
.coffee-discount-content > h3 {
    color: #ffffff;
    font-size: 30px;
    margin: 0;
}

.coffee-discount-btn {
    display: block;
    overflow: hidden;
}
.coffee-discount-btn a {
    border: 2px solid #4f3f33;
    border-radius: 3px;
    color: #fff;
    display: inline-block;
    float: right;
    padding: 11px 34px;
}
.coffee-discount-btn a:hover {
    border: 2px solid #fff;
    color: #000;
    background-color: #fff;
}
/* footer index-coffee */
.copyright-coffee.copyright > p a,
.footer-widget-coffee .footer-content ul li:hover a,
.footer-widget-coffee .footer-contact li a:hover,
.coffee-color .footer-tag ul li a:hover {
    color: #174ea9;
}
.footer-widget-coffee .subscribe-form-2 form .clear-2 input {
    background-color: #174ea9;
    color: #fff;
}
.footer-widget-coffee .subscribe-form-2 form .clear-2 input:hover {
    background-color: #000;
}
.footer-widget-coffee .footer-title > h4,
.footer-widget-coffee .footer-title > h4 {
    color: #000;
}

/*---------------------------
    10. Home sunglass
-----------------------------*/

/* header index-sunglass */
.content-wrapper {
    display: block;
    margin: 60px auto;
    width: 1290px;
}
.header-middle-wrapper {
    display: flex;
    justify-content: space-between;
}
.header-search-2 form input {
    background: transparent none repeat scroll 0 0;
    border: 1px solid #ebebeb;
    border-radius: 3px;
    color: #555;
    font-size: 14px;
    height: 45px;
    padding: 0 40px 0 10px;
}
.header-search-2 form input::-moz-placeholder {
    color: #555;
    opacity: 1;
}
.header-search-2 form input::-webkit-input-placeholder {
    color: #555;
    opacity: 1;
}
.header-search-2 form {
    position: relative;
}
.header-search-2 form button {
    background-color: transparent;
    border: medium none;
    color: #000;
    cursor: pointer;
    font-size: 20px;
    padding: 5px 12px;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    transition: all .3s ease 0s;
}
.header-search-2 form button:hover {
    color: #df2121;
}
.header-search-2 {
    margin-top: 2px;
}
.menu-red-color .main-menu ul li:hover > a,
.menu-red-color .main-menu ul li ul li a:hover {
    color: #df2121;
}
.menu-sunglass .main-menu nav > ul > li {
    margin: 0 24px;
}
/* slider index-sunglass */
.slider-content-5.slider-content-5-white h2 {
    color: #fff;
}
.slider-content-5.slider-content-5-white h4 {
    font-size: 18px;
    margin: 23px 0 0;
    color: #fff;
}
.slider-btn.white-color-btn a {
    border: 2px solid #fff;
    color: #fff;
}
.slider-btn.white-color-btn a:hover {
    border: 2px solid #df2121;
    color: #fff;
    background-color: #df2121;
}
.service-white.shop-service-wrapper.service-border-none {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #ebebeb;
    border-image: none;
    border-style: none none solid;
    border-width: medium medium 1px;
    padding: 17px 10px 48px;
}
/* product index-sunglass */
h3.section-title-2 {
    font-size: 30px;
    font-weight: 500;
    margin: 0;
}
.nav-style.nav-center.owl-carousel .owl-nav div {
    right: 0;
    top: 50%;
    transform: translateY(-50%);
}
.nav-style.nav-center.owl-carousel .owl-nav div.owl-prev {
    left: 0;
}
/* product index-sunglass */
.deals-content.deals-content-2 {
    margin: 0 22px 0 -40px;
}
.deals-img.deals-img-2 {
    margin: 45px 35px 0 0;
}
.deals-content-2 .timer-style-2 span {
    background-color: #fff;
    border: medium none;
    border-radius: 5px;
    padding: 7px 18px 6px;
}
.deals-btn-2 .btn-style-2 {
    padding: 17px 58px 18px;
}
/* blog index-sunglass */
.blog-img img {
    width: 100%;
}
.blog-img {
    position: relative;
    overflow: hidden;
}
.blog-categori {
    left: 0;
    position: absolute;
    right: 0;
    bottom: 25px;
}
.blog-categori > span {
    background-color: #2aa7df;
    color: #fff;
    font-size: 12px;
    padding: 2px 13px 5px;
    border-radius: 3px;
}
.blog-content > h4 {
    font-size: 18px;
    font-weight: 500;
    line-height: 24px;
    margin: 0 20px 10px;
}
.blog-content > h4 a:hover,
.blog-wrapper-2 .blog-meta ul li a:hover {
    color: #2aa7df;
}
.blog-content > p {
    color: #000;
    margin: 0 0 5px;
}
.blog-content {
    /*border-bottom: 1px solid #eeeeee;*/
    margin: 0 0 23px;
    padding: 0 0px 18px;
}

/* Compare style */

.modal-compare-width {
    max-width: 900px;
    margin: 150px auto;
    min-width: 878px;
}
.modal-body {
    display: flex;
    justify-content: space-between;
    padding: 50px;
}
#exampleCompare .close {
    color: #fff;
    cursor: pointer;
    float: right;
    font-size: 50px;
    font-weight: 700;
    line-height: 1;
    opacity: 1;
    position: absolute;
    right: 370px;
    text-shadow: none;
    top: 32px;
    transition: all 0.3s ease 0s;
}
#exampleCompare .close:hover {
    color: #ddd;
}
.table-content.compare-style th a span {
    color: #050035;
    display: inline-block;
    font-weight: 600;
    line-height: 0.81em;
    margin: 0;
    text-align: center;
}
.table-content.compare-style th p {
    font-size: 15px;
    font-weight: 400;
    margin: 0;
    text-transform: capitalize;
}
.table-content.compare-style th a {
    text-transform: capitalize;
    font-size: 14px;
}
.table-content.compare-style th a:hover {
    color: #666;
}
.table-content.compare-style th a span {
    color: #000;
    display: inline-block;
    font-size: 1em;
    font-weight: 600;
    line-height: 0.81em;
}
.table-content.compare-style th img {
    display: block;
    margin: 20px 0;
}
.table-content.table-responsive.compare-style tbody tr,
.table-content.table-responsive.compare-style thead {
    border-bottom: 1px solid #f1f1f1;
}
.table-content.table-responsive.compare-style tbody tr:last-child {
    border-bottom: 0px solid #f1f1f1;
}
.table-content.compare-style thead {
    background-color: transparent;
}
.table-content.compare-style table {
    text-align: inherit;
}
.table-content.compare-style table th {
    padding: 14px 0;
    text-align: inherit;
}
.table-content table td.compare-title h4 {
    border-top: medium none;
    color: #000;
    font-size: 15px;
    font-weight: 500;
    margin: 0;
    min-width: 205px;
    overflow: hidden;
    text-align: left;
    text-transform: capitalize;
    vertical-align: middle;
}
.table-content table td.compare-common,
.table-content table td.compare-title {
    font-size: 14px;
    padding: 14px 0;
    text-align: left;
}
.table-content.compare-style table td p {
    color: #333;
    margin: 0;
}
.table-content.compare-style th a.compare-btn {
    color: #000;
    font-size: 14px;
    text-transform: capitalize;
}
.table-content.compare-style th a.compare-btn:hover {
    color: #666;
}
.table-content.compare-style th span {
    color: #666;
    display: block;
    font-size: 15px;
    margin: 10px 0;
}
.table-content.compare-style table {
    margin: 0 0 0px;
}
.modal .close {
    color: #fff;
    float: right;
    font-size: 50px;
    font-weight: bold;
    line-height: 1;
    margin-right: 50px;
    opacity: 1;
    text-shadow: 0 1px 0 #fff;
}
.table-content.compare-style table thead tr {
    border-bottom: medium none;
}

/*---------------------------
    11. Home watch
-----------------------------*/

/* header sidebar-left-wrapper index-watch */
.sidebar-left-wrapper {
    background: #000 none repeat scroll 0 0;
    height: 100%;
    position: fixed;
    top: 0;
    transition: all 0.3s ease 0s;
    width: 300px;
    z-index: 7;
    padding: 40px 0 40px 40px;
}
.sidebar-right-wrapper {
    border-left: 1px solid #2d2d2d;
    margin-left: 300px;
}
.sidebar-menu {
    padding: 150px 0 70px;
}
.sidebar-menu ul li {
    display: block;
    list-style: outside none none;
    padding-bottom: 15px;
    position: relative;
}
.sidebar-menu ul li:last-child {
    padding-bottom: 0px;
}
.sidebar-menu ul li a {
    color: #fff;
    font-weight: 500;
    text-transform: uppercase;
    display: block;
}
.sidebar-menu ul li a span {
    float: right;
    padding-right: 20px;
    font-size: 10px;
}
.sidebar-menu nav > ul > li > ul.submenu,
.sidebar-menu nav > ul > li > ul.mega-menu {
    background: #fff none repeat scroll 0 0;
    border-top: 1px solid #dcdcdc;
    box-shadow: 0 0 7px 0.5px rgba(0, 0, 0, 0.15);
    display: block;
    left: 100%;
    padding: 20px 20px 24px;
    position: absolute;
    top: 0;
    transform: rotateX(90deg);
    transform-origin: center top 0;
    transition: all 0.5s ease 0s;
    visibility: hidden;
    width: 190px;
    z-index: 999;
}

.sidebar-menu nav > ul > li:hover > ul.submenu,
.sidebar-menu nav > ul > li:hover > ul.mega-menu {
    transform: rotateX(0deg);
    visibility: visible;
}
.sidebar-menu ul li ul li {
    padding: 0;
}
.sidebar-menu nav > ul > li > ul.mega-menu {
    padding: 33px 30px 62px 50px;
    width: 1000px;
}
.sidebar-menu nav > ul > li > ul.mega-menu > li > ul > li {
    border-right: 1px solid #ebebeb;
    display: inline-block;
    float: left;
    margin-right: 16px;
    width: 17.5%;
}

.sidebar-menu nav > ul > li > ul.mega-menu > li > ul > li:last-child {
    border-right: none;
}

.sidebar-menu ul li:hover > a {
    color: #a8741a;
}
.sidebar-menu ul li ul li a:hover {
    color: #a8741a;
    padding-left: 10px;
}
.sidebar-newsletter-title > h4 {
    color: #ffffff;
    font-size: 18px;
    margin: 0;
}
.sidebar-newsletter-title > p {
    color: #fff;
    margin: 5px 0 33px;
}
.subscribe-form-3 form input {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background: transparent none repeat scroll 0 0;
    border-color: #303030;
    border-image: none;
    border-style: none none solid;
    border-width: medium medium 1px;
    box-shadow: none;
    color: #fff;
    font-size: 13px;
    height: 45px;
    padding: 0 35px 0 0;
}
.subscribe-form-3 form {
    position: relative;
}
.subscribe-form-3 form input::-moz-placeholder {
    color: #fff;
    opacity: 1;
}
.subscribe-form-3 form input::-webkit-input-placeholder {
    color: #fff;
    opacity: 1;
}
.subscribe-form-3 .clear input {
    border: medium none;
    cursor: pointer;
    padding: 0;
    text-indent: -99999px;
    width: 20px;
}
.subscribe-form-3 .mc-form .clear {
    background: rgba(0, 0, 0, 0) url("../../assets/img/icon-img/send-2.png") no-repeat scroll right 0 center;
    bottom: 0;
    cursor: pointer;
    display: inline-block;
    padding: 0 6px;
    position: absolute;
    right: 0;
    transition: all 0.3s ease 0s;
    z-index: 999;
}
.sidebar-social ul li {
    display: inline-block;
    list-style: outside none none;
    margin-right: 2px;
}
.sidebar-social ul li:last-child {
    margin-right: 0px;
}
.sidebar-social ul li a {
    background-color: #555;
    border-radius: 50px;
    color: #fff;
    display: inline-block;
    height: 30px;
    line-height: 30px;
    text-align: center;
    width: 30px;
}
.sidebar-copyright > p {
    color: #fff;
    margin: 15px 0 0;
}
.sidebar-copyright > p a {
    color: #fff;
}
.sidebar-social-copyright {
    padding: 150px 40px 0 0;
}
/* header sidebar-right-wrapper index-watch */
.mobile-stting {
    display: none
}
.header-top-wrapper {
    display: flex;
    justify-content: space-between;
    padding: 0 30px;
}
.language-currency.lang-curr-border-3::before {
    background-color: #2d2d2d;
}
.sidebar-header-top-right {
    display: flex;
}
.header-search-3 {
    padding: 0 20px;
    border-left: 1px solid #2d2d2d;
}
.header-search-3 form input {
    background: transparent none repeat scroll 0 0;
    border: medium none;
    color: #fff;
    font-size: 13px;
    height: 47px;
    padding: 0 30px 0 0px;
    width: 250px;
}
.header-search-3 form input::-moz-placeholder {
    color: #fff;
    opacity: 1;
}
.header-search-3 form input::-webkit-input-placeholder {
    color: #fff;
    opacity: 1;
}
.header-search-3 form {
    position: relative;
}
.header-search-3 form button {
    background-color: transparent;
    border: medium none;
    color: #fff;
    cursor: pointer;
    font-size: 25px;
    padding: 0;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    transition: all .3s ease 0s;
}
button.icon-setting {
    background-color: transparent;
    border: medium none;
    color: #fff;
    cursor: pointer;
    font-size: 25px;
    padding: 0;
    transition: all .3s ease 0s;
}
.header-setting:hover button.icon-setting,
.header-search-3 form button:hover,
.single-setting-content2 li a:hover {
    color: #a8741a;
}
.header-setting {
    padding: 6px 18px 0;
    position: relative;
    border-left: 1px solid #2d2d2d;
}
.setting-wrapper {
    background: #fff none repeat scroll 0 0;
    display: none;
    padding: 17px 20px 22px;
    position: absolute;
    right: 0;
    top: 100%;
    width: 200px;
    z-index: 9999;
}
.single-setting-content ul li {
    display: block;
    list-style: outside none none;
    margin-bottom: 8px;
}
.single-setting-content ul li a {
    color: #000;
    letter-spacing: 0.2px;
}
.single-setting-content ul li a:hover {
    color: #a8741a;
    padding-left: 5px;
}
.single-setting-content2 {
    border-top: 1px solid #ddd;
    margin-top: 16px;
    padding-top: 14px;
}
h4.setting-title {
    color: #000;
    font-size: 13px;
    font-weight: bold;
    letter-spacing: 0.5px;
    margin-bottom: 15px;
    text-transform: uppercase;
}
.single-setting-content2 li {
    display: inline-block;
    margin-right: 10px;
    position: relative;
}
.single-setting-content2 li::before {
    background-color: #000;
    bottom: 9px;
    content: "";
    height: 1px;
    position: absolute;
    right: -9px;
    transition: all 0.4s ease 0s;
    width: 4px;
}
.single-setting-content2 li a {
    color: #000;
    letter-spacing: 0.2px;
    text-transform: capitalize;
}
.single-setting-content2 li:last-child::before {
    display: none;
}
.watch-cart button.icon-cart {
    border: medium none;
    padding: 0;
}
.watch-cart button.icon-cart span.count-style {
    background-color: #a8741a;
    left: -27px;
    top: 1px;
}
.watch-header-top .lang-curr-dropdown ul li ul li > a:hover {
  color: #a8741a;
}
.watch-cart button.icon-cart i.cart-bag {
    border-right: 1px solid #323232;
}
.watch-cart button.icon-cart i.cart-down {
    color: #a8741a;
}
.header-cart.watch-cart {
    border-left: 1px solid #2d2d2d;
    padding: 9px 0 0 57px;
    z-index: 999;
}
.watch-cart .btn-style:hover {
    background-color: #a8741a;
    border: 2px solid #a8741a;
}
.watch-cart .shopping-cart-total > h4 span.shop-total,
.watch-cart .shopping-cart-title > h4 a:hover {
    color: #a8741a;
}
.watch-cart .shopping-cart-delete > a:hover {
    border: 2px solid #a8741a;
    color: #a8741a;
}
/* slider index-watch */
.slider-content-7 h5 {
    color: #a8741a;
    font-size: 16px;
    margin: 0;
}
.slider-content-7 h2 {
    color: #ffffff;
    /*font-family: "Prata", serif;*/
    font-size: 60px;
    margin: 12px 0 10px;
}
.slider-content-7 p {
    color: #ddd;
    font-size: 16px;
    margin: 0 0 44px;
    width: 40%;
}
.slider-content-7 h3 {
    color: #a8741a;
    font-size: 48px;
    margin: 0;
}
.slider-content-7 h3 span {
    color: #ddd;
    font-size: 16px;
}
.slider-btn.slider-btn-watch a:hover {
    background-color: #a8741a;
    border: 2px solid #a8741a;
}
.owl-dot-style.owl-dot-watch .owl-dot.active {
    background: #a8741a none repeat scroll 0 0;
}
.owl-dot-style.owl-dot-watch .owl-dot {
    background: #3f3f3f none repeat scroll 0 0;
}
/* product index-watch */
.product-tab-list-3 a {
    color: #606060;
    margin: 0 28px;
    position: relative;
}
.product-tab-list-3 a::before {
    background-color: #535353;
    border-radius: 50px;
    content: "";
    height: 5px;
    position: absolute;
    right: -30px;
    top: 10px;
    width: 5px;
}
.product-tab-list-3 a:last-child::before {
    display: none;
}
.product-tab-list-3 a h4 {
    color: #999;
    font-size: 20px;
    /*font-family: 'Prata', serif;*/
}
.product-tab-list-3 a.active h4 {
    color: #fff;
}
.devita-product-2.devita-product-watch {
    background-color: #000;
}
.devita-product-2.devita-product-watch:hover {
    background-color: #000;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
}
.devita-product-watch .product-content > h4 a ,
.devita-product-watch .product-action-wrapper-2 > p ,
.devita-product-watch .product-rating i.theme-star {
    color: #fff
}

.devita-product-watch .product-content > span,
.devita-product-watch .product-price-wrapper > span {
    color: #ddd;
}
.devita-product-watch .product-content > h4 a:hover {
    color: #a8741a
}
.devita-product-watch .product-img > span,
.nav-style.nav-style-watch.owl-carousel .owl-nav div:hover {
    background-color: #a8741a;
}
.devita-product-watch .product-action > a.same-action:hover,
.devita-product-watch .product-action > a.action-cart:hover {
    background-color: #a8741a;
    color: #fff;
}
.nav-style.nav-style-watch.owl-carousel .owl-nav div {
    background-color: #666;
    color: #fff;
}
/* deals area index-watch */
.section-bg-black-2 {
    background-color: #000;
    position: relative;
    z-index: 1;
}
.deals-content-3 > h2 {
    color: #fff;
    /*font-family: "Prata", serif;*/
    font-size: 48px;
    margin: 5px 0 11px;
}
.deals-content-3 > h2 span {
    color: #a8741a;
}
.deals-content-3 .timer-style-2 span {
    color: #a8741a;
    border: 2px solid #2d2d2d;
}
.deals-content-3 .timer-style-2 span p {
    color: #fff;
}
.deals-content-3 .timer-style-2 span p::before {
    background-color: #bbb;
    height: 1px;
    top: -4px;
}
.deals-btn-3 .btn-style {
    border: 2px solid #a8741a;
    color: #a8741a;
    display: inline-block;
    padding: 14px 50px 12px;
}
.deals-btn-3 .btn-style:hover {
    background-color: #a8741a;
    border: 2px solid #a8741a;
    color: #fff;
    border-radius: 3px;
}
.deals-content-3 > p {
    color: #fff;
    font-size: 16px;
    margin: 0;
}
.deals-content-3 {
    margin-left: -30px;
}
.deals-content-3 > h2 {
    font-size: 35px;
}
.section-title-3 {
    color: #fff;
    /*font-family: "Prata", serif;*/
    font-size: 20px;
    margin: 0;
    display: inline-block;
}
.single-product-bundle-watch .product-content > h4 a {
    color: #fff;
}
.single-product-bundle-watch .product-content > h4 a:hover {
    color: #a8741a;
}
.best-selling-active-4.nav-style.owl-carousel .owl-nav div {
    top: -70px;
}
.best-selling-active-3 .single-product-wrapper {
    margin: 0 0 26px;
}
.best-selling-active-3 .single-product-wrapper:last-child {
    margin: 0 0 0px;
}
.single-product-bundle-watch .product-content > span {
    color: #ddd;
}
.best-selling-active-3.nav-style.owl-carousel .owl-nav div {
  top: -75px;
}
/* blog area index-watch */
.blog-slider-active-watch.nav-style.owl-carousel .owl-nav div {
    top: -70px;
}
.blog-content-2 > h4 {
    color: #ffffff;
    font-size: 16px;
    line-height: 18px;
    margin: 0 0 9px;
}
.blog-content-2 > h4 a {
    color: #ffffff;
}
.blog-content-2 .blog-meta ul li,
.blog-content-2 .blog-meta ul li a {
    color: #ddd;
}
.blog-content-2 .blog-meta ul li::before {
    background-color: #ddd;
}
.blog-slider-active-2.nav-style.owl-carousel .owl-nav div {
    top: -75px;
}
/* newsletter area index-watch */
.newsletter-title > h4 {
    color: #fff;
    /*font-family: "Prata", serif;*/
    font-size: 24px;
    margin: 0 0 8px;
}
.newsletter-title > p {
    color: #fff;
    margin: 0;
}
.subscribe-form-4 form input {
    background: #1f1f1f none repeat scroll 0 0;
    border: 1px solid #2d2d2d;
    color: #fff;
    font-size: 12px;
    height: 50px;
    padding: 0 175px 0 20px;
}
.subscribe-form-4 form input::-moz-placeholder {
    color: #fff;
    opacity: 1;
}
.subscribe-form-5 form input::-moz-placeholder {
    color: #000;
    opacity: 1;
}
.subscribe-form-4 form input::-webkit-input-placeholder {
    color: #fff;
    opacity: 1;
}
.subscribe-form-5 form input::-webkit-input-placeholder {
    color: #000;
    opacity: 1;
}
.subscribe-form-4 form,
.subscribe-form-5 form {
    position: relative;
}
.subscribe-form-4 form .clear-3,
.subscribe-form-5 form .clear-4 {
    position: absolute;
    right: 0;
    top: 0;
}
.subscribe-form-4 form .clear-3 input {
    width: inherit;
    padding: 0 47px;
    background-color: #a8741a;
    color: #fff;
    font-size: 13px;
    text-transform: uppercase;
    font-weight: 500;
    border-radius: 5px;
    cursor: pointer;
}
.subscribe-form-4 form .clear-3 input:hover {
    background-color: #fff;
    color: #a8741a;
}
/* footer area index-watch */
.header-top-yellow .lang-curr-dropdown ul li ul li > a:hover,
.header-top-yellow .lang-curr-dropdown ul li a:hover,
.header-top-yellow .header-top-right ul li a:hover {
    color: #f1ac06;
}
.footer-contact-2 ul li {
    display: inline-block;
    margin: 0 10px;
    list-style: none;
    color: #fff;
    position: relative;
}
.footer-contact-2 ul li a {
    color: #fff;
}
.footer-contact-2 ul li a:hover,
.blog-content-2 .blog-meta ul li a:hover,
.blog-content-2 > h4 a:hover {
    color: #a8741a;
}
.footer-contact-2 ul li::before {
    background-color: #fff;
    content: "";
    height: 1px;
    position: absolute;
    right: -19px;
    top: 10px;
    transform: rotate(-58deg);
    transition: all 0.4s ease 0s;
    width: 13px;
}
.footer-contact-2 ul li:last-child::before {
    display: none;
}

/*---------------------------
    12. Home construction
-----------------------------*/

/* header area index-construction */
.language-currency.lang-curr-border-4::before {
    background-color: #464749;
}
.header-search-4 {
    margin-top: 2px;
}
.header-search-4 form input {
    background-color: rgba(255, 255, 255, 0.1);
    border: medium none;
    border-radius: 50px;
    color: #fff;
    font-size: 14px;
    height: 45px;
    padding: 0 50px 0 18px;
    width: 330px;
}
.header-search-4 form input::-moz-placeholder {
    color: #fff;
    opacity: 1;
}
.header-search-4 form input::-webkit-input-placeholder {
    color: #fff;
    opacity: 1;
}
.header-search-4 form {
    position: relative;
}
.header-search-4 form button {
    background-color: transparent;
    border: medium none;
    color: #f1ac06;
    cursor: pointer;
    font-size: 20px;
    padding: 0 20px;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    transition: all .3s ease 0s;
}
.header-search-4 form button:hover {
    color: #fff;
}
.construction-cart button.icon-cart {
    background-color: rgba(255, 255, 255, 0.1);
    border: medium none;
    border-radius: 50px;
    padding: 10px 12px 7px;
}
.construction-cart button.icon-cart span.count-style {
    background-color: #f1ac06;
    left: -20px;
    top: 11px;
}
.construction-cart button.icon-cart i.cart-bag {
    border-right: 1px solid #4e4842;
}
.construction-cart button.icon-cart i.cart-down {
    color: #6d6d6d;
}
.construction-cart .btn-style:hover {
    background-color: #f1ac06;
    border: 2px solid #f1ac06;
}
.construction-cart .shopping-cart-total > h4 span.shop-total,
.construction-cart .shopping-cart-title > h4 a:hover {
    color: #f1ac06;
}
.construction-cart .shopping-cart-delete > a:hover {
    border: 2px solid #f1ac06;
    color: #f1ac06;
}
.header-bottom-yellow .main-menu ul li a i {
    color: #fff;
}
.header-bottom-yellow .main-menu ul li ul li a:hover {
    color: #f1ac06;
}
.header-bottom-yellow {
    background-image: url("../img/icon-img/header-shape.png");
    background-position: center top;
    background-repeat: no-repeat;
}
/* slider area index-construction */
.construction-slider .slider-content-4 h2 {
    font-size: 60px;
}
.construction-slider .slider-btn-5 a {
    background-color: #f1ac06;
}
.construction-slider .slider-btn-5 a:hover {
    background-color: #000;
}
.slider-single-img-1,
.slider-single-img-2,
.slider-single-img-3 {
    position: relative;
}
.owl-carousel .owl-item .slider-single-img-1 img,
.owl-carousel .owl-item .slider-single-img-2 img,
.owl-carousel .owl-item .slider-single-img-3 img {
    width: auto;
}
.slider-single-img-1 img {
    bottom: -96px;
    position: absolute;
    right: -250px;
}
.slider-single-img-2 > img {
    bottom: -161px;
    position: absolute;
    right: -72px;
    width: auto;
}
.slider-single-img-3 > img {
    bottom: -120px;
    position: absolute;
    right: 26px;
    width: auto;
}
.owl-dot-style.owl-dot-yellow .owl-dot.active {
    background: #f1ac06 none repeat scroll 0 0;
}
.owl-dot-style.owl-dot-yellow .owl-dot {
    background: #dadada none repeat scroll 0 0;
}
.slider-content-4.construction-content-2 h2 {
    margin: 12px 0 43px;
}
.slider-content-4.construction-content-1 h2 {
    margin: 12px 0 25px;
}
.slider-content-4.construction-content-3 h2 {
    margin: 12px 0 35px;
}
/* service area index-construction */
.shop-service-wrapper.service-construction {
    border: medium none;
}
.service-construction .shop-service-content > h4 {
    color: #000;
}
.service-construction .shop-service-content > p {
    color: #a4a4a4;
}
.service-construction .shop-service-content::before {
    background-color: #ebebeb;
}
/* product area index-construction */
.product-tab-list.tab-list-yellow > a.active h4 {
    border: 2px solid #f1ac06;
    color: #f1ac06;
}
.devita-product-yellow .product-img > span {
    background-color: #f1ac06;
}
.devita-product-yellow .product-rating i.theme-star,
.devita-product-yellow .product-content > h4 a:hover {
    color: #f1ac06;
}
.devita-product-yellow .product-action > a.same-action:hover,
.devita-product-yellow .product-action > a.action-cart:hover,
.devita-product-yellow .product-img > span,
.devita-product-yellow .best-pro-action-2 a:hover {
    background-color: #f1ac06;
}
.nav-style-yellow.nav-style.owl-carousel .owl-nav div:hover ,
.product-slider-nav.nav-style.nav-style-yellow div:hover {
    background-color: #f1ac06;
}
.devita-product-yellow .product-img-slider .cr-navigation:hover {
    background: rgba(241, 172, 6, 0.8) none repeat scroll 0 0;
}
/* construction-discount index-construction */
.construction-discount-content h3 {
    color: #ffffff;
    font-size: 30px;
    margin: 0 0 8px;
}
.construction-discount-content p {
    color: #ffffff;
    font-size: 18px;
    margin: 0;
}
.construction-discount-btn .btn-style {
    border: 2px solid rgba(255, 255, 255, .5);
    border-radius: 3px;
    color: #ffffff;
    display: inline-block;
    float: right;
    font-size: 14px;
    padding: 14px 34px 12px;
}
.construction-discount-btn .btn-style:hover {
    background-color: #fff;
    color: #000;
}
/* footer index-construction */
.footer-widget-construction .subscribe-form-2 form input {
    color: #ddd;
}
.footer-widget-construction .subscribe-form-2 form input::-moz-placeholder {
    color: #ddd;
    opacity: 1;
}
.footer-widget-construction .subscribe-form-2 form input::-webkit-input-placeholder {
    color: #ddd;
    opacity: 1;
}
.footer-widget-construction .subscribe-form-2 form .clear-2 input {
    background-color: #f1ac06;
    color: #fff;
}
.footer-widget-construction .subscribe-form-2 form .clear-2 input:hover {
    background-color: #fff;
    color: #000;
}
.copyright-construction.copyright > p {
    margin: 3px 0 0;
}
.copyright-construction.copyright > p a {
    color: #fff;
}

/*---------------------------
    13. Home jewelry
-----------------------------*/

/* notification index-jewelry */
.notification-content-2 > p {
    color: #a96b6b;
    font-size: 13px;
    margin: 0;
}
.notification-content-2 > p a {
    color: #df2121;
}
.notification-content-2 > p a:hover {
    color: #000;
}
.notification-icon.notification-icon-jewelry button {
    color: #df2121;
}
.notification-icon.notification-icon-jewelry button:hover {
    color: #000;
}
/* header index-jewelry */
.menu-jewelry .main-menu ul li {
    margin: 0 24px;
}
.menu-jewelry .main-menu ul li ul li {
    margin: 0 0px;
}
.menu-jewelry .main-menu ul li ul > li.mega-menu-title {
    margin: 0 0 17px;
}
.menu-jewelry .main-menu ul li ul li a {
    color: #7a7a7a;
}
/* slider index-jewelry */
.slider-content-8 h5,
.slider-content-8 p {
    color: #fff;
    font-size: 16px;
    margin: 0;
}
.slider-content-8 h2 {
    color: #fff;
   /* font-family: "Prata", serif;*/
    font-size: 60px;
    margin: 10px 0 12px;
}
/* service index-jewelry */
.shop-service-jewelry .shop-service-wrapper {
    border: none;
}
.shop-service-content > p {
    color: #ddd;
}
/* offery area index-jewelry */
.jewelry-offery-content > h5 {
    margin: 0;
    font-size: 16px;
}
.jewelry-offery-content > h2 {
    /*font-family: "Prata", serif;*/
    font-size: 60px;
    margin: 15px 0 16px;
}
.jewelry-offery-content > p {
    color: #000;
    font-size: 16px;
    font-weight: 300;
    margin: 0 auto 31px;
    width: 81%;
}
.jewelry-offery-btn .btn-style {
    border: 2px solid #000;
    padding: 14px 35px 12px;
    border-radius: 3px;
    display: inline-block;
}
.jewelry-offery-btn .btn-style:hover {
    border: 2px solid #000;
    background-color: #000;
    color: #fff;
}
/* newsletter area index-jewelry */
.newsletter-border {
    border: 10px solid #f4f4f4;
}
.newsletter-title-2 h3 {
    /*font-family: "Prata", serif;*/
    font-size: 24px;
    margin: 0 0 8px;
}
.newsletter-title-2 p {
    font-size: 14px;
    color: #5a5a5a;
    margin: 0;
}
.subscribe-form-5 form input {
    background: transparent;
    border: 1px solid #ebebeb;
    color: #5a5a5a;
    font-size: 12px;
    height: 50px;
    padding: 0 175px 0 20px;
    border-radius: 5px;
}
.subscribe-form-5 form .clear-4 input {
    background-color: #df2121;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    font-size: 13px;
    font-weight: 500;
    padding: 0 47px;
    text-transform: uppercase;
    width: inherit;
}
.subscribe-form-5 form .clear-4 input:hover {
    background-color: #000;
}
/* best selling area index-jewelry */
.section-title-4 {
    color: #000;
    /*font-family: "Prata", serif;*/
    font-size: 24px;
    margin: 0;
    display: inline-block;
}
.single-product-bundle-jewelry .product-content > span {
    color: #444;
}
/* blog area index-jewelry */
.blog-content-3 > h4 {
    /*font-family: "Prata", serif;*/
    font-size: 18px;
    line-height: 22px;
    margin: 0 0 4px;
}
.blog-content-3 > h4 a:hover,
.blog-content-3 .blog-meta ul li a:hover {
    color: #df2121;
}

/*---------------------------
    14. Home cycle
-----------------------------*/

/* header */
.top-yellowgreen-color .lang-curr-dropdown ul li ul li > a:hover,
.top-yellowgreen-color.header-top-color-2 .header-top-right ul li a:hover {
    color: #9bb70d;
}

.middle-yellowgreen-color button.icon-cart span.count-style,
.middle-yellowgreen-color .header-search form button {
    background-color: #9bb70d;
}
.middle-yellowgreen-color button.icon-cart i.cart-bag {
    border-right: 1px solid #ebebeb;
    color: #9bb70d;
}
.middle-yellowgreen-color .btn-style:hover {
    background-color: #9bb70d;
    border: 2px solid #9bb70d;
}
.middle-yellowgreen-color .shopping-cart-total > h4 span.shop-total,
.middle-yellowgreen-color .shopping-cart-title > h4 a:hover {
    color: #9bb70d;
}
.middle-yellowgreen-color .shopping-cart-delete > a:hover {
    border: 2px solid #9bb70d;
    color: #9bb70d;
}
/* menu index-cycle */
.yellowgreen-color .main-menu.main-border nav > ul > li > a::before,
.yellowgreen-color .main-menu.main-border nav > ul > li > a.menu-border::after {
    background-color: #ebebeb;
}
.yellowgreen-color .main-menu nav > ul > li > a {
    color: #000;
    font-size: 18px;
    font-weight: 500;
    /*font-family: 'Teko', sans-serif;*/
    line-height: 54px;
    padding-top: 4px;
}
.yellowgreen-color .main-menu ul li a i {
    color: #a4a4a4;
}
.yellowgreen-color .main-menu ul li ul li a:hover ,
.yellowgreen-color .main-menu ul li:hover > a {
    color: #9bb70d;
}



/* slider index-cycle */
.slider-content-9 h2 {
    font-size: 80px;
    line-height: 60px;
    margin: 0;
    /*font-family: 'Teko', sans-serif;*/
}
.slider-content-9 h3 {
    color: #9bb70d;
    /*font-family: "Teko", sans-serif;*/
    font-size: 48px;
    font-weight: 500;
    margin: 33px 0 0px;
}
.slider-content-9 h3 span {
    font-size: 30px;
    color: #000;
    font-weight: 400;
    /*font-family: 'Teko', sans-serif;*/
}
.slider-btn-cycle a {
    background-color: #9bb70d;
    border: 2px solid #9bb70d;
    border-radius: 5px;
    color: #fff;
    display: inline-block;
    /*font-family: "Teko", sans-serif;*/
    font-size: 18px;
    font-weight: 500;
    padding: 10px 48px 7px;
    text-transform: uppercase;
}
.owl-dot-style-2.owl-dot-yellowgreen .owl-dot {
    background: #464646 none repeat scroll 0 0;
}
.owl-dot-style-2.owl-dot-yellowgreen .owl-dot.active {
    background: #fff none repeat scroll 0 0;
}
.owl-dot-style-2.owl-dot-yellowgreen .owl-dots {
    bottom: 40px;
}
/* product index-cycle */
.cycle-product .row {
    margin-left: 0px;
    margin-right: 0px;
}
.cycle-product .row div[class^="col-"] {
    padding-left: 0px;
    padding-right: 0px;
}
.devita-product-yellowgreen .product-action > a.same-action:hover,
.devita-product-yellowgreen .product-action > a.action-cart:hover,
.devita-product-yellowgreen .product-img > span,
.devita-product-yellowgreen .best-pro-action-2 a:hover {
    background-color: #9bb70d;
}
.devita-product-yellowgreen .product-img-slider .cr-navigation:hover {
    background: rgba(155, 183, 13, 0.8) none repeat scroll 0 0;
}
.product-tab-list.tab-list-yellowgreen > a.active h4 {
    border: 2px solid #9bb70d;
    color: #9bb70d;
}
.devita-product-yellowgreen .product-rating i.theme-star,
.devita-product-yellowgreen .product-content > h4 a:hover {
    color: #9bb70d;
}
.devita-product-2.devita-product-yellowgreen .list-col .gridview {
  padding: 0 28px 30px;
}
.product-slider-nav.nav-style.nav-style-yellowgreen {
  margin-top: -55px;
}


/* banner index-cycle */
.banner-content > h4 {
    color: #fff;
    font-size: 24px;
    text-transform: uppercase;
    /*font-family: "Teko", sans-serif;*/
    margin: 0;
    position: relative;
}
.banner-content > h4::before {
    bottom: -24px;
    content: url("../../assets/img/icon-img/shape.png");
    left: 0;
    position: absolute;
}
.banner-content > h2 {
    color: #fff;
    font-family: "Teko", sans-serif;
    font-size: 80px;
    line-height: 60px;
    margin: 47px 0 32px;
}
.banner-content > h3 {
    color: #9bb70d;
    /*font-family: "Teko", sans-serif;*/
    font-size: 48px;
    font-weight: 500;
    margin: 0;
}
.banner-content > h3 span {
    color: #fff;
    font-size: 30px;
    font-weight: 400;
}
.banner-btn .btn-style-2 {
    background-color: #85a700;
    /*font-family: "Teko", sans-serif;*/
    font-size: 18px;
    font-weight: 500;
    padding: 17px 48px 15px;
}
.banner-btn .btn-style-2:hover {
    background-color: #fff;
    color: #000;
}
/* best selling area index-cycle */
.nav-style-yellowgreen.nav-style.owl-carousel .owl-nav div:hover,
.product-slider-nav.nav-style.nav-style-yellowgreen div:hover {
    background-color: #85a700;
}
.bestselling-cycle-active.nav-style.owl-carousel .owl-nav div {
    top: -53px;
}
.product-slider-style-2 .devita-product-yellowgreen .product-img > span {
    left: 10px;
    top: 10px;
}
.cycle-section-title .section-title {
    /*font-family: "Teko", sans-serif;*/
    font-size: 24px;
    text-transform: uppercase;
}
/* blog area index-cycle */
.cycle-blog-wrapper .blog-categori > span {
    background-color: #9bb70d;
}
.cycle-blog-wrapper .blog-content > h4 {
    font-size: 24px;
    /*font-family: "Teko", sans-serif;*/
    margin: 0 40px 10px;
}
.blog-slider-active-3.nav-style.owl-carousel .owl-nav div {
    top: -95px;
}
.cycle-blog-wrapper .blog-content > h4 a:hover,
.blog-wrapper-2.cycle-blog-wrapper .blog-meta ul li a:hover {
    color: #9bb70d;
}
/* footer area index-cycle */
.footer-widget-yellowgreen .subscribe-form-2 form .clear-2 input {
    background-color: #9bb70d;
    color: #fff;
    font-size: 18px;
    /*font-family: "Teko", sans-serif;*/
    padding: 14px 48px 12px;
}
.footer-widget-yellowgreen .subscribe-form-2 form .clear-2 input:hover {
    background-color: #fff;
    color: #000;
}

/*---------------------------
    15. Home sports
-----------------------------*/

/* header area */
.custom-container {
    margin-left: auto;
    margin-right: auto;
    padding-left: 15px;
    padding-right: 15px;
    width: 1260px;
}
.header-middle-sports .header-contact-icon i,
.header-middle-sports .header-contact-content > p {
    color: #000;
}
.header-top-color-4 .language-currency span,
.header-top-color-4 .lang-curr-dropdown ul li a {
    color: #a5a5a5;
}
.language-currency.lang-curr-border-5::before {
    background-color: #463554;
}
.header-top-color-4 .header-top-right ul li a {
    color: #a5a5a5;
}
.header-top-color-4 .header-top-right ul li a:hover {
    color: #fff;
}
.header-top-color-4 .lang-curr-dropdown ul li ul li > a:hover {
    color: #f2640a;
}
.header-middle-sports {
    padding: 40px 30px;
}
.header-middle-sports .header-cart:hover button.icon-cart i.cart-bag,
.header-middle-sports .header-cart:hover > button.icon-cart span.count-amount {
    color: #f2640a;
}
.header-bottom-orange .main-menu nav > ul > li > a {
    color: #000;
    /*font-family: "Teko", sans-serif;*/
    font-size: 18px;
    font-weight: 500;
    padding-top: 2px;
}
.header-bottom-orange .main-menu ul li:hover > a {
    color: #f2640a;
}
.header-bottom-orange .main-menu ul li ul li a:hover {
    color: #f2640a;
}
.header-bottom-orange .main-menu ul li a i {
    color: #a4a4a4;
}
.header-middle-color-6 button.icon-cart span.count-style,
.header-middle-color-6 .header-search form button {
    background-color: #f2640a;
}
.header-middle-color-6 .header-search form button:hover {
    background-color: #000;
    color: #fff;
}
.header-middle-color-6 button.icon-cart i.cart-bag {
    border-right: 1px solid #ebebeb;
    color: #f2640a;
}
.header-middle-color-6 button.icon-cart i.cart-down {
    color: #645b5b;
}
.header-middle-color-6 .btn-style:hover {
    background-color: #f2640a;
    border: 2px solid #f2640a;
}
.header-middle-color-6 .shopping-cart-total > h4 span.shop-total,
.header-middle-color-6 .shopping-cart-title > h4 a:hover {
    color: #f2640a;
}
.header-middle-color-6 .shopping-cart-delete > a:hover {
    border: 2px solid #f2640a;
    color: #f2640a;
}
/* slider area index-sports */
.slider-banner {
    margin-left: -100px;
}
.slider-banner h2 {
    color: #fff;
    /*font-family: "Teko", sans-serif;*/
    font-size: 100px;
    margin: 0;
    line-height: 1;
}
.slider-banner h2 span {
    color: #f2640a;
}
.slider-banner > p {
    color: #fff;
    font-size: 18px;
    margin: 3px auto 41px;
    width: 60%;
}
.slider-banner > h4 {
    font-weight: 500;
    color: #f2640a;
    font-size: 48px;
    margin: 0;
    /*font-family: "Teko", sans-serif;*/
}
.slider-banner > h4 span {
    font-weight: 400;
    color: #fff;
    font-size: 30px;
}
.slider-btn.orange-color a {
    background-color: #f2640a;
    border: 2px solid #f2640a;
    /*font-family: "Teko", sans-serif;*/
    font-size: 18px;
    padding: 11px 48px 8px;
}
.slider-btn.orange-color a:hover {
    background-color: #fff;
    border: 2px solid #fff;
    color: #000;
}
/* banner area index-sports */
.banner-negative-mrg {
    margin-top: -105px;
    background-color: #fff;
    padding: 30px 30px 0;
    border-radius: 5px;
}
/* product area index-sports */
.product-tab-list.tab-list-orange > a.active h4 {
    border: 2px solid #f2640a;
    color: #f2640a;
}
.devita-product-orange .product-action > a.same-action:hover,
.devita-product-orange .product-action > a.action-cart:hover,
.devita-product-orange .product-img > span,
.devita-product-orange .best-pro-action-2 a:hover {
    background-color: #f2640a;
}
.devita-product-orange .product-img-slider .cr-navigation:hover {
    background: rgba(242, 100, 10, 0.8) none repeat scroll 0 0;
}
.devita-product-orange .product-rating i.theme-star,
.devita-product-orange .product-content > h4 a:hover {
    color: #f2640a;
}
/* product overview area index-sports */
.product-overview-content h3 {
    /*font-family: "Teko", sans-serif;*/
    font-size: 24px;
    margin: 0;
    position: relative;
    display: inline-block;
}
.product-overview-content h3::before {
    bottom: -24px;
    content: url("../../assets/img/icon-img/shape-2.png");
    left: 50%;
    position: absolute;
    transform: translateX(-50%);
}
.product-overview-content h2 {
    /*font-family: "Teko", sans-serif;*/
    font-size: 80px;
    line-height: 60px;
    margin: 68px 0 28px;
}
.product-overview-content p {
    font-size: 14px;
    margin: 0;
    color: #000;
    font-style: italic;
}
.product-overview-content p span {
    color: #f2640a;
}
.product-overview-btn .btn-style-2 {
    background-color: #f2640a;
    border-radius: 3px;
    /*font-family: "Teko", sans-serif;*/
    font-size: 18px;
    padding: 17px 48px 15px;
}
.product-overview-btn .btn-style-2:hover {
    background-color: #000;
    color: #fff;
}
.product-overview-img {
    overflow: hidden;
}
.product-overview-img img,
.blog-img img {
    transition: all 1.5s ease 0s;
    width: 100%;
}
.product-overview-wrapper:hover .product-overview-img img,
.blog-wrapper-2:hover .blog-img img {
    transform: scale(1.2);
}
/* best selling area index-sports */
.nav-style-orange.nav-style.owl-carousel .owl-nav div:hover ,
.product-slider-nav-2.nav-style.nav-style-orange div:hover {
    background-color: #f2640a;
}
/* blog selling area index-sports */
.orange-blog-wrapper .blog-categori > span {
    background-color: #f2640a;
}
.orange-blog-wrapper .blog-content > h4 {
    /*font-family: "Teko", sans-serif;*/
    font-size: 24px;
    margin: 0 40px 10px;
}
.orange-blog-wrapper .blog-content > h4 a:hover,
.blog-wrapper-2.orange-blog-wrapper .blog-meta ul li a:hover {
    color: #f2640a;
}
/* services area index-sports */
.orange-services .shop-service-wrapper {
    padding: 35px 10px;
}
.orange-services .shop-service-content > h4,
.yellowgreen-services .shop-service-content > h4 {
    font-size: 18px;
    /*font-family: "Teko", sans-serif;*/
}
/* footer area index-sports */
.footer-widget-orange .subscribe-form-2 form .clear-2 input {
    background-color: #f2640a;
    color: #fff;
    /*font-family: "Teko", sans-serif;*/
    font-size: 18px;
    padding: 14px 48px 12px;
}
.footer-widget-orange .subscribe-form-2 form .clear-2 input:hover {
    background-color: #fff;
    color: #000;
}
.footer-title.different-font > h4 {
    font-size: 24px;
    /*font-family: "Teko", sans-serif;*/
}
.orange-color .copyright > p a {
    color: #f2640a;
}

/*---------------------------
    16. Home fashion
-----------------------------*/

.header-top-color-3.header-top-fashion .lang-curr-dropdown ul li ul li > a:hover,
.header-top-color-3.header-top-fashion .lang-curr-dropdown ul li a:hover,
.header-top-color-2.header-top-color-3.header-top-fashion .header-top-right ul li a:hover {
    color: #cc2121;
}
.header-search-5 {
    margin-top: 2px;
}
.header-search-5 form input {
    background: transparent none repeat scroll 0 0;
    border: 1px solid #ebebeb;
    border-radius: 50px;
    color: #000;
    font-size: 13px;
    padding: 0 50px 0 15px;
    width: 330px;
}
.header-search-5 form input::-moz-placeholder {
    color: #000;
    opacity: 1;
}
.header-search-5 form input::-webkit-input-placeholder {
    color: #000;
    opacity: 1;
}
.header-search-5 form {
    position: relative;
}
.header-search-5 form button {
    background: transparent none repeat scroll 0 0;
    border: medium none;
    color: #000;
    cursor: pointer;
    font-size: 20px;
    padding: 3px 20px;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    transition: all .3s ease 0s;
}
.header-search-5 form button:hover {
    color: #cc2121;
}
.header-middle-color-7 button.icon-cart {
    background-color: #cc2121;
    border: medium none;
    border-radius: 50px;
    padding: 8px 12px 5px;
}
.header-middle-color-7 button.icon-cart span.count-style {
    background-color: #f1ac06;
    left: -19px;
    top: 9px;
}
.header-middle-color-7 button.icon-cart i.cart-bag {
    border-right: 1px solid #d64d4d;
}
.header-middle-color-7 button.icon-cart i.cart-down {
    color: #ee9595;
}
.header-middle-color-7 .shopping-cart-green .btn-style:hover {
    background-color: #cc2121;
    border: 2px solid #cc2121;
    color: #fff;
}
.header-middle-color-7 .shopping-cart-total > h4 span.shop-total,
.header-middle-color-7 .shopping-cart-title > h4 a:hover {
    color: #cc2121;
}
.header-middle-color-7 .shopping-cart-delete > a:hover {
    border: 2px solid #cc2121;
    color: #cc2121;
}
.header-middle-color-7 .header-cart {
    margin-top: 2px;
}
.header-bottom-red .main-menu {
    border-radius: 3px;
}
.header-bottom-red .main-menu ul li a {
    color: #000;
}
.header-bottom-red .main-menu ul li {
    margin-right: 40px;
}
.header-bottom-red .main-menu ul li ul li {
    margin-right: 0px;
}
.header-bottom-red .main-menu ul li ul li a {
    color: #7a7a7a;
}
.header-bottom-red .main-menu ul li a i {
    color: #bababa;
}
.header-bottom-red .main-menu ul li:hover > a {
    color: #666;
}
.header-bottom-red .main-menu ul li ul li a:hover {
    color: #cc2121;
}
/* shop-service index-fashion */
.shop-fashion.shop-service-area {
    padding: 13px 0 13px;
}
.single-shop-service > h5 {
    color: #000;
    font-size: 12px;
    margin: 0;
    text-transform: uppercase;
}
.single-shop-service > h5 span {
    color: #cc2121;
}
.shop-service-border {
    position: relative;
}
.shop-service-border::before {
    background-color: #ebebeb;
    content: "";
    height: 20px;
    position: absolute;
    right: -15px;
    top: -4px;
    width: 1px;
}
.shop-service-border:last-child::before {
    display: none;
}
/* slider index-fashion */
.slider-content-10 h5 {
    color: #ffffff;
    font-size: 18px;
}
.slider-content-10 h2 {
    color: #ffffff;
    /*font-family: "Prata", serif;*/
    font-size: 60px;
    line-height: 60px;
    margin: 16px 0 32px;
}
.slider-content-10.slider-content-10-second h2 {
    margin: 16px 0 31px;
    color: #000;
}
.slider-content-10 p {
    color: #ffffff;
    font-size: 18px;
    font-weight: 300;
    margin: 0;
}
.slider-content-10.slider-content-10-second p,
.slider-content-10.slider-content-10-second h5 {
    color: #000;
}
.slider-content-10 .slider-btn-5 a {
    background-color: #fff;
    border-radius: 50px;
    color: #000;
    padding: 18px 37px;
}
.slider-content-10 .slider-btn-5 a:hover {
    background-color: #cc2121;
    color: #fff;
}
/* shop service index-fashion */
.shop-service-content-3 {
    position: relative;
}
.shop-service-content-3 > h4 {
    color: #000;
    font-size: 14px;
    font-weight: 500;
    margin: 0 0 2px;
}
.shop-service-content-3 > p {
    color: #000;
    font-size: 13px;
    line-height: 18px;
    margin: 0;
}
.shop-service-content-3::before {
    background-color: #ebebeb;
}
/* product index-fashion */
.devita-product-red-2.nav-style.owl-carousel .owl-nav div {
    border-radius: 50px;
}
.devita-product-red-2.nav-style.owl-carousel .owl-nav div:hover ,
.product-slider-nav.nav-style.nav-style-fashion div:hover ,
.product-slider-nav-2.nav-style.nav-style-fashion div:hover {
    background-color: #cc2121;
}

.product-slider-nav.nav-style.nav-style-fashion div ,
.product-slider-nav-2.nav-style.nav-style-fashion div {
    border-radius: 50px;
}
.devita-product-red-2 .product-action > a.same-action:hover,
.devita-product-red-2 .product-action > a.action-cart:hover,
.devita-product-red-2 .product-img > span {
    background-color: #cc2121;
}
.devita-product-red-2 .product-rating i.theme-star,
.devita-product-red-2 .product-content > h4 a:hover {
    color: #cc2121;
}
.product-slider-nav-2.nav-style.nav-style-fashion {
    margin-top: -38px;
}
/* ourwork index-fashion */
.our-work {
    margin: 0 -35px;
}
.our-work > h3 {
    color: #000;
    /*font-family: "Prata", serif;*/
    font-size: 36px;
    font-weight: 400;
    line-height: 38px;
    margin: 0;
}
.our-work > h3.light-style {
    opacity: .08;
}
.fashion-footer .footer-widget-red .subscribe-form-2 form .clear-2 input {
    background-color: #cc2121;
    border-radius: 50px;
    color: #fff;
}
.fashion-footer .copyright-red.copyright > p a {
    color: #cc2121;
}
.fashion-footer .copyright > p {
    color: #5a5a5a;
}
.fashion-footer .copyright > p a:hover {
    text-decoration: underline;
}
.fashion-footer .copyright > p a {
    color: #cc2121;
}

/*---------------------------
    17. Home game
-----------------------------*/

/* header */
.header-search-4.header-search-4-red form button {
    color: #df2121;
}
.header-search-4.header-search-4-red form button:hover {
    color: #fff;
}
.construction-cart.game-cart button.icon-cart span.count-style {
    background-color: #df2121;
}
.construction-cart.game-cart .shopping-cart-total > h4 span.shop-total,
.construction-cart.game-cart .shopping-cart-title > h4 a:hover {
    color: #df2121;
}
.construction-cart.game-cart .btn-style:hover {
    background-color: #df2121;
    border: 2px solid #df2121;
}
.construction-cart .shopping-cart-delete > a:hover {
    border: 2px solid #df2121;
    color: #df2121;
}
/* slider index-game */
.game-slider .owl-carousel .owl-item img {
    display: inline-block;
    width: auto;
}
/* product index-game */
.section-bg-black {
    background-color: #0c0c0c;
    position: relative;
    z-index: 9;
}
.devita-product-2.devita-product-game {
    background-color: #0c0c0c;
}
.devita-product-2.devita-product-game:hover {
    box-shadow: 0 0 15px rgba(141, 134, 134, 0.3);
}
.devita-product-game .product-content > h4 a ,
.devita-product-game .product-action-wrapper-2 > p {
    color: #fff;
}
.devita-product-game .product-rating i.theme-star {
  color: #fff;
}
.devita-product-game .product-content > span {
    color: #ddd;
}
.devita-product-game .product-price-wrapper > span {
    color: #df2121;
}
.devita-product-game .product-price-wrapper > span.product-price-old {
    color: #a4a4a4;
}
.best-selling-game .section-title,
.best-selling-game .product-tab-list-2 a.active h4,
.section-title.white-title {
    color: #fff;
}
.devita-product-game .product-content > h4 a:hover {
    color: #df2121;
}
.best-selling-game .section-border::before,
.product-area-game .section-border::before {
    background-color: #1d1d1d;
}
.nav-style-game.nav-style.owl-carousel .owl-nav div {
    background-color: #1c1c1c;
    color: #ccc;
}
.devita-product-game .product-img > span {
    background-color: #df2121;
}
.devita-product-game .product-action > a.same-action:hover,
.devita-product-game .product-action > a.action-cart:hover,
.nav-style-game.nav-style.owl-carousel .owl-nav div:hover {
    background-color: #df2121;
}
.banner-content-2 > img {
    width: 100%;
}
.single-product-game .product-content > h4 a {
    color: #fff;
}
.single-product-game .product-content > h4 a:hover {
    color: #df2121;
}
.single-product-game .product-content > span,
.single-product-game .product-price-wrapper > span {
    color: #ccc;
}


/* blog index-game */

.blog-wrapper-4 {
    display: flex;
}
.blog-wrapper-4 .blog-img {
    flex: 0 0 250px;
}
.blog-content-4 {
    align-items: flex-end;
    display: flex;
    flex-wrap: wrap;
    margin: 0 21px 0 20px;
}
.blog-content-4 > h4 {
    color: #ffffff;
    font-size: 16px;
    margin: 0 0 18px;
}
.blog-content-4 > h4 a {
    color: #ffffff;
}
.blog-content-4 > p {
    color: #ddd;
    font-size: 14px;
    margin: 0;
}
.blog-meta-4 {
    border-top: 1px solid #1d1d1d;
    margin: 50px 0 0;
    padding: 14px 0 0;
}
.blog-meta-4 ul li {
    color: #ddd;
    display: inline-block;
    font-size: 13px;
    line-height: normal;
    margin-right: 15px;
    position: relative;
}
.blog-meta-4 ul li a {
    color: #ddd;
}
.blog-meta-4 ul li::before {
    background-color: #ddd;
    content: "";
    height: 1px;
    position: absolute;
    right: -16px;
    top: 8px;
    transform: rotate(-58deg);
    transition: all 0.4s ease 0s;
    width: 12px;
}
.blog-meta-4 ul li:last-child::before {
    display: none;
}
.blog-game .section-border::before {
    background-color: #1d1d1d;
}
.blog-game .nav-style.owl-carousel .owl-nav div {
    top: -71px;
}
.blog-meta-4 ul li a:hover,
.blog-content-4 > h4 a:hover {
    color: #195dc1;
}
.newsletter-game .subscribe-form-2 form .clear-2 input {
    background-color: #195dc1;
}
.newsletter-game .subscribe-form-2 form .clear-2 input:hover {
    background-color: #fff;
    color: #000;
}

/*---------------------------
    18. Shop page
-----------------------------*/

.breadcrumb-area {
    padding: 10px 0 10px;
}
.breadcrumb-content li {
    color: #195dc1;
    display: inline-block;
    font-size: 14px;
    margin-right: 28px;
    position: relative;
}
.breadcrumb-content li a {
    color: #000;
}
.breadcrumb-content li a:hover {
    color: #195dc1;
}
.breadcrumb-content li::before {
    background-color: #aaaaaa;
    content: "";
    height: 2px;
    position: absolute;
    right: -22px;
    top: 10px;
    transform: rotate(-67deg);
    transition: all 0.4s ease 0s;
    width: 12px;
}
.breadcrumb-content li:last-child::before {
    display: none;
}
.shop-sidebar-wrapper {
    border: 1px solid #efefef;
    padding: 17px 18px;
}
h4.shop-sidebar-title {
    font-size: 18px;
    font-weight: 500;
    margin: 0;
}
.shop-catigory > ul {
    border-top: 1px solid #ebebeb;
    margin: 18px 0 0;
    padding: 27px 0 0;
}
.shop-catigory ul > li {
    display: block;
    list-style: outside none none;
    padding: 0 0 13px;
}
.shop-catigory ul > li:last-child {
    padding: 0 0 0px;
}
.shop-catigory ul > li ul li:last-child {
    padding: 7px 0 0 15px;
}
.shop-catigory ul > li a {
    color: #000;
    display: block;
}
.shop-catigory ul li:hover > a {
    color: #195dc1;
}
.shop-catigory ul li:hover > a i {
    color: #195dc1;
}
.shop-catigory ul > li a i {
    float: right;
    color: #7a7a7a;
    font-size: 14px;
}
.shop-catigory ul > li > ul li {
    padding: 7px 0 0 15px;
}
.shop-catigory ul > li ul li a {
    color: #666;
}
.price_filter .ui-slider.ui-slider-horizontal.ui-widget.ui-widget-content.ui-corner-all {
    background: #dbdbdb none repeat scroll 0 0;
    border: medium none;
    border-radius: 50px;
    height: 5px;
    margin-bottom: 12px;
    margin-left: auto;
}
.price_filter .ui-slider-range {
    background: #174ea9 none repeat scroll 0 0;
}
.price_filter .ui-slider-handle.ui-state-default.ui-corner-all {
    background: #174ea9 none repeat scroll 0 0;
    border: 2px solid #fff;
    border-radius: 100%;
    height: 15px;
    width: 15px;
}
.ui-slider-horizontal .ui-slider-handle {
    top: -6px;
}
.price_filter.mt-40 > span {
    color: #000;
    display: block;
    margin-bottom: 30px;
}
.price_slider_amount .label-input input {
    background: transparent none repeat scroll 0 0;
    border: medium none;
    box-shadow: none;
    color: #363f4d;
    font-size: 14px;
    height: auto;
    margin: 3px 0 14px;
    padding-left: 49px;
    width: 100%;
}
.price_slider_amount > button {
    background-color: #000;
    border: medium none;
    border-radius: 5px;
    color: #fff;
    line-height: 1;
    padding: 8px 16px;
    cursor: pointer;
    transition: all .3s ease 0s;
}
.price_slider_amount > button:hover {
    background-color: #174ea9;
}
.price_filter > span {
    color: #000;
    display: block;
    margin: 0 0 21px;
}
.shop-sidebar-border {
    border-top: 1px solid #ebebeb;
}
.sidebar-list-style ul li {
    display: block;
    list-style: outside none none;
    padding: 0 0 6px;
}
.sidebar-list-style ul li a {
    color: #000;
}
.sidebar-list-style ul li a:hover {
    color: #174ea9;
}
.sidebar-list-style ul li:last-child {
    padding: 0 0 0px;
}
.sidebar-list-style ul li input {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: 1px solid #d7d7d7;
    float: left;
    height: 17px;
    margin: 3px 12px 0 0;
    padding-left: 0;
    width: 17px;
    cursor: pointer;
}
.compare-product-btn {
    display: flex;
    justify-content: space-between;
}
.compare-product-btn > span {
    color: #000;
    margin: 4px 0 0;
}
.compare-product-btn > a {
    background-color: #000;
    border-radius: 3px;
    color: #fff;
    display: inline-block;
    line-height: 1;
    padding: 5px 15px 8px;
}
.compare-product-btn > a:hover {
    background-color: #174ea9;
}
.compare-product > p {
    color: #000;
    margin: 20px 0 24px;
}
.shop-tags li {
    display: inline-block;
    list-style: outside none none;
    margin: 0 4px 11px 0;
}
.shop-tags a {
    border: 1px solid #000;
    color: #000;
    display: inline-block;
    line-height: 1;
    padding: 8px 12px;
}
.shop-tags a:hover {
    border: 1px solid #195dc1;
    background-color: #195dc1;
    color: #fff;
}

/* shop right sidebar */

.banner-area.pb-30 img {
    width: 100%;
}
.shop-topbar-wrapper {
    border: 1px solid #e9e9e9;
    display: flex;
    justify-content: space-between;
    margin-bottom: 30px;
    padding: 15px 24px;
}
.grid-list-options {
    display: inline-block;
    float: left;
    margin-right: 33px;
}
.view-mode a {
    color: #898888;
    font-size: 20px;
    display: inline-block;
    margin: 0 10px 0 0;
}
.view-mode a.active {
    color: #195dc1;
}
.shop-topbar-left > p {
    display: inline-block;
    margin: 3px 0 0;
}
.shorting-style {
    display: inline-block;
    margin-left: 20px;
}
.product-shorting.shorting-style {
    margin-left: 0;
}
.shorting-style > label {
    color: #000;
    cursor: pointer;
    margin: 0 11px 0 0;
}
.product-shorting.shorting-style select {
    width: 110px;
}
.shorting-style select {
    -moz-appearance: none;
    -webkit-appearance: none;
    background: #fff url("../../assets/img/icon-img/shop.png") no-repeat scroll right 10px center;
    border: 1px solid #ebebeb;
    border-radius: 3px;
    box-shadow: none;
    color: #898888;
    cursor: pointer;
    font-size: 14px;
    height: 30px;
    padding-left: 10px;
    width: 210px;
}
#product-grid .row {
    margin-left: 0;
    margin-right: 0;
}
#product-grid .row div[class^="col"] {
    padding-left: 0px;
    padding-right: 0px;
}
.pagination-style li {
    display: inline-block;
    list-style: outside none none;
    margin: 0 8px 0 0;
}
.pagination-total-pages {
    display: flex;
    justify-content: space-between;
}
.pagination-style li a {
    background-color: #f1f1f1;
    border-radius: 3px;
    color: #000;
    display: inline-block;
    line-height: 1;
    padding: 11px 13px;
}
.pagination-style li a:hover,
.pagination-style li a.active,
.pagination-style li a.next:hover {
    background-color: #195dc1;
    color: #fff;
}
.pagination-style li a.prev-next {
    padding: 11px 22px;
}
.pagination-style li a.prev i {
    margin-right: 7px;
}
.pagination-style li a.next i {
    margin-left: 10px;
}
.pagination-style li a.next {
    background-color: #000;
    color: #fff;
}
.pagination-total-pages {
    border: 1px solid #e9e9e9;
    padding: 15px 24px 13px;
}
.total-pages > p {
    margin: 4px 0 0;
}
.shop-border {
    border-bottom: 1px solid #ebebeb;
}

/* shop list */

#product-list .product-list-wrapper .product-img {
    display: inline-block;
    float: left;
    margin-right: 30px;
    width: 240px;
}
.product-list-content {
    display: block;
    overflow: hidden;
}
.product-list-content > span {
    color: #000;
    font-size: 13px;
}
.product-list-content > h4 {
    font-size: 14px;
    line-height: 18px;
    margin: 8px 0 7px;
}
#product-list .product-rating::before,
#product-list .product-rating::after {
    display: none;
}
.product-list-content > p {
    color: #000;
    margin: 0 0 29px;
}
.product-list-content .product-price-wrapper {
    margin: 10px 0 20px;
}
.product-list-content .product-action > a.action-cart {
    padding: 9px 40px 8px;
}
.product-list-content .product-action > a.same-action {
    width: 40px;
}
.product-list-content .product-img-slider {
    width: 100%;
    display: block;
}
.product-list-wrapper:hover .cr-navigation {
    opacity: 1;
}
.product-list-content .product-action {
    justify-content: left;
}

/*---------------------------
    19. Product details
-----------------------------*/

.product-details-content {
    position: relative;
}
.zoompro {
    width: 100%;
}
.product-dec-slider {
    padding: 0 70px;
}
.product-dec-slider.slick-initialized .slick-slide {
  text-align: center;
}
.product-dec-slider .slick-slide img {
  display: inline-block;
}
.product-dec-slider .product-dec-icon {
    color: #a4a4a4;
    display: inline-block;
    font-size: 25px;
    left: 60px;
    opacity: 1;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    z-index: 99;
}
.product-dec-slider .product-dec-icon:hover {
    color: #174ea9;
}
.product-dec-slider .product-dec-icon.product-dec-next {
    left: auto;
    right: 60px;
}
.product-dec-slider:hover .product-dec-icon {
    opacity: 1;
}
.product-dec-slider a {
    padding: 0 5px;
    cursor: pointer;
}
.product-dec-slider a img {
    border: 2px solid transparent;
    cursor: pointer;
}
.product-dec-slider a.active img {
    border: 2px solid #ebebeb;
}
.product-dec-slider a.slick-active ,
.product-dec-slider-2 a.slick-active {
    position: relative;
}
.product-dec-slider a.slick-active:before ,
.product-dec-slider-2 a.slick-active:before {
    position: absolute;
    content: "";
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    width: 100%;
    background-color: #fff;
    z-index: 99;
    opacity: .3;
}
.product-dec-slider a.active.slick-active:before , 
.product-dec-slider-2 a.active.slick-active:before {
    opacity: 0;
}
.product-details-img {
    position: relative;
}
.zoompro-span {
    position: relative;
}
.zoompro-span > span {
    background-color: #174ea9;
    border-radius: 3px;
    color: #fff;
    left: 30px;
    line-height: 1;
    padding: 6px 14px 5px;
    position: absolute;
    top: 20px;
    z-index: 99;
}
.product-details-content > h4 {
    font-size: 24px;
    font-weight: 500;
    margin: 0;
}
.rating-review {
    display: flex;
}
.pro-dec-rating i {
    color: #b2b2b2;
    font-size: 17px;
}
.pro-dec-rating i.theme-star {
    color: #174ea9;
}
.pro-dec-review ul li {
    color: #174ea9;
    display: inline-block;
    list-style: outside none none;
    margin-right: 38px;
    position: relative;
}
.pro-dec-review ul li:last-child {
    margin-right: 0px;
}
.pro-dec-review ul li::before {
    background-color: #e1e1e1;
    content: "";
    height: 20px;
    position: absolute;
    right: -21px;
    top: 2px;
    transition: all 0.4s ease 0s;
    width: 1px;
}
.pro-dec-review ul li:last-child::before {
    display: none;
}
.pro-dec-review {
    margin: 0 0 0 35px;
}
.product-details-content > span {
    color: #000;
    font-size: 24px;
    font-weight: 500;
}
.rating-review {
    display: flex;
    margin: 20px 0 27px;
}
.in-stock > p span {
    color: #174ea9;
}
.product-details-content > p {
    color: #000;
    margin: 0;
}
.in-stock > p {
    margin: 0;
}
.in-stock {
    margin: 27px 0 3px;
}
.pro-dec-feature li {
    display: block;
    list-style: outside none none;
    margin: 0 0 4px;
    color: #000;
}
.pro-dec-feature li:last-child {
    margin: 0 0 0px;
}
.pro-dec-feature li input[type="checkbox"] {
    background: #ebebeb none repeat scroll 0 0;
    border: 1px solid #d7d7d7;
    box-shadow: none;
    color: #626262;
    font-size: 14px;
    height: 13px;
    margin: 0 13px 0 0;
    padding-left: 0;
    position: relative;
    top: 2px;
    width: 13px;
}
.pro-dec-feature li span {
    color: #174ea9;
}
.pro-dec-feature {
    padding: 24px 0 37px;
}
.quality input {
    background: transparent none repeat scroll 0 0;
    border: 1px solid #e1e1e1;
    color: #000;
    height: 40px;
    padding: 0;
    text-align: center;
    width: 40px;
}

.quality input::-moz-placeholder {
    color: #000;
    opacity: 1;
}
.quality input::-webkit-input-placeholder {
    color: #000;
    opacity: 1;
}
.quality label {
    color: #000;
    font-size: 14px;
    margin: 0 26px 0 0;
}
.quality {
    display: inline-block;
    float: left;
    margin: 0 15px 0 0;
}
.quality-add-to-cart {
    border-top: 1px solid #ebebeb;
    display: block;
    overflow: hidden;
    padding: 40px 0 37px;
}
.quality-add-to-cart .product-action {
    justify-content: left;
}
.quality-add-to-cart .product-action > a.action-cart {
    padding: 11px 40px 10px;
}
.quality-add-to-cart .product-action > a.same-action {
    width: 40px;
    height: 40px;
}
.quality-add-to-cart .product-action > a.same-action i {
    line-height: 41px;
}
.pro-dec-categories li {
    display: inline-block;
    list-style: outside none none;
    color: #000;
}
.pro-dec-categories li.categories-title {
    margin: 0 3px 0 0;
}
.pro-dec-categories li a {
    color: #000;
}
.pro-dec-categories li a:hover {
    color: #195dc1;
}
.pro-dec-categories {
    margin: 0 0 12px;
}
.pro-dec-categories:last-child {
    margin: 0 0 0px;
}
.pro-dec-social li {
    display: inline-block;
    list-style: outside none none;
    margin: 0 6px 0 0;
}
.pro-dec-social li a {
    border-radius: 5px;
    color: #fff;
    display: inline-block;
    line-height: 1;
    padding: 8px 12px;
}
.pro-dec-social li a.tweet {
    background-color: #00aaf0;
    border: 1px solid transparent;
}
.pro-dec-social li a.tweet:hover {
    background-color: transparent;
    border: 1px solid #00aaf0;
    color: #00aaf0;
}
.pro-dec-social li a.share {
    background-color: #435f9f;
    border: 1px solid transparent;
}
.pro-dec-social li a.share:hover {
    background-color: transparent;
    border: 1px solid #435f9f;
    color: #435f9f;
}
.pro-dec-social li a.google {
    background-color: #e04b34;
    border: 1px solid transparent;
}
.pro-dec-social li a.google:hover {
    background-color: transparent;
    border: 1px solid #e04b34;
    color: #e04b34;
}
.pro-dec-social li a.pinterest {
    background-color: #ce1f21;
    border: 1px solid transparent;
}
.pro-dec-social li a.pinterest:hover {
    background-color: transparent;
    border: 1px solid #ce1f21;
    color: #ce1f21;
}
.pro-dec-social {
    margin: 27px 0 0;
}
.description-review-topbar {
    justify-content: center;
    display: flex;
}
.description-review-topbar a {
    border-bottom: 2px solid transparent;
    color: #666;
    display: inline-block;
    font-size: 20px;
    font-weight: 500;
    margin: 0 35px;
    padding-bottom: 10px;
}
.description-review-topbar a:hover {
    border-bottom: 2px solid #1e98d6;;
    color: #1e98d6;;
}
.description-review-topbar a.active {
    border-bottom: 2px solid #1c49a5;;
    color: #1c49a5;;
}
.tab-content.description-review-bottom {
    background-color: #fff;
    border-radius: 5px;
    border-top: 1px solid #ebebeb;
    padding: 50px 0 20px;
}
.product-description-wrapper > p {
    color: #000;
    font-size: 14px;
    line-height: 30px;
    margin-bottom: 30px;
}
.product-description-wrapper li {
    color: #000;
    display: block;
    font-size: 14px;
    list-style: outside none none;
    margin-bottom: 10px;
}
.product-description-wrapper li:last-child {
    margin-bottom: 0px;
}
.rattings-wrapper {
    margin-bottom: 40px;
}
.rattings-wrapper .sin-rattings {
    margin-bottom: 30px;
}
.star-author-all {
    margin-bottom: 10px;
    overflow: hidden;
}
.ratting-star i {
    color: #174ea9;
    font-size: 18px;
}
.ratting-author h3 {
    color: #000;
    float: left;
    font-size: 15px;
    font-weight: 400;
    line-height: 13px;
    margin: 0;
    text-transform: capitalize;
}
.ratting-author span {
    color: #000;
    display: block;
    float: left;
    font-size: 14px;
    font-weight: 400;
    line-height: 13px;
    margin-left: 15px;
}
.sin-rattings > p {
    color: #000;
    font-size: 14px;
    line-height: 30px;
    margin-bottom: 0;
}
.ratting-form-wrapper h3 {
    color: #303030;
    font-size: 15px;
    font-weight: 400;
    line-height: 12px;
    margin: 0 0 30px;
    text-transform: uppercase;
}
.ratting-form form .star-box h2 {
    color: #000;
    font-size: 14px;
    font-weight: 500;
    line-height: 1;
    margin: 0 0 10px;
}
.ratting-form form .star-box {
    margin-bottom: 40px;
}
.rating-form-style input,
.rating-form-style textarea {
    background: transparent none repeat scroll 0 0;
    border: 1px solid #eceff8;
    color: #333;
}
.rating-form-style.form-submit input {
    background: #174ea9 none repeat scroll 0 0;
    color: #fff;
    cursor: pointer;
    font-weight: 500;
    margin-top: 30px;
    padding: 0 25px;
    text-transform: capitalize;
    width: inherit;
}
.rating-form-style.form-submit input:hover {
    background: #000 none repeat scroll 0 0;
    color: #fff;
}
.ratting-star>span {
    margin-left: 5px;
}
.product-anotherinfo-wrapper li span {
    color: #000;
    display: inline-block;
    font-size: 15px;
    font-weight: 500;
    margin-right: 15px;
    width: 40px;
}
.product-anotherinfo-wrapper li {
    display: inline-block;
    font-size: 14px;
    list-style: outside none none;
    margin-bottom: 6px;
    text-transform: capitalize;
    margin: 0 5px 0 0;
}
.product-anotherinfo-wrapper li a {
    color: #000;
}
.product-anotherinfo-wrapper li:last-child {
    margin-bottom: 0px;
}
.pro-dec-btn {
    position: absolute;
    right: 0;
    top: -10px;
}
.pro-dec-btn > a {
    background-color: #efefef;
    border-radius: 3px;
    color: #aaa;
    display: inline-block;
    font-size: 20px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    width: 35px;
}
.pro-dec-btn > a:hover {
    background-color: #CF1101;
    color: #fff;
}


/*--------- Product details tab style 2 ---------*/
.product-dec-slider-2 {
    display: inline-block;
    float: left;
    padding: 0;
    width: 20%;
}
.zoompro-wrap.zoompro-2 {
    display: inline-block;
    position: relative;
    width: 80%;
    float: left;
}
.product-dec-slider-2 .slick-slide img {
    display: inline-block;
    width: 100%;
}
.slick-vertical .slick-slide {
    border: 1px solid transparent;
    display: block;
    height: auto;
    text-align: center;
}
.slick-vertical .slick-slide {
    display: block;
    height: auto;
    margin: 2px 0 10px;
    text-align: center;
}
.product-dec-slider-2 a {
    cursor: pointer;
}
.product-dec-slider-2 .product-dec-icon {
    color: #666;
    cursor: pointer;
    display: inline-block;
    font-size: 25px;
    left: 50%;
    line-height: 1;
    padding: 0 10px;
    position: absolute;
    transform: translateX(-50%);
    z-index: 99;
}
.product-dec-slider-2 .product-dec-icon:hover {
    color: #174ea9;
}
.product-dec-slider-2 .product-dec-icon.product-dec-prev {
    top: -25px;
}
.product-dec-slider-2 .product-dec-icon.product-dec-next {
    bottom: -14px;
}
.product-dec-slider-2 a.slick-active {
    border: 1px solid #ebebeb;
}
.product-dec-slider-2 a.active.slick-active {
    border: 1px solid #174ea9;
}


/*-------- Product details tab style 3 ------------*/
.product-dec-slider-2.product-dec-right {
    float: right;
}
.zoompro-border {
    border: 1px solid #ebebeb;
}
.product-video {
    text-align: center;
    margin: 10px;
}
.product-video a {
    background-color: #174ea9;
    border-radius: 3px;
    color: #fff;
    display: inline-block;
    padding: 7px 20px 7px;
}
.product-video a:hover {
    background-color: #000;
}

/* product-dec sticky */
.is-affixed .inner-wrapper-sticky {
    padding-left: 15px;
    padding-right: 15px;
}
.sidebar-active.col-lg-6.is-affixed {
    padding-left: 0px;
    padding-right: 0px;
}
.sidebar-active.col-lg-6 {
    padding-left: 15px;
    padding-right: 15px;
}


/*------ Product details slider ----*/
.product-details-slider-active.owl-carousel .owl-nav div {
    background-color: #fff;
    border: 1px solid #fff;
    border-radius: 50%;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    color: #333;
    font-size: 25px;
    height: 40px;
    line-height: 40px;
    opacity: 0;
    position: absolute;
    right: 0;
    text-align: center;
    top: 50%;
    transform: translateY(-50%);
    transition: all 0.5s ease 0s;
    width: 40px;
}
.product-details-slider-active.owl-carousel .owl-nav div:hover {
    border: 1px solid #174ea9;
    color: #174ea9;
}
.product-details-slider-active.owl-carousel .owl-nav div.owl-prev {
    left: 0;
    right: auto;
}
.product-details-slider-active:hover .owl-nav div {
    opacity: 1;
}
.single-pro-details {
    border: 1px solid #ebebeb;
}
.slider-pro-content .rating-review {
    justify-content: center;
}
.slider-pro-content .pro-dec-feature > ul {
    text-align: left;
    display: inline-block;
}
.slider-pro-content .quality-add-to-cart {
    display: flex;
    justify-content: center;
}
.slider-pro-content .product-video {
    margin: 0 10px 27px;
}
.slider-pro-content.product-details-content > p {
    margin: 0 auto;
    width: 60%;
}
.product-video.pro-video-style-2 a {
    padding: 12px 26px;
    display: block;
}
.product-video.pro-video-style-2 a i {
    margin-right: 2px;
}
.product-video.pro-video-style-2 {
    margin: 24px 0 0;
}


/*---------------------------
    20. Cart page
-----------------------------*/

.cart-main-area .table-content table thead > tr {
    background-color: #f9f9f9;
    border: 1px solid #ebebeb;
}
.table-content table th {
    border-top: medium none;
    color: #363f4d;
    font-size: 12px;
    font-weight: 500;
    padding: 21px 45px 22px;
    text-align: center;
    text-transform: uppercase;
    vertical-align: middle;
    white-space: nowrap;
}
.table-content table td.product-thumbnail {
    width: 150px;
}
.table-content table td.product-name {
    width: 435px;
}
.table-content table td.product-price-cart {
    width: 196px;
}
.table-content table td.product-quantity {
    width: 100px;
}
.table-content table td.product-quantity {
    width: 130px;
}
.table-content table td.product-remove {
    width: 100px;
}
.table-content table tbody > tr {
    border-bottom: 1px solid #ebebeb;
}
.table-content table tbody > tr:last-child {
    border-bottom: 0px solid #ebebeb;
}
.table-content table td {
    color: #000;
    font-size: 14px;
    padding: 30px 0;
    text-align: center;
}
.pro-dec-cart input {
    background: transparent none repeat scroll 0 0;
    border: 1px solid #e1e1e1;
    border-radius: 5px;
    color: #000;
    height: 42px;
    padding: 0;
    text-align: center;
    width: 94px;
}
.table-content table td.product-remove a {
    color: #aaa;
    font-size: 17px;
    margin: 0 13px;
}
.table-content table td.product-remove a:hover {
    color: #174ea9;
}
h3.page-title {
    font-size: 18px;
    font-weight: 500;
    margin: 0 0 25px;
}
.cart-shiping-update-wrapper {
    display: flex;
    justify-content: space-between;
    padding: 30px 20px 55px;
}
.cart-shiping-update > a,
.cart-clear > button,
.cart-clear > a {
    background-color: #f2f2f2;
    border-radius: 3px;
    color: #363f4d;
    display: inline-block;
    font-size: 12px;
    font-weight: 500;
    line-height: 1;
    padding: 18px 63px 19px;
    text-transform: uppercase;
}
.cart-shiping-update > a:hover,
.cart-clear > button:hover,
.cart-clear > a:hover {
    background-color: #174ea9;
    color: #fff;
}
.cart-clear > button {
    border: medium none;
    cursor: pointer;
    margin-right: 27px;
    transition: all 0.3s ease 0s;
}
.title-wrap {
    position: relative;
}
h4.cart-bottom-title {
    display: inline-block;
    font-size: 18px;
    font-weight: 500;
    margin: 0;
    padding-right: 18px;
}
.title-wrap::before {
    background-color: #ebebeb;
    content: "";
    height: 1px;
    left: 0;
    position: absolute;
    top: 10px;
    transition: all 0.4s ease 0s;
    width: 100%;
    z-index: 1;
}
.section-bg-gary-cart {
    background-color: #f9f9f9;
    position: relative;
    z-index: 9;
}
.tax-wrapper > p {
    margin: 0;
}
.tax-wrapper {
    margin-top: 22px;
}
.tax-select-wrapper {
    margin: 1px 0 0;
}
.tax-select label {
    color: #000;
    font-size: 14px;
    margin: 0 0 12px;
}
.tax-select select {
    -moz-appearance: none;
    -webkit-appearance: none;
    background: #fff url("../../assets/img/icon-img/cart.png") no-repeat scroll right 18px center;
    border: 1px solid #ebebeb;
    box-shadow: none;
    color: #000;
    font-size: 12px;
    height: 40px;
    padding: 0 50px 0 15px;
    width: 100%;
    cursor: pointer;
}
.tax-select {
    margin: 0 0 26px;
}
.tax-select input {
    background: transparent none repeat scroll 0 0;
    border: 1px solid #ebebeb;
    height: 40px;
}
button.cart-btn-2 {
    background-color: #f2f2f2;
    border: medium none;
    border-radius: 0px;
    color: #000;
    font-weight: 500;
    padding: 14px 42px 13px;
    text-transform: uppercase;
    transition: all .3s ease 0s;
    cursor: pointer;
}
button.cart-btn-2:hover {
    background-color: #174ea9;
    color: #fff;
}
.discount-code {
    margin: 21px 0 0;
}
.discount-code > p {
    margin: 0 0 15px;
}
.discount-code input {
    background: transparent none repeat scroll 0 0;
    border: 1px solid #ebebeb;
    height: 40px;
    margin-bottom: 30px;
    padding-left: 10px;
}
.grand-totall {
    background-color: #f9f9f9;
    border: 1px solid #ebebeb;
    border-radius: 5px;
    padding: 45px 30px 50px;
}
.grand-totall > h5 {
    font-size: 14px;
    margin: 36px 0 27px;
}
.grand-totall > h5 span {
    float: right;
}
.grand-totall > h5 span {
    float: right;
    font-size: 18px;
    font-weight: 500;
}
.total-shipping > h5 {
    font-size: 14px;
    margin: 0;
}
.total-shipping {
    border-bottom: 1px solid #ebebeb;
    border-top: 1px solid #ebebeb;
    margin: 0 0 27px;
    padding: 28px 0;
}
.total-shipping > ul {
    padding: 19px 0 0 40px;
}
.total-shipping ul li {
    color: #000;
    list-style: outside none none;
    margin: 0 0 6px;
}
.total-shipping ul li:last-child,
.register-us-2 li:last-child {
    margin: 0 0 0px;
}
.total-shipping ul li span {
    float: right;
}
.total-shipping ul li input {
    background: #e9e9e9 none repeat scroll 0 0;
    border: 1px solid #d7d7d7;
    border-radius: 5px !important;
    color: #626262;
    cursor: pointer;
    height: 13px;
    margin-right: 10px;
    padding: 0;
    position: relative;
    top: 2px;
    width: 13px;
}
h4.grand-totall-title {
    color: #174ea9;
    font-size: 20px;
    font-weight: 500;
    margin: 0 0 25px;
}
h4.grand-totall-title span {
    float: right;
}
.grand-totall > a {
    background-color: #174ea9;
    border-radius: 3px;
    color: #fff;
    display: block;
    font-size: 12px;
    font-weight: 500;
    line-height: 1;
    padding: 18px 10px 19px;
    text-align: center;
    text-transform: uppercase;
}
.grand-totall > a:hover {
    background-color: #000;
}
.product-wishlist-cart > a {
  background-color: #174ea9;
  border-radius: 3px;
  color: #fff;
  font-size: 13px;
  font-weight: 500;
  line-height: 1;
  padding: 7px 10px;
  text-transform: uppercase;
}
.product-wishlist-cart > a:hover {
  background-color: #000;
}

/*---------------------------
    21. Login register page
-----------------------------*/

.login-form-container {
    background: transparent none repeat scroll 0 0;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
    padding: 80px;
    text-align: left;
}
.login-text {
    margin-bottom: 30px;
    text-align: center;
}
.login-text h2 {
    color: #444;
    font-size: 30px;
    margin-bottom: 5px;
    text-transform: capitalize;
}
.login-text span {
    font-size: 15px;
}
.login-form-container input {
    background-color: transparent;
    border: 1px solid #ebebeb;
    color: #666;
    font-size: 14px;
    height: 50px;
    margin-bottom: 30px;
    padding: 0 15px;
}
.login-form-container input::-moz-placeholder {
    color: #666;
    opacity: 1;
}
.login-form-container input::-webkit-input-placeholder {
    color: #666;
    opacity: 1;
}
.login-toggle-btn {
    padding: 10px 0 19px;
}
.login-form-container input[type="checkbox"] {
    height: 15px;
    margin: 0;
    position: relative;
    top: 1px;
    width: 17px;
}
.login-form-container label {
    color: #000;
    font-size: 15px;
    font-weight: 400;
}
.login-toggle-btn>a {
    color: #000;
    float: right;
    font-size: 15px;
    transition: all 0.3s ease 0s;
}
.login-toggle-btn>a:hover {
    color: #174ea9;
}
.login-register-tab-list {
    display: flex;
    justify-content: center;
    margin-bottom: 40px;
}
.login-register-tab-list.nav a h4 {
    font-size: 25px;
    font-weight: 700;
    margin: 0 20px;
    text-transform: capitalize;
    transition: all 0.3s ease 0s;
}
.login-register-tab-list.nav a {
    position: relative;
}
.login-register-tab-list.nav a::before {
    background-color: #000;
    bottom: 5px;
    content: "";
    height: 18px;
    margin: 0 auto;
    position: absolute;
    right: -2px;
    transition: all 0.4s ease 0s;
    width: 1px;
}
.login-register-tab-list.nav a:last-child::before {
    display: none;
}
.login-register-tab-list.nav a.active h4,
.login-register-tab-list.nav a h4:hover {
    color: #174ea9;
}
.login-form button {
    border: medium none;
    cursor: pointer;
}
.button-box button {
    background-color: #f2f2f2;
    border: medium none;
    border-radius: 3px;
    color: #363f4d;
    cursor: pointer;
    font-size: 14px;
    font-weight: 500;
    line-height: 1;
    padding: 11px 30px;
    text-transform: uppercase;
    transition: all 0.3s ease 0s;
}
.button-box button:hover {
    background-color: #174ea9;
    color: #fff;
}

/*---------------------------
    22. Checkout page
-----------------------------*/

.panel.panel-default {
    border: 1px solid #ebebeb;
    margin-bottom: 20px;
}
h5.panel-title {
    background-color: #f9f9f9;
    border-bottom: 1px solid #ebebeb;
    color: #000;
    font-size: 14px;
    font-weight: 500;
    margin: 0;
    position: relative;
    text-transform: uppercase;
}
h5.panel-title a {
    color: #000;
    display: block;
    padding: 20px 55px;
    position: relative;
}
h5.panel-title a:hover {
    color: #174ea9;
}
h5.panel-title a::before {
    color: #000;
    content: "";
    display: inline-block;
    /*font-family: "Ionicons";*/
    font-size: 15px;
    position: absolute;
    right: 10px;
    top: 19px;
}
h5.panel-title a.collapsed::after {
    color: #666666;
    content: "";
    display: inline-block;
    /*font-family: "Ionicons";*/
    font-size: 12px;
    position: absolute;
    right: 10px;
    top: 21px;
}
h5.panel-title a.collapsed::before {
    display: none;
}
h5.panel-title span {
    color: #000;
    font-size: 14px;
    left: 20px;
    position: absolute;
    top: 20px;
}
.checkout-register h4.cart-bottom-title,
.checkout-login h4.cart-bottom-title {
    font-size: 12px;
}
.register-us ul li {
    color: #000;
    list-style: outside none none;
    margin: 0 0 7px;
}
.register-us ul li input {
    background: #d7d7d7 none repeat scroll 0 0;
    border: 1px solid #d7d7d7;
    height: 13px;
    margin: 0 10px 0 0;
    padding: 0;
    position: relative;
    top: 2px;
    width: 13px;
}
.register-us > ul {
    padding: 7px 0 16px 13px;
}
.checkout-register > h6 {
    font-size: 12px;
    font-weight: 500;
    margin: 0;
}
.register-us-2 > p {
    color: #000;
    margin: 0;
}
.register-us-2 li {
    color: #000;
    list-style: outside none none;
    margin: 0 0 9px;
    position: relative;
}
.register-us-2 {
    margin: 15px 0 21px;
}
.register-us-2 > ul {
    padding: 9px 0 0 13px;
}
.checkout-register > a {
    background-color: #f2f2f2;
    color: #000;
    display: inline-block;
    font-size: 12px;
    font-weight: 500;
    line-height: 1;
    padding: 17px 35px 16px;
    text-transform: uppercase;
    border-radius: 3px;
}
#payment-1 .panel-body {
    padding: 30px 20px;
}
.checkout-login > p {
    margin: 16px 0 7px;
}
.checkout-login > span {
    color: #000;
    display: block;
    margin: 0 0 7px;
}
.login-form > label {
    color: #000;
    font-size: 14px;
    margin: 0 0 10px;
}
.login-form input {
    background: transparent none repeat scroll 0 0;
    border: 1px solid #ebebeb;
    color: #000;
    height: 40px;
    padding: 0 10px;
}
.login-form {
    margin: 0 0 12px;
}
.login-forget {
    display: flex;
    justify-content: space-between;
    margin: 15px 0 28px;
}
.login-forget > a {
    color: #000;
}
.login-forget > p {
    color: #174ea9;
    margin: 0;
}
.checkout-login-btn > a {
    background-color: #f2f2f2;
    color: #000;
    display: inline-block;
    font-size: 12px;
    font-weight: 500;
    line-height: 1;
    padding: 16px 62px 17px;
    text-transform: uppercase;
    border-radius: 3px;
}
.billing-btn > button {
    background-color: #f2f2f2;
    border: medium none;
    border-radius: 3px;
    color: #000;
    display: inline-block;
    font-size: 12px;
    font-weight: 500;
    line-height: 1;
    padding: 17px 35px;
    text-transform: uppercase;
    cursor: pointer;
    transition: all .3s ease 0s;
}
.checkout-login-btn > a:hover,
.checkout-register > a:hover,
.billing-btn > button:hover {
    background-color: #174ea9;
    color: #fff;
}
.checkout-progress > h4 {
    background-color: #f9f9f9;
    border-bottom: 1px solid #ebebeb;
    color: #000;
    font-size: 14px;
    font-weight: 500;
    margin: 0;
    padding: 21px 23px 20px;
    text-transform: uppercase;
}
.checkout-progress {
    background-color: #fff;
    border: 1px solid #ebebeb;
}
.checkout-progress > ul {
    padding: 18px 23px 36px;
}
.checkout-progress li {
    color: #000;
    font-size: 14px;
    list-style: outside none none;
    padding-bottom: 14px;
}
.checkout-progress li:last-child {
    border-bottom: 0px solid #eaeaea;
    padding-bottom: 0px;
    margin-bottom: 0px;
}
.billing-information-wrapper,
.shipping-information-wrapper,
.shipping-method-wrapper,
.payment-info-wrapper,
.order-review-wrapper {
    background-color: #fff;
    padding: 30px 20px;
}
.billing-info>label {
    color: #000;
    font-size: 14px;
    letter-spacing: 0.2px;
    text-transform: capitalize;
}
.billing-info input,
.billing-select select {
    background: transparent none repeat scroll 0 0;
    border: 1px solid #ebebeb;
    border-radius: 5px;
    color: #000;
    height: 40px;
    padding: 0 15px;
}
.billing-info {
    margin-bottom: 20px;
}
.single-ship>input {
    display: inline-block;
    float: left;
    height: inherit;
    margin-right: 10px;
    margin-top: 5px;
    width: inherit;
}
.single-ship label {
    color: #000;
}
.single-ship {
    margin-bottom: 5px;
}
.ship-wrapper {
    margin-top: 20px;
}
.billing-back-btn {
    display: flex;
    justify-content: space-between;
    margin-top: 26px;
}
.billing-back > a {
    color: #000;
    display: inline-block;
    font-size: 13px;
    font-weight: 500;
    margin: 10px 0 0;
    text-transform: uppercase;
}
.billing-back>a:hover {
    color: #174ea9;
}
.billing-back>a i {
    font-size: 18px;
    color: #174ea9;
}
.shipping-info-2 > span {
    color: #000;
    display: block;
    font-size: 14px;
    margin-bottom: 9px;
}
.shipping-information-wrapper>span:last-child {
    margin-bottom: 0px;
}
.shipping-info-2 {
    margin-bottom: 10px;
}
.shipping-method>p {
    color: #000;
    font-size: 15px;
    margin: 0 0 5px;
}
.expiration-date {
    margin-bottom: 20px;
}
.order-review table thead tr th {
    border: 1px solid #ebebeb;
    color: #000;
    font-size: 14px;
    font-weight: 500;
    padding: 10px;
    text-align: center;
    text-transform: capitalize;
}
.o-pro-dec p {
    color: #000;
    font-size: 15px;
    font-weight: 400;
    margin: 0;
}
.order-review table tbody tr td {
    border: 1px solid #eaeaea;
}
.o-pro-price,
.o-pro-qty,
.o-pro-subtotal {
    text-align: center;
}
.o-pro-price p,
.o-pro-qty p,
.o-pro-subtotal p {
    color: #000;
    letter-spacing: 0.2px;
    font-size: 15px;
}
.order-review table tfoot {
    margin-top: 20px;
}
.order-review table tfoot tr {
    border-bottom: 0 solid #f2f2f2;
}
.order-review table tfoot tr td {
    border-right: 0 solid #f2f2f2;
    border-top: 0 solid #f2f2f2;
    color: #000;
    font-size: 15px;
    padding: 6px 5px 2px;
    text-align: right;
}
.billing-back-btn>span {
    color: #000;
    font-size: 14px;
    letter-spacing: 0.2px;
    margin-top: 10px;
}
.billing-back-btn>span a {
    color: #174ea9;
}
.billing-back-btn>span a:hover {
    text-decoration: underline;
}
.edit-address > a {
    color: #000;
    display: inline-block;
    font-size: 15px;
    font-weight: 400;
    letter-spacing: 0.2px;
    margin-bottom: 20px;
    text-transform: uppercase;
}
.edit-address>a:hover {
    color: #174ea9;
}

/*---------------------------
    23. My account
-----------------------------*/

.account-info-wrapper > h4 {
    font-size: 15px;
    margin: 0;
    text-transform: uppercase;
}
.account-info-wrapper > h5 {
    font-size: 16px;
    letter-spacing: 0.2px;
    margin-top: 7px;
}
.account-info-wrapper {
    border-bottom: 1px solid #eaeaea;
    margin-bottom: 28px;
    padding-bottom: 30px;
}
.entries-wrapper {
    border: 1px solid #eaeaea;
    position: relative;
}
.entries-wrapper:before {
    position: absolute;
    content: "";
    height: 100%;
    width: 1px;
    left: 50%;
    top: 0;
    background-color: #eaeaea;
}
.entries-info {
    padding: 30px 20px;
}
.entries-info > p {
    color: #000;
    font-size: 15px;
    margin: 0;
    text-transform: capitalize;
}
.entries-edit-delete > a {
    background-color: #000;
    border-radius: 5px;
    color: #fff;
    display: inline-block;
    line-height: 1;
    margin: 0 2px;
    padding: 12px 15px;
    text-transform: uppercase;
}
.entries-edit-delete > a.edit {
    background-color: #df5c39;
}
.entries-edit-delete > a:hover,
.entries-edit-delete > a.edit:hover {
    background-color: #174ea9;
}

/*---------------------------
    24. Contact page
-----------------------------*/

#map {
    height: 500px;
    width: 100%;
}
.contact-us .tab-content .tab-pane {
    display: block;
    height: 0;
    max-width: 100%;
    opacity: 0;
    overflow: hidden;
    visibility: hidden;
}
.contact-us .tab-content .tab-pane.active {
    height: auto;
    opacity: 1;
    overflow: visible;
    visibility: visible;
}
.contact-page-title h1 {
    font-size: 35px;
    font-weight: bold;
    margin: 0;
}
.contact-tab-list li {
    flex: 1 0 100%;
    margin-bottom: 12px;
}
.contact-tab-list li a {
    color: #000;
    font-size: 18px;
    line-height: 24px;
}
.contact-tab-list li a::before {
    content: "";
    float: left;
    font-family: Fontawesome;
    font-size: 20px;
    line-height: 22px;
    margin-right: 6px;
}
.contact-tab-list li a.active,
.contact-tab-list li a:hover {
    color: #174ea9;
    font-weight: bold;
}
.contact-information h4 {
    font-size: 18px;
    font-weight: 500;
    margin: 0 0 5px;
}
.contact-information > p {
    margin: 0;
    font-size: 15px;
}
.contact-information > p a {
    display: block;
}
.contact-information > p a:hover {
    color: #ef1e02;
}
.contact-form-style input,
.contact-form-style textarea {
    background: transparent;
    border: 1px solid #ebebeb;
    color: #555;
    font-size: 14px;
    padding: 0 10px;
    border-radius: 3px;
}
.contact-form-style textarea {
    height: 200px;
    padding: 10px;
}


.contact-form-style input::-moz-placeholder {
    color: #555;
    outline: 0 !important;
    border-width: 0 !important;
    opacity: 1;
}
.contact-form-style input::-webkit-input-placeholder {
    color: #555;
    outline: 0 !important;
    border-width: 0 !important;
    opacity: 1;
}
.contact-form-style textarea::-moz-placeholder {
    color: #555;
    outline: 0 !important;
    border-width: 0 !important;
    opacity: 1;
}
.contact-form-style textarea::-webkit-input-placeholder {
    color: #555;
    outline: 0 !important;
    border-width: 0 !important;
    opacity: 1;
}
.contact-form-style > button {
    background-color: #1E98D6;
    border-radius: 3px;
    color: #fff;
    display: inline-block;
    font-size: 12px;
    font-weight: 500;
    line-height: 1;
    padding: 17px 30px 16px;
    text-transform: uppercase;
    border: none;
    cursor: pointer;
    margin: 30px 0 0;
    transition: all .3s ease 0s;
}
.contact-form-style > button:hover {
    background-color: #223359;
}

/*---------------------------
    25. Blog page
-----------------------------*/

.blog-wrapper.main-blog {
    padding: 20px 20px 17px;
}
.blog-wrapper.main-blog > span {
    background-color: #174ea9;
}
.blog-wrapper.main-blog h3 a:hover,
.main-blog .blog-meta ul li a:hover,
.main-blog .blog-readmore > a {
    color: #1a1364;
}
.main-blog .blog-readmore > a:hover {
    color: #000;
}

/*---------------------------
    26. Blog leftsidebar
-----------------------------*/

.shop-widget .header-search-2 form button:hover {
    color: #174ea9;
}
.single-recent-post {
    display: flex;
}
.single-recent-post .product-content {
    padding: 0 0 0 10px;
}
.single-recent-post .product-content > h4 {
    margin: 2px 0 10px;
}
.recent-post-img {
    flex: 0 0 90px;
}

/*---------------------------
    27. Blog details
-----------------------------*/

.dec-img>img {
    width: 100%;
}
.blog-details-content > h2 {
    font-size: 30px;
    font-weight: 500;
    text-transform: capitalize;
}
.single-blog-wrapper > p {
    font-size: 15px;
    margin: 0;
}
blockquote {
    margin: 35px 0;
}
blockquote > h4 {
    font-size: 19px;
    font-style: italic;
    font-weight: 500;
    margin: 0;
}
.dec-img-wrapper {
    margin: 50px 0;
}
.blog-dec-tags ul li {
    display: inline-block;
    position: relative;
}
.blog-dec-tags ul li::after {
    background-color: #6d6d6d;
    content: "";
    font-size: 8px;
    height: 12px;
    position: absolute;
    right: 6px;
    top: 7px;
    transform: rotate(20deg);
    width: 1.5px;
}
.blog-dec-tags ul li a {
    font-size: 15px;
    margin-right: 18px;
    text-transform: capitalize;
}
.blog-dec-tags ul li a:hover,
.blog-dec-social ul li a:hover {
    color: #174ea9;
}
.blog-dec-tags-social {
    border-bottom: 2px solid #f6f6f6;
    display: flex;
    justify-content: space-between;
    margin-top: 52px;
    padding-bottom: 10px;
}
.blog-dec-social {
    display: flex;
}
.blog-dec-social > span {
    color: #000;
    font-size: 16px;
    font-weight: 500;
    margin-top: 0;
    text-transform: capitalize;
}
.blog-dec-social ul li {
    display: inline-block;
    margin-left: 14px;
}
.blog-dec-social ul li a {
    color: #000;
    font-size: 16px;
}
.blog-dec-title {
    font-size: 20px;
    font-weight: 500;
    margin: 0;
    text-transform: capitalize;
}
.single-comment-wrapper {
    display: flex;
}
.blog-comment-img {
    flex: 0 0 135px;
    margin-right: 28px;
}
.blog-comment-content > h4 {
    font-size: 16px;
    font-weight: 500;
    margin: 0;
}
.blog-comment-content>span {
    color: #444;
    display: block;
    font-size: 15px;
    margin: 6px 0 8px;
}
.blog-comment-content > p {
    margin: 0 0 8px;
    font-size: 15px;
}
.blog-details-btn a {
    color: #000;
    font-size: 15px;
    font-weight: 500;
    text-transform: capitalize;
}
.blog-details-btn a:hover {
    color: #174ea9;
}
.blog-reply-wrapper>form {
    margin-top: 50px;
}
.leave-form {
    margin-bottom: 30px;
}
.blog-reply-wrapper form input,
.blog-reply-wrapper form textarea {
    background: #f7f7f7 none repeat scroll 0 0;
    border: medium none;
    color: #333;
    font-size: 14px;
    height: 60px;
    padding: 2px 20px;
}
.blog-reply-wrapper form input::-moz-placeholder,
.blog-reply-wrapper form textarea::-moz-placeholder {
    color: #333;
    opacity: 1;
}
.blog-reply-wrapper form textarea {
    height: 235px;
    padding: 25px 20px;
}
.blog-reply-wrapper form .text-leave input {
    background-color: #174ea9;
    border-radius: 3px;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-weight: 500;
    height: inherit;
    margin-top: 40px;
    padding: 14px 30px 13px;
    width: inherit;
}
.blog-reply-wrapper form .text-leave input:hover {
    background-color: #000;
}
.blog-dec-tags ul li:last-child::after {
    display: none;
}

/*---------------------------
    28. About us
-----------------------------*/

.overview-content-2 > h2 {
    font-size: 35px;
    font-weight: 500;
    margin-bottom: 24px;
    padding-bottom: 28px;
    position: relative;
    text-transform: uppercase;
}
.overview-content-2 > h2::before {
    background-color: #dddddd;
    bottom: 0;
    content: "";
    height: 2px;
    left: 0;
    position: absolute;
    transition: all 0.4s ease 0s;
    width: 80px;
}
.overview-content-2 > p.peragraph-blog {
    font-size: 15px;
    font-weight: 500;
    margin-bottom: 21px;
}
.count-icon span {
    font-size: 50px;
    line-height: 1;
    display: inline-block;
}
.count-title h2 {
    color: #174ea9;
    font-size: 40px;
    font-weight: bold;
    letter-spacing: 0.2px;
    margin: 15px 0 5px;
}
.count-title>span {
    color: #000;
    font-size: 20px;
    text-transform: capitalize;
}
.single-count:hover .count-icon span {
    animation: 850ms ease-in-out 0s normal none 1 running tada;
}
.team-action {
    display: inline-block;
    position: absolute;
    right: 20px;
    top: 20px;
}
.team-action a {
    background-color: transparent;
    border-radius: 50px;
    color: #fff;
    display: block;
    font-size: 18px;
    height: 40px;
    left: 30px;
    line-height: 40px;
    margin-bottom: 5px;
    opacity: 0;
    position: relative;
    text-align: center;
    visibility: hidden;
    width: 40px;
}
.team-action a.facebook {
    background-color: #3b5998;
    border: 1px solid #3b5998;
}
.team-action a.twitter {
    background-color: #55acee;
    border: 1px solid #55acee;
}
.team-action a.instagram {
    background-color: #c32aa3;
    border: 1px solid #c32aa3;
}
.team-action a.facebook:hover {
    background-color: transparent;
    color: #3b5998;
}
.team-action a.twitter:hover {
    background-color: transparent;
    color: #55acee;
}
.team-action a.instagram:hover {
    background-color: transparent;
    color: #c32aa3;
}
.team-action a:nth-child(1) {
    transition-delay: 0.1s;
}
.team-action a:nth-child(2) {
    transition-delay: 0.2s;
}
.team-action a:nth-child(3) {
    transition-delay: 0.3s;
}
.team-wrapper:hover .team-action a {
    left: 0;
    opacity: 1;
    visibility: visible;
}
.team-img {
    overflow: hidden;
    position: relative;
}
.team-img img {
    width: 100%;
}
.team-content {
    box-shadow: 0 3px 5px rgba(85, 85, 85, 0.2);
    padding: 20px 10px 23px;
}
.team-content > h4 {
    font-size: 18px;
    font-weight: 500;
    margin: 0 0 5px;
    text-transform: capitalize;
}
.team-content > span {
    font-size: 15px;
}
h4.section-title-about {
    display: inline-block;
    font-size: 28px;
    font-weight: 500;
    margin: 0;
    padding-bottom: 15px;
    position: relative;
}
h4.section-title-about::before {
    background-color: #444444;
    bottom: 0;
    content: "";
    height: 2px;
    left: 0;
    margin: 0 auto;
    position: absolute;
    right: 0;
    transition: all 0.4s ease 0s;
    width: 100%;
}
.single-testimonial.about-testi > p ,
.single-testimonial.about-testi > h4 ,
.single-testimonial.about-testi > h4 span {
    color: #000;
}
.about-testi .testimonial-rating i.theme-star-coffee {
    color: #174ea9;
}
.single-testimonial.about-testi > p {
    width: 73%;
}
.testimonial-active.about-testi-active {
    padding: 0;
}
.testimonial-active.about-testi-active .owl-dot.active {
    background: #174ea9 none repeat scroll 0 0;
}
.overview-img.text-center img {
    max-width: 100%;
}

/*------ 29. Home auto parts ------*/
.content-wrapper-2 {
    display: block;
    margin: 40px auto 80px;
    width: 1330px;
}
.autoparts-mobile-menu {
    display: none;
}
.body-bg {
    background-attachment: fixed;
    background-color: #ffffff;
    background-image: url("../../assets/img/bg/bg-16.jpg");
    background-position: center top;
    background-repeat: no-repeat;
    background-size: cover;
}
.notification-icon.notification-close-red button:hover {
    color: #df2121;
}
.notification-content.notification-red-color-2 p a {
    border-bottom: 1px solid #df2121;
    color: #df2121;
}
.language-currency.lang-curr-border-6::before {
    background-color: #eb9c9c;
}
.header-search.header-middle-color-8 form button,
.header-search.header-middle-color-10 form button {
    background-color: #fff;
    color: #000;
}
.header-search.header-middle-color-8 form button:hover {
    background-color: #000;
    color: #fff;
}
.header-search.header-middle-color-8 form input {
    border: 2px solid #e97c7c;
    color: #fff;
}
.header-middle-color-8 button.icon-cart {
    border: 2px solid #e97c7c;
}
.header-middle-color-8 button.icon-cart span.count-style {
    background-color: #000;
}
.header-middle-color-8 button.icon-cart i.cart-bag {
    border-right: 1px solid #fff;
}
.header-middle-color-8 button.icon-cart i.cart-down {
    color: #fff;
}
.header-middle-color-8 .shopping-cart-title > h4 a:hover,
.header-middle-color-8 .shopping-cart-total > h4 span.shop-total {
    color: #df2121;
}
.header-middle-color-8 .btn-style:hover {
    background-color: #df2121;
    border: 2px solid #df2121;
}
.header-middle-color-8 .shopping-cart-delete > a:hover {
    border: 2px solid #df2121;
    color: #df2121;
}
.menu-black-color .main-menu ul li a {
    color: #000;
    /*font-family: 'Teko', sans-serif;*/
    font-size: 20px;
    line-height: 68px;
    padding-top: 4px;
}
.menu-black-color .main-menu ul li a i {
    color: #000;
}
.menu-black-color .main-menu ul li ul li a,
.menu-black-color .sidebar-menu ul li ul li a {
    font-weight: 400;
    font-size: 18px;
    line-height: 28px;
}
.menu-black-color .main-menu ul li:hover > a {
    color: #df2121;
}
.social-icon ul li:last-child {
    margin: 0 0px 10px 0;
}
.auto-parts-social.social-icon {
    margin-top: 18px;
}

/* slider index auto-parts */
.slider-content-11 h5 {
    color: #fff;
    font-size: 16px;
    margin: 0;
}
.slider-content-11 h2 {
    color: #fff;
    /*font-family: "Teko", sans-serif;*/
    font-size: 72px;
    font-weight: 500;
    line-height: 1;
    margin: 2px 0 15px;
}
.slider-content-11 p {
    color: #fff;
    font-size: 16px;
    margin: 0;
}
.slider-btn-auto-parts a {
    background-color: #df2121;
    border-radius: 3px;
    color: #fff;
    display: inline-block;
    /*font-family: "Teko", sans-serif;*/
    font-size: 18px;
    font-weight: 500;
    line-height: 1;
    padding: 18px 41px 16px;
    text-transform: uppercase;
}
.slider-btn-auto-parts a:hover {
    background-color: #fff;
    color: #df2121;
}

/* section-title index auto-parts */
.teko-section-title .section-title {
    /*font-family: "Teko", sans-serif;*/
    font-size: 24px;
    text-transform: uppercase;
}

/* services-center index-auto-parts */
.services-center-text {
    text-align: right;
}
.services-center-img > img {
    width: 100%;
}
.services-center-text > h5 {
    font-size: 18px;
    font-weight: 400;
    margin: 0;
    /*font-family: "Teko", sans-serif;*/
}
.services-center-text > h3 {
    /*font-family: "Teko", sans-serif;*/
    font-size: 36px;
    font-weight: 500;
    line-height: 1;
    margin: 0 0 12px;
}
.services-center-text > h2 {
    font-size: 60px;
    font-weight: 500;
    margin: 0;
    /*font-family: "Teko", sans-serif;*/
    color: #df2121;
}
.services-center-text > h4 {
    /*font-family: "Teko", sans-serif;*/
    font-size: 24px;
    font-weight: 500;
    margin: 4px 0 77px;
    text-transform: uppercase;
}
.services-center-btn > a {
    background-color: #df2121;
    border-radius: 3px;
    color: #fff;
    display: inline-block;
    /*font-family: "Teko", sans-serif;*/
    font-size: 18px;
    font-weight: 500;
    line-height: 1;
    padding: 17px 44px 15px;
    text-transform: uppercase;
}
.services-center-btn > a:hover {
    background-color: #000;
}

/* newsletter index-auto-parts */
.newsletter-img-2 {
    background-image: url("../../assets/img/bg/bg-17.jpg");
    background-repeat: no-repeat;
}
.newsletter-icon-img {
    margin-right: 30px;
}
.newsletter-red-style .subscribe-form .mc-form .clear {
    background: rgb(255, 255, 255) url("../../assets/img/icon-img/send-3.png") no-repeat scroll right 25px center;
}
.newsletter-red-style .subscribe-form .mc-form .clear:hover {
    background: rgb(221, 221, 221) url("../../assets/img/icon-img/send-3.png") no-repeat scroll right 25px center;
}
.newsletter-style.newsletter-red-style form input {
    border: 2px solid #ec4949;
    color: #fff;
}
.newsletter-red-style .subscribe-form .clear input,
.newsletter-limegreen-style .subscribe-form .clear input {
    border: medium none;
}

/* blog index-auto-parts */
.blog-content-5 > h4 {
    font-size: 24px;
    font-weight: 500;
    line-height: 22px;
    margin: 0 0 4px;
    /*font-family: "Teko", sans-serif;*/
}
.blog-content-5 > h4 a:hover,
.blog-content-5 .blog-meta ul li a:hover {
    color: #df2121
}

/*--------- 30. Home organic -----------*/
.notification-black-color .notification-content p,
.notification-black-color .notification-icon button {
    color: #000;
}
.header-search.header-middle-color-9 form input {
    border: 2px solid #ebebeb;
    color: #a5a5a5 !important;
}
.header-search.header-middle-color-9 form button {
    background-color: #174ea9;
}
.header-search.header-middle-color-9 form button:hover {
    background-color: #000;
    color: #fff;
}
.header-middle-color-9 .header-contact-icon i,
.header-middle-color-9 .header-contact-content > p {
    color: #000;
}
.header-search.header-middle-color-9 form input[type="text"]::-moz-placeholder {
    border-width: 0 !important;
    color: #000 !important;
    opacity: 1;
    outline: 0 none !important;
}
.header-search.header-middle-color-9 form input[type="text"]::-webkit-input-placeholder {
    border-width: 0 !important;
    color: #000 !important;
    opacity: 1;
    outline: 0 none !important;
}
.header-middle-color-9 button.icon-cart {
    border: 2px solid #174ea9;
}
.header-middle-color-9 button.icon-cart span.count-style {
    background-color: #174ea9;
}
.header-middle-color-9 button.icon-cart i.cart-bag {
    border-right: 1px solid #ebebeb;
    color: #174ea9;
}
.header-middle-color-9 button.icon-cart span.count-amount {
    color: #000;
}
.header-middle-color-9 button.icon-cart i.cart-down {
    color: #a4a4a4;
}
.header-middle-color-9 .shopping-cart-title > h4 a:hover {
    color: #174ea9;
}
.header-middle-color-9 .shopping-cart-delete > a:hover {
    border: 2px solid #174ea9;
    color: #174ea9;
}
.header-middle-color-9 .shopping-cart-total > h4 span.shop-total {
    color: #174ea9;
}
.header-middle-color-9 .btn-style:hover {
    background-color: #174ea9;
    border: 2px solid #174ea9;
}
.header-top-limegreen .lang-curr-dropdown ul li ul li > a:hover,
.header-top-color-2.header-top-limegreen .header-top-right ul li a:hover {
    color: #174ea9;
}
.menu-limegreen-color.main-menu ul li a i {
    color: #fff;
}
.menu-limegreen-color.main-menu ul li ul li a:hover {
    color: #174ea9;
}

/* slider index-organic */
.slider-content-12 h5 {
    color: #174ea9;
    font-size: 18px;
    margin: 0;
}
.slider-content-12 h2 {
    color: #000;
    font-size: 42px;
    letter-spacing: -0.5px;
    line-height: 36px;
    margin: 6px 0 22px;
}
.slider-content-12 h3 {
    color: #000;
    font-size: 36px;
    margin: 0;
}
.slider-content-12 h3 span {
    font-size: 18px;
}
.slider-btn.organic-slider-btn a {
    background-color: #174ea9;
    border: 2px solid #174ea9;
}
.slider-btn.organic-slider-btn a:hover {
    background-color: #000;
    border: 2px solid #000;
}
.slider-content-12 {
    overflow: hidden;
    padding-left: 70px;
}
.owl-dot-style-2.owl-dot-limegreen .owl-dot.active {
    background: #174ea9 none repeat scroll 0 0;
}

/* product index-organic */
.devita-product-limegreen .product-rating i.theme-star,
.devita-product-limegreen .product-content > h4 a:hover,
.devita-product-limegreen.product-wrapper:hover .product-content > h4 a {
    color: #174ea9;
}
.devita-product-limegreen .product-action > a.same-action:hover,
.devita-product-limegreen .product-action > a.action-cart:hover,
.devita-product-limegreen .product-img > span,
.devita-product-limegreen .best-pro-action-2 a:hover {
    background-color: #174ea9;
}
.devita-product-limegreen .product-img-slider .cr-navigation:hover {
    background: rgb(148 18 22) none repeat scroll 0 0;
}
.product-slider-nav-2.nav-style.nav-style-limegreen div:hover,
.product-slider-nav.nav-style.nav-style-limegreen div:hover {
    background-color: #174ea9;
}
.nav-style.nav-style-limegreen.owl-carousel .owl-nav div:hover {
    background-color: #174ea9;
    color: #fff;
}
.nav-style-limegreen .add-to-cart > a {
    background-color: #174ea9;
}

/* newsletter index-organic */
.newsletter-img-3 {
    background-image: url("../../assets/img/bg/bg-18.jpg");
    background-repeat: no-repeat;
}
.newsletter-style.newsletter-limegreen-style form input {
    border: 2px solid #92d33c;
    color: #fff;
}
.newsletter-limegreen-style .subscribe-form .mc-form .clear {
    background: rgb(255, 255, 255) url("../../assets/img/icon-img/send-4.png") no-repeat scroll right 25px center;
}
.newsletter-limegreen-style .subscribe-form .mc-form .clear:hover {
    background: rgb(221, 221, 221) url("../../assets/img/icon-img/send-4.png") no-repeat scroll right 25px center;
}

/* blog index-organic */
.blog-content-6 {
    border-bottom: 1px solid #eeeeee;
    margin-bottom: 13px;
    padding-bottom: 16px;
}
.blog-content-6 > h4 {
    font-size: 18px;
    font-weight: 500;
    line-height: 24px;
    margin: 0 0 9px;
}
.blog-content-6 > p {
    margin: 0px;
}
.blog-content-6 > h4 a:hover,
.blog-content-6-wrap .blog-meta ul li a:hover {
    color: #174ea9;
}
.blog-slider-active-5.nav-style.owl-carousel .owl-nav div {
    top: -60px;
}

/* footer index-organic */
.footer-widget-limegreen.footer-black-color .opening-content ul li span {
    color: #174ea9;
}
.footer-map.footer-map-limegreen > a,
.opening-content.footer-map-limegreen ul li span {
    color: #174ea9;
}
.footer-map.footer-map-limegreen > a:hover,
.opening-content.footer-map-limegreen ul li span:hover {
    color: #000;
}
.copyright-limegreen.copyright > p a,
.footer-widget-limegreen .footer-content ul li:hover a,
.footer-widget-limegreen .footer-contact li a:hover {
    color: #174ea9;
}

/*---------- 31. Home petmarket ------------*/
.header-top-petmarket .lang-curr-dropdown ul li ul li > a:hover,
.header-top-petmarket .header-top-right ul li a:hover {
  color: #873964;
}
.header-middle-petmarket {
    padding: 40px 30px;
}
.header-middle-petmarket .middle-same {
    margin-left: 25px;
}
.header-search.header-middle-color-10 form input {
    border: 2px solid #b27797;
    color: #fff;
}
.header-middle-color-10 button.icon-cart {
    border: 2px solid #b27797;
}
.header-middle-color-10 button.icon-cart i.cart-bag {
    border-right: 1px solid #ab7593;
}
.header-middle-color-10 button.icon-cart i.cart-down {
    color: #fff;
}
.header-middle-color-10 button.icon-cart span.count-style {
    background-color: #fff;
    color: #000;
}
.header-middle-color-10 .shopping-cart-delete > a:hover {
    border: 2px solid #873964;
    color: #873964;
}
.menu-byzantine-color .main-menu ul li a {
    color: #000;
}
.menu-byzantine-color .main-menu ul li:hover > a,
.menu-byzantine-color .buy > a,
.header-middle-color-10 .shopping-cart-total > h4 span.shop-total,
.header-middle-color-10 .shopping-cart-title > h4 a:hover {
    color: #873964;
}
.menu-byzantine-color .main-menu ul li a i {
    color: #000;
}
.header-middle-color-10 .btn-style:hover {
    background-color: #873964;
    border: 2px solid #873964;
    color: #fff;
}

/* slider index-petmarket */
.slider-content-13 h2 {
    font-size: 48px;
    line-height: 40px;
    margin: 0 0 32px;
}
.slider-content-13 h5 {
    font-size: 18px;
    margin: 0px;
}
.slider-content-13.slider-negative-mrg-2 {
    margin-left: -73px;
}
.slider-btn.slider-btn-petmarket a {
    background-color: #873964;
    border: 2px solid #873964;
}
.slider-btn.slider-btn-petmarket a:hover {
    background-color: #000;
    border: 2px solid #000;
}
.owl-dot-style-2.owl-dot-yellow .owl-dot.active {
    background: #f5a001 none repeat scroll 0 0;
}

/* product index-petmarket */
.devita-product-byzantine .product-action > a.same-action:hover,
.devita-product-byzantine .product-action > a.action-cart:hover,
.devita-product-byzantine .product-img > span {
    background-color: #873964;
}
.devita-product-byzantine .product-rating i.theme-star,
.devita-product-byzantine .product-content > h4 a:hover,
.devita-product-byzantine.product-wrapper:hover .product-content > h4 a {
    color: #873964;
}
.nav-style-byzantine.nav-style.owl-carousel .owl-nav div:hover,
.product-slider-nav-2.nav-style.nav-style-byzantine div:hover,
.product-slider-nav.nav-style.nav-style-byzantine div:hover {
    background-color: #873964;
}

/* testimonials index-petmarket */
.petmarket-testi .quote-icon i,
.testimonial-rating i.theme-star-byzantine {
    color: #873964;
}
.testimonial-active.petmarket-testi .owl-dot.active {
    background: #873964 none repeat scroll 0 0;
}
.testimonial-active.petmarket-testi .owl-dot {
    background: #606b78 none repeat scroll 0 0;
}

/* best selling index-petmarket */
.devita-product-byzantine .best-pro-action-2 a:hover {
    background-color: #873964;
}

/* blog index-petmarket */
.blog-slider-active-3.nav-style.nav-style-byzantine.owl-carousel .owl-nav div {
    top: -62px;
}
.blog-byzantine .blog-categori > span {
    background-color: #873964;
}
.blog-byzantine .blog-content > h4 a:hover,
.blog-wrapper-2.blog-byzantine .blog-meta ul li a:hover {
    color: #873964;
}

/* footer index-petmarket */
.copyright-byzantine.copyright > p a,
.footer-widget-byzantine .footer-content ul li:hover a,
.footer-widget-byzantine .footer-contact li a:hover {
    color: #873964;
}
.footer-widget-byzantine-2 .footer-title > h4,
.footer-widget-byzantine .footer-title > h4 {
    color: #000;
}
.footer-widget-byzantine-2.footer-black-color .subscribe-form-2 form input {
    border-color: #e1e1e1;
    color: #000;
}
.footer-widget-byzantine-2 .subscribe-form-2 form .clear-2 input {
    background-color: #873964;
    color: #fff !important;
}
.footer-widget-byzantine-2 .subscribe-form-2 form .clear-2 input:hover {
    background-color: #000;
}
.footer-widget-byzantine-2.footer-black-color .subscribe-form-2 form input::-moz-placeholder {
    color: #000;
    opacity: 1;
}
.footer-widget-byzantine-2.footer-black-color .subscribe-form-2 form input::-webkit-input-placeholder {
    color: #000;
    opacity: 1;
}

/*-------------- 32. Home furniture ------------------*/
/* header index furniture */
.header-search.header-middle-color-11 form input {
    border: 2px solid #ebebeb;
    color: #333;
}
.header-top-furni .lang-curr-dropdown ul li ul li > a:hover ,
.header-top-color-2.header-top-furni .header-top-right ul li a:hover {
  color: #aa8d74;
}

.header-search.header-middle-color-11 form button {
    background-color: #aa8d74;
}
.header-search.header-middle-color-11 form input[type="text"]::-moz-placeholder {
    color: #333 !important;
}
.header-search.header-middle-color-11 form input[type="text"]::-webkit-input-placeholder {
    color: #333 !important;
}
.header-middle-color-11 button.icon-cart {
    border: 2px solid #ebebeb;
}
.header-middle-color-11 button.icon-cart span.count-style {
    background-color: #aa8d74;
}
.header-middle-color-2 .header-middle-color-11 button.icon-cart i.cart-bag {
    color: #aa8d74;
}
.header-middle-color-11 .shopping-cart-title > h4 a:hover,
.header-middle-color-11 .shopping-cart-total > h4 span.shop-total {
    color: #aa8d74;
}
.header-middle-color-11 .shopping-cart-delete > a:hover {
    border: 2px solid #aa8d74;
    color: #aa8d74;
}
.header-middle-color-11 .btn-style:hover {
    background-color: #aa8d74;
    border: 2px solid #aa8d74;
}
.main-menu.menu-black-color-2 ul li a {
    color: #000;
}
.main-menu.menu-black-color-2 ul li a i {
    color: #000;
}
.main-menu.menu-black-color-2 ul li:hover > a {
    color: #aa8d74;
}
.main-menu.menu-black-color-2 ul li ul li a:hover {
    color: #aa8d74;
}

/* slider index furniture */
.slider-content.slider-content-black h2,
.slider-content.slider-content-black h5,
.slider-content.slider-content-black h3 {
    color: #000;
}
.slider-content-black .slider-btn a {
    border: 2px solid #000;
    color: #000;
}
.slider-content-black .slider-btn a:hover {
    border: 2px solid #aa8d74;
    color: #fff;
    background-color: #aa8d74;
}
.owl-dot-style.owl-dot-goldenbell .owl-dot.active {
    background: #aa8d74 none repeat scroll 0 0;
}

/* product index furniture */
.devita-product-goldenbell .product-action > a.same-action:hover,
.devita-product-goldenbell .product-action > a.action-cart:hover,
.devita-product-goldenbell .product-img > span {
    background-color: #aa8d74;
}
.devita-product-goldenbell .product-rating i.theme-star,
.devita-product-goldenbell .product-content > h4 a:hover,
.devita-product-goldenbell.product-wrapper:hover .product-content > h4 a {
    color: #aa8d74;
}
.nav-style-goldenbell.nav-style.owl-carousel .owl-nav div:hover,
.product-slider-nav.nav-style-goldenbell.nav-style div:hover,
.product-slider-nav-2.nav-style-goldenbell.nav-style div:hover {
    background-color: #aa8d74;
}
.timer-style-3 span {
    border: 2px solid #ebebeb;
    border-radius: 5px;
    color: #000;
    display: inline-block;
    margin: 0 2px;
    padding: 12px 5px;
    position: relative;
    text-align: center;
}
.timer-style-3 span p {
    color: #000;
    margin: 20px 0 -44px;
}
.furniture-best-selling .product-tab-list-2 {
    float: left;
    padding: 0 20px 0 0px;
}
.devita-product-2.pro-goldenbell-mrg {
    margin-bottom: 31px;
}
.furniture-best-selling .product-tab-list-2 a h4 {
    font-size: 20px;
    color: #000;
    font-weight: 500;
}
.furniture-best-selling .product-tab-list-2 a.active h4 {
    color: #aa8d74;
}
.devita-product-goldenbell .best-pro-action-2 a:hover {
    background-color: #aa8d74;
}

/* service index furniture */
.shop-service-content.service-black-color-2 > h4 {
    color: #000;
}
.shop-service-content.service-black-color-2 > p {
    color: #757575;
}
.shop-service-content.service-black-color-2::before {
    background-color: #e2e2e2;
}

/* footer index furniture */
.footer-widget-goldenbell .footer-title > h4 {
    color: #000;
}
.copyright-goldenbell.copyright > p a,
.footer-widget-goldenbell .footer-content ul li:hover a,
.footer-widget-goldenbell .footer-contact li a:hover {
    color: #aa8d74;
}
.footer-widget-goldenbell .subscribe-form-2 form .clear-2 input {
    background-color: #aa8d74;
    color: #fff;
}
.footer-widget-goldenbell .subscribe-form-2 form .clear-2 input:hover {
    background-color: #000;
    color: #fff;
}
.footer-widget-goldenbell .subscribe-form-2 form input {
    color: #000;
    border-color: #dedada;
}
.footer-widget-goldenbell .subscribe-form-2 form input::-moz-placeholder {
    color: #000;
    opacity: 1;
}

/*---------------- 33. Home Cosmetic --------------*/
/* header index-Cosmetic */
.bouquet-bg-2 {
    background-color: #5b3c4e;
}
.bouquet-header-top .language-currency::before {
    background-color: #79606e;
}
.bouquet-header-top .lang-curr-dropdown ul li ul li > a:hover {
    color: #755567;
}
.header-middle-color-12 .header-search-2 form input {
    border: 2px solid #755567;
    color: #fff;
}
.header-middle-color-12 .header-search-2 form input::-moz-placeholder {
    color: #fff;
    opacity: 1;
}
.header-middle-color-12 .header-search-2 form input::-webkit-input-placeholder {
    color: #fff;
    opacity: 1;
}
.header-middle-color-12 .header-search-2 form button {
    background-color: #755567;
    color: #fff;
    padding: 6px 12px;
    border-radius: 0 3px 3px 0;
}
.header-middle-color-12 .header-search-2 form button:hover {
    color: #ddd;
}
.header-middle-color-12 button.icon-cart {
    border: 2px solid #755567;
}
.header-middle-color-12 button.icon-cart span.count-style {
    background-color: #755567;
}
.header-middle-color-12 button.icon-cart i.cart-bag {
    border-right: 1px solid #725766;
}
.header-middle-color-12 button.icon-cart i.cart-down {
    color: #fff;
}
.header-middle-color-12 .shopping-cart-title > h4 a:hover,
.header-middle-color-12 .shopping-cart-total > h4 span.shop-total {
    color: #624455;
}
.header-middle-color-12 .shopping-cart-delete > a:hover {
    border: 2px solid #624455;
    color: #624455;
}
.header-middle-color-12 .btn-style:hover {
    background-color: #624455;
    border: 2px solid #624455;
}
.bouquet-bg-2 .main-menu ul li a i {
    color: #fff;
}
.bouquet-bg-2 .main-menu ul li ul li a:hover {
    color: #624455;
}

/* slider index-Cosmetic */
.slider-content.slider-content-black-2 h2 span {
    font-weight: 300;
    font-size: 48px;
}
.slider-content.slider-content-black-2 h2 {
    font-size: 60px;
    line-height: 44px;
    margin: 8px 0 25px;
    text-transform: uppercase;
}
.slider-content.slider-content-black-2 h2,
.slider-content.slider-content-black-2 h5 {
    color: #000;
}
.slider-content-black-2 .slider-btn a {
    background-color: #624455;
    border: 2px solid #624455;
}
.slider-content-black-2 .slider-btn a:hover {
    background-color: #000;
    border: 2px solid #000;
}
.owl-dot-style-2.owl-dot-bouquet .owl-dot.active {
    background: #624455 none repeat scroll 0 0;
}
.owl-dot-style-2.owl-dot-bouquet .owl-dot {
    background: #d2d2d2 none repeat scroll 0 0;
}

/* product index-Cosmetic */
.content-wrapper-3 {
    display: block;
    margin: 0px auto 40px;
    width: 1250px;
    background-color: #fff;
}
.product-tab-list.tab-list-bouquet > a {
    position: relative;
}
.product-tab-list.tab-list-bouquet > a h4 {
    /*border: medium none;
    font-size: 20px;
    padding: 0px 22px 0px;*/
}
.product-tab-list.tab-list-bouquet > a.active h4 {
    border: medium none;
    color: #dc1b00;
}
.product-tab-list.tab-list-bouquet a::before {
    /*background-color: #d7d7d7;
    border-radius: 50px;
    content: "";
    height: 5px;
    position: absolute;
    right: -8px;
    top: 10px;
    width: 5px;*/
}
.product-tab-list.tab-list-bouquet a:last-child::before {
    /*display: none;*/
}
.product-tab-list.tab-list-bouquet::before,
.product-tab-list.tab-list-bouquet::after {
    top: 12px;
}
.devita-product-bouquet .product-action > a.same-action:hover,
.devita-product-bouquet .product-action > a.action-cart:hover,
.devita-product-bouquet .product-img > span {
    background-color: #624455;
}
.devita-product-bouquet .product-rating i.theme-star,
.devita-product-bouquet .product-content > h4 a:hover,
.devita-product-bouquet.product-wrapper:hover .product-content > h4 a {
    color: #624455;
}
.devita-product-bouquet .product-img-slider .cr-navigation:hover {
    background: rgba(98, 68, 85, 0.8) none repeat scroll 0 0;
}
.nav-style-bouquet.nav-style.owl-carousel .owl-nav div:hover,
.product-slider-nav.nav-style-bouquet.nav-style div:hover,
.product-slider-nav-2.nav-style-bouquet.nav-style div:hover {
    background-color: #624455;
}

/* newsletter index-Cosmetic */
.newsletter-black-color .newsletter-content > p,
.newsletter-black-color .newsletter-content > h4 {
    color: #000;
}
.newsletter-black-color .newsletter-style form input {
    border: 2px solid #ebebeb;
    color: #000;
}
.newsletter-black-color .subscribe-form .clear input {
    border: medium none;
}
.newsletter-black-color .subscribe-form .mc-form .clear {
    background: rgb(98, 68, 85) url("../../assets/img/icon-img/send-5.png") no-repeat scroll right 25px center;
}
.newsletter-black-color .subscribe-form .mc-form .clear:hover {
    background: rgb(0, 0, 0) url("../../assets/img/icon-img/send-5.png") no-repeat scroll right 25px center;
}
.newsletter-black-color .newsletter-style form input::-moz-placeholder {
    color: #000;
    opacity: 1;
}
.newsletter-black-color .newsletter-style form input::-webkit-input-placeholder {
    color: #000;
    opacity: 1;
}
.newsletter-border-2 {
    border: 1px solid #ebebeb;
    border-radius: 5px;
    padding: 22px 40px;
}

/* footer index-Cosmetic */
.copyright-bouquet.copyright > p a,
.footer-widget-bouquet .footer-content ul li:hover a,
.footer-widget-bouquet .footer-contact li a:hover {
    color: #624455;
}
.footer-widget-bouquet .footer-map > a {
    color: #000;
}
.footer-widget-bouquet .footer-map > a:hover {
    color: #624455;
}
.footer-widget-bouquet .opening-content ul li span {
    color: #624455;
}

/*---------- 34. Home toy ----------*/
/* header index-toy */
.menu-categories {
  padding: 19px 10px 18px;
  position: relative;
  border-left: 1px solid #ebebeb;
  border-right: 1px solid #ebebeb;
}
.menu-categories > h3 {
    font-size: 14px;
    font-weight: 500;
    margin: 0;
    text-align: center;
}
.menu-categories > h3 a i {
    padding-right: 15px;
}
.category-menu {
    left: 0;
    position: absolute;
    top: 100%;
    width: 100%;
    background-color: #fff;
    z-index: 9;
    display: none;
}
.category-menu nav > ul {
    padding: 30px 0;
}
.category-menu ul li {
    list-style: none;
    position: relative;
}
.category-menu nav > ul > li > a {
    border-bottom: 1px solid #f1f1f1;
    color: #000;
    display: block;
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 12px;
    margin-left: 30px;
    margin-right: 20px;
    padding-bottom: 12px;
    text-transform: capitalize;
}
.category-menu nav > ul > li:last-child > a {
    border-bottom: medium none;
    margin-bottom: 0;
    padding-bottom: 0;
}
.category-menu ul li:hover > a {
    color: #df2121;
}
.category-menu nav > ul > li > a > i {
    color: #383838;
    float: right;
    font-size: 12px;
    position: relative;
    top: 1px;
}
.category-menu nav > ul > li:hover > a > i {
    color: #df2121;
}
.category-menu nav > ul > li > a > i.none-lg {
    display: none;
}
.category-menu nav > ul > li > ul.category-mega-menu {
    background-color: rgba(255, 255, 255, 0.97);
    display: block;
    left: 100%;
    padding: 33px 30px 37px 30px;
    position: absolute;
    text-align: left;
    top: 0;
    transform: rotateX(90deg);
    transform-origin: center top 0;
    transition: all 0.5s ease 0s;
    visibility: hidden;
    z-index: 999;
}
.category-menu nav > ul > li > ul.category-mega-menu.category-3-col {
    width: 700px;
}
.category-menu nav > ul > li > ul.category-mega-menu.category-2-col {
    width: 500px;
}
.category-menu nav > ul > li:hover > ul.category-mega-menu {
    transform: rotateX(0deg);
    visibility: visible;
}
.category-menu nav > ul > li > ul.category-mega-menu > li {
    border-right: 1px solid #ebebeb;
    display: inline-block;
    float: left;
    margin-right: 16px;
    padding-left: 30px;
}
.category-menu nav > ul > li > ul.category-mega-menu > li:last-child {
    border-right: none;
}
.category-menu nav > ul > li > ul.category-mega-menu.category-3-col > li {
    width: 30.333%;
}
.category-menu nav > ul > li > ul.category-mega-menu.category-2-col > li {
    width: 45%;
}
.category-menu nav > ul li ul.category-small-device {
    display: none;
    padding-left: 45px;
    padding-right: 20px;
}
.category-menu nav > ul li ul.category-small-device li {
    padding-bottom: 5px;
}
.category-menu nav > ul li ul.category-small-device li a {
    color: #000;
}
.category-menu nav > ul li ul.category-small-device li:hover > a {
    color: #df2121;
}
.category-menu nav > ul li ul.category-small-device li a i {
    float: right;
}
.category-menu nav > ul li ul.category-small-device li ul {
    padding-left: 25px
}
.menu-coffee-color.toy-menu .main-menu ul li:hover > a,
.menu-coffee-color.toy-menu .main-menu ul li ul li a:hover {
    color: #df2121;
}
.menu-categories:hover h3 a {
    color: #df2121;
}
.main-menu.shoe-menu nav > ul > li > ul.mega-menu {
    top: 69%;
}

/* slider index-toy */
.slider-content.toy-slider-content h2 span {
    font-size: 48px;
    font-weight: 300;
}
.slider-content.toy-slider-content h2 {
    font-size: 60px;
    line-height: 45px;
    margin: 3px 0 0;
    text-transform: uppercase;
}
.slider-content.toy-slider-content {
    margin-left: -75px;
}
.owl-dot-style-4 .owl-dot {
    background: #c49638 none repeat scroll 0 0;
    border-radius: 50px;
    display: inline-block;
    height: 10px;
    margin: 0 5px;
    width: 10px;
}
.owl-dot-style-4.owl-dot-red .owl-dot.active {
    background: #df2121 none repeat scroll 0 0;
}
.toy-slider-content .slider-btn a:hover {
    background-color: #df2121;
    border: 2px solid #df2121;
}

/* product index-toy */
.product-tab-list.product-tab-list-red > a.active h4 {
    border: 2px solid #df2121;
    color: #df2121;
}
.best-selling-area-toy .best-selling-bundle-2 {
    padding: 5px 5px 0;
}
.best-selling-area-toy .best-selling-pro-wrapper:hover {
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
}

/* service index-toy */
.shop-service-content-4 {
    display: flex;
    justify-content: center;
}
.service-content-4-img {
    flex: 0 0 48px;
}
.service-content-4-img > img {
    width: 100%;
}
.service-content-4-content {
    margin-left: 20px;
    text-align: left;
}
.service-content-4-content > h5 {
    font-size: 14px;
    font-weight: 500;
    margin: 0 0 1px;
}
.service-content-4-content > p {
    color: #757575;
    margin: 0;
}
.shop-service-content-4 {
    border: 1px solid #e1e1e1;
    border-radius: 3px;
    display: flex;
    justify-content: center;
    padding: 30px 20px 26px;
}

/* deals index-toy */
.deals-content.deals-content-white > h2,
.deals-content.deals-content-white > p,
.deals-content-white .timer-style-2 span p,
.deals-content-white .timer-style-2 span {
    color: #fff;
}
.deals-content-white .deals-img {
    margin: 0 -5px 0 -40px;
}
.deals-content-white .deals-content {
    margin: 0 -48px 0 27px;
}

/* banner index-toy */
.banner-area > img {
    width: 100%;
}

/* footer index-toy */
.footer-widget-red .footer-map > a {
    color: #df2121;
}
.footer-widget-red .footer-map > a:hover {
    color: #000;
}

/*------------- 35. Home housewares -----------*/

/* header Index Housewares */
.header-middle-color-13.header-search form button {
    background-color: #fcb800;
}
.header-middle-color-13.header-search form button:hover {
    background-color: #666;
    color: #fff;
}
.header-middle-color-13.header-search form input {
    background: #fff none repeat scroll 0 0;
    border: 2px solid #fff;
    border-radius: 5px 5px 5px 5px;
    color: #000;
}
.header-middle-color-13.header-search form input[type="text"]::-moz-placeholder {
    color: #000 !important;
}
.header-middle-color-13.header-search form input[type="text"]::-webkit-input-placeholder {
    color: #000 !important;
}
.header-middle-color-13 button.icon-cart {
    background-color: #fff;
    border: 2px solid #fff;
    border-radius: 5px;
}
.header-middle-color-13 button.icon-cart span.count-amount {
    color: #000;
}
.header-middle-color-13 button.icon-cart i.cart-bag {
    border-right: 1px solid #ebebeb;
    color: #000;
}
.header-middle-color-13 button.icon-cart span.count-style {
    background-color: #fcb800;
}
.header-middle-color-13 button.icon-cart i.cart-down {
    color: #a4a4a4;
}
.header-middle-color-13 .shopping-cart-title > h4 a:hover,
.header-middle-color-13 .shopping-cart-total > h4 span.shop-total,
.header-middle-color-13.header-cart:hover button.icon-cart i.cart-bag,
.header-middle-color-13.header-cart:hover > button.icon-cart span.count-amount {
    color: #fcb800;
}
.header-middle-color-13 .shopping-cart-delete > a:hover {
    border: 2px solid #fcb800;
    color: #fcb800;
}
.header-middle-color-13 .btn-style:hover {
    background-color: #fcb800;
    border: 2px solid #fcb800;
}
.main-menu.menu-housewares-color ul li a i {
    color: #fff;
}
.main-menu.menu-housewares-color ul li:hover > a {
    color: #fcb800;
}
.main-menu.menu-housewares-color ul li ul li a:hover {
    color: #fcb800;
}
.header-top-persiangreen .lang-curr-dropdown ul li ul li > a:hover {
    color: #fcb800;
}

/* slider Index Housewares */
.slider-content-2.slider-persiangreen-color h5 {
    color: #fcb800;
}
.slider-content-2.slider-persiangreen-color h2 {
    color: #fff;
}
.slider-content-2.slider-persiangreen-color h3 {
    color: #fcb800;
}
.slider-content-2.slider-persiangreen-color h3 span {
    color: #fff;
}
.slider-persiangreen-color .slider-btn.slider-btn-2 a {
    background-color: #fcb800;
    border: 2px solid #fcb800;
    color: #000;
}
.slider-persiangreen-color .slider-btn.slider-btn-2 a:hover {
    background-color: #fff;
    border: 2px solid #fff;
    color: #fcb800;
}
.owl-dot-style-2.owl-dot-persiangreen .owl-dot.active {
    background: #fcb800 none repeat scroll 0 0;
}

/* product Index Housewares */
.furniture-best-selling .product-tab-list-2.tab-list-goldenbell a.active h4 {
    color: #fcb800;
}
.product-slider-nav.nav-style.nav-style-persiangreen div:hover,
.product-slider-nav-2.nav-style.nav-style-persiangreen div:hover,
.nav-style.nav-style-persiangreen.owl-carousel .owl-nav div:hover {
    background-color: #fcb800;
}
.devita-product-persiangreen .product-action > a.same-action:hover,
.devita-product-persiangreen .product-action > a.action-cart:hover,
.devita-product-persiangreen .product-img > span,
.devita-product-persiangreen .best-pro-action-2 a:hover {
    background-color: #fcb800;
}
.devita-product-persiangreen .product-content > h4 a:hover,
.devita-product-persiangreen .product-rating i.theme-star {
    color: #fcb800;
}

/* newsletter Index Housewares */
.newsletter-img-4 {
    background-image: url("../../assets/img/bg/bg-20.jpg");
    background-repeat: no-repeat;
}
.newsletter-style.newsletter-persiangreen-style form input {
    border: 2px solid #434f57;
    color: #fff;
}
.newsletter-persiangreen-style .subscribe-form .clear input {
    border: none;
}
.newsletter-persiangreen-style .subscribe-form .mc-form .clear {
    background: rgb(252, 184, 0) url("../../assets/img/icon-img/send-5.png") no-repeat scroll right 25px center;
    transition: all .3s ease 0s;
}
.newsletter-persiangreen-style .subscribe-form .mc-form .clear:hover {
    background: rgb(255, 255, 255) url("../../assets/img/icon-img/send-2.png") no-repeat scroll right 25px center;
}

/* blog Index Housewares */
.blog-persiangreen .blog-content-6 > h4 a:hover,
.blog-persiangreen .blog-meta ul li a:hover {
    color: #fcb800;
}

/* footer Index Housewares */
.footer-map.persiangreen > a,
.copyright.persiangreen > p a,
.opening-content.persiangreen ul li span {
    color: #fcb800;
}
.footer-map.persiangreen > a:hover {
    color: #fff;
}

/*----------- 36. Home underwear ----------*/
/* header index-underwear */
.content-wrapper-4 {
    display: block;
    margin: 50px auto;
    width: 1270px;
    background-color: #fff;
}
.body-bg-2 {
    background-attachment: fixed;
    background-color: #ffffff;
    background-image: url("../../assets/img/bg/bg-21.jpg");
    background-position: center top;
    background-repeat: no-repeat;
    background-size: cover;
}

.header-top-color-2.header-top-pink .header-top-right ul li a:hover {
    color: #ee3875;
}

.header-middle-color-14 button.icon-cart {
    border-radius: 50px;
    border: 2px solid #ebebeb;
}
.header-middle-color-14 button.icon-cart span.count-style {
    background-color: #ee3875;
    left: -19px;
    top: 9px;
}
.header-middle-color-14 button.icon-cart i.cart-bag {
    border-right: 1px solid #e1e1e1;
    color: #000;
}
.header-middle-color-14 button.icon-cart span.count-amount {
    color: #000;
}
.header-middle-color-14 button.icon-cart i.cart-down {
    color: #000;
}
.header-middle-color-14 .shopping-cart-title > h4 a:hover {
    color: #ee3875;
}
.header-middle-color-14 .shopping-cart-delete > a:hover {
    border: 2px solid #ee3875;
    color: #ee3875;
}
.header-middle-color-14 .shopping-cart-total > h4 span.shop-total {
    color: #ee3875;
}
.header-middle-color-14 .btn-style:hover {
    background-color: #ee3875;
    border: 2px solid #ee3875;
}
.header-middle-color-14.header-cart:hover button.icon-cart i.cart-bag,
.header-middle-color-14.header-cart:hover > button.icon-cart span.count-amount {
    color: #ee3875;
}
.header-middle-color-14.header-search-2 form input {
    border-radius: 50px;
}
.menu-red-color.hover-pink .main-menu ul li:hover > a,
.menu-red-color.hover-pink .main-menu ul li ul li a:hover {
    color: #ee3875;
}
.header-top-pink .lang-curr-dropdown ul li ul li > a:hover,
.shop-underware .single-shop-service > h5 span {
    color: #ee3875;
}
.menu-red-color.hover-pink.menu-sunglass {
    border-bottom: 3px solid #f1f1f1;
    border-top: 3px solid #f1f1f1;
}
.shop-service-area.shop-underware {
    padding: 24px 0;
}

/* slider index-underwear */
.slider-content-underware h2 {
    color: #fff;
    font-size: 60px;
    font-weight: 300;
    line-height: 46px;
    margin: 0 0 17px;
    text-transform: uppercase;
}
.slider-content-underware h2 span {
    color: #ee3875;
}
.slider-content-underware h4 {
    color: #fff;
    font-size: 18px;
    margin: 0 0 0px;
}
.slider-content-underware .slider-btn.white-color-btn a {
    background-color: #ee3875;
    border: 2px solid #ee3875;
    border-radius: 50px;
}
.slider-content-underware .slider-btn.white-color-btn a:hover {
    background-color: #000;
    border: 2px solid #000;
}
.owl-dot-style-5 .owl-dot {
    background: #b0a088 none repeat scroll 0 0;
    border-radius: 50px;
    display: inline-block;
    height: 10px;
    margin: 0 5px;
    width: 10px;
}
.owl-dot-style-5.owl-dot-red .owl-dot.active {
    background: #ee3875 none repeat scroll 0 0;
}

/* banner index-underwear */
.banner-service-wrap > img {
    width: 100%;
}
.banner-service-wrap {
    position: relative;
}
.banner-service {
    left: 0;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
}
.banner-service-mrg.mb-30 {
    margin: 0 20px;
}
.banner-service > h4 {
    color: #fff;
    font-size: 18px;
    font-weight: 300;
    line-height: 18px;
    margin: 0 0 2px;
    text-transform: uppercase;
}
.banner-service > h3 {
    color: #fff;
    font-size: 24px;
    font-weight: 500;
    line-height: 1;
    margin: 0;
    text-transform: uppercase;
}
.banner-hover-2 {
    overflow: hidden;
}
.banner-hover-2 img {
    transition: all 1.5s ease 0s;
    width: 100%;
}
.banner-hover-2:hover img {
    transform: scale(1.1);
}

/* product index-underwear */
.furniture-best-selling .product-tab-list-2.tab-list-pink a.active h4 {
    color: #ee3875;
}
.devita-product-pink .product-content > h4 a:hover,
.devita-product-pink .product-rating i.theme-star {
    color: #ee3875;
}
.devita-product-pink .product-action > a.same-action:hover,
.devita-product-pink .product-action > a.action-cart:hover,
.devita-product-pink .product-img > span,
.devita-product-pink .best-pro-action-2 a:hover {
    background-color: #ee3875;
}
.product-slider-nav.nav-style.nav-style-pink div:hover,
.product-slider-nav-2.nav-style.nav-style-pink div:hover,
.nav-style.nav-style-pink.owl-carousel .owl-nav div:hover {
    background-color: #ee3875;
}
.product-slider-nav.nav-style.nav-style-pink div,
.product-slider-nav-2.nav-style.nav-style-pink div,
.nav-style.nav-style-pink.owl-carousel .owl-nav div {
    border-radius: 50px;
}

/* banner index-underwear */
.banner-wrap {
    position: relative;
}
.banner-text {
    bottom: 58px;
    left: 0;
    position: absolute;
    right: 0;
}
.banner-text > h4 {
    color: #fff;
    font-size: 18px;
    line-height: 1;
    margin: 0;
    text-transform: uppercase;
}
.banner-text > h3 {
    color: #fff;
    font-size: 24px;
    font-weight: 500;
    margin: 0 0 15px;
    text-transform: uppercase;
}
.banner-text > h5 {
    color: #fff;
    font-size: 18px;
    margin: 0;
}
.banner-btn a.btn-style {
    background-color: #ee3875;
    border-radius: 50px;
    color: #fff;
    display: inline-block;
    padding: 15px 37px 13px;
    border: none;
}
.banner-btn a.btn-style:hover {
    background-color: #fff;
    color: #ee3875;
}

/* blog index-underwear */
.blog-pink-color .blog-categori > span {
    background-color: #ee3875;
}
.blog-pink-color .blog-content > h4 a:hover,
.blog-wrapper-2.blog-pink-color .blog-meta ul li a:hover {
    color: #ee3875;
}

/* footer index-underwear */
.footer-widget-pink .footer-title > h4 {
    color: #fff;
}
.copyright-pink.copyright > p a,
.footer-widget-pink .footer-content ul li:hover a,
.footer-widget-pink .footer-contact li a:hover {
    color: #ee3875;
}
.footer-widget-pink .subscribe-form-2 form .clear-2 input {
    background-color: #ee3875;
    border-radius: 50px;
    color: #fff !important;
}
.footer-widget-pink .subscribe-form-2 form .clear-2 input:hover {
    background-color: #fff;
    color: #ee3875 !important;
}

/*----------- 37. Home shoe ----------*/

/* header index-shoe */
.header-middle-color-15 .logo {
    display: inline-block;
    float: left;
    margin-right: 130px;
}
.header-middle-color-15 .main-menu ul li a,
.header-middle-color-15 .main-menu ul li a i {
    color: #000;
}
.header-middle-color-15 .header-search form input {
    border: 2px solid #ebebeb;
    color: #000;
}
.header-middle-color-15 .header-search form input[type="text"]::-moz-placeholder {
    color: #000 !important;
}
.header-middle-color-15 .header-search form input[type="text"]::-webkit-input-placeholder {
    color: #000 !important;
}
.header-middle-color-15 .header-search form button {
    background-color: #ebebeb;
    color: #000;
}
.header-middle-color-15 button.icon-cart {
    border: 2px solid #ebebeb;
}
.header-middle-color-2.header-middle-color-15 button.icon-cart i.cart-bag {
    border-right: 1px solid #ebebeb;
    color: #000;
}
.header-middle-color-15 button.icon-cart span.count-style {
    background-color: #dd1c1c;
}
.header-middle-color-15 .shopping-cart-title > h4 a:hover,
.header-middle-color-15 .shopping-cart-total > h4 span.shop-total {
    color: #dd1c1c;
}
.header-middle-color-15 .btn-style:hover {
    background-color: #dd1c1c;
    border: 2px solid #dd1c1c;
}
.header-middle-color-15 .shopping-cart-delete > a:hover {
    border: 2px solid #dd1c1c;
    color: #dd1c1c;
}
.header-middle-color-15 .main-menu ul li:hover > a,
.header-middle-color-15 .main-menu ul li ul li a:hover,
.header-top-red-3 .lang-curr-dropdown ul li ul li > a:hover,
.header-top-red-3.header-top-color-2 .header-top-right ul li a:hover {
    color: #dd1c1c;
}
.header-middle-color-15 .main-menu ul li a {
    line-height: 49px;
}
.header-middle-color-15 .main-menu ul li ul li a {
    line-height: 28px;
}
.header-middle-color-15 {
    position: relative;
}
.shoe-header .shoe-mobile-menu {
    display: none;
}
.shoe-slider .slider-content-black .slider-btn a {
    background-color: #dd1c1c;
    border: 2px solid #dd1c1c;
    color: #fff;
}
.shoe-slider .slider-content-black .slider-btn a:hover {
    background-color: #000;
    border: 2px solid #000;
}
.devita-product-red-3 .product-action > a.same-action:hover,
.devita-product-red-3 .product-action > a.action-cart:hover,
.devita-product-red-3 .product-img > span,
.devita-product-red-3 .best-pro-action-2 a:hover {
    background-color: #dd1c1c;
}
.furniture-best-selling .product-tab-list-2.tab-list-red-3 a.active h4,
.devita-product-red-3 .product-content > h4 a:hover,
.devita-product-red-3 .product-rating i.theme-star {
    color: #dd1c1c;
}
.nav-style-red-3.nav-style.owl-carousel .owl-nav div:hover,
.product-slider-nav-2.nav-style.nav-style-red-3 div:hover,
.product-slider-nav.nav-style.nav-style-red-3 div:hover {
    background-color: #dd1c1c;
}
.shoe-deal-area .timer-style-1 {
    margin-top: 7px;
    text-align: left;
}
.shoe-deal-area .product-content.best-pro-content.best-selling-style-2 {
    padding: 18px 13px 25px 10px;
}

.button-qutation
{
    height: 40px;
    background: #1c49a5;
    border: none;
    padding: 0px 50px;
    border-radius: 2px;
    color: #fff;
}
.button-qutation:hover{
    background: #1e98d6;
    color: white;
    webkit-transition: all 0.3s ease-out 0s;
    -moz-transition: all 0.3s ease-out 0s;
    -ms-transition: all 0.3s ease-out 0s;
    -o-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;
}
.highlight{
    height: 385px;
    overflow: hidden;
}
.hidden {
    display: none;
}
.bluetags:hover{
    color: #cd000f;
} 



    
body{
    background-color: white;
}
.mb-30 {
    margin-bottom: 60px;
}
.product-tab-list::before, .product-tab-list::after {
    width: 50px;
}
<?php if ($this->session->userdata('site_lang') == '221') { ?>
    body{
        font-family: 'Kanit', sans-serif !important; 
    }
<? }else{ ?>
    body{
        font-family: 'Kanit', sans-serif;
    }
        
<? } ?>


.header-search form {
position: relative
}

.header-search form input {
background: <?=$json->header_bottom_bg_color?$json->header_bottom_bg_color:''?>  none repeat scroll 0 0;
background: #1A5EC1;
box-shadow: none;
font-size: 13px;
height: 45px;
padding: 0px 45px 0 16px;
width: 100%;
/*border-radius: 0 7px 7px 0;*/
}
.header-search.header-search-coffee form input[type="text"]::-webkit-input-placeholder {
    color: #FFFFF8 !important;
    opacity: 1;
}
.header-search form input[type="text"]::-webkit-input-placeholder {
    border: 2px solid #ddd;
    color: #ddd;
}

.header-search form input[type="text"]::-moz-placeholder {
color: #ddd !important;
outline: 0 !important;
border-width: 0 !important;
opacity: 1;
}
.header-search form input[type="text"]::-webkit-input-placeholder {
color: #ddd !important;
outline: 0 !important;
border-width: 0 !important;
opacity: 1;
}
.header-search form input[type="text"]::-ms-input-placeholder {
color: #ddd !important;
outline: 0 !important;
border-width: 0 !important;
opacity: 1;
}
.header-search form button {
background-color: #174ea9;
border: medium none;
border-radius: 0 20px 20px 0;
color: #fff;
cursor: pointer;
font-size: 20px;
height: 100%;
padding: 0 14px;
position: absolute;
right: 0;
top: 0;
transition: all .3s ease 0s;
}

.header-search form button:hover {
background-color: #fff;
color: #174ea9;
}
.lang-curr-dropdown ul li ul {
background: #fff none repeat scroll 0 0;
border: medium none;
border-radius: 2px;
box-shadow: 0 0 7px 0.5px rgba(0, 0, 0, 0.15);
display: none;
left: 0;
padding: 15px 5px;
position: absolute;
width: 120px;
z-index: 99;
top: 150%;
}

.header-search.header-search-coffee form input {
    border: 2px solid #1A5EC1;

    <?=$json->searchbox==2?'border-radius: 30px;':'';  ?>   
}
.header-search.header-search-coffee form button {
    background-color: #1A5EC1;
    /* border: 2px solid  #a2a2a2; */
    color: #a2a2a2 ;
    border-color: #1A5EC1;
    
}
.ion-ios-search-strong:before {
    color: #fffff8;
}

.header-position {
    left: unset;
    position: relative;
    top: unset;
}
.header-bottom ,.white-bg{
    background-color: #dc0000;
}

.menu-coffee-color .main-menu ul li a, .menu-red-color .main-menu ul li a
{
    color: #333333;   
}

.menu-coffee-color .main-menu ul li:hover > a
{
    color: #195dc1;
}


.tab-content.description-review-bottom,.product-dec-slider a.slick-active:before, .product-dec-slider-2 a.slick-active:before{
    background-color: white;
}
.section-bg-white{
    background-color: white;
}
.product-slider-nav.nav-style div, .product-slider-nav-2.nav-style div{
    
    color: black;
}

    .cuttotext {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        text-transform: none;
        white-space: normal;
        text-overflow: ellipsis;
        height: 38px;
    }
    .blog-content h4 {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        text-transform: none;
        white-space: normal;
        text-overflow: ellipsis;
        height: 48px;
    }
    .blog-content p {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        text-transform: none;
        white-space: normal;
        text-overflow: ellipsis;
        height: 48px;
    }
    .blog-wrapper h3 {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        text-transform: none;
        white-space: normal;
        text-overflow: ellipsis;
        height: 48px;
    }
    .blog-wrapper p {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        text-transform: none;
        white-space: normal;
        text-overflow: ellipsis;
        height: 48px;
    }
    .header-middle-bg-img img {
        /*margin-top: 20px;*/
    }
    .header-cart {
        padding-top: 30px;
    }
</style>