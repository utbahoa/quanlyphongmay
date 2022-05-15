@extends('admin.home')
@section('page_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-center">Thêm phòng</h6>
    </div>
    <div class="card-body">
        <form action="{{route('admin.phong.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <?php
                $message =  session()->get('message');
                if ($message) {
                    echo '<p class="alert alert-danger mt-2" id="alert-box">' . $message . '</p>';
                    session()->put('message', null);
                }
                ?>
            </div>
            <div class="form-group">
                <label for="phong_ten">Tên phòng</label>
                <input type="text" class="form-control" name="phong_ten" placeholder="Nhập tên phòng ...">
                <span style="color: red;">
                    @error('phong_ten')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="phong_soluong">Số lượng</label>
                <input type="text" class="form-control" name="phong_soluong" placeholder="Nhập số lượng máy ...">
                <span style="color: red;">
                    @error('phong_soluong')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <hr class="mt-2">
            <input type="submit" class="btn btn-info mr-2 mt-2" value="Thêm">
            <a href="{{route('admin.phong.index')}}" class="btn btn-danger mt-2">Quay lại</a>
        </form>
    </div>
</div>
@endsection