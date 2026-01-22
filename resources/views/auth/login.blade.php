<x-guest-layout>

<style>
    body {
        background: linear-gradient(135deg, #e8f5e9, #f1f8e9);
    }

    .nature-card {
        background: #ffffff;
        border-radius: 24px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.12);
        border-top: 8px solid #6d4c41; /* coklat kayu */
    }

    .brand-title {
        color: #4e342e;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .brand-sub {
        color: #689f38;
        font-size: 0.95rem;
    }

    .form-control {
        border-radius: 999px;
        padding: 12px 18px;
        border: 1px solid #c8e6c9;
    }

    .form-control:focus {
        border-color: #81c784;
        box-shadow: 0 0 0 0.15rem rgba(129,199,132,.35);
    }

    .btn-nature {
        border-radius: 999px;
        padding: 12px;
        background: linear-gradient(135deg, #81c784, #4caf50);
        border: none;
        color: #fff;
        font-weight: 600;
    }

    .btn-nature:hover {
        background: linear-gradient(135deg, #66bb6a, #43a047);
    }

    label {
        font-size: 0.85rem;
        color: #5d4037;
    }

    .link-soft {
        color: #558b2f;
        text-decoration: none;
        font-size: 0.85rem;
    }

    .link-soft:hover {
        text-decoration: underline;
    }
</style>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="nature-card p-4" style="max-width:420px; width:100%;">

        {{-- HEADER --}}
        <div class="text-center mb-4">
            <h3 class="brand-title mb-1">Toko Baju Polos Murah</h3>
            <p class="brand-sub mb-0">Grosir Kaos Polos Murah</p>
        </div>

        <x-auth-session-status class="mb-3 text-success" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            {{-- EMAIL --}}
            <div class="mb-3">
                <label>Email</label>
                <input type="email"
                       name="email"
                       value="{{ old('email') }}"
                       class="form-control"
                       required autofocus>
                <x-input-error :messages="$errors->get('email')" class="text-danger small mt-1" />
            </div>

            {{-- PASSWORD --}}
            <div class="mb-3">
                <label>Password</label>
                <input type="password"
                       name="password"
                       class="form-control"
                       required>
                <x-input-error :messages="$errors->get('password')" class="text-danger small mt-1" />
            </div>

            {{-- REMEMBER --}}
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                    <input type="checkbox" name="remember" class="form-check-input">
                    <label class="form-check-label small text-muted">
                        Remember me
                    </label>
                </div>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="link-soft">
                        Lupa password?
                    </a>
                @endif
            </div>

            {{-- BUTTON --}}
            <div class="d-grid">
                <button type="submit" class="btn btn-nature">
                    LOGIN
                </button>
            </div>
        </form>

        <div class="text-center mt-4 small text-muted">
            © {{ date('Y') }} Toko Baju Polos Murah
        </div>

    </div>
</div>

</x-guest-layout>
