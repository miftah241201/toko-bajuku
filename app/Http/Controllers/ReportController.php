<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        // hanya admin
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $reports = Transaction::select(
                DB::raw('DATE(created_at) as tanggal'),
                DB::raw('SUM(quantity) as total_kodi'),
                DB::raw('SUM(total) as total_penjualan')
            )
            ->groupBy('tanggal')
            ->orderBy('tanggal', 'desc')
            ->get();

        return view('reports.index', compact('reports'));
    }
}
