<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Nhập tuổi</title>

   <style>
body {
    margin: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;

    background-image: url("{{ asset('images/p6.jpg') }}");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    font-family: Arial, Helvetica, sans-serif;
}

/* CARD FORM */
.card {
    width: 320px;
    padding: 25px 30px;
    border-radius: 16px;

    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);

    box-shadow: 0 8px 32px rgba(0,0,0,0.25);
    text-align: center;
}

/* TITLE */
.card h2 {
    margin-bottom: 20px;
    color: #fff;
}

/* ERROR */
.card ul {
    list-style: none;
    padding: 0;
    margin-bottom: 15px;
    color: #ffdddd;
    font-size: 14px;
}

/* LABEL */
.card label {
    display: block;
    text-align: left;
    color: #fff;
    margin-bottom: 6px;
    font-size: 14px;
}

/* INPUT */
.card input {
    width: 100%;
    padding: 10px;
    border-radius: 8px;
    border: none;
    outline: none;
    margin-bottom: 18px;
    font-size: 15px;
}

/* BUTTON */
.card button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 8px;

    background: #ff9800;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;

    transition: 0.3s;
}

.card button:hover {
    background: #e68900;
    transform: translateY(-2px);
}
</style>


</head>
<body>

<div class="card">
    <h2>Nhập tuổi của bạn</h2>

    {{-- Hiển thị lỗi validate --}}
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('age.confirm') }}" method="POST">
        @csrf

        <label>Tuổi</label>
        <input type="number" name="age" min="1" required>

        <button type="submit">Xác nhận</button>
    </form>
</div>

</body>
</html>
