<aside class="sidebar">
    <div class="logo">
        <a class="navbar-brand fw-bold text-white" href="#">
            <img style="height: 80px; width: auto;"
                src="https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBMllzREE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--3b8e84b95180edad55bd748a7f8d9d9e79921f87/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RkhKbGMybDZaVjkwYjE5c2FXMXBkRnNIYVFJc0FXa0NMQUU9IiwiZXhwIjpudWxsLCJwdXIiOiJ2YXJpYXRpb24ifX0=--15c3f2f3e11927673ae52b71712c1f66a7a1b7bd/vinicorp-logo.png"
                alt="" class="image">
        </a>
    </div>
    <nav class="menu">
        <p class="section">APPS</p>
        <a href="/home"><i class="bi bi-house"></i> Home</a>
        <a href="/dashboard"><i class="bi bi-people"></i> Quản lý nhân sự</a>
        @if (auth()->user()->role === 'admin')
            <div class="submenu-wrapper">
                <a href="/all-devices" class="submenu-toggle">
                    <i class="bi bi-printer"></i> Quản lý thiết bị
                </a>
                <ul class="submenu">
                    <li><a href="/tb"><i class="bi bi-tablet-fill"></i> Quản lý thiết bị văn phòng</a>
                    </li>
                    <li><a href="/pc"><i class="bi bi-pc"></i> Quản lý PC, Laptop</a></li>
                    <li><a href="/mh"><i class="bi bi-laptop-fill"></i> Quản lý Màn hình</a></li>
                    <li><a href="/kb"><i class="bi bi-keyboard-fill"></i> Quản lý bàn phím</a></li>
                    <li><a href="/mouse"><i class="bi bi-mouse2-fill"></i> Quản lý chuột</a></li>
                </ul>
            </div>
            <a href="rule-devices"><i class="bi bi-bricks"></i> Quản lý Rule Firewall</a>
            <div class="submenu-wrapper">
                <a href="/allserver" class="submenu-toggle">
                    <i class="bi bi-database"></i> Quản lý Server
                </a>
                <ul class="submenu">
                    <li><a href="/servervirtual"><i class="bi bi-database-fill-check"></i> Server ảo hóa</a>
                    </li>
                </ul>
            </div>
            <a href="/requestall"><i class="bi bi-bricks"></i> Quản lý yêu cầu</a>
            <a href="/hosting"><i class="bi bi-browser-edge"></i>Quản lý list domain hosting</a>
        @else
            <a href="/requestuser"><i class="bi bi-printer"></i>Yêu cầu</a>
        @endif
        <a href="#"><i class="bi bi-speedometer2"></i> Dashboard & Thống kê</a>
        <a href="#"><i class="bi bi-envelope"></i> hi</a>
    </nav>
</aside>
