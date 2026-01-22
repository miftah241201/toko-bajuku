<x-app-layout>

<div class="container my-5">

    <h3 class="fw-bold mb-4">Daftar Produk - Toko Baju Polos</h3>

    {{-- ADMIN AREA --}}
    @if(auth()->user()->role === 'admin')
        <div class="card mb-4 shadow-sm border-0">
            <div class="card-body">

                <h5 class="fw-bold mb-3">Tambah Produk</h5>

                <form method="POST" action="/products" class="row g-3">
                    @csrf

                    <div class="col-md-4">
                        <input type="text" name="name" class="form-control" placeholder="Nama produk" required>
                    </div>

                    <div class="col-md-3">
                        <input type="number" name="price" class="form-control" placeholder="Harga / kodi" required>
                    </div>

                    <div class="col-md-3">
                        <input type="number" name="stock" class="form-control" placeholder="Stok (kodi)" required>
                    </div>

                    <div class="col-md-2">
                        <select name="category_id" class="form-select" required>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- INPUT GAMBAR --}}
                    <div class="col-md-12">
                        <input type="text"
                               name="image"
                               class="form-control"
                               placeholder="URL gambar produk (opsional)">
                    </div>

                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-success">
                            Tambah Produk
                        </button>
                    </div>
                </form>

            </div>
        </div>
    @endif

    {{-- LIST PRODUK --}}
    <div class="row g-4">
        @foreach($products as $p)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body d-flex flex-column">

                        {{-- GAMBAR PRODUK --}}
                        @if($p->image)
                            <img src="{{ $p->image }}"
                                 class="card-img-top mb-3"
                                 style="height:220px; object-fit:cover;">
                        @else
                            <div class="bg-secondary text-white d-flex align-items-center justify-content-center mb-3"
                                 style="height:220px;">
                                No Image
                            </div>
                        @endif

                        <h5 class="fw-bold mb-2">{{ $p->name }}</h5>

                        <p class="text-muted mb-3">
                            Harga: <strong>Rp{{ $p->price }}</strong> / kodi<br>
                            Stok: <strong>{{ $p->stock }}</strong> kodi
                        </p>

                        {{-- USER AREA --}}
                        @if(auth()->user()->role === 'user')
                            <form method="POST" action="/transactions" class="mt-auto transaction-form">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $p->id }}">

                                <input type="number"
                                       name="quantity"
                                       class="form-control mb-2"
                                       placeholder="Jumlah (kodi)"
                                       required>

                                {{-- INPUT ALAMAT (TAMBAHAN) --}}
                                <input type="text"
                                       name="street"
                                       class="form-control mb-2"
                                       placeholder="Nama Jalan"
                                       required>

                                <input type="text"
                                       name="rt_rw"
                                       class="form-control mb-2"
                                       placeholder="RT / RW"
                                       required>

                                <input type="text"
                                       name="city"
                                       class="form-control mb-2"
                                       placeholder="Kota"
                                       required>

                                <input type="text"
                                       name="postal_code"
                                       class="form-control mb-3"
                                       placeholder="Kode Pos"
                                       required>

                                <button class="btn btn-primary w-100">
                                    Konfirmasi Pesanan
                                </button>
                            </form>
                        @endif

                        {{-- ADMIN AREA --}}
                        @if(auth()->user()->role === 'admin')
                            <form method="POST" action="/products/delete/{{ $p->id }}" class="mt-auto">
                                @csrf
                                <button class="btn btn-danger w-100">
                                    Hapus Produk
                                </button>
                            </form>
                        @endif

                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>

{{-- POPUP TRANSFER (TAMBAHAN, TIDAK MERUSAK SUBMIT) --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const forms = document.querySelectorAll('.transaction-form');

    forms.forEach(form => {
        form.addEventListener('submit', function () {
            setTimeout(() => {
                alert(
                    "✅ PESANAN BERHASIL!\n\n" +
                    "Silakan transfer ke:\n" +
                    "BANK ABC\n" +
                    "No Rek: 1234567\n" +
                    "A/N: MIFTAH NURUL MUSTOFA\n\n" +
                    "Setelah transfer, kirim bukti ke:\n" +
                    "📞 08961234567"
                );
            }, 300);
        });
    });
});
</script>

</x-app-layout>
