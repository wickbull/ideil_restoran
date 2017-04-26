<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

<<<<<<< HEAD
=======



>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
Route::get('/home', 'HomeController@index');
// Route::get('/home/edit', 'HomeController@index');
// Route::get('/home/edit/{id}', 'HomeController@show_food')->name('show_food');

Route::get('/home/cat/{id}/{name}', 'FoodController@show_additionalls')->name('show_additionalls');
<<<<<<< HEAD
Route::post('/home/cat/', 'FoodController@add_to_basket')->name('add_to_basket');
=======
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
Route::get('/home/del_add/{id}', 'FoodController@delete_additionall')->name('delete_additionall');
Route::get('/home/del_food/{id}', 'FoodController@delete_food')->name('delete_food');
Route::get('/home/order/{id}', 'Baskets@order')->name('go_to_order'); 
Route::post('/home/order', 'Baskets@store')->name('store_order');
<<<<<<< HEAD

Route::get('/home/show_add/{id}', 'FoodController@show_additionall')->name('show_additionall');
Route::post('/home/show_add', 'FoodController@edit_additionall')->name('editAdditionall');
Route::get('/home/edit/{id}', 'FoodController@show_food')->name('show_food');
Route::post('/home/edit', 'FoodController@edit_food')->name('editFood');

Route::get('/config', 'AdminController@index');
Route::get('/config/{id}/{variant}', 'AdminController@check')->name('check');

=======

<<<<<<< HEAD
=======

>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
Route::get('/home/show_add/{id}', 'FoodController@show_additionall')->name('show_additionall');
Route::post('/home/show_add', 'FoodController@edit_additionall')->name('editAdditionall');
Route::get('/home/edit/{id}', 'FoodController@show_food')->name('show_food');
Route::post('/home/edit', 'FoodController@edit_food')->name('editFood');

Route::get('/config', 'AdminController@index');
Route::get('/config/{id}/{variant}', 'AdminController@check')->name('check');

>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
Route::get('/basket', 'Baskets@index');
Route::get('/basket/add', 'Baskets@index_basket');
Route::post('/basket/add', 'Baskets@index_do')->name('index_do');

Route::get('/config/add_food', 'Additionallies@index');
Route::get('/config/edit_food', 'FoodController@show');
Route::get('/config/edit_additionallies', 'Additionallies@show');

Route::get('/content/edit/{id}' , 'AdminOptController@edit_page')->name('edit');

Route::post('/config/add_food', 'FoodController@store')->name('foodStore');
Route::post('/config/add_additional', 'Additionallies@store')->name('addAdditional');

Route::get('/', 'AuditUserLanguage@index');
Route::get('/{id}', 'AuditUserLanguage@choose')->name('chooseLang');
<<<<<<< HEAD

Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);
=======
<<<<<<< HEAD

Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);
=======
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
