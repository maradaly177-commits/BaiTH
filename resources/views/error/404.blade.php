<!DOCTYPE html>
<html>
<head>
    <title>404</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #000;
            font-family: Arial, sans-serif;
            color: white;
        }

        h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: #d7d4d4;
        }

        a {
            text-decoration: none;
            color: #00c3ff;
            font-size: 18px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h1>404 - Không tìm thấy trang</h1>
<a href="{{ route('home') }}">Về trang chủ</a>



</body>
</html>
