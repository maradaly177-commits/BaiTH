{{-- 
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>

    <style>
        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            background: url("/images/tet.jpg") no-repeat center center fixed;
            background-size: cover;
        }

        h1 {
            margin: 40px 0 20px 80px;
            font-size: 34px;
            color: #7c2d12;
            text-shadow: 0 2px 6px rgba(255,255,255,0.7);
        }

        table {
            width: 65%;
            margin-left: 80px;
            border-collapse: collapse;
            background: #fffaf0;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }

        th {
            background: linear-gradient(135deg, #b91c1c, #ef4444);
            color: #fff7ed;
            padding: 14px;
            font-size: 16px;
            letter-spacing: 0.5px;
        }

        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #fde68a;
            color: #3f3f46;
            font-weight: 500;
        }

        tr:nth-child(odd) {
            background-color: #fff7ed;
        }

        tr:nth-child(even) {
            background-color: #fffbeb;
        }

        tr:hover {
            background-color: #fde68a;
        }

        a {
            color: #b91c1c;
            font-weight: bold;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .btn-add {
            margin: 30px 0 0 80px;
            background: linear-gradient(135deg, #ec4899, #db2777);
            color: white;
            border: none;
            padding: 12px 22px;
            font-size: 15px;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }

        .btn-add:hover {
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

<h1>Product List</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Giá (VNĐ)</th>
        <th>Chi tiết</th>
    </tr>

    <tr>
        <td>1</td>
        <td>iPhone 15 Pro Max</td>
        <td>34.990.000</td>
        <td><a href="{{ route('product.detail', 1) }}">Xem</a></td>
    </tr>

    <tr>
        <td>2</td>
        <td>Samsung Galaxy S24 Ultra</td>
        <td>32.990.000</td>
        <td><a href="{{ route('product.detail', 2) }}">Xem</a></td>
    </tr>

    <tr>
        <td>3</td>
        <td>Laptop Dell Inspiron 15</td>
        <td>18.500.000</td>
        <td><a href="{{ route('product.detail', 3) }}">Xem</a></td>
    </tr>
</table>

<a href="{{ route('product.add') }}">
    <button class="btn-add">Thêm sản phẩm</button>
</a>

</body>
</html>
--}}


@extends('layouts.admin') 

@section('content')
<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Product List</h3>
            <a href="#" class="btn btn-primary float-right">+ Add Product</a>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ number_format($product->price, 0, ',', '.') }}</td>
                            <td>{{ $product->stock }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
