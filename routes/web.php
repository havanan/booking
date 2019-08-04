<?php

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


Route::namespace('Frontend')->middleware(['frontend'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('lien-he', function (){
        return view('frontend.home.contact_us');
    })->name('contact-us');

    Route::get('tim-kiem-theo-dia-danh', 'ToursController@findByLocation')->name('tour.find_by_location');

    Route::get('dashboard', 'DashboardController@index')->name('admin.index');

    Route::prefix('booking')->group(function () {
        Route::get('/', 'BookingsController@index')->name('booking.index');
        Route::get('chi-tiet-don-hang/BK-{id}', 'BookingsController@getBookingInfo')->name('booking.get_booking_info');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', 'CategoriesController@index')->name('categories.index');
    });

    Route::prefix('customers')->group(function () {
        Route::get('/', 'CustomersController@index')->name('customer.index');
    });

    Route::prefix('dia-diem-du-lich')->group(function () {
        Route::get('/', 'LocationsController@index')->name('location.index');
        Route::get('danh-sach', 'LocationsController@getAll')->name('location.get_all');

    });

    Route::prefix('bai-viet')->group(function () {
        Route::get('/', 'PostsController@index')->name('post.index');
        Route::get('tat-ca-bai-viet', 'PostsController@getAllCat')->name('post.get_all_cat');
        Route::get('/{slug}', 'PostsController@getByCat')->name('post.get_by_cat');
        Route::get('/', 'PostsController@index')->name('post.index');
        Route::get('chi-tiet/{slug}', 'PostsController@view')->name('post.view');

    });

    Route::prefix('services')->group(function () {
        Route::get('/', 'ServicesController@index')->name('service.index');
    });

    Route::prefix('tours')->group(function () {
        Route::get('/', 'ToursController@index')->name('tour.index');
        Route::get('xem-chi-tiet/{slug}', 'ToursController@view')->name('tour.view');
        Route::get('dat-tour/{slug}', 'ToursController@book')->name('tour.book');
        Route::post('dat-tour/{slug}', 'ToursController@booking');

        Route::get('/{slug}', 'ToursController@getByCat')->name('tour.get_by_cat');
        Route::get('tim-kiem', 'ToursController@find')->name('tour.find');
    });

    Route::prefix('tour-categories')->group(function () {
        Route::get('/', 'TourCategoriesController@index')->name('tour_categories.index');
    });
});

Auth::routes();

Route::namespace('Admin')->middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('tiendo', 'DashboardController@tiendo')->name('admin.tiendo');
    Route::get('dashboard', 'DashboardController@index')->name('admin.index');
    Route::get('icon', 'DashboardController@icon')->name('admin.icon');

    Route::prefix('bookings')->group(function () {
        Route::get('/', 'BookingsController@index')->name('admin.booking.index');
        Route::get('create', 'BookingsController@create')->name('admin.booking.create');
        Route::post('store', 'BookingsController@store')->name('admin.booking.store');
        Route::get('show/{id}', 'BookingsController@show')->name('admin.booking.show');
        Route::get('edit/{id}', 'BookingsController@edit')->name('admin.booking.edit');
        Route::get('destroy/{id}', 'BookingsController@destroy')->name('admin.booking.destroy');
        Route::get('change-status/status={status}/id={id}', 'BookingsController@changeStatus')->name('admin.booking.change_status');
        Route::post('update/{id}', 'BookingsController@update')->name('admin.booking.update');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', 'CategoriesController@index')->name('admin.categories.index');
        Route::post('store', 'CategoriesController@store')->name('admin.categories.store');
        Route::post('update/{id}', 'CategoriesController@update')->name('admin.categories.update');
        Route::get('destroy/{id}', 'CategoriesController@destroy')->name('admin.categories.destroy');
    });

    Route::prefix('customers')->group(function () {
        Route::get('/', 'CustomersController@index')->name('admin.customer.index');
        Route::post('store', 'CustomersController@store')->name('admin.customer.store');
        Route::post('update/{id}', 'CustomersController@update')->name('admin.customer.update');
        Route::get('destroy/{id}', 'CustomersController@destroy')->name('admin.customer.destroy');

    });

    Route::prefix('locations')->group(function () {
        Route::get('/', 'LocationsController@index')->name('admin.location.index');
        Route::post('store', 'LocationsController@store')->name('admin.location.store');
        Route::post('update/{id}', 'LocationsController@update')->name('admin.location.update');
        Route::get('destroy/{id}', 'LocationsController@destroy')->name('admin.location.destroy');
    });

    Route::prefix('posts')->group(function () {
        Route::get('/', 'PostsController@index')->name('admin.post.index');
        Route::get('create', 'PostsController@create')->name('admin.post.create');
        Route::post('store', 'PostsController@store')->name('admin.post.store');
        Route::get('show/{id}', 'PostsController@show')->name('admin.post.show');
        Route::get('edit/{id}', 'PostsController@edit')->name('admin.post.edit');
        Route::post('update/{id}', 'PostsController@update')->name('admin.post.update');
        Route::get('destroy/{id}', 'PostsController@destroy')->name('admin.post.destroy');
    });

    Route::prefix('reports')->group(function () {
        Route::get('/', 'ReportsController@index')->name('admin.report.index');
        Route::get('by-location', 'ReportsController@byLocation')->name('admin.report.byLocation');

    });

    Route::prefix('services')->group(function () {
        Route::get('/', 'ServicesController@index')->name('admin.service.index');
        Route::post('store', 'ServicesController@store')->name('admin.service.store');
        Route::post('update/{id}', 'ServicesController@update')->name('admin.service.update');
        Route::get('destroy/{id}', 'ServicesController@destroy')->name('admin.service.destroy');
    });

    Route::prefix('tours')->group(function () {
        Route::get('/', 'ToursController@index')->name('admin.tour.index');
        Route::get('create', 'ToursController@create')->name('admin.tour.create');
        Route::post('store', 'ToursController@store')->name('admin.tour.store');
        Route::get('show/{id}', 'ToursController@show')->name('admin.tour.show');
        Route::get('edit/{id}', 'ToursController@edit')->name('admin.tour.edit');
        Route::post('update/{id}', 'ToursController@update')->name('admin.tour.update');
        Route::get('destroy/{id}', 'ToursController@destroy')->name('admin.tour.destroy');
    });

    Route::prefix('tour-categories')->group(function () {
        Route::get('/', 'TourCategoriesController@index')->name('admin.tour_categories.index');
        Route::post('store', 'TourCategoriesController@store')->name('admin.tour_categories.store');
        Route::post('update/{id}', 'TourCategoriesController@update')->name('admin.tour_categories.update');
        Route::get('destroy/{id}', 'TourCategoriesController@destroy')->name('admin.tour_categories.destroy');
    });

    Route::prefix('users')->group(function () {
        Route::get('/', 'UsersController@index')->name('admin.user.index');
        Route::post('store', 'UsersController@store')->name('admin.user.store');
        Route::post('update/{id}', 'UsersController@update')->name('admin.user.update');
        Route::get('destroy/{id}', 'UsersController@destroy')->name('admin.user.destroy');
        Route::get('my-profile', 'UsersController@myProfile')->name('admin.user.my_profile');
        Route::get('pw-default/{id}', 'CustomersController@pwDefault')->name('admin.customer.pw_default');
        Route::post('update-password', 'UsersController@updatePassword')->name('admin.user.update_password');
        Route::post('update-avatar', 'UsersController@updateAvatar')->name('admin.user.update_avatar');


    });
    Route::prefix('prices')->group(function () {
        Route::get('/', 'PricesController@index')->name('admin.price.index');
        Route::post('store', 'PricesController@store')->name('admin.price.store');
        Route::post('update/{id}', 'PricesController@update')->name('admin.price.update');
        Route::get('destroy/{id}', 'PricesController@destroy')->name('admin.price.destroy');
    });
});
