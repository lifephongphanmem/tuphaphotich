<div id="tab1" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-6" {{!(session('admin')->level == 'T') ? 'style=display:none;' : '' }} >
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quận huyện<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        <select name="mahuyen" class="form-control required" autofocus>
                            @foreach($huyens as $huyen)
                                <option value="{{$huyen->mahuyen}}" {{ $huyen->mahuyen == $mahuyen ? 'selected' : ''}}>{{$huyen->tenhuyen}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6" >
                <div class="form-group" style="display:none;">
                    <label class="col-sm-4 control-label">Xã phường<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        @if(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Yên Minh')
                            <select name="maxa" class="form-control required">
                                <option value="tpym"></option>
                            </select>
                        @elseif(session('admin')->level == 'H' && session('admin')->name == 'Phòng tư Pháp huyện Đồng Văn')
                            <select name="maxa" class="form-control required">
                                <option value="tpdv"></option>
                            </select>
                        @else
                            <select name="maxa" class="form-control required">
                                @foreach($xas as $xa)
                                    <option value="{{$xa->maxa}}" {{$xa->maxa == $maxa ? 'selected' : ''}}>{{$xa->tenxa}}</option>
                                @endforeach
                            </select>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Họ tên<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('hoten', null, array('id' => 'hoten','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Giới tính<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'gioitinh',
                        array(
                        'Nam' => 'Nam',
                        'Nữ' => 'Nữ',
                        ),null,
                        array('id' => 'gioitinh', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày sinh<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngaysinh',isset($khaitu->ngaysinh) ? date('d/m/Y',strtotime($khaitu->ngaysinh)) : date('d/m/Y',strtotime(date('Y-m-d'))), array('id' => 'ngaysinh','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Dân tộc<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'dantoc',
                        $dantocs,null,
                        array('id' => 'dantoc', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quốc tịch<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'quoctich',
                        $quoctichs,null,
                        array('id' => 'quoctich', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Loại giấy tờ<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'loaigiayto',
                        array(
                        'CMND' => 'CMND',
                        'Hộ chiếu' => 'Hộ chiếu',
                        'Thẻ căn cước công dân'=>'Thẻ căn cước công dân',
                        'Số hộ khẩu'=>'Số hộ khẩu',
                        'Khác'=>'Khác'
                        ),null,
                        array('id' => 'loaigiayto', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Số giấy tờ<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('sogiayto', null, array('id' => 'sogiayto','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nơi sinh<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('noisinh', null, array('id' => 'noisinh','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Thường trú<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('thuongtru', null, array('id' => 'thuongtru','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(function($){
        $('select[name="mahuyen"]').change(function(){

            if($(this).val() != 'all'){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: '/getXas',
                    type: 'GET',
                    data: {
                        _token: CSRF_TOKEN,
                        mahuyen: $(this).val()
                    },
                    dataType: 'JSON',
                    success: function (data) {
                        if(data.status == 'success')
                            $('select[name="maxa"]').replaceWith(data.message);
                        else
                            $('select[name="maxa"]').val();

                    }
                });
            } else {
                $('select[name="maxa"]').val('all');
            }
        });
    });
</script>
<script>
    $(document).ready(function(){
        $(":input").inputmask();
    });
</script>