<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(): View {
        $barangs = barang::query()->get();

        return view('beranda', compact('barangs'));
    }
}
