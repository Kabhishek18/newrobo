<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'page';
$route['404_override'] = 'page/PageNotFound';
$route['translate_uri_dashes'] = FALSE;

//Page 
$route['aboutus'] = 'page/About';
$route['contactus'] = 'page/Contact';
$route['blog'] = 'page/Blog';
$route['blog/(:num)'] = 'page/BlogDetail';
$route['gallery'] = 'page/Gallery';
$route['verify/:any/:any/:any'] = 'home/EmailVerification';



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
$route['ci-admin/student/(:num)'] ='home/StudentList';

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
$route['ci-admin/orderinvoice/(:num)'] ='home/InvoiceOrder';

//blog
$route['ci-admin/blog'] ='home/BlogList';
$route['ci-admin/blog/edit/(:num)'] ='home/BlogAdd';
$route['ci-admin/blog/add'] ='home/BlogAdd';

//Course
$route['ci-admin/gallery'] ='home/GalleryList';
$route['ci-admin/gallery/edit/(:num)'] ='home/GalleryAdd';
$route['ci-admin/gallery/add'] ='home/GalleryAdd';

