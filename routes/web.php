<?php

use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\Frontend\UserAuthController;
use App\Http\Controllers\Instructor\InstructorController;
use App\Http\Controllers\frontend\OrderController;

//ADMIN ROUTE
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    Route::get('/get-session-data', [AdminAuthController::class, 'get_session_data'])->name('get_session_data');

    //PROFILE ROUTE
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::post('/update-profile', [ProfileController::class, 'update_profile'])->name('update_profile');
    Route::post('/update-password', [ProfileController::class, 'update_password'])->name('update_password');

    //SETTING ROUTE
    Route::get('/edit-setting', [SettingController::class, 'edit_setting'])->name('edit_setting');
    Route::post('/edit-setting-action', [SettingController::class, 'edit_setting_action'])->name('edit_setting_action');

    //BANNER ROUTE
    Route::get('/banner-list', [AdminHomeController::class, 'banner_list'])->name('banner_list');
    Route::get('/add-banner', [AdminHomeController::class, 'add_banner'])->name('add_banner');
    Route::post('/add-banner-action', [AdminHomeController::class, 'add_banner_action'])->name('add_banner_action');
    Route::get('/edit-banner/{id}', [AdminHomeController::class, 'edit_banner'])->name('edit_banner');
    Route::post('/edit-banner-action/{id}', [AdminHomeController::class, 'edit_banner_action'])->name('edit_banner_action');
    Route::get('/delete-banner/{id}', [AdminHomeController::class, 'delete_banner'])->name('delete_banner');
    Route::get('/banner-status/{id}', [AdminHomeController::class, 'banner_status'])->name('banner_status');

    //PAGES ROUTE
    Route::get('/home-page', [AdminHomeController::class, 'home_page'])->name('home_page');
    Route::post('/update-home-page', [AdminHomeController::class, 'edit_home_page_action'])->name('edit_home_page_action');
    Route::get('/cart-page', [AdminHomeController::class, 'cart_page'])->name('cart_page');
    Route::post('/update-cart-page', [AdminHomeController::class, 'edit_cart_page_action'])->name('edit_cart_page_action');

    //COURSE ROUTE

    Route::get('/instructor/course-list', [CourseController::class, 'course_list'])->name('instructor_course_list');
    Route::get('/instructor/add-course', [CourseController::class, 'add_course'])->name('instructor_add_course');
    Route::post('/instructor/add-course-action', [CourseController::class, 'add_course_action'])->name('instructor_add_course_action');

    Route::get('/edit-course/{id}', [CourseController::class, 'edit_course'])->name('edit_course');
    Route::post('/edit-course-action/{id}', [CourseController::class, 'edit_course_action'])->name('edit_course_action');
    Route::get('/delete-course/{id}', [CourseController::class, 'delete_course'])->name('delete_course');
    Route::get('/course-status/{id}', [CourseController::class, 'course_status'])->name('course_status');

    //COURSE CATEGORY ROUTE
    Route::get('/category-list', [CourseController::class, 'category_list'])->name('category_list');
    Route::get('/add-category', [CourseController::class, 'add_category'])->name('add_category');
    Route::post('/add-category-action', [CourseController::class, 'add_category_action'])->name('add_category_action');
    Route::get('/edit-category/{id}', [CourseController::class, 'edit_category'])->name('edit_category');
    Route::post('/edit-category-action/{id}', [CourseController::class, 'edit_category_action'])->name('edit_category_action');
    Route::get('/delete-category/{id}', [CourseController::class, 'delete_category'])->name('delete_category');
    Route::get('/category-status/{id}', [CourseController::class, 'category_status'])->name('category_status');

    //COUPON ROUTE
    Route::get('/coupon-list', [CourseController::class, 'coupon_list'])->name('coupon_list');
    Route::get('/add-coupon', [CourseController::class, 'add_coupon'])->name('add_coupon');
    Route::post('/add-coupon-action', [CourseController::class, 'add_coupon_action'])->name('add_coupon_action');
    Route::get('/edit-coupon/{id}', [CourseController::class, 'edit_coupon'])->name('edit_coupon');
    Route::post('/edit-coupon-action/{id}', [CourseController::class, 'edit_coupon_action'])->name('edit_coupon_action');
    Route::get('/delete-coupon/{id}', [CourseController::class, 'delete_coupon'])->name('delete_coupon');
    Route::get('/coupon-status/{id}', [CourseController::class, 'coupon_status'])->name('coupon_status');

    Route::resource('instructor', InstructorController::class);
    Route::resource('order', OrderController::class);
});

//FRONTEND ROUTE

//ADMIN LOGIN ROUTE
Route::get('/admin/login', [AdminAuthController::class, 'admin_login'])->name('login');
Route::post('/admin-login-action', [AdminAuthController::class, 'admin_login_action'])->name('admin.login.action');

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about-us', [AboutController::class, 'about_us'])->name('about_us');
Route::get('/course', [CourseController::class, 'course'])->name('course');
Route::get('/course/{slug}', [CourseController::class, 'course_details'])->name('course_details');
Route::post('/delete-cart-item', [CartController::class, 'delete_cart_item'])->name('delete_cart_item');
Route::post('/delete-all-cart-item', [CartController::class, 'delete_all_cart_data'])->name('delete_all_cart_data');
Route::post('/add-to-cart', [CartController::class, 'add_to_cart'])->name('add_to_cart');
Route::get('load-cart-data', [CartController::class, 'load_cart_data'])->name('load_cart_data');
Route::get('/cart', [CartController::class, 'view_cart'])->name('view_cart');
Route::get('/get-map', [ContactController::class, 'get_map'])->name('get_map');
Route::get('/contact-us', [ContactController::class, 'contact_us'])->name('contact_us');
Route::get('/course-list', [HomeController::class, 'course_list_ajax'])->name('course_list_ajax');
Route::post('/search-course', [HomeController::class, 'search_course'])->name('search_course');
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/place-order', [CheckoutController::class, 'place_order'])->name('place_order');
Route::post('/check-coupon-code', [CheckoutController::class, 'check_coupon_code'])->name('check_coupon_code');

//USER LOGIN
Route::get('/user/login', [UserAuthController::class, 'user_login'])->name('user_login');
Route::post('/user/login', [UserAuthController::class, 'user_login_action'])->name('user_login_action');
Route::get('/user/logout', [UserAuthController::class, 'user_logout'])->name('user_logout');
Route::get('/user/register', [UserAuthController::class, 'user_register'])->name('user_register');
Route::post('/user/register', [UserAuthController::class, 'user_register_action'])->name('user_register_action');
Route::get('/profile', [UserAuthController::class, 'user_profile'])->name('user_profile');





