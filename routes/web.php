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


Route::namespace('Frontend')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('dashboard', 'DashboardController@index')->name('admin.index');

    Route::prefix('bookings')->group(function () {
        Route::get('/', 'BookingsController@index')->name('booking.index');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', 'CategoriesController@index')->name('categories.index');
    });

    Route::prefix('customers')->group(function () {
        Route::get('/', 'CustomersController@index')->name('customer.index');
    });

    Route::prefix('locations')->group(function () {
        Route::get('/', 'LocationsController@index')->name('location.index');
    });

    Route::prefix('posts')->group(function () {
        Route::get('/', 'PostsController@index')->name('post.index');
    });

    Route::prefix('services')->group(function () {
        Route::get('/', 'ServicesController@index')->name('service.index');
    });

    Route::prefix('tours')->group(function () {
        Route::get('/', 'ToursController@index')->name('tour.index');
    });

    Route::prefix('tour-categories')->group(function () {
        Route::get('/', 'TourCategoriesController@index')->name('tour_categories.index');
    });
});

Auth::routes();

Route::namespace('Admin')->middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('admin.index');
    Route::get('icon', 'DashboardController@icon')->name('admin.icon');

    Route::prefix('bookings')->group(function () {
        Route::get('/', 'BookingsController@index')->name('admin.booking.index');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', 'CategoriesController@index')->name('admin.categories.index');
    });

    Route::prefix('customers')->group(function () {
        Route::get('/', 'CustomersController@index')->name('admin.customer.index');
    });

    Route::prefix('locations')->group(function () {
        Route::get('/', 'LocationsController@index')->name('admin.location.index');
    });

    Route::prefix('posts')->group(function () {
        Route::get('/', 'PostsController@index')->name('admin.post.index');
    });

    Route::prefix('reports')->group(function () {
        Route::get('/', 'ReportsController@index')->name('admin.report.index');
    });

    Route::prefix('services')->group(function () {
        Route::get('/', 'ServicesController@index')->name('admin.service.index');
        Route::post('store', 'ServicesController@store')->name('admin.service.store');
        Route::post('update/{id}', 'ServicesController@update')->name('admin.service.update');
        Route::get('destroy/{id}', 'ServicesController@destroy')->name('admin.service.destroy');
    });

    Route::prefix('tours')->group(function () {
        Route::get('/', 'ToursController@index')->name('admin.tour.index');
    });

    Route::prefix('tour-categories')->group(function () {
        Route::get('/', 'TourCategoriesController@index')->name('admin.tour_categories.index');
        Route::post('store', 'TourCategoriesController@store')->name('admin.tour_categories.store');
        Route::post('update/{id}', 'TourCategoriesController@update')->name('admin.tour_categories.update');
        Route::get('destroy/{id}', 'TourCategoriesController@destroy')->name('admin.tour_categories.destroy');
    });

    Route::prefix('users')->group(function () {
        Route::get('/', 'UsersController@index')->name('admin.user.index');
    });
    Route::prefix('prices')->group(function () {
        Route::get('/', 'PricesController@index')->name('admin.price.index');
    });
});
