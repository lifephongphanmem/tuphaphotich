<?php

Route::get('/', 'HomeController@index');

// <editor-fold defaultstate="collapsed" desc="--Ajax--">
Route::get('/checkmahuyen','AjaxController@checkmahuyen');
Route::get('/checkmaxa','AjaxController@checkmaxa');
Route::get('/checkuser','AjaxController@checkuser');
Route::get('getXas','AjaxController@getXas');
// </editor-fold>//End Ajax

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

// <editor-fold defaultstate="collapsed" desc="--Reports--">
Route::get('reports','ReportsController@index');
Route::post('reports/sokhaisinh','ReportsController@sokhaisinh');
Route::post('reports/sotthonnhan','ReportsController@sotthonnhan');
Route::post('reports/sokhaitu','ReportsController@sokhaitu');
Route::post('reports/sokethon','ReportsController@sokethon');
// </editor-fold>//End Reports

// <editor-fold defaultstate="collapsed" desc="--Manage--">
Route::resource('congdan','CongDanController');
Route::post('congdan/delete','CongDanController@destroy');

//Khai sinh

Route::resource('khaisinh','KhaiSinhController');
Route::get('khaisinh/{id}/show','KhaiSinhController@show');
Route::post('khaisinh/delete','KhaiSinhController@destroy');
Route::post('khaisinh/duyet','KhaiSinhController@duyet');
Route::post('khaisinh/prints','KhaiSinhController@prints');

//End khai sinh

//khai tử
Route::resource('khaitu','KhaiTuController');
Route::get('khaitu/{id}/show','KhaiTuController@show');
Route::post('khaitu/duyet','KhaiTuController@duyet');
Route::post('khaitu/delete','KhaiTuController@destroy');
Route::post('khaitu/prints','KhaiTuController@prints');

Route::resource('dangkyconnuoi','ConNuoiController');
Route::get('dangkyconnuoi/{id}/show','ConNuoiController@show');
Route::post('dangkyconnuoi/duyet','ConNuoiController@duyet');
Route::post('dangkyconnuoi/delete','ConNuoiController@destroy');
Route::post('dangkyconnuoi/prints','ConNuoiController@prints');
//Tình trạn hôn nhân

Route::resource('tthonnhan','TTHonNhanController');
Route::get('tthonnhan/{id}/show','TTHonNhanController@show');
Route::post('tthonnhan/delete','TTHonNhanController@destroy');
Route::post('tthonnhan/duyet','TTHonNhanController@duyet');
Route::post('tthonnhan/prints','TTHonNhanController@prints');


Route::group(['prefix'=>'connuoi'],function(){
    Route::get('danhsach','ConNuoiController@index');
    Route::get('create','ConNuoiController@create');
    Route::post('store','ConNuoiController@store');
    Route::post('delete','ConNuoiController@delete');
    Route::get('/{id}/edit','ConNuoiController@edit');
    Route::post('/{id}/edit','ConNuoiController@update');
    Route::get('update','ConNuoiController@update');
});
// </editor-fold>//End Manage

//Kết hôn
Route::resource('kethon','KetHonController');
Route::get('kethon/{id}/show','KetHonController@show');
Route::post('kethon/delete','KetHonController@destroy');
Route::post('kethon/duyet','KetHonController@duyet');
Route::post('kethon/prints','KetHonController@prints');
//End kết hôn

//Trích lục
Route::resource('capbansaotrichluc','CapBanSaoTrichLucController');
//End Trích lục
//Sổ hộ tịch
Route::resource('sohotich','SoHoTichController');
Route::post('sohotich/delete','SoHoTichController@destroy');
//End Trích lục


