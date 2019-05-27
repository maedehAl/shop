<?php

Auth::routes();

Route::group(['prefix'=>'dashboard','middleware'=>'checkAdmin'],function(){

    /* روت های مدیریت سایت */


    Route::get('/',"DashboardController@index");


    Route::group(['prefix'=>'categories'],function(){

        Route::get('/index',"CategoryController@index")->name("category.index");

        Route::get('/create',"CategoryController@create")->name("category.create");

        Route::post('/store',"CategoryController@store")->name("category.store");

        Route::get('/edit/{id}',"CategoryController@edit")->name("category.edit");

        Route::post('/update/{id}',"CategoryController@update")->name("category.update");

        Route::delete('/delete/{id}',"CategoryController@delete")->name("category.delete");

    });



    Route::group(['prefix'=>'products'],function(){

        Route::get('/index',"ProductController@index")->name("product.index");

        Route::get('/create',"ProductController@create")->name("product.create");

        Route::post('/store',"ProductController@store")->name("product.store");

        Route::get('/edit/{id}',"ProductController@edit")->name("product.edit");

        Route::post('/update/{id}',"ProductController@update")->name("product.update");

        Route::delete('/delete/{id}',"ProductController@delete")->name("product.delete");

    });



});


Route::get("/","HomeController@index");

Route::get("/product/{id}","ProductController@show");

Route::get("/category/{id}","CategoryController@show");

Route::get("/cart","CartController@show");

Route::get("/profile","ProfileController@show");

