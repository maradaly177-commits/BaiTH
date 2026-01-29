<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>

    <style>
        body {
            margin: 0;
            min-height: 100vh;

            /* background */
            background-image: url("{{ asset('images/p4.jpg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            /* center */
            display: flex;
            justify-content: center;
            align-items: center;

            font-family: Arial, Helvetica, sans-serif;
        }

        .signin-box {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px 40px;
            width: 350px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin: 6px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            border: none;
            border-radius: 5px;
            background: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<div class="signin-box">
    <h2>Đăng ký</h2>

    <form method="POST" action="{{ route('signin.check') }}">
        @csrf

        <input name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="repass" placeholder="Re-password">
        <input name="mssv" placeholder="MSSV">
        <input name="lopmonhoc" placeholder="Lớp môn học">

        <select name="gioitinh">
            <option value="nam">Nam</option>
            <option value="nu">Nữ</option>
        </select>

        <button type="submit">Sign In</button>
    </form>
</div>

</body>
</html>
