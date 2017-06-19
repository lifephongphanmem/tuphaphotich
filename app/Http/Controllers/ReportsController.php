<?php

namespace App\Http\Controllers;

use App\Districts;
use App\GeneralConfigs;
use App\KetHon;
use App\KhaiSinh;
use App\Towns;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ReportsController extends Controller
{
    public function index(Request $request){
        if (Session::has('admin')) {
            $day = date('Y-m-d');
            $som = date("Y-m-01", strtotime($day));
            $eom = date("Y-m-t", strtotime($day));
            $inputs = $request->all();
            if(session('admin')->level == 'T') {
                $huyendf = Districts::first()->mahuyen;
                $huyen = isset($inputs['mahuyen']) ? $inputs['mahuyen'] : $huyendf;
                $xadf = Towns:: where('mahuyen', $huyen)->first()->maxa;
                if(isset($inputs['maxa'])) {
                    if ($inputs['maxa'] == "all")
                        $xa = $xadf;
                    else
                        $xa = $inputs['maxa'];
                }else {
                    $xa = $xadf;
                }

            }elseif(session('admin')->level == 'H'){
                $huyen = isset($inputs['mahuyen']) ? $inputs['mahuyen'] : session('admin')->mahuyen;
                $xadf = Towns:: where('mahuyen', $huyen)->first()->maxa;
                $xa = isset($inputs['maxa']) ? $inputs['maxa'] : $xadf;
            }else{
                $huyen = isset($inputs['mahuyen']) ? $inputs['mahuyen'] : session('admin')->mahuyen;
                $xa = isset($inputs['maxa']) ? $inputs['maxa'] : session('admin')->maxa;
            }

            $huyens = listHuyen();
            $xas = array();
            if($huyen != 'all'){
                $xas = listXa($huyen);
            }

            return view('reports.bcth.index')
                ->with('som',date('d/m/Y',strtotime($som)))
                ->with('eom',date('d/m/Y',strtotime($eom)))
                -> with('huyens', $huyens)
                -> with('xas', $xas)
                -> with('mahuyen', $huyen)
                -> with('maxa', $xa)
                ->with('pageTitle', 'Báo cáo sổ sách tổng hợp');

        } else {
            return view('errors.notlogin');
        }
    }

    public function sokhaisinh(Request $request){
        if (Session::has('admin')) {

            $inputs = $request->all();
            //dd($inputs);
            $ngaytu = date('Y-m-d',strtotime(str_replace('/', '-', $inputs['ngaytu'])));
            $ngayden = date('Y-m-d',strtotime(str_replace('/', '-', $inputs['ngayden'])));

            $xa = Towns::where('maxa',$inputs['xa'])->first()->tenxa;
            $huyen = Districts::where('mahuyen',$inputs['huyen'])
                ->first()->tenhuyen;
            $tinh = GeneralConfigs::first()->tendv;
            $tencq = $xa.' - '.$huyen .' - '.$tinh;


            $model = KhaiSinh::where('trangthai','Duyệt')
                ->where('maxa',$inputs['xa'])
                ->where('mahuyen',$inputs['huyen'])
                ->whereBetween('ngaydangky', [$ngaytu, $ngayden])
                ->get();

            return view('reports.bcth.sokhaisinh')
                ->with('inputs',$inputs)
                ->with('model',$model)
                ->with('tencq',$tencq)
                ->with('pageTitle','Sổ khai sinh');

        } else {
            return view('errors.notlogin');
        }
    }

    public function sokethon(Request $request){
        if (Session::has('admin')) {

            $inputs = $request->all();
            //dd($inputs);
            $ngaytu = date('Y-m-d',strtotime(str_replace('/', '-', $inputs['ngaytu'])));
            $ngayden = date('Y-m-d',strtotime(str_replace('/', '-', $inputs['ngayden'])));

            $xa = Towns::where('maxa',$inputs['xa'])->first()->tenxa;
            $huyen = Districts::where('mahuyen',$inputs['huyen'])
                ->first()->tenhuyen;
            $tinh = GeneralConfigs::first()->tendv;
            $tencq = $xa.' - '.$huyen .' - '.$tinh;


            $model = KetHon::where('trangthai','Duyệt')
                ->where('maxa',$inputs['xa'])
                ->where('mahuyen',$inputs['huyen'])
                ->whereBetween('ngaydangky', [$ngaytu, $ngayden])
                ->get();

            return view('reports.bcth.sokethon')
                ->with('inputs',$inputs)
                ->with('model',$model)
                ->with('tencq',$tencq)
                ->with('pageTitle','Sổ đăng ký kết hôn');

        } else {
            return view('errors.notlogin');
        }
    }
}
