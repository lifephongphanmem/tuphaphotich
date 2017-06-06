<?php

namespace App\Http\Controllers;

use App\CongDan;
use App\Districts;
use App\Towns;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CongDanController extends Controller
{
    protected function listHuyen() {
        return Districts::all();
    }

    protected function listXa($huyen){
        return Towns::where('mahuyen',$huyen)->get();
    }

    public function index(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            if(session('admin')->level == 'T') {
                $huyendf = Districts::first()->mahuyen;
                $huyen = isset($inputs['mahuyen']) ? $inputs['mahuyen'] : $huyendf;
                $xadf = Towns:: where('mahuyen', $huyendf)->first()->maxa;
                $xa = isset($inputs['maxa']) ? $inputs['maxa'] : $xadf;
            }elseif(session('admin')->level == 'H'){
                $huyen = isset($inputs['mahuyen']) ? $inputs['mahuyen'] : session('admin')->mahuyen;
                $xadf = Towns:: where('mahuyen', session('admin')->mahuyen)->first()->maxa;
                $xa = isset($inputs['maxa']) ? $inputs['maxa'] : $xadf;
            }else{
                $huyen = isset($inputs['mahuyen']) ? $inputs['mahuyen'] : session('admin')->mahuyen;
                $xa = isset($inputs['maxa']) ? $inputs['maxa'] : session('admin')->maxa;
            }

            $huyens = $this->listHuyen();
            $xas = array();
            if($huyen != 'all'){
                $xas = $this->listXa($huyen);
            }

            $model = new CongDan();
            if($huyen != 'all' && $huyen != ''){
                $model = $model->where('mahuyen', '=', $huyen);
            }
            if($xa != 'all' && $xa != ''){
                $model = $model->where('maxa', $xa);
            }else{
                $model = $model->where('maxa', $xa);

            }
            $model = $model->get();

            return view('manage.congdan.index')
                -> with('huyens', $huyens)

                -> with('xas', $xas)

                -> with('mahuyen', $huyen)

                -> with('maxa', $xa)

                -> with('model', $model)
                ->with('pageTitle','Thông tin công dân');
        }else
            return view('errors.notlogin');
    }
}
