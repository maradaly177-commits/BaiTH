<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Register</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;

            background-image: url("{{ asset('images/p5.jpg') }}");
            background-size: cover;
            background-position: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        .register-box {
            width: 350px;
            padding: 30px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 9px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        input:focus {
            outline: none;
            border-color: #2196F3;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #2196F3;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #1976D2;
        }
    </style>
</head>
<body>

<div class="register-box">
    <h2>Form Register</h2>

    <form method="POST" action="/register">
        @csrf

        <label>Name</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Register</button>
    </form>
</div>

</body>
</html>
