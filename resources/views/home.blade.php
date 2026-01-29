<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
<style>
    body {
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Arial, Helvetica, sans-serif;

        /* BACKGROUND IMAGE */
        background-image: url("{{ asset('images/huce.jpg') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

   .container {
    background: rgba(229, 236, 239, 0.45); /* xanh ngọc nhạt */
    backdrop-filter: blur(12px);
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.2);
}

    h1 {
        margin-bottom: 25px;
        color: #1f2937;
    }

    a {
        display: inline-block;
        padding: 12px 30px;
        background: #2563eb;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        font-weight: bold;
        transition: 0.3s;
    }

    a:hover {
        background: #1d4ed8;
        transform: translateY(-2px);
    }
</style>

    
</head>
<body>

    <div class="container">
        <h1> Trang Home</h1>
        <a href="{{ route('product.index') }}">Danh sách sản phẩm</a>
    </div>

</body>
</html>
