<header class="header">

    <div class="header-right">
        <i class="bi bi-sun"></i>
        <i class="bi bi-bell"></i>

        <!-- Avatar + Dropdown -->
        <div class="profile-menu">
            @if (auth()->user()->avatar)
                <img src="{{ asset('storage/' . auth()->user()->avatar) }}?v={{ time() }}"
                    class="ame-3 rounded-avatar" id="currentAvatar">
            @else
                <div
                    class="rounded-avatar bg-secondary text-white d-flex align-items-center justify-content-center me-3 fs-1">
                    {{ strtoupper(substr(auth()->user()->fullname, 0, 1)) }}
                </div>
            @endif

            <div class="dropdown" id="profileDropdown">
                <div class="profile-header">
                    @if (auth()->user()->avatar)
                        <img src="{{ asset('storage/' . auth()->user()->avatar) }}?v={{ time() }}"
                            class="ame-3 rounded-avatar" id="currentAvatar">
                    @else
                        <div
                            class="rounded-avatar bg-secondary text-white d-flex align-items-center justify-content-center me-3 fs-1">
                            {{ strtoupper(substr(auth()->user()->fullname, 0, 1)) }}
                        </div>
                    @endif
                    <h4><strong>{{ auth()->user()->fullname }}</strong>
                        <small class="text-muted">
                            @if (auth()->user()->role === 'admin')
                                <span class="badge bg-danger ms-2">Admin 🔑</span>
                            @else
                                <span class="badge bg-success ms-2">User 🛡️</span>
                            @endif
                        </small>
                    </h4>
                </div>
                <ul>
                    <li><button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#avatarModal">
                            <i class="bi bi-camera"></i> Đổi ảnh
                        </button></li>
                    <li><a href="{{ url('/change-password') }}" class="btn btn-sm">
                            <i class="bi bi-lock"></i>Đổi mật khẩu
                        </a></li>
                </ul>
                <div class="signout">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-outline-danger btn-sm">
                            <i class="bi bi-box-arrow-right"></i> Đăng xuất
                        </button>
                    </form>
                    <p class="policy">Privacy policy • Terms • Cookies</p>
                </div>
            </div>
        </div>
    </div>
</header>
