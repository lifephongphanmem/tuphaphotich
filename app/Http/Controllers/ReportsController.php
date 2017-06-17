<?php

namespace App\Http\Controllers;

use App\Districts;
use App\GeneralConfigs;
use App\KhaiSinh;
use App\Towns;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ReportsController extends Controller
{
    public function index(){
        if (Session::has('admin')) {
            $day = date('Y-m-d');
            $som = date("Y-m-01", strtotime($day));
            $eom = date("Y-m-t", strtotime($day));
            if (session('admin')->level == 'T') {
                $huyens = Districts::all();
                $huyendf = Districts::first()->mahuyen;
                $xas = Towns::where('mahuyen', $huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            } elseif (session('admin')->level == 'H') {
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen', session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen', $huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            } else {
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen', session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen', $huyendf)
                    ->get();
                $xadf = $xas->where('maxa', session('admin')->maxa)->first()->maxa;
            }

            return view('reports.bcth.index')
                ->with('som',date('d/m/Y',strtotime($som)))
                ->with('eom',date('d/m/Y',strtotime($eom)))
                ->with('huyens', $huyens)
                ->with('mahuyen', $huyendf)
                ->with('xas', $xas)
                ->with('maxa', $xadf)
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
            if(session('admin')->level == 'T'){
                $tencq = GeneralConfigs::first()->tendv;
            }elseif(session('admin')=='H'){
                $huyen = Districts::where('mahuyen',session('admin')->mahuyen)
                    ->first()->tenhuyen;
                $tinh = GeneralConfigs::first()->tendv;
                $tencq = $huyen .' - '.$tinh;
            }else{
                $xa = Towns::where('maxa',session('admin')->maxa)->first()->tenxa;
                $huyen = Districts::where('mahuyen',session('admin')->mahuyen)
                    ->first()->tenhuyen;
                $tinh = GeneralConfigs::first()->tendv;
                $tencq = $xa.' - '.$huyen .' - '.$tinh;
            }
            $model = KhaiSinh::where('trangthai','Duyệt')
                ->where('maxa',$inputs['maxa'])
                ->where('mahuyen',$inputs['mahuyen'])
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
}
