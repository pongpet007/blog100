<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

///// For Content Controller//////////

///// Home ///// 
$route['(TH|th|US|us)\/home\/index10'] = 'Home/index10';
$route['(TH|th|US|us)\/home'] = 'Home';
$route['(TH|th|US|us)\/about-us'] = 'Content/index/2';
$route['(TH|th|US|us)\/products'] = 'Products/index';
$route['(TH|th|US|us)\/products\/(\d+)'] = 'Products/index';
$route['(TH|th|US|us)\/products-category\/(.*)'] = 'Products/index/1/$2';
$route['(TH|th|US|us)\/products-brand\/(.*)'] = 'Products/index/2/$2';
$route['(TH|th|US|us)\/products-tags\/(.*)'] = 'Products/index/3/$2';
$route['(TH|th|US|us)\/products-detail\/(.*)'] = 'Products/detail/$1/$2';
$route['(TH|th|US|us)\/news'] = 'News/index';
$route['(TH|th|US|us)\/news-detail\/(.*)'] = 'News/detail/$1/$2';
$route['(TH|th|US|us)\/news-tags\/(.*)'] = 'News/index/$2';
$route['(TH|th|US|us)\/article'] = 'Blog/index';
$route['(TH|th|US|us)\/article-detail\/(.*)'] = 'Blog/detail/$1/$2';
$route['(TH|th|US|us)\/article-tags\/(.*)'] = 'Blog/index/$2';
$route['(TH|th|US|us)\/portforio'] = 'Gallery/index/';
$route['(TH|th|US|us)\/portforio\/(.*)'] = 'Gallery/index/';
$route['(TH|th|US|us)\/portforio-category\/(.*)'] = 'Gallery/index/1/$2';
$route['(TH|th|US|us)\/portforio-detail\/(.*)'] = 'Gallery/detail/$2';
$route['(TH|th|US|us)\/video'] = 'Video/index';
$route['sc'] = 'Video/sc';

$route['(TH|th|US|us)\/contact-us'] = 'Content/index/3';
$route['(TH|th|US|us)\/pdpa'] = 'Pdpa/index';
$route['(TH|th|US|us)\/pdpa\/cookie'] = 'Content/index/10';
$route['(TH|th|US|us)\/home\/stat'] = 'Home/stat';
$route['(TH|th|US|us)\/Cookie'] = 'Content/index/4';

// portforio-detail/gallery-url

$route['(TH|th)\/Home\/stat'] = 'Home/stat';
$route['(US|us)\/Home\/stat'] = 'Home/stat';
$route['(KH|kh)\/Home\/stat'] = 'Home/stat';
$route['(LA|la)\/Home\/stat'] = 'Home/stat';
$route['(MM|mm)\/Home\/stat'] = 'Home/stat';
$route['(VN|vn)\/Home\/stat'] = 'Home/stat';





$route['(TH|th)\/Home\/subscription'] = 'Home/subscription';
$route['(US|us)\/Home\/subscription'] = 'Home/subscription';
$route['(KH|kh)\/Home\/subscription'] = 'Home/subscription';
$route['(LA|la)\/Home\/subscription'] = 'Home/subscription';
$route['(MM|mm)\/Home\/subscription'] = 'Home/subscription';
$route['(VN|vn)\/Home\/subscription'] = 'Home/subscription';





///// User ///// 
$route['(TH|th)\/customeradmin\/User\/login'] = 'customeradmin/User/login';
$route['(US|us)\/customeradmin\/User\/login'] = 'customeradmin/User/login';
$route['(KH|kh)\/customeradmin\/User\/login'] = 'customeradmin/User/login';
$route['(LA|la)\/customeradmin\/User\/login'] = 'customeradmin/User/login';
$route['(MM|mm)\/customeradmin\/User\/login'] = 'customeradmin/User/login';
$route['(VN|vn)\/customeradmin\/User\/login'] = 'customeradmin/User/login';





$route['(TH|th)\/customeradmin\/User\/logout'] = 'customeradmin/User/logout';
$route['(US|us)\/customeradmin\/User\/logout'] = 'customeradmin/User/logout';
$route['(KH|kh)\/customeradmin\/User\/logout'] = 'customeradmin/User/logout';
$route['(LA|la)\/customeradmin\/User\/logout'] = 'customeradmin/User/logout';
$route['(MM|mm)\/customeradmin\/User\/logout'] = 'customeradmin/User/logout';
$route['(VN|vn)\/customeradmin\/User\/logout'] = 'customeradmin/User/logout';





$route['(TH|th)\/News'] = 'News/index';
$route['(US|us)\/News'] = 'News/index';
$route['(KH|kh)\/News'] = 'News/index';
$route['(LA|la)\/News'] = 'News/index';
$route['(MM|mm)\/News'] = 'News/index';
$route['(VN|vn)\/News'] = 'News/index';





$route['(TH|th)\/News\/detail\/(.+)'] = 'News/detail/$1/$2';
$route['(US|us)\/News\/detail\/(.+)'] = 'News/detail/$1/$2';
$route['(KH|kh)\/News\/detail\/(.+)'] = 'News/detail/$1/$2';
$route['(LA|la)\/News\/detail\/(.+)'] = 'News/detail/$1/$2';
$route['(MM|mm)\/News\/detail\/(.+)'] = 'News/detail/$1/$2';
$route['(VN|vn)\/News\/detail\/(.+)'] = 'News/detail/$1/$2';





$route['(TH|th)\/Blog'] = 'Blog/index';
$route['(US|us)\/Blog'] = 'Blog/index';
$route['(KH|kh)\/Blog'] = 'Blog/index';
$route['(LA|la)\/Blog'] = 'Blog/index';
$route['(MM|mm)\/Blog'] = 'Blog/index';
$route['(VN|vn)\/Blog'] = 'Blog/index';





$route['(TH|th)\/Blog\/detail\/(.+)'] = 'Blog/detail/$1/$2';
$route['(US|us)\/Blog\/detail\/(.+)'] = 'Blog/detail/$1/$2';
$route['(KH|kh)\/Blog\/detail\/(.+)'] = 'Blog/detail/$1/$2';
$route['(LA|la)\/Blog\/detail\/(.+)'] = 'Blog/detail/$1/$2';
$route['(MM|mm)\/Blog\/detail\/(.+)'] = 'Blog/detail/$1/$2';
$route['(VN|vn)\/Blog\/detail\/(.+)'] = 'Blog/detail/$1/$2';





$route['(TH|th)\/Products'] = 'Products/index';
$route['(US|us)\/Products'] = 'Products/index';
$route['(KH|kh)\/Products'] = 'Products/index';
$route['(LA|la)\/Products'] = 'Products/index';
$route['(MM|mm)\/Products'] = 'Products/index';
$route['(VN|vn)\/Products'] = 'Products/index';





$route['(TH|th)\/Products\/index\/(\d+)'] = 'Products/index/$1/$2';
$route['(US|us)\/Products\/index\/(\d+)'] = 'Products/index/$1/$2';
$route['(KH|kh)\/Products\/index\/(\d+)'] = 'Products/index/$1/$2';
$route['(LA|la)\/Products\/index\/(\d+)'] = 'Products/index/$1/$2';
$route['(MM|mm)\/Products\/index\/(\d+)'] = 'Products/index/$1/$2';
$route['(VN|vn)\/Products\/index\/(\d+)'] = 'Products/index/$1/$2';





$route['(TH|th)\/Products\/uset\/(\d+)'] = 'Products/uset/$1/$2';
$route['(US|us)\/Products\/uset\/(\d+)'] = 'Products/uset/$1/$2';
$route['(KH|kh)\/Products\/uset\/(\d+)'] = 'Products/uset/$1/$2';
$route['(LA|la)\/Products\/uset\/(\d+)'] = 'Products/uset/$1/$2';
$route['(MM|mm)\/Products\/uset\/(\d+)'] = 'Products/uset/$1/$2';
$route['(VN|vn)\/Products\/uset\/(\d+)'] = 'Products/uset/$1/$2';





$route['(TH|th)\/Favorite\/add'] = 'Favorite/add';
$route['(US|us)\/Favorite\/add'] = 'Favorite/add';
$route['(KH|kh)\/Favorite\/add'] = 'Favorite/add';
$route['(LA|la)\/Favorite\/add'] = 'Favorite/add';
$route['(MM|mm)\/Favorite\/add'] = 'Favorite/add';
$route['(VN|vn)\/Favorite\/add'] = 'Favorite/add';





$route['(TH|th)\/Favorite\/update'] = 'Favorite/update';
$route['(US|us)\/Favorite\/update'] = 'Favorite/update';
$route['(KH|kh)\/Favorite\/update'] = 'Favorite/update';
$route['(LA|la)\/Favorite\/update'] = 'Favorite/update';
$route['(MM|mm)\/Favorite\/update'] = 'Favorite/update';
$route['(VN|vn)\/Favorite\/update'] = 'Favorite/update';





$route['(TH|th)\/Favorite\/remove\/(.+)'] = 'Favorite/remove/$1/$2';
$route['(US|us)\/Favorite\/remove\/(.+)'] = 'Favorite/remove/$1/$2';
$route['(KH|kh)\/Favorite\/remove\/(.+)'] = 'Favorite/remove/$1/$2';
$route['(LA|la)\/Favorite\/remove\/(.+)'] = 'Favorite/remove/$1/$2';
$route['(MM|mm)\/Favorite\/remove\/(.+)'] = 'Favorite/remove/$1/$2';
$route['(VN|vn)\/Favorite\/remove\/(.+)'] = 'Favorite/remove/$1/$2';





$route['(TH|th)\/Favorite'] = 'Favorite';
$route['(US|us)\/Favorite'] = 'Favorite';
$route['(KH|kh)\/Favorite'] = 'Favorite';
$route['(LA|la)\/Favorite'] = 'Favorite';
$route['(MM|mm)\/Favorite'] = 'Favorite';
$route['(VN|vn)\/Favorite'] = 'Favorite';





$route['(TH|th)\/Products\/detail\/(\d+)'] = 'Products/detail/$1/$2';
$route['(US|us)\/Products\/detail\/(\d+)'] = 'Products/detail/$1/$2';
$route['(KH|kh)\/Products\/detail\/(\d+)'] = 'Products/detail/$1/$2';
$route['(LA|la)\/Products\/detail\/(\d+)'] = 'Products/detail/$1/$2';
$route['(MM|mm)\/Products\/detail\/(\d+)'] = 'Products/detail/$1/$2';
$route['(VN|vn)\/Products\/detail\/(\d+)'] = 'Products/detail/$1/$2';





$route['(TH|th)\/Products\/index'] = 'Products/index';
$route['(US|us)\/Products\/index'] = 'Products/index';
$route['(KH|kh)\/Products\/index'] = 'Products/index';
$route['(LA|la)\/Products\/index'] = 'Products/index';
$route['(MM|mm)\/Products\/index'] = 'Products/index';
$route['(VN|vn)\/Products\/index'] = 'Products/index';


$route['(TH|th)\/Content\/index\/5'] = 'Content/index/5';
$route['(US|us)\/Content\/index\/5'] = 'Content/index/5';
$route['(KH|kh)\/Content\/index\/5'] = 'Content/index/5';
$route['(LA|la)\/Content\/index\/5'] = 'Content/index/5';
$route['(MM|mm)\/Content\/index\/5'] = 'Content/index/5';
$route['(VN|vn)\/Content\/index\/5'] = 'Content/index/5';

$route['(TH|th)\/Content\/index\/4'] = 'Content/index/4';
$route['(US|us)\/Content\/index\/4'] = 'Content/index/4';
$route['(KH|kh)\/Content\/index\/4'] = 'Content/index/4';
$route['(LA|la)\/Content\/index\/4'] = 'Content/index/4';
$route['(MM|mm)\/Content\/index\/4'] = 'Content/index/4';
$route['(VN|vn)\/Content\/index\/4'] = 'Content/index/4';

$route['(TH|th|US|us)\/Content\/index\/(\d+)'] = 'Content/index/$2';

$route['(TH|th)\/(.*)_(.*)'] = 'Products/index/$1/$2';
$route['(US|us)\/(.*)_(.*)'] = 'Products/index/$1/$2';
$route['(KH|kh)\/(.*)_(.*)'] = 'Products/index/$1/$2';
$route['(LA|la)\/(.*)_(.*)'] = 'Products/index/$1/$2';
$route['(MM|mm)\/(.*)_(.*)'] = 'Products/index/$1/$2';
$route['(VN|vn)\/(.*)_(.*)'] = 'Products/index/$1/$2';





$route['default_controller'] = 'Home/index2';
$route['404_override'] = 'Home/index';

//$route['translate_uri_dashes'] = FALSE;