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

Route::get('/', function () {
    return view('welcome');
});
/*password reset */
Route::controllers([
    'password' => 'Auth\PasswordController',
]);


/*website information and */
Route::get('/home', 'WelcomeController@index');
Route::get('/about', 'WelcomeController@about');
Route::get('/test', 'WelcomeController@test');
/*end */


/*end */

/*managing  User accounts  controller*/
Route::post('account/login','UserAccountController@store');
Route::get('/account/login','UserAccountController@login');
Route::get('/account/logout','UserAccountController@logout');
Route::get('auth/password','UserAccountController@resetPassword');

/*end */

/*Admin control */
Route::get('admin/dashboard',['middleware'=>'userauth','uses'=>'AdminController@manage']);
//Route::get('admin/admindashboard',['middleware'=>'userauth','uses'=>'AdminController@adminmanage']);
Route::get('testauth','AdminController@manage');
Route::get('admin/dashboard/users/delete',['as'=>'delete_user','uses'=>'AdminController@deleteUser']);
Route::get('admin/dashboard/admin/add',['as'=>'add_admin','uses'=>'AdminController@addAdmin']);
Route::get('admin/dashboard/showuser/selectuser',['as'=>'select_user','uses'=>'AdminController@showusers']);
Route::post('admin/dashboard/showuser/selectuser',['as'=>'select_user','uses'=>'AdminController@sortUsers']);


/* controlling login using authcontroller*/

Route::post('admin/dashboard',['as'=>'log_admin','uses'=>'Auth\\AuthController@authenticate']);
/* Visitors controller*/
Route::get('/account/terms','VisitorController@term' );
Route::get('/account/register', 'VisitorController@register');

/* Contact control*/
Route::get('contact',
    ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact',
    ['as' => 'contact_store', 'uses' => 'ContactController@store']);

/*route for shop creation */
Route::get('admin/dashboard/shop/create',
    ['as' => 'shop','middleware'=>'userauth', 'uses' => 'ShopController@create']);
Route::post('admin/dashboard/shop/create',
    ['as' => 'shop_store', 'uses' => 'ShopController@store']);
Route::post('admin/dashboard/shop/update/select',
    ['as' => 'select_shop', 'uses' => 'ShopController@updateShop']);
Route::post('admin/dashboard/shop/delete',
    ['as' => 'delete_shop', 'uses' => 'ShopController@shopDelete']);
/*Route::post('admin/dashboard',
    ['as' => 'save_update', 'uses' => 'ShopController@saveUpdate']);*/

Route::post('admin/dashboard/edit/shop',['as' => 'save_update', 'uses' =>'ShopController@saveUpdate']);
Route::get('admin/dashboard/edit/shop',['as' => 'save_update', 'uses' =>'ShopController@saveUpdate']);
Route::get('admin/dashboard/shop/delete',['as'=>'delete_shop','uses'=>'ShopController@pickAllShop']);
Route::get('admin/dashboard/shop/update/select',['as'=>'select_shop','uses'=>'ShopController@pickShop']);
Route::get('shop/ownedshop','ShopController@showOwnedShop');
Route::get('admin/dashboard/shop/update',['as'=>'update_shop','uses'=>'ShopController@updateShop']);
//Route::get('admin/dashboard/shop/delete',['as'=>'delete_shop','uses'=>'ShopController@pickAllShop']);



/*Product controller */
Route::get('admin/dashboard/product/create',
    ['as' => 'product', 'uses' => 'ProductController@create']);
Route::post('admin/dashboard/product/create',
    ['as' => 'product_store', 'uses' => 'ProductController@store']);

Route::get('/admin/dashboard/product/update',['as'=>'update','uses'=>'ProductController@update']);
Route::post('/admin/dashboard/product/update',['as'=>'update_store','uses'=>'ProductController@storeupdate']);

Route::get('admin/dashboard/product/select',
    ['as' => 'update_product', 'uses' => 'ProductController@update']);
Route::post('admin/dashboard/product/select',
    ['as' => 'update_product', 'uses' => 'ProductController@edit']);

Route::get('admin/dashboard/product/shop/select',
    ['as' => 'product_shop', 'uses' => 'ProductController@pickShop']);
Route::post('admin/dashboard/product/shop/select',
    ['as' => 'product_shop', 'uses' => 'ProductController@pickProduct']);

Route::get('admin/dashboard/products/delete',
    ['as' => 'delete_product', 'uses' => 'ProductController@selectProduct']);
Route::post('admin/dashboard/products/delete',
    ['as' => 'delete_product', 'uses' => 'ProductController@deleteproduct']);
Route::post('admin/dashboard/shops/select',
    ['as' => 'shopfor_update', 'uses' => 'ProductController@update']);
Route::get('admin/dashboard/shops/select',
    ['as' => 'shopfor_update', 'uses' => 'ProductController@pickShop1']);

Route::get('admin/dashboard/shops/products',
    ['as' => 'show_products', 'uses' => 'ProductController@selectShopItems']);

/*Route::get('admin/dashboard/shops/products',
    ['as' => 'show_products', 'uses' => 'ProductController@selectShopItems']);*/
Route::get('admin/dashboard/shops/show',
    ['as' => 'show_products', 'uses' => 'ProductController@getShopWithProduct']);

Route::post('admin/dashboard/shops/show',
    ['as' => 'show_products', 'uses' => 'ProductController@selectShopItems']);

/* Contact control*/
Route::get('/admin/dashboard/contact/contactus',
    ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('admin/dashboard/contact/contactus',
    ['as' => 'contact_store', 'uses' => 'ContactController@store']);

/*Item search and display management*/
Route::get('search/autocomplete', 'SearchController@autocomplete');
Route::get('/food', 'DisplayProductController@food');
Route::get('home/products/{category}',['as'=>'product_category','uses'=>'DisplayProductController@getProductOfCategory']);
Route::post('home/products/{category}',['as'=>'product_category','uses'=>'DisplayProductController@buyProduct']);


Route::get('users/{user_id}', 'UsersController@destroy');








