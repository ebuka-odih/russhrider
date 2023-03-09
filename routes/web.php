<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'pages.index')->name('index');
Route::view('/about-us', 'pages.about.about')->name('about');
Route::view('/about/affiliations', 'pages.about.affiliations')->name('affiliations');
Route::view('/about/community-relations', 'pages.about.community-relations')->name('community-relations');
Route::view('/about/mission-values', 'pages.about.mission-values')->name('mission-values');
Route::view('/about/philanthropy', 'pages.about.philanthropy')->name('philanthropy');

Route::view('locations/', 'pages.locations.locations')->name('locations');
Route::view('locations/cincinnati-courier-service', 'pages.locations.cincinnati-courier-service')->name('cincinnati');
Route::view('locations/dayton-courier-service', 'pages.locations.dayton-courier-service')->name('dayton');
Route::view('locations/columbus-courier-service', 'pages.locations.columbus-courier-service')->name('columbus');

Route::view('package-delivery-solutions', 'pages.services.package-delivery-solutions')->name('package-delivery-solutions');
Route::view('package-delivery-solutions/air-ride-suspension/', 'pages.services.air-ride-suspension')->name('air-ride-suspension');
Route::view('package-delivery-solutions/fleet-replacement', 'pages.services.fleet-replacement')->name('fleet-replacement');
Route::view('package-delivery-solutions/same-day-courier-services', 'pages.services.same-day-courier-services')->name('same-day-courier-services');
Route::view('package-delivery-solutions/expedited-freight-services', 'pages.services.expedited-freight-services')->name('expedited-freight-services');
Route::view('package-delivery-solutions/line-haul-distribution', 'pages.services.line-haul-distribution')->name('line-haul-distribution');
Route::view('package-delivery-solutions/medical-deliveries', 'pages.services.medical-deliveries')->name('medical-deliveries');
Route::view('package-delivery-solutions/shuttle-services', 'pages.services.shuttle-services')->name('shuttle-services');
Route::view('package-delivery-solutions/warehouse-logistics', 'pages.services.warehouse-logistics')->name('warehouse-logistics');
Route::view('rates', 'pages.rates')->name('rates');
Route::view('/contact', 'pages.contact')->name('contact');


Route::view('/demo', 'pages.demo');
Route::post('track/shipment', "ShipmentController@trackShipment")->name('trackShipment');



include 'admin.php';

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('dashboard', "Admin\AdminController@dashboard")->name('dashboard');

});
