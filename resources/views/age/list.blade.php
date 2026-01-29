<!DOCTYPE html>
<html>
<head>
    <title>Danh sách tuổi</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #fefce8;
            font-family: Arial;
        }
        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            width: 400px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,.1);
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background: #e5e7eb;
            margin: 8px 0;
            padding: 10px;
            border-radius: 6px;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #2563eb;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Danh sách tuổi đã lưu</h2>

    @if(count($ages) == 0)
        <p>Chưa có tuổi nào</p>
    @else
        <ul>
            @foreach($ages as $age)
                <li>{{ $age }} tuổi</li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('age.list') }}"> Nhập thêm tuổi</a>
</div>

</body>
</html>
