@extends('layout')
@section('admin_content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Thêm bảo hiểm </h1>
<p class="mb-4"></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Thêm bảo hiểm </h6>
    </div>
    <div class="container card-body">
        <form action="{{URL('/insert-coupon-code')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="coupon_name">Mã xe taxi</label>
                <input type="text" class="form-control" id="coupon_name" name="coupon_name" placeholder="Mã xe taxi...">
            </div>
            <div class="form-group">
                <label for="coupon_code">Tên công ty</label>
                <input type="text" class="form-control" id="coupon_code" name="coupon_code" placeholder="Tên công ty...">
            </div>
            <div class="form-group">
                <label for="coupon_time">Số hợp đồng</label>
                <input type="text" class="form-control" id="coupon_time" name="coupon_time" placeholder="Số hợp đồng....">
            </div>

            <div class="form-group">
                <label for="coupon_number">Ngày bắt đầu</label>
                <input type="text" class="form-control" id="coupon_number" name="coupon_number" placeholder="Ngày kết thúc....">
            </div>
            <div class="form-group">
                <label for="coupon_number">Ngày kết thúc</label>
                <input type="text" class="form-control" id="coupon_number" name="coupon_number" placeholder="Ngày kết thúc.....">
            </div>
            <div class="form-group">
                <label for="coupon_number">Giá trị</label>
                <input type="text" class="form-control" id="coupon_number" name="coupon_number" placeholder="Giá trị.....">
            </div>

            <button type="submit" name="add_coupon" class="btn btn-primary">Thêm bảo hiểm</button>
        </form>
    </div>
</div>
<!-- Success Modal-->
@endsection
