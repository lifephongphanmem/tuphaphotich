
<script>
    function ClickBC1(url){
        $('#frm_SoKs').attr('action',url);
        $('#frm_SoKs').submit();
    }
</script>

<!--Modal Thoại BC1-->
<div id="SoKs-thoai-confirm" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        {!! Form::open(['url'=>'/reports/sokhaisinh','target'=>'_blank' , 'id' => 'frm_SoKs', 'class'=>'form-horizontal form-validate']) !!}
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" data-dismiss="modal" aria-hidden="true"
                        class="close">&times;</button>
                <h4 id="modal-header-primary-label" class="modal-title">Sổ khai sinh</h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-3 control-label"><b>Từ ngày</b></label>
                        <div class="col-md-8">
                            {!!Form::text('ngaytu',$som, array('id' => 'ngaytu','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><b>Đến ngày</b></label>
                        <div class="col-md-8">
                            {!!Form::text('ngayden',$eom, array('id' => 'ngayden','data-inputmask'=>"'alias': 'date'",'class' => 'form-control required'))!!}
                        </div>
                    </div>
                    <div class="form-group" {{!(session('admin')->level == 'T') ? 'style=display:none;' : '' }}>
                        <label class="col-sm-3 control-label"><b>Quận huyện</b></label>
                        <div class="col-sm-8">
                            <select name="mahuyen" class="form-control required" autofocus>
                                @foreach($huyens as $huyen)
                                    <option value="{{$huyen->mahuyen}}" {{ $huyen->mahuyen == $mahuyen ? 'selected' : ''}}>{{$huyen->tenhuyen}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group" {{!(session('admin')->level == 'T' || session('admin')->level == 'H') ? 'style=display:none;' : '' }}>
                        <label class="col-sm-3 control-label"><b>Xã phường</b></label>
                        <div class="col-sm-8 controls">
                            <select name="maxa" class="form-control required">
                                @foreach($xas as $xa)
                                    <option value="{{$xa->maxa}}" {{$xa->maxa == $maxa ? 'selected' : ''}}>{{$xa->tenxa}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</button>
                <button type="submit" data-dismiss="modal" class="btn btn-success" onclick="ClickBC1('/reports/sokhaisinh')">Đồng ý</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    </form>
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
