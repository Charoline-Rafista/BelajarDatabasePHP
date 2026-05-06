<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier; // Panggil model Supplier

class SupplierController extends Controller
{
    public function index()
{
    // Mengambil semua data supplier
    $suppliers = Supplier::all(); 

    // Kirim data suppliers DAN title ke view
    return view('supplier.index', [
        'suppliers' => $suppliers,
        'title' => 'Daftar Supplier' // <- Ini yang menyelamatkan dari error
    ]);
}
}