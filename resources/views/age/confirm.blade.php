<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Xác nhận tuổi</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;

            background-image: url("{{ asset('images/p3.jpg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            font-family: 'Segoe UI', Arial, sans-serif;
        }

        /* overlay làm tối background */
        body::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
        }

        .card {
            position: relative;
            background: rgba(255, 255, 255, 0.95);
            padding: 35px 30px;
            width: 360px;
            border-radius: 18px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(0,0,0,0.25);
            animation: fadeIn 0.6s ease;
        }

        h2 {
            margin-bottom: 15px;
            color: #0f172a;
        }

        p {
            font-size: 18px;
            margin-bottom: 25px;
            color: #334155;
        }

        p b {
            font-size: 26px;
            color: #16a34a;
        }

        button {
            width: 100%;
            padding: 14px;
            font-size: 16px;
            font-weight: 600;
            background: linear-gradient(135deg, #22c55e, #16a34a);
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(34,197,94,.4);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

<div class="card">
    <h2>✅ Xác nhận tuổi</h2>

    <p>Tuổi của bạn là <b>{{ $age }}</b></p>

    <form action="{{ route('age.save') }}" method="POST">
        @csrf
        <input type="hidden" name="age" value="{{ $age }}">

        <button type="submit">Lưu & tiếp tục</button>
    </form>
</div>

</body>
</html>
