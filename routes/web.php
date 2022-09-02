<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BannerController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/users', UserController::class)->middleware('admin')->parameters([
    'users' => 'user:id'
]);
Route::resource('/my-wallets/management-data', RoleController::class)->middleware('admin')->parameters([
    'management-data' => 'user:id',
]);
Route::get('/app-profile',  [AdminController::class, 'app_profile']);
Route::resource('/app-profile/edit-profile', ProfileController::class)->parameters([
    'edit-profile' => 'user:id',
]);
Route::resource('/banners', BannerController::class)->middleware('admin');
Route::resource('/products', ProductController::class)->middleware('admin')->parameters([
    'products' => 'products:id'
]);

Route::get('/',             [AdminController::class, 'dashboard_1'])->middleware('auth');
Route::get('/index',        [AdminController::class, 'dashboard_1']);
Route::get('/index-2',      [AdminController::class, 'dashboard_2']);
Route::get('/coin-details', [AdminController::class, 'coin_details']);
Route::get('/portofolio',   [AdminController::class, 'portofolio']);
Route::get('/market-capital', [AdminController::class, 'market_capital']);
Route::get('/tranasactions', [AdminController::class, 'tranasactions']);
Route::get('/my-wallets',   [AdminController::class, 'my_wallets'])->middleware('admin');



Route::get('/post-details', [AdminController::class, 'post_details']);
Route::get('/page-chat',    [AdminController::class, 'page_chat']);
Route::get('/project-list', [AdminController::class, 'project_list']);
Route::get('/project-card', [AdminController::class, 'project_card']);
Route::get('/contact-list', [AdminController::class, 'contact_list']);
Route::get('/contact-card', [AdminController::class, 'contact_card']);
Route::get('/email-compose', [AdminController::class, 'email_compose']);
Route::get('/email-inbox',  [AdminController::class, 'email_inbox']);
Route::get('/email-read',   [AdminController::class, 'email_read']);
Route::get('/app-calender', [AdminController::class, 'app_calender']);
Route::get('/ecom-checkout', [AdminController::class, 'ecom_checkout']);
Route::get('/ecom-customers', [AdminController::class, 'ecom_customers']);
Route::get('/ecom-invoice', [AdminController::class, 'ecom_invoice']);
Route::get('/ecom-product-detail', [AdminController::class, 'ecom_product_detail']);
Route::get('/ecom-product-grid', [AdminController::class, 'ecom_product_grid']);
Route::get('/ecom-product-list', [AdminController::class, 'ecom_product_list']);
Route::get('/ecom-product-order', [AdminController::class, 'ecom_product_order']);
Route::get('/chart-chartist', [AdminController::class, 'chart_chartist']);
Route::get('/chart-chartjs', [AdminController::class, 'chart_chartjs']);
Route::get('/chart-flot',   [AdminController::class, 'chart_flot']);
Route::get('/chart-morris', [AdminController::class, 'chart_morris']);
Route::get('/chart-peity',  [AdminController::class, 'chart_peity']);
Route::get('/chart-sparkline', [AdminController::class, 'chart_sparkline']);
Route::get('/ui-accordion', [AdminController::class, 'ui_accordion']);
Route::get('/ui-alert',     [AdminController::class, 'ui_alert']);
Route::get('/ui-badge',     [AdminController::class, 'ui_badge']);
Route::get('/ui-button',    [AdminController::class, 'ui_button']);
Route::get('/ui-button-group', [AdminController::class, 'ui_button_group']);
Route::get('/ui-card',      [AdminController::class, 'ui_card']);
Route::get('/ui-carousel',  [AdminController::class, 'ui_carousel']);
Route::get('/ui-dropdown',  [AdminController::class, 'ui_dropdown']);
Route::get('/ui-grid',      [AdminController::class, 'ui_grid']);
Route::get('/ui-list-group', [AdminController::class, 'ui_list_group']);
Route::get('/ui-media-object', [AdminController::class, 'ui_media_object']);
Route::get('/ui-modal',     [AdminController::class, 'ui_modal']);
Route::get('/ui-pagination', [AdminController::class, 'ui_pagination']);
Route::get('/ui-popover',   [AdminController::class, 'ui_popover']);
Route::get('/ui-progressbar', [AdminController::class, 'ui_progressbar']);
Route::get('/ui-tab',       [AdminController::class, 'ui_tab']);
Route::get('/ui-typography', [AdminController::class, 'ui_typography']);
Route::get('/uc-nestable',  [AdminController::class, 'uc_nestable']);
Route::get('/uc-lightgallery', [AdminController::class, 'uc_lightgallery']);
Route::get('/uc-noui-slider', [AdminController::class, 'uc_noui_slider']);
Route::get('/uc-select2',   [AdminController::class, 'uc_select2']);
Route::get('/uc-sweetalert', [AdminController::class, 'uc_sweetalert']);
Route::get('/uc-toastr',    [AdminController::class, 'uc_toastr']);
Route::get('/map-jqvmap',   [AdminController::class, 'map_jqvmap']);
Route::get('/widget-basic', [AdminController::class, 'widget_basic']);
Route::get('/form-editor-summernote', [AdminController::class, 'form_editor_summernote']);
Route::get('/form-element', [AdminController::class, 'form_element']);
Route::get('/form-pickers', [AdminController::class, 'form_pickers']);
Route::get('/form-validation-jquery', [AdminController::class, 'form_validation_jquery']);
Route::get('/form-wizard',  [AdminController::class, 'form_wizard']);
Route::get('/table-bootstrap-basic', [AdminController::class, 'table_bootstrap_basic']);
Route::get('/table-datatable-basic', [AdminController::class, 'table_datatable_basic']);
Route::get('/page-error-400', [AdminController::class, 'page_error_400']);
Route::get('/page-error-403', [AdminController::class, 'page_error_403']);
Route::get('/page-error-404', [AdminController::class, 'page_error_404']);
Route::get('/page-error-500', [AdminController::class, 'page_error_500']);
Route::get('/page-error-503', [AdminController::class, 'page_error_503']);
Route::get('/page-forgot-password', [AdminController::class, 'page_forgot_password']);
Route::get('/page-lock-screen', [AuthController::class, 'page_lock_screen']);
Route::get('/page-login',   [AuthController::class, 'page_login'])->name('login');
Route::post('/page-login', [AuthController::class, 'authenticate']);
Route::post('/page-logout', [AuthController::class, 'logout']);
Route::post('/page-register', [AuthController::class, 'store']);
Route::get('/page-register', [AuthController::class, 'page_register']);


Route::get('/pages', [\App\Http\Controllers\fo\HomeController::class, 'index']);
Route::get('/pages/shop', [\App\Http\Controllers\fo\HomeController::class, 'shop']);
Route::get('/pages/location', [\App\Http\Controllers\fo\HomeController::class, 'location']);
