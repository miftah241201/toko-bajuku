<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Toko Baju Polos Murah') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Laravel Mix CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-light">

    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="row w-100 justify-content-center">
            <div class="col-md-6 col-lg-4">

                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">

                        {{-- LOGO / JUDUL --}}
                        <div class="text-center mb-4">
                            <h4 class="fw-bold mb-1">Toko Baju Polos Murah</h4>
                            <p class="text-muted mb-0">Grosir Kaos Polos Berkualitas</p>
                        </div>

                        {{-- CONTENT LOGIN / REGISTER --}}
                        {{ $slot }}

                    </div>
                </div>

                <p class="text-center text-muted mt-3 small">
                    © {{ date('Y') }} Toko Baju Polos Murah
                </p>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Laravel Mix JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
