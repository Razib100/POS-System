<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['dashboard']['post'] = 'Auth/index';
$route['report/item']['post'] = 'Auth/Report/Item';
$route['report/item-stock-report']['post'] = 'Report/ItemStockDetails';
// $route['inventory/sales-print/(:any)']['post'] = 'inventory/SalesPrint';

$route['demo'] = 'Demo/departmentdata';
$route['js'] = 'Demo/jsFormValidation';

