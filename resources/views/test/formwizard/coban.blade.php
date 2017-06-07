<?php
/**
 * Created by PhpStorm.
 * User: HuongVu
 * Date: 07/06/2017
 * Time: 6:03 PM
 */
        ?>
<div id="tab1" class="tab-pane active" >
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Mã số cán bộ </label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('macanbo', null, array('id' => 'macanbo','class' => 'form-control','readonly'=>'true'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Phòng ban <span class="require">*</span></label>

                    <div class="col-sm-8 controls">
                        <select name="mapb" id="mapb" class="form-control select2me" autofocus="autofocus" required="required">

                                <option value="">Vịt</option>

                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Chức vụ <span class="require">*</span> </label>

                    <div class="col-sm-8">
                        <select name="macvcq" id="macvcq" class="form-control select2me" required="required">

                                <option value="">Gà</option>

                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Họ tên <span class="require">*</span></label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('tencanbo', null, array('id' => 'tencanbo','class' => 'form-control', 'required'=>'required'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Tên gọi khác </label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('tenkhac', null, array('id' => 'tenkhac','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Mã công chức </label>

                    <div class="col-sm-8 controls">
                        {!!Form::text('macongchuc', null, array('id' => 'macongchuc','class' => 'form-control'))!!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Ngày sinh <span class="require">*</span></label>

                    <div class="col-sm-8 controls">
                        <input type="date" name="ngaysinh" id="ngaysinh" class="form-control" required="required" value="{{!isset($model)?'':$model->ngaysinh}}"/>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Giới tính</label>

                    <div class="col-sm-8">
                        {!! Form::select(
                        'gioitinh',
                        array(
                        'Nam' => 'Nam',
                        'Nữ' => 'Nữ'
                        ),null,
                        array('id' => 'gioitinh', 'class' => 'form-control'))
                        !!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Dân tộc <span class="require">*</span></label>

                    <div class="col-sm-8 controls">

                        {!! Form::select(
                        'gioitinh',
                        array(
                        'Nam' => 'Nam',
                        'Nữ' => 'Nữ'
                        ),null,
                        array('id' => 'gioitinh', 'class' => 'form-control'))
                        !!}

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<script>
    $(function(){
        $('#create_hscb :submit').click(function(){
            var str = '',strb1='',strb2='';
            var ok = true;

            if($('#mapb').val()==''){
                strb1 += ' - Phòng ban \n';
                $('#mapb').parent().addClass('state-error');
                ok = false;
            }

            if($('#macvcq').val()==''){
                strb1 += '  - Chức vụ \n';
                $('#macvcq').parent().addClass('state-error');
                ok = false;
            }

            if(!$('#tencanbo').val()){
                strb1 += '  - Họ tên \n';
                $('#tencanbo').parent().addClass('state-error');
                ok = false;
            }

            if(!$('#ngaysinh').val()){
                strb1 += '  - Ngày sinh \n';
                $('#ngaysinh').parent().addClass('state-error');
                ok = false;
            }

            //Bước 2
            if(!$('#ngaybc').val()){
                strb2 += ' - Ngày biên chế, hợp đồng \n';
                $('#ngaybc').parent().addClass('state-error');
                ok = false;
            }



            //Kết quả
            if ( ok == false){
                if(strb1!='')
                    str+='Bước 1: \n '+strb1 ;
                if(strb2!='')
                    str+='Bước 2: \n '+strb2 ;

                alert('Các trường: \n' + str + 'Không được để trống');
                $("form").submit(function (e) {
                    e.preventDefault();
                });
            }
            else{
                $("form").unbind('submit').submit();
            }
        });
    });
</script>