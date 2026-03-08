
{{-- <!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>AdminLTE</title>

    @include('adminlte.partials.head')
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @include('adminlte.partials.navbar')

    @include('adminlte.partials.sidebar')

    <div class="content-wrapper p-3">
        @yield('content')
    </div>

    @include('adminlte.partials.footer')

</div>
</body>
</html>
--}}


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>@yield('title', 'AdminLTE')</title>
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">

  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- AdminLTE -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed"></body>

<div class="wrapper">

  {{-- Navbar --}}
  @include('layouts.partials.navbar')

  {{-- Sidebar --}}
  @include('layouts.partials.sidebar')

  {{-- Content --}}
  <div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">@yield('title')</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </section>

</div>

  {{-- Footer --}}
  @include('layouts.partials.footer')

</div>

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>

<!-- OPTIONAL -->
<script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>

{{--<script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>  --}}
{{-- <script src="{{ asset('adminlte/dist/js/pages/dashboard3.js') }}"></script> --}}


@stack('scripts')
</body>
</html>


