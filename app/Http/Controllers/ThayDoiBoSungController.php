<?php

namespace App\Http\Controllers;

use App\DanToc;
use App\Districts;
use App\GeneralConfigs;
use App\KhaiSinh;
use App\KhaiTu;
use App\ThongTinThayDoi;
use App\Towns;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ThayDoiBoSungController extends Controller
{
    public function kscreate($id)
    {
        if (Session::has('admin')) {
            if(session('admin')->level == 'T'){
                $huyens = Districts::all();
                $huyendf = Districts::first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            }elseif(session('admin')->level =='H'){
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen',session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            }else{
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen',session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->where('maxa',session('admin')->maxa)->first()->maxa;
            }

            return view('manage.khaisinh.include.thaydoi')
                ->with('huyens',$huyens)
                ->with('mahuyen',$huyendf)
                ->with('xas',$xas)
                ->with('maxa',$xadf)
                ->with('mahs',$id)
                ->with('pageTitle','Thêm mới thông tin thay đổi');
        }else
            return view('errors.notlogin');
    }

    public function khaisinhbs(Request $request, $id){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $khaisinh = KhaiSinh::where('mahs',$id)->get();
            foreach ($khaisinh as $ks)
            {
                $inputs['hotenntd'] = $ks->hotenks;
                $inputs['gioitinhntd'] = $ks->gioitinhks;
                $inputs['dantocntd'] = $ks->dantocks;
                $inputs['quoctichntd'] = $ks->quoctichks;
                $inputs['ngaydkks'] = $ks->ngaydangky;
            }
            $inputs['ngaydk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydk'])));
            $inputs['plgiayto'] = "Khai sinh";
            $model = new ThongTinThayDoi();
            $model->create($inputs);
            return redirect('khaisinh');
        }else
            return view('errors.notlogin');
    }

    public function ktcreate($id)
    {
        if (Session::has('admin')) {
            if(session('admin')->level == 'T'){
                $huyens = Districts::all();
                $huyendf = Districts::first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            }elseif(session('admin')->level =='H'){
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen',session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->first()->maxa;
            }else{
                $huyens = Districts::all();
                $huyendf = Districts::where('mahuyen',session('admin')->mahuyen)->first()->mahuyen;
                $xas = Towns::where('mahuyen',$huyendf)
                    ->get();
                $xadf = $xas->where('maxa',session('admin')->maxa)->first()->maxa;
            }

            return view('manage.khaitu.include.thaydoi')
                ->with('huyens',$huyens)
                ->with('mahuyen',$huyendf)
                ->with('xas',$xas)
                ->with('maxa',$xadf)
                ->with('mahs',$id)
                ->with('pageTitle','Thêm mới thông tin thay đổi');
        }else
            return view('errors.notlogin');
    }

    public function khaitubs(Request $request, $id){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $khaisinh = KhaiTu::where('masohoso',$id)->get();
            foreach ($khaisinh as $ks)
            {
                $inputs['hotenntd'] = $ks->hoten;
                $inputs['gioitinhntd'] = $ks->gioitinh;
                $inputs['dantocntd'] = $ks->dantoc;
                $inputs['quoctichntd'] = $ks->quoctich;
                $inputs['ngaydkks'] = $ks->ngaydangkykt;
            }
            $inputs['ngaydk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydk'])));
            $inputs['plgiayto'] = "Khai tử";
            $model = new ThongTinThayDoi();
            $model->create($inputs);
            return redirect('khaitu');
        }else
            return view('errors.notlogin');
    }
}
