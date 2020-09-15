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

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['default_controller'] = 'user/login';
$route['login'] = 'user/login';
$route['login/proses'] = 'user/prosesLogin';
$route['logout'] = 'user/logout';

// SETELAH LOGIN
  // Dashboard
  $route['dashboard'] = 'dashboard';

  // Jenis Barang
  $route['dashboard/jenis-barang'] = 'jenisBarang/index';
  $route['dashboard/jenis-barang/create'] = 'jenisBarang/create';
  $route['dashboard/jenis-barang/delete'] = 'jenisBarang/delete';
    $route['dashboard/jenis-barang/print'] = 'jenisBarang/print';
    $route['dashboard/jenis-barang/download'] = 'jenisBarang/download';

  // Barang
  $route['dashboard/barang'] = 'barang/index';
  $route['dashboard/barang/add'] = 'barang/add';
  $route['dashboard/barang/create'] = 'barang/delete';
    $route['dashboard/barang/print'] = 'barang/print';
    $route['dashboard/barang/download'] = 'barang/download';


  // History
  $route['dashboard/history'] = 'history/index';
    $route['dashboard/history/print'] = 'history/print';
    $route['dashboard/history/download'] = 'history/download';


  // Transaksi
    // Masuk
    $route['dashboard/barang'] = 'barang/index';
    $route['dashboard/barang/add'] = 'barang/add';
    $route['dashboard/barang/create'] = 'barang/delete';
    // Keluar
    $route['dashboard/barang'] = 'barang/index';
    $route['dashboard/barang/add'] = 'barang/add';
    $route['dashboard/barang/create'] = 'barang/delete';
    // Return
    $route['dashboard/barang'] = 'barang/index';
    $route['dashboard/barang/add'] = 'barang/add';
    $route['dashboard/barang/create'] = 'barang/delete';


  