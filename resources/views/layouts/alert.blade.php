    {{-- Hiển thị tất cả thông báo lỗi và flash message --}}
    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1100;">
        {{-- Validation errors --}}
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="toast align-items-center text-bg-danger border-0 mb-2" role="alert" aria-live="assertive"
                    aria-atomic="true" data-bs-delay="3000">
                    <div class="d-flex">
                        <div class="toast-body">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            {{ $error }}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                </div>
            @endforeach
        @endif

        {{-- Flash error --}}
        @if (session('error'))
            <div class="toast align-items-center text-bg-danger border-0 mb-2" role="alert" aria-live="assertive"
                aria-atomic="true" data-bs-delay="3000">
                <div class="d-flex">
                    <div class="toast-body">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        {{ session('error') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        @endif

        {{-- Flash success --}}
        @if (session('success'))
            <div class="toast align-items-center text-bg-success border-0 mb-2" role="alert" aria-live="assertive"
                aria-atomic="true" data-bs-delay="3000">
                <div class="d-flex">
                    <div class="toast-body">
                        <i class="bi bi-check-circle-fill me-2"></i>
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        @endif
    </div>
