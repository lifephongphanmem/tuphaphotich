<?php

namespace App\Http\Controllers;

use App\DanToc;
use App\Districts;
use App\ConNuoi;
use App\QuocTich;
use App\SoHoTich;
use App\Towns;
use App\ThongTinThayDoi;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ConNuoiController extends Controller
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

            $huyens = $this->listHuyen();
            $xas = array();
            if($huyen != 'all'){
                $xas = $this->listXa($huyen);
            }

            $model = ConNuoi::whereMonth('ngaythangdk', $thang)
                ->whereYear('ngaythangdk', $nam);
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

            return view('manage.connuoi.index')
                -> with('huyens', $huyens)
                -> with('xas', $xas)
                -> with('mahuyen', $huyen)
                -> with('maxa', $xa)
                -> with('thang', $thang)
                -> with('nam', $nam)
                -> with('model', $model)
                -> with('pageTitle','Thông tin đăng ký con nuôi ('.$count.' hồ sơ)');
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

            return view('manage.connuoi.create')
                ->with('huyens', $huyens)
                ->with('mahuyen', $huyendf)
                ->with('xas', $xas)
                ->with('maxa', $xadf)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('pageTitle', 'Thêm mới thông tin con nuôi');
        }else
            return view('errors.notlogin');
    }
    public function store(Request $request)
    {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $connuoi = new ConNuoi();
            $modelsohotich =  SoHoTich::where('plhotich','Khai tử')
                ->where('namso',date('Y'))->first()->quyenhotich;
            $inputs['quyen'] = (isset($modelsohotich)) ? $modelsohotich : getmatinh().$inputs['mahuyen'].$inputs['maxa'].'KS'.date('Y');
            $inputs['so'] = $this->getSoHoTich($inputs['maxa'],$inputs['mahuyen'],$inputs['quyen'] );
            $inputs['ngaysinhchanuoi'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhchanuoi'])));
            $inputs['ngaycapgtcn'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaycapgtcn'])));
            $inputs['ngaysinhmenuoi'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhmenuoi'])));
            $inputs['ngaycapgtmn'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaycapgtmn'])));
            $inputs['ngaysinhconnuoi'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhconnuoi'])));
            $inputs['ngaysinhchagiao'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhchagiao'])));
            $inputs['ngaycapgtcg'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaycapgtcg'])));
            $inputs['ngaysinhmegiao'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhmegiao'])));
            $inputs['ngaycapgtmg'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaycapgtmg'])));
            $inputs['ngaythangdk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaythangdk'])));
            $inputs['ngaythangqd'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaythangqd'])));
            $inputs['matinh'] = getmatinh();
            $inputs['mahs'] = $inputs['matinh'].$inputs['mahuyen'].$inputs['maxa'].'CN'.getdate()[0];
            $inputs['trangthai']= "Chờ duyệt";
            $connuoi->create($inputs);
            return redirect('dangkyconnuoi');

        }else
            return view('errors.notlogin');
    }

    public function getSoHoTich($maxa,$mahuyen,$quyen){
        $idmax = ConNuoi::where('maxa',$maxa)
            ->where('mahuyen',$mahuyen)
            ->where('quyen',$quyen)
            ->max('id');
        if($idmax==null)
            $stt = 1;
        else{
            $model =ConNuoi::where('id', $idmax)->first();
            $stt = $model->so + 1;
        }
        return $stt;
    }

    public function show($id){
        if (Session::has('admin')) {

            $connuoi = ConNuoi::find($id);
            $xa = Towns::where('maxa',$connuoi->maxa)->first()->tenxa;
            $huyen = Districts::where('mahuyen',$connuoi->mahuyen)->first()->tenhuyen;
            $thongtinthaydoi = ThongTinThayDoi::where('mahs',$connuoi->masohoso)->get();
            return view('manage.connuoi.show')
                ->with('connuoi',$connuoi)
                ->with('xa',$xa)
                ->with('huyen',$huyen)
                ->with('thongtinthaydoi',$thongtinthaydoi)
                ->with('pageTitle', 'Thông tin đăng ký con nuôi');
        }else
            return view('errors.notlogin');
    }

    public function edit ($id)
    {
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
            $connuoi = ConNuoi::find($id);
            $dantocs = getDanTocSelectOptions();
            $quoctichs = getQuocTichSelectOptions();

            return view('manage.connuoi.edit')
                ->with('huyens', $huyens)
                ->with('mahuyen', $huyendf)
                ->with('xas', $xas)
                ->with('maxa', $xadf)
                ->with('dantocs', $dantocs)
                ->with('quoctichs', $quoctichs)
                ->with('connuoi',$connuoi)
                ->with('pageTitle', 'Sửa thông tin con nuôi');
        }else
            return view('errors.notlogin');
    }
    public function update(Request $request, $id)
    {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $connuoi = ConNuoi::find($id);
            $inputs['ngaysinhchanuoi'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhchanuoi'])));
            $inputs['ngaycapgtcn'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaycapgtcn'])));
            $inputs['ngaysinhmenuoi'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhmenuoi'])));
            $inputs['ngaycapgtmn'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaycapgtmn'])));
            $inputs['ngaysinhconnuoi'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhconnuoi'])));
            $inputs['ngaysinhchagiao'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhchagiao'])));
            $inputs['ngaycapgtcg'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaycapgtcg'])));
            $inputs['ngaysinhmegiao'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaysinhmegiao'])));
            $inputs['ngaycapgtmg'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaycapgtmg'])));
            $inputs['ngaythangdk'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaythangdk'])));
            $inputs['ngaythangqd'] = date('Y-m-d', strtotime(str_replace('/', '-', $inputs['ngaythangqd'])));
            $connuoi->update($inputs);
            return redirect('dangkyconnuoi/'.$id.'/edit');

        }else
            return view('errors.notlogin');
    }
    public function destroy(Request $request)
    {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['iddelete'];
            $connuoi = ConNuoi::find($id);
            $connuoi->delete();
            return redirect('dangkyconnuoi');

        }else
            return view('errors.notlogin');
    }

    public function duyet(Request $request){
        if (Session::has('admin')) {
            $inputs = $request->all();
            $id = $inputs['idduyet'];
            $connuoi = ConNuoi::find($id);
            $connuoi->trangthai = 'Duyệt';
            $connuoi->save();
            return redirect('dangkyconnuoi');

        }else
            return view('errors.notlogin');
    }

    public function prints($id){
        if (Session::has('admin')) {
            $model = ConNuoi::find($id);
            $modelxa = Towns::where('maxa',$model->maxa)->first();
            $xa = $modelxa->tenxa;
            return view('reports.connuoi.print')
                ->with('model',$model)
                ->with('xa',$xa)
                ->with('pageTitle','In giấy chứng nhận con nuôi bản chính');
        }else
            return view('errors.notlogin');
    }
}
