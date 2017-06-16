<?php

Route::get('/', 'HomeController@index');
//Test FormWizard
Route::get('/formwizard', function(){
    return view('test.formwizard.index')
        ->with('pageTitle','Sửa thông tin hồ sơ cán bộ');
});

//Ajax check
Route::get('/checkmahuyen','AjaxController@checkmahuyen');
Route::get('/checkmaxa','AjaxController@checkmaxa');
Route::get('/checkuser','AjaxController@checkuser');
Route::get('getXas','AjaxController@getXas');
//End ajax check

// <editor-fold defaultstate="collapsed" desc="--Setting--">
Route::get('cau_hinh_he_thong','GeneralConfigsController@index');
Route::get('cau_hinh_he_thong/create','GeneralConfigsController@create');
Route::post('cau_hinh_he_thong','GeneralConfigsController@store');
Route::get('cau_hinh_he_thong/{id}/edit','GeneralConfigsController@edit');
Route::patch('cau_hinh_he_thong/{id}','GeneralConfigsController@update');
Route::get('/setting','GeneralConfigsController@setting');
Route::post('/setting','GeneralConfigsController@upsetting');

//Users
Route::get('login','UsersController@login');
Route::post('signin','UsersController@signin');
Route::get('/change-password','UsersController@cp');
Route::post('/change-password','UsersController@cpw');
Route::get('/user_setting','UsersController@settinguser');
Route::post('/user_setting','UsersController@settinguserw');
//Route::get('/checkpass','UsersController@checkpass');
//Route::get('/checkuser','UsersController@checkuser');
Route::get('logout','UsersController@logout');
Route::get('users','UsersController@index');
Route::get('users/{id}/edit','UsersController@edit');
Route::patch('users/{id}','UsersController@update');
Route::get('users/{id}/permission','UsersController@permission');
Route::post('users/permission','UsersController@uppermission');
Route::post('users/delete','UsersController@destroy');
Route::get('users/lock/{ids}','UsersController@lockuser');
Route::get('users/unlock/{ids}','UsersController@unlockuser');

Route::get('users/print/pl={pl}','UsersController@prints');
//EndUsers

//Thông tin quận/huyện
Route::resource('districts','DistrictsController');
Route::post('districts/delete','DistrictsController@destroy');
//End Thông tin quận/huyện
//Thông tin xã phường
Route::resource('towns','TownsController');
Route::post('towns/delete','TownsController@destroy');
//End Thông tin xã phường

// </editor-fold>//End Setting

Route::resource('congdan','CongDanController');
Route::post('congdan/delete','CongDanController@destroy');

Route::resource('khaisinh','KhaiSinhController');
Route::post('khaisinh/delete','KhaiSinhController@destroy');

Route::group(['prefix'=>'khaitu'],function(){
    Route::get('danhsach','KhaiTuController@index');
    Route::get('create','KhaiTuController@create');
    Route::post('store','KhaiTuController@store');
    Route::post('delete','KhaiTuController@delete');
    Route::get('/{id}/edit','KhaiTuController@edit');
    Route::post('/{id}/edit','KhaiTuController@update');
    Route::get('update','KhaiTuController@update');
});

Route::group(['prefix'=>'connuoi'],function(){
    Route::get('danhsach','ConNuoiController@index');
    Route::get('create','ConNuoiController@create');
    Route::post('store','ConNuoiController@store');
    Route::post('delete','ConNuoiController@delete');
    Route::get('/{id}/edit','ConNuoiController@edit');
    Route::post('/{id}/edit','ConNuoiController@update');
    Route::get('update','ConNuoiController@update');
});


