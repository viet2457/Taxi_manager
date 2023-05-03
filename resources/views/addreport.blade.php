@extends('layout')
@section('admin_content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Thêm báo cáo </h1>
<p class="mb-4"></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Thêm báo cáo </h6>
    </div>
    <div class="container card-body">
        <form action="{{URL('/insert-coupon-code')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="coupon_name">Mã tài xế</label>
                <input type="text" class="form-control" id="coupon_name" name="coupon_name" placeholder="Mã tài xế...">
            </div>
            <div class="form-group">
                <label for="coupon_code">Mã xe taxi</label>
                <input type="text" class="form-control" id="coupon_code" name="coupon_code" placeholder="Mã xe taxi...">
            </div>
            <div class="form-group">
                <label for="coupon_time">Mã video </label>
                <input type="text" class="form-control" id="coupon_time" name="coupon_time" placeholder="Mã video....">
            </div>

            <div class="form-group">
                <label for="coupon_number">Thời gian bắt đầu</label>
                <input type="text" class="form-control" id="coupon_number" name="coupon_number" placeholder="Thời gian bắt đầu....">
            </div>
            <div class="form-group">
                <label for="coupon_number">Thời gian kết thúc</label>
                <input type="text" class="form-control" id="coupon_number" name="coupon_number" placeholder="Thời gian kết thúc....">
            </div>
            <div class="form-group">
                <label for="coupon_number">Số phút chiếu</label>
                <input type="text" class="form-control" id="coupon_number" name="coupon_number" placeholder="Số phút chiếu....">
            </div>
            <button type="submit" name="add_coupon" class="btn btn-primary">Thêm báo cáo</button>
        </form>
    </div>
</div>
<!-- Success Modal-->
@endsection
