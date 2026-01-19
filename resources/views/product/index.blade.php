<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 60%;
            margin-top: 20px;
        }

        th {
            background-color: #19c8e7;
            color: rgb(16, 1, 1);
            padding: 10px;
        }

        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #dff9fb;
        }

        button {
            background-color: #c35fb4;
            color: white;
            border: none;
            padding: 10px 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #219150;
        }
    </style>
</head>
<body>

<h1>Danh sách sản phẩm</h1>

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
        <td>
        <a href="{{ route('product.detail', 1) }}">Xem</a>
    </td>
    </tr>
    <tr>
        <td>2</td>
        <td>Samsung Galaxy S24 Ultra</td>
        <td>32.990.000</td>
        <td>
        <a href="{{ route('product.detail', 2) }}">Xem</a>
    </td>
    </tr>
    <tr>
        <td>3</td>
        <td>Laptop Dell Inspiron 15</td>
        <td>18.500.000</td>
        <td>
        <a href="{{ route('product.detail', 3) }}">Xem</a>
    </td>
    </tr>
</table>

<br>

<a href="{{ route('product.add') }}">
    <button> Thêm sản phẩm</button>
</a>

</body>
</html>
