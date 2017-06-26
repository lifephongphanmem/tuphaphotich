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
Route::post('reports/sotrichluc','ReportsController@sotrichluc');
// </editor-fold>//End Reports

// <editor-fold defaultstate="collapsed" desc="--Manage--">
Route::resource('congdan','CongDanController');
Route::post('congdan/delete','CongDanController@destroy');

//Khai sinh

Route::resource('khaisinh','KhaiSinhController');
Route::get('khaisinh/{id}/show','KhaiSinhController@show');
Route::post('khaisinh/delete','KhaiSinhController@destroy');
Route::post('khaisinh/duyet','KhaiSinhController@duyet');
Route::get('khaisinh/{id}/prints','KhaiSinhController@prints');

Route::group(['prefix'=>'khaitu'],function(){
    Route::get('danhsach','KhaiTuController@index');
    Route::get('create','KhaiTuController@create');
    Route::post('store','KhaiTuController@store');
    Route::post('delete','KhaiTuController@delete');
    Route::get('/{id}/edit','KhaiTuController@edit');
    Route::post('/{id}/edit','KhaiTuController@update');
    Route::get('update','KhaiTuController@update');
});
Route::resource('dangkygiamho','giamhoController');
Route::post('dangkygiamho/delete','giamhoController@destroy');
Route::get('dangkygiamho/{id}/show','giamhoController@show');
Route::post('dangkygiamho/duyet','giamhoController@duyet');
Route::post('dangkygiamho/prints','giamhoController@prints');

Route::resource('dangkynhanchamecon','chameconController');
Route::post('dangkynhanchamecon/delete','chameconController@destroy');
Route::get('dangkynhanchamecon/{id}/show','chameconController@show');
Route::post('dangkynhanchamecon/duyet','chameconController@duyet');
Route::post('dangkynhanchamecon/prints','chameconController@prints');

//End khai sinh

//Khai tử

Route::resource('khaitu','KhaiTuController');
Route::get('khaitu/{id}/show','KhaiTuController@show');
Route::post('khaitu/duyet','KhaiTuController@duyet');
Route::post('khaitu/delete','KhaiTuController@destroy');
Route::post('khaitu/prints','KhaiTuController@prints');

//End khai tử

//Con nuôi

Route::resource('dangkyconnuoi','ConNuoiController');
Route::get('dangkyconnuoi/{id}/show','ConNuoiController@show');
Route::post('dangkyconnuoi/duyet','ConNuoiController@duyet');
Route::post('dangkyconnuoi/delete','ConNuoiController@destroy');
Route::post('dangkyconnuoi/prints','ConNuoiController@prints');

//End con nuôi

//Tình trạn hôn nhân

Route::resource('tthonnhan','TTHonNhanController');
Route::get('tthonnhan/{id}/show','TTHonNhanController@show');
Route::post('tthonnhan/delete','TTHonNhanController@destroy');
Route::post('tthonnhan/duyet','TTHonNhanController@duyet');
Route::post('tthonnhan/prints','TTHonNhanController@prints');

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
Route::get('capbansaotrichluc/{id}/show','CapBanSaoTrichLucController@show');
Route::post('capbansaotrichluc/delete','CapBanSaoTrichLucController@destroy');
Route::post('capbansaotrichluc/duyet','CapBanSaoTrichLucController@duyet');
Route::get('capbansaotrichluc/{id}/prints','CapBanSaoTrichLucController@prints');
//End Trích lục
//Sổ hộ tịch
Route::resource('sohotich','SoHoTichController');
Route::post('sohotich/delete','SoHoTichController@destroy');
//End Trích lục

Route::get('test',function(){
    dd(getDateText('2017-05-05'));
});

