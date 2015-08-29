<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('test', function () {
    return view('test');
});
Route::get('home' , 'HomeController@index');
Route::get('/', function () {
    return view('pages.home');
});
Route::get('products', function () {
    return view('products.index');
});
Route::get('components', function () {
    return view('pages.components');
});
Route::get('store-locator', function () {
    return view('pages.store_locator');
});
Route::get('contacts', function () {
    return view('pages.contacts');
});
Route::get('checkout', function () {
    return view('pages.checkout');
});
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

//active account:
Route::get('activated', function () {
    return view('home');
});
Route::get('activated/{email}/{key_active}', 'RegisterController@register');

//admin
Route::group(['prefix' => 'admin','middleware' => 'auth','namespace' => 'Admin'], function() {    

    
    #dashboard
    Route::get('/', 'DashboardController@index');
    Route::get('dashboard', 'DashboardController@index');

    #user
    Route::get('users', 'UserController@index');
    Route::get('users/data', 'UserController@data');
    Route::get('users/create' , 'UserController@getCreate');
    Route::post('users/create' , 'UserController@postCreate');
    Route::get('users/{id}/edit' , 'UserController@getEdit');
    Route::post('users/{id}/edit' , 'UserController@postEdit');
    Route::get('users/{id}/delete' , 'UserController@postDelete');


    /**
     * Category 
     */
    Route::get('category', 'CategoryController@index');
    Route::get('category/getDataForJstree', 'CategoryController@getDataForJstree');
    Route::post('category', 'CategoryController@store');
    Route::get('category/create', 'CategoryController@create');

    Route::post('category/update', 'CategoryController@update');
    Route::post('category/delete', 'CategoryController@delete');
    Route::get('category/test', 'CategoryController@test');



    #products
    

    #Gallery
    Route::get('gallery', function () {
    return view('admin.gallery.index');
    });
    Route::any('gallery/{key}/getDataAjax','GalleryController@getDataAjax');
    Route::get('gallery/{key}','GalleryController@index');
    Route::get('gallery/{key}/create','GalleryController@create');
    Route::post('gallery/{key}','GalleryController@store');
    Route::get('gallery/{key}/edit/{id}','GalleryController@edit');
    Route::get('gallery/del/{id}','GalleryController@destroy');





    /**
     * Product CONTROLLERS
     */
    Route::get('product', 'ProductController@index');
    Route::get('product/data', 'ProductController@data');
    Route::get('product/create', 'ProductController@create');
    Route::post('product/create', 'ProductController@create');
    Route::post('product', 'ProductController@store');
    Route::get('product/{id}/edit', 'ProductController@edit');
    Route::post('product/update', 'ProductController@update');
    Route::get('product/{id}/delete', 'ProductController@delete');



    #style
    Route::get('style', 'StyleController@index');
    Route::get('style/data', 'StyleController@data');
    Route::get('style/create' , 'StyleController@getCreate');
    Route::post('style/create' , 'StyleController@postCreate');
    Route::get('style/{id}/edit' , 'StyleController@getEdit');
    Route::post('style/{id}/edit' , 'StyleController@postEdit');
    Route::get('style/{id}/delete' , 'StyleController@postDelete');


    #size
    Route::get('size', 'SizeController@index');
    Route::get('size/data', 'SizeController@data');
    Route::get('size/create' , 'SizeController@getCreate');
    Route::post('size/create' , 'SizeController@postCreate');
    Route::get('size/{id}/edit' , 'SizeController@getEdit');
    Route::post('size/{id}/edit' , 'SizeController@postEdit');
    Route::get('size/{id}/delete' , 'SizeController@postDelete');



    #material
    Route::get('material', 'MaterialController@index');
    Route::get('material/data', 'MaterialController@data');
    Route::get('material/create' , 'MaterialController@getCreate');
    Route::post('material/create' , 'MaterialController@postCreate');
    Route::get('material/{id}/edit' , 'MaterialController@getEdit');
    Route::post('material/{id}/edit' , 'MaterialController@postEdit');
    Route::get('material/{id}/delete' , 'MaterialController@postDelete');


    #madein
    Route::get('madein', 'MadeinController@index');
    Route::get('madein/data', 'MadeinController@data');
    Route::get('madein/create' , 'MadeinController@getCreate');
    Route::post('madein/create' , 'MadeinController@postCreate');
    Route::get('madein/{id}/edit' , 'MadeinController@getEdit');
    Route::post('madein/{id}/edit' , 'MadeinController@postEdit');
    Route::get('madein/{id}/delete' , 'MadeinController@postDelete');
   
   


    #color
    Route::get('color', 'ColorController@index');
    Route::get('color/data', 'ColorController@data');
    Route::get('color/create' , 'ColorController@getCreate');
    Route::post('color/create' , 'ColorController@postCreate');
    Route::get('color/{id}/edit' , 'ColorController@getEdit');
    Route::post('color/{id}/edit' , 'ColorController@postEdit');
    Route::get('color/{id}/delete' , 'ColorController@postDelete');



    #brand
    Route::get('brand', 'BrandController@index');
    Route::get('brand/data', 'BrandController@data');
    Route::get('brand/create' , 'BrandController@getCreate');
    Route::post('brand/create' , 'BrandController@postCreate');
    Route::get('brand/{id}/edit' , 'BrandController@getEdit');
    Route::post('brand/{id}/edit' , 'BrandController@postEdit');
    Route::get('brand/{id}/delete' , 'BrandController@postDelete');
   
   
   
   



});


