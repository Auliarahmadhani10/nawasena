<?php

namespace App\Http\Controllers;

use App\Models\barang; 

use Illuminate\Http\Request;

use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse; //kurang

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
        $barang = barang::latest()->paginate(10);

        //render view with products
        return view('barang.index', compact('barang'));
    }  
}

