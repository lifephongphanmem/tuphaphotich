@extends('main')

@section('custom-style')

@stop


@section('custom-script')

@stop

@section('content')
    <!-- BEGIN CONTENT -->
    <h3 class="page-title">
        Màn hình<small> điều khiển và thống kê</small>
    </h3>
    <!-- END PAGE HEADER-->
    <!-- BEGIN DASHBOARD STATS -->

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat blue-madison">
                <div class="visual">
                    <i class="fa fa-building"></i>
                </div>
                <div class="details">
                    <div class="number"></div>
                    <div class="desc">
                        Thông tin khai sinh<br>
                        <h5>{{$count['slks']}} Hồ sơ</h5>
                    </div>
                </div>
                <a class="more" href="{{url('khaisinh')}}">
                    Xem chi tiết <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat red-intense">
                <div class="visual">
                    <i class="fa fa-building"></i>
                </div>
                <div class="details">
                    <div class="number"></div>
                    <div class="desc">
                        Thông tin khai tử<br>
                        <h5>{{$count['slkt']}} Hồ sơ</h5>
                    </div>
                </div>
                <a class="more" href="{{url('khaitu')}}">
                    Xem chi tiết <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat red-pink">
                <div class="visual">
                    <i class="fa fa-building"></i>
                </div>
                <div class="details">
                    <div class="number"></div>
                    <div class="desc">
                        Tình trạng hôn nhân<br>
                        <h5>{{$count['sltthn']}} Hồ sơ</h5>
                    </div>
                </div>
                <a class="more" href="{{url('tthonnhan')}}">
                    Xem chi tiết <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat yellow-gold">
                <div class="visual">
                    <i class="fa fa-building"></i>
                </div>
                <div class="details">
                    <div class="number"></div>
                    <div class="desc">
                        Thông tin kết hôn<br>
                        <h5>{{$count['slkh']}} Hồ sơ</h5>
                    </div>
                </div>
                <a class="more" href="{{url('kethon')}}">
                    Xem chi tiết <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat blue-chambray">
                <div class="visual">
                    <i class="fa fa-building"></i>
                </div>
                <div class="details">
                    <div class="number"></div>
                    <div class="desc">
                        Đăng ký con nuôi<br>
                        <h5>{{$count['slcn']}} Hồ sơ</h5>
                    </div>
                </div>
                <a class="more" href="{{url('dangkyconnuoi')}}">
                    Xem chi tiết <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat yellow">
                <div class="visual">
                    <i class="fa fa-building"></i>
                </div>
                <div class="details">
                    <div class="number"></div>
                    <div class="desc">
                        Đăng ký giám hộ<br>
                        <h5>{{$count['slgh']}} Hồ sơ</h5>
                    </div>
                </div>
                <a class="more" href="{{url('dangkygiamho')}}">
                    Xem chi tiết <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat purple-plum">
                <div class="visual">
                    <i class="fa fa-building"></i>
                </div>
                <div class="details">
                    <div class="number"></div>
                    <div class="desc">
                        Đăng ký nhận cha mẹ con<br>
                        <h5>{{$count['slcmc']}} Hồ sơ</h5>
                    </div>
                </div>
                <a class="more" href="{{url('dangkynhanchamecon')}}">
                    Xem chi tiết <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat yellow-casablanca">
                <div class="visual">
                    <i class="fa fa-building"></i>
                </div>
                <div class="details">
                    <div class="number"></div>
                    <div class="desc">
                        Cấp trích lục bản sao<br>
                        <h5>{{$count['slbstl']}} Hồ sơ</h5>
                    </div>
                </div>
                <a class="more" href="{{url('capbansaotrichluc')}}">
                    Xem chi tiết <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
@stop