<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
    {!! Form::label('username', 'Username', ['class' => 'control-label']) !!}
    {!! Form::text('username', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
    {!! Form::password('password', ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('roles') ? 'has-error' : ''}}">
    {!! Form::label('roles', 'Roles', ['class' => 'control-label']) !!}
    {!! Form::select('roles',Spatie\Permission\Models\Role::get()->pluck('name','name') ,isset($user)?$user->getRoleNames():null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('roles', '<p class="help-block">:message</p>') !!}
</div>
{{-- {{ $data }} --}}
<div class="container">
    <div class="card border-navbar-custom mb-3" style="max-width: 90rem;">
        <div class="card-header navbar-custom text-white">เพิ่มข้อมูล</div>
        <div class="card-body">
            <form method="post" action="{{ route('data.update') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleFormControlInput1">ชื่อ</label>
                    <input type="text" name="name" class="form-control" id="schoolname" placeholder="{{ $data->Name }}" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">ที่อยู่</label>
                    <input type="text" name="address" class="form-control" id="address" value="" required>
                </div>


                <div class="form-group">
                    <label for="exampleFormControlSelect1">จังหวัด</label>
                    <input class="form-control" type="text" placeholder="{{ $data->Province }}" readonly>
                    {{-- <select class="form-control" name="province" id="exampleFormControlSelect1">
                    </select> --}}

                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">ระดับ</label>
                    <select class="form-control" name="status" id="exampleFormControlSelect1">
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">วันที่เข้าร่วมโครงการ</label>
                    <input id="datepicker" name="register_date" width="300" value="" />
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">วันที่ได้รับรางวัล</label>
                    <input id="datepicker2" name="award_date" width="300" value="" />
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">รูปภาพ </label>
                    <input type="file" name="picture[]" class="form-control-file" id="exampleFormControlFile1" multiple>
                    <hr width="250" align="left">
                    <p style="color: red;">** เลือกได้ทั้งหมด 10 ภาพพร้อมๆกัน **</p>

                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">URL วีดีโอ</label>
                    <input type="text" name="vdo" class="form-control" id="vod" value="" required>
                </div>
                <hr>
                <button type="submit" class="btn navbar-custom text-white"><i class="fas fa-share-square"></i> บันทึกข้อมูล </button>
                <button type="reset" class="btn btn-warning"><i class="fas fa-trash-restore-alt"></i> รีเซต </button>

                <a href="{{ asset('/map') }}"><button type="button" class="btn btn-danger float-right"><i class="fas fa-share-square"></i>  ยกเลิก</button></a>
            </form>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });

    $('#datepicker2').datepicker({
        uiLibrary: 'bootstrap4'
    });

    $('.close').click(function() {
        $('.alert').hide();
    })
</script>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
