@extends('layout')
@section('admin_content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Thêm giấy phép </h1>
<p class="mb-4"></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Thêm giấy phép </h6>
    </div>
    <div class="container card-body">
        <form action="{{URL('/insert-coupon-code')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="coupon_name">Số giấy phép</label>
                <input type="text" class="form-control" id="coupon_name" name="coupon_name" placeholder="Số giấy phép...">
            </div>
            <div class="form-group">
                <label for="coupon_code">Hãng</label>
                <input type="text" class="form-control" id="coupon_code" name="coupon_code" placeholder="Hãng...">
            </div>
            <div class="form-group">
                <label for="coupon_time">Ngày cấp</label>
                <input type="text" class="form-control" id="coupon_time" name="coupon_time" placeholder="Ngày cấp....">
            </div>

            <div class="form-group">
                <label for="coupon_number">Ngày hết hạn</label>
                <input type="text" class="form-control" id="coupon_number" name="coupon_number" placeholder="Ngày hết hạn....">
            </div>
            <button type="submit" name="add_coupon" class="btn btn-primary">Thêm giấy phép</button>
        </form>
    </div>
</div>
<!-- Success Modal-->
@endsection
