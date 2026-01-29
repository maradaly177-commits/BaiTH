<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chi tiết sản phẩm</title>

    <style>
        body {
            margin: 0;
            min-height: 100vh;

            /* background */
            background-image: url("{{ asset('images/flemin.jpg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            /* căn giữa */
            display: flex;
            justify-content: center;
            align-items: center;

            font-family: Arial, Helvetica, sans-serif;
        }

        .detail-box {
            background: rgba(255, 255, 255, 0.85);
            padding: 30px 50px;
            border-radius: 10px;
            text-align: center;
        }

        button {
            padding: 8px 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="detail-box">
    <h1>Chi tiết sản phẩm</h1>

    <p><b>ID sản phẩm:</b> {{ $id }}</p>

    <a href="{{ route('product.index') }}">
        <button>Quay lại danh sách</button>
    </a>
</div>

</body>
</html>
