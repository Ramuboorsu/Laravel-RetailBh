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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    if(Session::has('idd'))
    {
        return redirect('/profile');
    }
    else
    {
    return view('RetailStore.index');
}
});
Route::post('/action', function () {
    return view('RetailStore.action');
});

Route::get('/exp','retailcontroller@index');

Route::any('/register', function () {
    return view('RetailStore.register');
});
Route::any('/login', function () {
    return view('RetailStore.login');
});
Route::any('/insert','retailcontroller@insert');

Route::any('/select','retailcontroller@select');

Route::any('/profile', function () {
    return view('RetailStore.profile');
});
Route::any('/logout','retailcontroller@logout');
Route::any('/store1/{id}', function ($id) {
    return view('RetailStore.store1')->with('id',$id);
});
Route::any('/cart1', function () {
    return view('RetailStore.cart1');
});
Route::any('/cart1/{id}','retailcontroller@update');

Route::any('/registration',function () {
    return view('RetailStore.register');
});
Route::any('/wishlist', function () {
    return view('RetailStore.wishlist');
});
Route::any('/forgot_password','forgotpassword@forgot');
Route::any('/check','forgotpassword@password');

Route::any('/checkout',function(){
if(Session::has('idd'))   
{
return view('RetailStore.checkout');
}
else
{
  return view('RetailStore.login');  
}
});

