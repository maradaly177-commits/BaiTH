<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TORANO</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container">

            <a class="navbar-brand fw-bold" href="#">BLVGARY</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav gap-4">

    <li class="nav-item">
        <a class="nav-link fw-semibold" href="#">Sản phẩm mới</a>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle fw-semibold" href="#" data-bs-toggle="dropdown">
            Danh mục sale
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Sale 30%</a></li>
            <li><a class="dropdown-item" href="#">Sale 50%</a></li>
        </ul>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle fw-semibold" href="#" data-bs-toggle="dropdown">
            Áo nam
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Áo thun</a></li>
            <li><a class="dropdown-item" href="#">Áo sơ mi</a></li>
            <li><a class="dropdown-item" href="#">Hoodie</a></li>
        </ul>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle fw-semibold" href="#" data-bs-toggle="dropdown">
            Quần nam
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Quần jean</a></li>
            <li><a class="dropdown-item" href="#">Quần tây</a></li>
        </ul>
    </li>

    <li class="nav-item">
        <a class="nav-link fw-semibold" href="#">Phụ kiện</a>
    </li>

</ul>
            </div>

            <div class="d-flex gap-3 fs-5">
                <i class="bi bi-search"></i>
                <i class="bi bi-person"></i>
                <i class="bi bi-bag"></i>
            </div>

        </div>
    </nav>

    <!-- CONTENT -->
    @yield('content')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>