<x-guest-layout>

    <div class="container d-flex justify-content-center align-items-center min-vh-100"
         style="background: linear-gradient(135deg,#e8f5e9,#f1f8e9);">

        <div class="card shadow-lg border-0"
             style="max-width:460px; width:100%; border-radius:24px;">

            <div class="card-body p-4">

                {{-- JUDUL --}}
                <div class="text-center mb-4">
                    <h4 class="fw-bold mb-1" style="color:#4e342e;">
                        Daftar Akun Baru
                    </h4>
                    <p class="mb-0" style="color:#689f38;">
                        Toko Baju Polos Murah
                    </p>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    {{-- NAME --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold" style="color:#5d4037;">
                            Nama Lengkap
                        </label>
                        <input
                            id="name"
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            class="form-control rounded-pill"
                            required
                            autofocus
                            autocomplete="name">

                        <x-input-error :messages="$errors->get('name')" class="text-danger small mt-1" />
                    </div>

                    {{-- EMAIL --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold" style="color:#5d4037;">
                            Email
                        </label>
                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="form-control rounded-pill"
                            required
                            autocomplete="username">

                        <x-input-error :messages="$errors->get('email')" class="text-danger small mt-1" />
                    </div>

                    {{-- PASSWORD --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold" style="color:#5d4037;">
                            Password
                        </label>
                        <input
                            id="password"
                            type="password"
                            name="password"
                            class="form-control rounded-pill"
                            required
                            autocomplete="new-password">

                        <x-input-error :messages="$errors->get('password')" class="text-danger small mt-1" />
                    </div>

                    {{-- CONFIRM PASSWORD --}}
                    <div class="mb-4">
                        <label class="form-label fw-semibold" style="color:#5d4037;">
                            Konfirmasi Password
                        </label>
                        <input
                            id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            class="form-control rounded-pill"
                            required
                            autocomplete="new-password">

                        <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger small mt-1" />
                    </div>

                    {{-- ACTION --}}
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('login') }}"
                           class="small text-decoration-none fw-semibold"
                           style="color:#558b2f;">
                            Sudah punya akun?
                        </a>

                        <button type="submit"
                                class="btn rounded-pill px-4 fw-semibold"
                                style="background:#689f38; color:white;">
                            REGISTER
                        </button>
                    </div>

                </form>
            </div>

            <div class="card-footer text-center small bg-white border-0"
                 style="color:#6d4c41;">
                © {{ date('Y') }} Toko Baju Polos Murah
            </div>
        </div>
    </div>

</x-guest-layout>
