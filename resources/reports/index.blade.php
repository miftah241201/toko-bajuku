<div class="container my-5">

    <h3 class="fw-bold mb-4">Laporan Penjualan Harian</h3>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Tanggal</th>
                            <th>Total Terjual (Kodi)</th>
                            <th>Total Penjualan (Rp)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reports as $r)
                            <tr>
                                <td>{{ $r->tanggal }}</td>
                                <td>{{ $r->total_kodi }}</td>
                                <td>Rp{{ number_format($r->total_penjualan, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>
