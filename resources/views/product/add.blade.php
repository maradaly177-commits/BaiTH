<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>

    <style>
        body {
            margin: 0;
            min-height: 100vh;
            background-image: url("{{ asset('images/p2.jpg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: Arial, Helvetica, sans-serif;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-box {
            width: 420px;
            background: #b5d4f4;
            padding: 30px;
            border-radius: 14px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.35);
        }

        .form-box h1 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 26px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 15px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #4f46e5;
            box-shadow: 0 0 0 2px rgba(79,70,229,0.2);
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: #4f46e5;
            color: rgb(178, 179, 234);
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background: #4338ca;
        }
    </style>
</head>
<body>

<div class="form-box">
    <h1>Form thêm sản phẩm</h1>

    <form method="POST" action="">
        @csrf

        <div class="form-group">
            <label>Tên sản phẩm</label>
            <input type="text" name="name" placeholder="Nhập tên sản phẩm">
        </div>

        <div class="form-group">
            <label>Giá</label>
            <input type="number" name="price" placeholder="Nhập giá">
        </div>

        <button type="submit">Thêm sản phẩm</button>
    </form>
</div>

</body>
</html>
