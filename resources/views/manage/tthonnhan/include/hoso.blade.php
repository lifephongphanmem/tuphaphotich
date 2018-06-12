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
            <div class="col-md-6">
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
                    <label class="col-sm-4 control-label">Cơ quan xác nhận<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('donvixn', null, array('id' => 'donvixn','class' => 'form-control required '))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Số xác nhận<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('soxacnhan', null, array('id' => 'soxacnhan','class' => 'form-control required '))!!}
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày đăng ký<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('ngayxn',isset($model->ngayxn) ? date('d/m/Y',strtotime($model->ngayxn)) : date('d/m/Y',strtotime(date('Y-m-d'))), array('id' => 'ngayxn','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Phân loại đăng ký<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!! Form::select(
                        'phanloai',
                        array(
                        'ĐKKH trong nước' => 'ĐKKH trong nước',
                        'ĐKKH nước ngoài' => 'ĐKKH nước ngoài',
                        'Khác' => 'Khác',
                        ),null,
                        array('id' => 'phanloai', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Người đề nghị<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('nguoidn', null, array('id' => 'nguoidn','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Dân tộc</label>
                    <div class="col-sm-8">
                        {!! Form::select(
                        'dantocnk',
                        $dantocs,null,
                        array('id' => 'dantocnk', 'class' => 'form-control'))
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
                        'quoctichnk',
                        $quoctichs,null,
                        array('id' => 'quoctichnk', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quan hệ<span class="require">*</span></label>
                    <div class="col-sm-8 controls">
                        {!!Form::text('quanhe', null, array('id' => 'quanhe','class' => 'form-control required'))!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nơi cư trú<span class="require">*</span></label>
                    <div class="col-sm-10 controls">
                        {!!Form::text('noicutrunk', null, array('id' => 'noicutrunk','class' => 'form-control required'))!!}
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