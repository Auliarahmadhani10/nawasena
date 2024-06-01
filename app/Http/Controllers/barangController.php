<?php

namespace App\Http\Controllers;

use App\Models\barang; 

use Illuminate\Http\Request;

use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse; //kurang
use Illuminate\Support\Facades\Auth;

class barangController extends Controller
{
     /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all products
        $barangs = barang::query()->get();

        //render view with products
        return view('barang.index', compact('barangs'));
    }  

    
    /**
     * create
     *
     * @return View
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_barang'   => 'required',
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'harga'         => 'required|numeric',
            'stok'         => 'required|numeric',  
            'keterangan'   => 'required|min:10',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/products', $image->hashName());

        //create product
        barang::create([
            'nama_barang'   => $request->nama_barang,
            'image'         => $image->hashName(),
            'harga'         => $request->harga,
            'stok'          => $request->stok,
            'keterangan'    => $request->keterangan,
            'user_id'       => Auth::id()
        ]);

        //redirect to index
        return redirect()->route('beranda');
    }

    public function getBarang(string $namaBarang): View {
        $barang = barang::query()->where("nama_barang", $namaBarang)->first();

        return view("barang.detail", compact('barang'));
    }
}