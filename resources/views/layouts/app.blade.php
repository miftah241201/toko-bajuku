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

        {{-- TEMA ALAM --}}
        <style>
            body {
                background: linear-gradient(135deg, #e8f5e9, #f1f8e9);
                font-family: 'Figtree', sans-serif;
            }

            /* HEADER */
            header.bg-white {
                background-color: #ffffff !important;
                border-bottom: 6px solid #6d4c41;
            }

            /* CARD */
            .card, .bg-white {
                border-radius: 20px;
                box-shadow: 0 18px 35px rgba(0,0,0,0.12);
            }

            /* JUDUL */
            h1, h2, h3, h4, h5 {
                color: #4e342e;
                font-weight: 700;
            }

            /* LINK */
            a {
                color: #558b2f;
                text-decoration: none;
            }
            a:hover {
                color: #33691e;
            }

            /* BUTTON */
            .btn-primary {
                background-color: #81c784;
                border-color: #81c784;
                color: #1b5e20;
                font-weight: 600;
            }
            .btn-primary:hover {
                background-color: #66bb6a;
                border-color: #66bb6a;
            }

            .btn-success {
                background-color: #689f38;
                border-color: #689f38;
                font-weight: 600;
            }

            .btn-danger {
                background-color: #a1887f;
                border-color: #a1887f;
            }
            .btn-danger:hover {
                background-color: #8d6e63;
            }

            /* BADGE */
            .badge {
                background-color: #689f38 !important;
            }

            /* TABLE */
            table {
                border-radius: 14px;
                overflow: hidden;
            }

            thead {
                background-color: #dcedc8;
            }

            /* INPUT */
            .form-control, .form-select {
                border-radius: 999px;
                border-color: #c8e6c9;
            }

            .form-control:focus, .form-select:focus {
                border-color: #81c784;
                box-shadow: 0 0 0 0.15rem rgba(129,199,132,.35);
            }
        </style>
    </head>

    <body>

        {{-- NAVBAR (BAWAAN BREEZE, JANGAN DIHAPUS) --}}
        @include('layouts.navigation')

        {{-- PAGE HEADER --}}
        @if (isset($header))
            <header class="shadow-sm mb-4">
                <div class="container py-3">
                    {{ $header }}
                </div>
            </header>
        @endif

        {{-- PAGE CONTENT --}}
        <main class="container mb-5">
            {{ $slot }}
        </main>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Laravel Mix JS -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
