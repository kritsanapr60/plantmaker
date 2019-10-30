@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-navbar-custom mb-3" style="max-width: 90rem;">
        <div class="card-header navbar-custom text-white">เพิ่มข้อมูล</div>
        <div class="card-body">
            <form method="post" action="{{ route('data.update') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleFormControlInput1">ชื่อ</label>
                    <input type="text" name="name" class="form-control" id="schoolname" value="" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">ที่อยู่</label>
                    <input type="text" name="address" class="form-control" id="address" value="" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">จังหวัด</label>

                    <select class="form-control" name="province" id="exampleFormControlSelect1">
                    </select>

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
                    <label for="exampleFormControlFile1">รูปภาพ</label>
                    <input type="file" name="picture[]" class="form-control-file" id="exampleFormControlFile1" multiple><br>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">URL วีดีโอ</label>
                    <input type="text" name="vdo" class="form-control" id="vod" value="" required>
                </div>
                <hr>
                <button type="submit" class="btn navbar-custom text-white">บันทึกข้อมูล</button>

                <a href="/"><button type="button" class="btn btn-danger float-right">ยกเลิก</button></a>
            </form>
        </div>
    </div>
</div>
<p>{{ $data }}</p>
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
@endsection
