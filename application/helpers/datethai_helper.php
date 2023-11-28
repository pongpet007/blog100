<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
    function show_date($time)
    {

        $dayTH = array('อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์');
		$monthTH = array('','มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม');
		$monthTH_brev = array('','ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.');
	    
	    $thai_date_return = ' วัน '.$dayTH[date("N",$time)];   
	    $thai_date_return .= ' '.date("j",$time);   
	    $thai_date_return .=" ".$monthTH[date("n",$time)];   
	    $thai_date_return .= " ".(date("Y",$time)+543);   
	    return $thai_date_return;
    }   
}