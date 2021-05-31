<?php

use Illuminate\Support\Facades\Route;
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

//List all resources
Route::get('/', 'resourcesController@index')->middleware(['auth.shopify'])->name('home');
Route::resource('resources.metafield_groups', MetafieldGroupsController::class)->middleware(['auth.shopify'])->name('*','metafield_groups');

Route::get('shopify', 'ShopifyController@index')->middleware(['auth.shopify']);

//twig template resources/views/hello.twig
Route::get('twig', function () {
    return View::make('twig');
});
