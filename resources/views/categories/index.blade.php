<x-app-layout>

<div class="container my-5">

    <h3 class="fw-bold mb-4">Kelola Produk</h3>

    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">

            <h5 class="fw-bold mb-3">Tambah Kategori</h5>

            <form method="POST" action="/categories" class="d-flex gap-2">
                @csrf
                <input type="text" name="name" class="form-control" placeholder="Nama kategori" required>
                <button class="btn btn-success">Tambah</button>
            </form>

        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <h5 class="fw-bold mb-3">Daftar Kategori</h5>

            <ul class="list-group">
                @foreach($categories as $cat)
                    <li class="list-group-item">{{ $cat->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>

</div>

</x-app-layout>
