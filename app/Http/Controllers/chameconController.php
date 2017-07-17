<?php

namespace App\Http\Controllers;

use App\chamecon;
use App\Districts;
use App\SoHoTich;
use App\Towns;
use App\ThongTinThayDoi;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class chameconController extends Controller
{
    public function index(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $thang = isset($inputs['thang']) ? $inputs['thang'] : date('m');
            $nam = isset($inputs['nam']) ? $inputs['nam'] : date('Y');
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

            $model = chamecon::whereMonth('ngaydangky', $thang)
                ->whereYear('ngaydangky', $nam);
            if($huyen != 'all' && $huyen != ''){
                $model = $model->where('mahuyen', $huyen);
            }
            if($xa != 'all' && $xa != ''){
                $model = $model->where('maxa', $xa);
            }else{
                $model = $model->where('maxa', $xa);
            }
            $model = $model->get();

            $count = $model->count();

            return view('manage.chamecon.index')
                -> with('huyens', $huyens)
                -> with('xas', $xas)
                -> with('mahuyen', $huyen)
                -> with('maxa', $xa)
                -> with('thang',$thang)
                -> with('nam',$nam)
                -> with('model', $model)
                -> with('pageTitle','Thông tin đăn ký cha mẹ con ('.$count.' hồ sơ)');
        }else
            return view('errors.notlogin');
    }

    public function create(){
        if (Session::has('admin')) {
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

            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();

            return view('manage.chamecon.create')
                ->with('action','create')
                ->with('huyens', $huyens)
                ->with('mahuyen', $huyendf)
                ->with('xas', $xas)
                ->with('maxa', $xadf)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('pageTitle', 'Thêm mới thông tin giám hộ');
        }else
            return view('errors.notlogin');
    }

    public function store(Request $request){
        if (Session::has('admin')) {

            $inputs = $request->all();

            $modelsohotich =  SoHoTich::where('plhotich','Nhận cha mẹ con')
                ->where('namso',date('Y'))->first()->quyenhotich;
            $inputs['soquyen'] = (isset($modelsohotich)) ? $modelsohotich : getmatinh().$inputs['mahuyen'].$inputs['maxa'].'GH'.date('Y');

            $inputs['soso'] = $this->getSoHoTich($inputs['maxa'],$inputs['mahuyen'],$inputs['soquyen'] );
            $inputs['matinh'] = getmatinh();
            $inputs['mahs'] = $inputs['matinh'].$inputs['mahuyen'].$inputs['maxa'].'CMC'.getdate()[0];
            $inputs['ngaydangky'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydangky'])));
            $inputs['ngaysinhndn'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhndn'])));
            $inputs['ngaysinhnn'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhnn'])));
            $inputs['ngaycapgtnk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaycapgtnk'])));
            $inputs['trangthai'] = 'Chờ duyệt';
            $model = new chamecon();
            $model->create($inputs);

            return redirect('dangkynhanchamecon');

        }else
            return view('errors.notlogin');
    }

    public function getSoHoTich($maxa,$mahuyen,$quyen){
        $idmax = chamecon::where('maxa',$maxa)
            ->where('mahuyen',$mahuyen)
            ->where('soquyen',$quyen)
            ->max('id');
        if($idmax==null)
            $stt = 1;
        else{
            $model = chamecon::where('id', $idmax)->first();
            $stt = $model->so + 1;
        }
        return $stt;
    }

    public function show($id){
        if (Session::has('admin')) {

            $model = chamecon::find($id);
            $xa = Towns::where('maxa',$model->maxa)->first()->tenxa;
            $huyen = Districts::where('mahuyen',$model->mahuyen)->first()->tenhuyen;
            $thongtinthaydoi = ThongTinThayDoi::where('mahs',$model->mahs)->get();

            return view('manage.chamecon.show')
                ->with('model',$model)
                ->with('xa',$xa)
                ->with('huyen',$huyen)
                ->with('thongtinthaydoi',$thongtinthaydoi)
                ->with('pageTitle', 'Thông tin khai sinh');
        }else
            return view('errors.notlogin');
    }

    public function edit($id){
        if (Session::has('admin')) {

            $model = chamecon::find($id);
            $huyens = Districts::all();
            $huyendf = $model->mahuyen;
            $xas = Towns::where('mahuyen', $huyendf)
                ->get();
            $xadf = $model->maxa;

            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();

            return view('manage.chamecon.edit')
                ->with('action','edit')
                ->with('huyens', $huyens)
                ->with('mahuyen', $huyendf)
                ->with('xas', $xas)
                ->with('maxa', $xadf)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('model',$model)
                ->with('pageTitle', 'Chỉnh sửa thông tin đăng ký cha mẹ con');
        }else
            return view('errors.notlogin');
    }

    public function update(Request $request,$id){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $inputs['ngaydangky'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaydangky'])));
            $inputs['ngaysinhndn'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhndn'])));
            $inputs['ngaysinhnn'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhnn'])));
            $inputs['ngaycapgtnk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaycapgtnk'])));
            $inputs['trangthai'] = 'Chờ duyệt';
            $model = chamecon::find($id);
            $model->update($inputs);
            return redirect('dangkynhanchamecon');

        }else
            return view('errors.notlogin');
    }

    public function destroy(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['iddelete'];
            $model = chamecon::find($id);
            $model->delete();
            return redirect('dangkynhanchamecon');

        }else
            return view('errors.notlogin');
    }

    public function duyet(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['idduyet'];
            $model = chamecon::find($id);
            $model->trangthai = 'Duyệt';
            $model->save();
            return redirect('dangkynhanchamecon');

        }else
            return view('errors.notlogin');
    }

    //chưa làm
    public function prints(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['idprints'];
            $model = chamecon::find($id);
            $modelxa = Towns::where('maxa',$model->maxa)->first();
            $xa = $modelxa->tenxa;
            $modelhuyen = Districts::where('mahuyen',$modelxa->mahuyen)->first();
            $huyen = $modelhuyen->tenhuyen;
            $tinh = GeneralConfigs::first()->tendv;

            if($inputs['plgiayks']== 'Bản chính'){
                return view('reports.khaisinh.print')
                    ->with('model',$model)
                    ->with('xa',$xa)
                    ->with('pageTitle','In giấy khai sinh bản chính');
            }else{
                return view('reports.khaisinh.printtrichluc')
                    ->with('model',$model)
                    ->with('xa',$xa)
                    ->with('huyen',$huyen)
                    ->with('tinh',$tinh)
                    ->with('pageTitle','In giấy khai sinh bản sao');
            }

        }else
            return view('errors.notlogin');
    }
}
