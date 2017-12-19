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
$route['default_controller'] = 'home';
$route['mission'] = 'home/viewMission';
$route['goal'] = 'home/viewGoal';
$route['legal'] = 'home/viewLegal';
$route['ec'] = 'home/viewEc';
$route['staffs'] = 'home/viewStaffs';
$route['address'] = 'home/viewAddress';

/*program*/
$route['village_based'] = 'home/viewVillageBased';
$route['human_resource'] ='home/viewHumanResource';
$route['water_sanitation'] ='home/viewWaterSanitation';
$route['income_generation'] ='home/viewIncomeGen';
$route['micro_credit'] ='home/viewMicroCredit';
$route['primary_education'] ='home/viewPrimaryEd';
$route['primary_health'] ='home/viewPrimaryHealth';
$route['human_right'] ='home/viewHumanRight';
$route['sustainable_natural'] ='home/viewSustainableNatural';
$route['gender_dev'] ='home/viewGenderDev';
$route['folk_culture'] ='home/viewFolkCulture';
$route['relief_rehab'] ='home/viewReliefRehab';

/*current activities*/
$route['current_activities'] ='home/viewCurrentActivities';

/*publications*/
$route['publica'] ='home/viewPublications';

//gallery
$route['gallery'] ='home/viewGallery';
/*admin login*/
$route['admin/login'] ='home/viewAdminLogin';
$route['admin/notice'] ='home/viewAdminNotice';
$route['admin/program'] ='home/viewAdminProgram';

//executive director
$route['executive_director'] ='home/viewEd';
$route['ed_biography'] ='home/viewEdBiography';


//gallery
$route['gallery'] ='home/viewGallery';

/*admin login*/
$route['admin/login'] ='admin/viewAdminLogin';

// login check
$route['admin/submitlogin'] = 'admin/checkLogin';

// admin activities
$route['admin/notice'] ='admin/viewAdminNotice';
$route['admin/addnotice'] ='admin/addNotice';
$route['admin/program'] ='admin/viewAdminProgram';

// logout
$route['admin/logout'] = 'admin/logOutAdmin';

// notice details
$route['notice/(:any)'] = 'home/showNoticeDetails';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

