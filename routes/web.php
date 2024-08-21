<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $pageTitle = 'Login';
    return view('admin/login_form', compact('pageTitle'));
});

Route::get('/admin_dashboard', function () {
    $pageTitle = 'Dashboard';
    return view('admin/admin_dashboard', compact('pageTitle'));
});
Route::get('/home', function () {
    $pageTitle = 'Home';
    return view('admin/page1', compact('pageTitle'));
});
Route::get('/exam_listing', function () {
    $pageTitle = 'Add Product';
    return view('admin/exam_listing', compact('pageTitle'));
});
Route::get('/exam_mode', function () {
    $pageTitle = 'Product';
    return view('admin/exam_mode', compact('pageTitle'));
});
Route::get('/exam_catagory', function () {
    $pageTitle = 'Product';
    return view('admin/exam_catagory', compact('pageTitle'));
});
Route::get('/exam_subCatagory', function () {
    $pageTitle = 'Product';
    return view('admin/exam_subCatagory', compact('pageTitle'));
});
Route::get('/customers', function () {
    $pageTitle = 'Customer';
    return view('admin/customers', compact('pageTitle'));
});
Route::get('/customer_details', function () {
    $pageTitle = 'Detail';
    return view('admin/customer_details', compact('pageTitle'));
});
Route::get('/exam_matrix_grid', function () {
    $pageTitle = 'Product';
    return view('admin/exam_matrix_grid', compact('pageTitle'));
});
Route::get('/exam_matrix_multiple', function () {
    $pageTitle = 'Product';
    return view('admin/exam_matrix_multiple', compact('pageTitle'));
});
Route::get('/bowtie', function () {
    $pageTitle = 'Product';
    return view('admin/bowtie', compact('pageTitle'));
});
Route::get('/drop_down_cloze', function () {
    $pageTitle = 'Product';
    return view('admin/drop_down_cloze', compact('pageTitle'));
});
Route::get('/drop_down_rational', function () {
    $pageTitle = 'Product';
    return view('admin/drop_down_rational', compact('pageTitle'));
});
Route::get('/drop_down_table', function () {
    $pageTitle = 'Product';
    return view('admin/drop_down_table', compact('pageTitle'));
});
Route::get('/drag_and_drop', function () {
    $pageTitle = 'Product';
    return view('admin/drag_and_drop', compact('pageTitle'));
});
Route::get('/multiple_response_grouping', function () {
    $pageTitle = 'Product';
    return view('admin/multiple_response_grouping', compact('pageTitle'));
});
Route::get('/multiple_response_select', function () {
    $pageTitle = 'Product';
    return view('admin/multiple_response_select', compact('pageTitle'));
});
Route::get('/multiple_response_select_all', function () {
    $pageTitle = 'Product';
    return view('admin/multiple_response_select_all', compact('pageTitle'));
});
Route::get('/highlight_text_items', function () {
    $pageTitle = 'Product';
    return view('admin/highlight_text_items', compact('pageTitle'));
});
Route::get('/highlight_table_items', function () {
    $pageTitle = 'Product';
    return view('admin/highlight_table_items', compact('pageTitle'));
});
Route::get('/website_settings', function () {
    $pageTitle = 'Product';
    return view('admin/website_settings', compact('pageTitle'));
});
Route::get('/smtp_settings', function () {
    $pageTitle = 'Product';
    return view('admin/smtp_settings', compact('pageTitle'));
});
Route::get('/api_keyhandler', function () {
    $pageTitle = 'Product';
    return view('admin/api_keyhandler', compact('pageTitle'));
});
Route::get('/contact_us', function () {
    $pageTitle = 'Product';
    return view('admin/contact_us', compact('pageTitle'));
});
Route::get('/invoices_list', function () {
    $pageTitle = 'Product';
    return view('admin/invoices_list', compact('pageTitle'));
});
Route::get('/ticket_list', function () {
    $pageTitle = 'Product';
    return view('admin/ticket_list', compact('pageTitle'));
});
Route::get('/enrolled_students_with_exams', function () {
    $pageTitle = 'Product';
    return view('admin/enrolled_students_with_exams', compact('pageTitle'));
});
Route::get('/students_subscription', function () {
    $pageTitle = 'Product';
    return view('admin/students_subscription', compact('pageTitle'));
});
Route::get('/students_result', function () {
    $pageTitle = 'Product';
    return view('admin/students_result', compact('pageTitle'));
});
Route::get('/newsletter_listing', function () {
    $pageTitle = 'Product';
    return view('admin/newsletter_listing', compact('pageTitle'));
});
Route::get('/simple_question', function () {
    $pageTitle = 'Product';
    return view('admin/simple_question', compact('pageTitle'));
});
Route::get('/audio', function () {
    $pageTitle = 'Product';
    return view('admin/audio', compact('pageTitle'));
});
Route::get('/ppt', function () {
    $pageTitle = 'Product';
    return view('admin/ppt', compact('pageTitle'));
});
Route::get('/exam_plans', function () {
    $pageTitle = 'Product';
    return view('admin/exam_plans', compact('pageTitle'));
});
Route::get('/sub_admin', function () {
    $pageTitle = 'Product';
    return view('admin/sub_admin', compact('pageTitle'));
});
Route::get('/order_details', function () {
    $pageTitle = 'Order';
    return view('admin/order_details', compact('pageTitle'));
});
Route::get('/order_tracking', function () {
    $pageTitle = 'Tracking';
    return view('admin/order_tracking', compact('pageTitle'));
});
Route::get('/lead_details', function () {
    $pageTitle = 'Tracking';
    return view('admin/lead_details', compact('pageTitle'));
});
Route::get('/login', function () {
    $pageTitle = 'Login';
    return view('admin/login_form', compact('pageTitle'));
});
Route::get('/signup_form', function () {
    $pageTitle = 'Signup';
    return view('admin/signup', compact('pageTitle'));
});
Route::get('/forget_password', function () {
    $pageTitle = 'Forget Password';
    return view('admin/forget_password', compact('pageTitle'));
});


require base_path('routes/admin/auth/auth.php');
require base_path('routes/admin/admin.php');
