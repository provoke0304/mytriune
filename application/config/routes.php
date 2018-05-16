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
$route['default_controller'] = 'triuneAuth/loginView';
$route['auth/login'] = 'triuneAuth/loginControl';
$route['auth/register'] = 'triuneAuth/registrationView';
$route['auth/checkUser'] = 'triuneAuth/checkUserName';
$route['auth/create'] = 'triuneAuth/createToken';
$route['auth/forgot'] = 'triuneAuth/forgotPassword';
$route['auth/hello'] = 'triuneAuth/index';
$route['main'] = 'triuneAuth/mainView';
$route['main/jobRequest'] = 'triuneMain/jobRequest';
$route['bamjrs/create'] = 'triuneJRS/BAMCreateRequest';
$route['bamjrs/getCreateConfirmation'] = 'triuneJRS/BAMCreateRequestConfirmation';
$route['bamjrs/getCreatedRequest'] = 'triuneJRS/BAMCreatedRequest';
$route['bamjrs/getMyRequestList'] = 'triuneJRS/BAMMyRequestList';
$route['bamjrs/getNewRequestList'] = 'triuneJRS/BAMNewRequestList';
$route['bamjrs/getNewRequestVerification'] = 'triuneJRS/BAMNewRequestVerification';


$route['getLocationCode'] = 'triuneData/getLocationCode'; 
$route['getFloor'] = 'triuneData/getFloor'; 
$route['getRoomNumber'] = 'triuneData/getRoomNumber'; 
$route['getBAMJRSMyRequestList'] = 'triuneData/getBAMJRSMyRequestList'; 
$route['getBAMJRSRequestList'] = 'triuneData/getBAMJRSRequestList'; 

$route['setRequestBAM'] = 'triuneData/setRequestBAM'; 
$route['insertRequestBAM'] = 'triuneData/insertRequestBAM'; 
$route['uploadFile'] = 'triuneFile/uploadFile'; 


$route['ictjrs/create']= 'triuneJRS/ICTCreateRequest';
$route['ictjrs/getCreateConfirmation'] = 'triuneJRS/ICTCreateRequestConfirmation';
$route['ictjrs/getCreatedRequest'] = 'triuneJRS/ICTCreatedRequest';
$route['ictjrs/getMyRequestList'] = 'triuneJRS/ICTMyRequestList';
$route['ictjrs/getNewRequestList'] = 'triuneJRS/ICTNewRequestList';
$route['ictjrs/getNewRequestVerification'] = 'triuneJRS/ICTNewRequestVerification';

$route['getjobClassification'] = 'triuneData/getjobClassification';
$route['getICTJRSMyRequestList'] = 'triuneData/getICTJRSMyRequestList'; 
$route['getICTJRSRequestList'] = 'triuneData/getICTJRSRequestList'; 

$route['setRequestICT'] = 'triuneData/setRequestICT'; 
$route['insertRequestICT'] = 'triuneData/insertRequestICT';
$route['uploadICTFile'] = 'triuneICTFile/uploadICTFile';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


