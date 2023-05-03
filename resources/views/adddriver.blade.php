@extends('layout')
@section('admin_content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Thêm tài xế </h1>
<p class="mb-4"></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Thêm tài xế </h6>
    </div>
    <div class="container card-body">
        <form action="{{URL('/insert-coupon-code')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="coupon_name">Tên tài xế</label>
                <input type="text" class="form-control" id="coupon_name" name="coupon_name" placeholder="Tên tài xế...">
            </div>
            <div class="form-group">
                <label for="coupon_code">Ngày sinh</label>
                <input type="text" class="form-control" id="coupon_code" name="coupon_code" placeholder="Ngày sinh...">
            </div>
            <div class="form-group">
                <label for="coupon_time">CMND</label>
                <input type="text" class="form-control" id="coupon_time" name="coupon_time" placeholder="CMND">
            </div>

            <div class="form-group">
                <label for="coupon_number">Địa chỉ</label>
                <input type="text" class="form-control" id="coupon_number" name="coupon_number" placeholder="Địa chỉ">
            </div>
            <div class="form-group">
                <label for="coupon_number">Điện thoại</label>
                <input type="text" class="form-control" id="coupon_number" name="coupon_number" placeholder="Điện thoại">
            </div>
            <div class="form-group">
                <label for="coupon_number">Ngày tham gia</label>
                <input type="text" class="form-control" id="coupon_number" name="coupon_number" placeholder="Ngày tham gia">
            </div>
            <div class="form-group">
                <label for="coupon_number">Hãng bằng lái </label>
                <input type="text" class="form-control" id="coupon_number" name="coupon_number" placeholder="Hãng bằng lái">
            </div>
            <div class="form-group">
                <label for="coupon_number"> Mã bằng lái </label>
                <input type="text" class="form-control" id="coupon_number" name="coupon_number" placeholder="Mã bằng lái">
            </div>
            <button type="submit" name="add_coupon" class="btn btn-primary">Thêm tài xế</button>
        </form>
    </div>
</div>
<!-- Success Modal-->
@endsection
