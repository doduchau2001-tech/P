<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Quản lý nhân sự</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/welcome.css'])
    <script src="https://kit.fontawesome.com/978e0076d7.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
    <div class="container text-center py-5">
        <h1 class="mb-4 text-dark">Hệ thống Quản lý Nhân sự</h1>
        <div class="d-flex justify-content-center gap-3">
            <a href="" class="btn btn-outline-primary btn-lg px-4">Đăng nhập</a>
            <a href="{{ route('register') }}" class="btn btn-outline-success btn-lg px-4">Đăng ký</a>
        </div>
        <div class="footer">
            @include('layouts.footer')
        </div>
    </div>
</body>

</html>
