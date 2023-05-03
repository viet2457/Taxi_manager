@extends('layout')
@section('admin_content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Thêm nhà sản xuất </h1>
<p class="mb-4"></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Thêm nhà sản xuất </h6>
    </div>
    <div class="container card-body">
        <form action="{{URL('/insert-coupon-code')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="coupon_name">Tên hãng xe</label>
                <input type="text" class="form-control" id="coupon_name" name="coupon_name" placeholder="Tên hãng xe...">
            </div>
            <div class="form-group">
                <label for="coupon_code">Tên xe</label>
                <input type="text" class="form-control" id="coupon_code" name="coupon_code" placeholder="Tên xe...">
            </div>
            <div class="form-group">
                <label for="coupon_time">Số chỗ ngồi </label>
                <input type="text" class="form-control" id="coupon_time" name="coupon_time" placeholder="Số chỗ ngồi....">
            </div>
            <div class="form-group">
                <label for="coupon_time">Năm sản xuất </label>
                <input type="text" class="form-control" id="coupon_time" name="coupon_time" placeholder="Năm sản xuất....">
            </div>
            <button type="submit" name="add_coupon" class="btn btn-primary">Thêm nhà sản xuất</button>
        </form>
    </div>
</div>
<!-- Success Modal-->
@endsection
