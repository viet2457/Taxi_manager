@extends('layout')
@section('admin_content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách giấy phép </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{('server/img/logo-taxi.png')}}">
    <link href="{{asset('server/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{asset('server/css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"> Taxi  </h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách xe taxi </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <p style="color: red; font-size: 14px;">
                    <?php
                use Illuminate\Support\Facades\Session;
                $message = Session::get('message');
                if ($message) {
                    echo $message;
                    Session::put('message', null);
                }
                ?>
                </p>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>ID </th>
                            <th>Tên xe </th>
                            <th>Biển số  </th>
                            <th>ID nhà sản xuất  </th>


                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>

@endsection
