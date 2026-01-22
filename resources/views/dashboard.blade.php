<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold fs-4 mb-0">
            Dashboard
        </h2>
    </x-slot>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">

                        <h4 class="fw-bold mb-3">
                            Toko Baju Polos Murah
                        </h4>

                        <p class="text-muted mb-4">
                            Login sebagai:
                            <span class="badge bg-primary text-uppercase">
                                {{ auth()->user()->role }}
                            </span>
                        </p>

                        {{-- ADMIN AREA --}}
                        @if(auth()->user()->role === 'admin')
                            <div class="row g-3">

                                <div class="col-md-4">
                                    <a href="/categories" class="text-decoration-none">
                                        <div class="card h-100 border-0 shadow-sm">
                                            <div class="card-body text-center">
                                                <h6 class="fw-bold mb-2">Kategori</h6>
                                                <p class="text-muted small mb-0">
                                                    Kelola data kategori produk
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4">
                                    <a href="/products" class="text-decoration-none">
                                        <div class="card h-100 border-0 shadow-sm">
                                            <div class="card-body text-center">
                                                <h6 class="fw-bold mb-2">Produk</h6>
                                                <p class="text-muted small mb-0">
                                                    Kelola produk & stok
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4">
                                    <a href="/reports" class="text-decoration-none">
                                        <div class="card h-100 border-0 shadow-sm">
                                            <div class="card-body text-center">
                                                <h6 class="fw-bold mb-2">Laporan</h6>
                                                <p class="text-muted small mb-0">
                                                    Laporan penjualan harian
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        @endif

                        {{-- USER AREA --}}
                        @if(auth()->user()->role === 'user')
                            <div class="text-center">
                                <a href="/products" class="btn btn-primary btn-lg">
                                    Lihat & Beli Produk
                                </a>
                            </div>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
