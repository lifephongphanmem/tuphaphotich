<?php

namespace App\Http\Controllers;

use App\CapBanSaoTrichLuc;
use App\Districts;
use App\Towns;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CapBanSaoTrichLucController extends Controller
{
    public function index(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $thang = isset($inputs['thang']) ? $inputs['thang'] : date('m');
            $nam = isset($inputs['nam']) ? $inputs['nam'] : date('Y');

            $model = CapBanSaoTrichLuc::whereMonth('ngaycap', $thang)
                ->whereYear('ngaycap', $nam);
            if(session('admin')->level == 'T'){
                $model = $model->where('level','T');
            }elseif(session('admin')->level == 'H'){
                $model = $model->where('level','H')
                    ->where('mahuyen',session('admin')->mahuyen);
            }else{
                $model = $model->where('level','X')
                    ->where('mahuyen',session('admin')->mahuyen)
                    ->where('maxa',session('admin')->maxa);
            }
            $model = $model->get();
            $count = $model->count();

            return view('manage.capbansaotrichluc.index')
                -> with('thang',$thang)
                -> with('nam',$nam)
                -> with('model', $model)
                -> with('pageTitle','Thông tin cấp bản sao trích lục ('.$count.' hồ sơ)');
        }else
            return view('errors.notlogin');
    }

    public function create(){
        if (Session::has('admin')) {
        }else
            return view('errors.notlogin');
    }
}
