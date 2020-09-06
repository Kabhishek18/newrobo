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
$route['default_controller'] = 'page';
$route['404_override'] = 'page/PageNotFound';
$route['translate_uri_dashes'] = FALSE;

//Page 
$route['aboutus'] = 'page/About';
$route['contactus'] = 'page/Contact';


//Course
$route['courses/(:num)/(:any)'] = 'page/Courses_Cat';
$route['course/(:any)'] = 'page/Courses';

//order
$route['checkout'] ='page/checkout';

//Student dashboard
$route['dashboard'] ='student/index';



//     _    ____  __  __ ___ _   _   ____   _    _   _ _____ _     
//    / \  |  _ \|  \/  |_ _| \ | | |  _ \ / \  | \ | | ____| |    
//   / _ \ | | | | |\/| || ||  \| | | |_) / _ \ |  \| |  _| | |    
//  / ___ \| |_| | |  | || || |\  | |  __/ ___ \| |\  | |___| |___ 
// /_/   \_\____/|_|  |_|___|_| \_| |_| /_/   \_\_| \_|_____|_____|
                                                                




$route['ci-admin'] = 'home/index';

//Dashboard
$route['ci-admin/dashboard'] ='home/Dashboard';
$route['ci-admin/student'] ='home/StudentList';

//Category
$route['ci-admin/category'] ='home/CategoryList';
$route['ci-admin/category/edit/(:num)'] ='home/CategoryAdd';
$route['ci-admin/category/add'] ='home/CategoryAdd';

//Course
$route['ci-admin/course'] ='home/CourseList';
$route['ci-admin/course/edit/(:num)'] ='home/CourseAdd';
$route['ci-admin/course/add'] ='home/CourseAdd';

//Order
$route['ci-admin/order'] ='home/OrderList';