<?php

namespace App\Http\Controllers;

use App\Models\Kwitansi;
use Illuminate\Http\Request;


class KwitansiController extends Controller
{
    public function index()
{
    $kwitansis = Kwitansi::paginate(5); // 10 items per page
    return view('kwitansi.index', compact('kwitansis'));
}
   public function create()
    {
        return view('kwitansi.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'no_kwitansi' => 'required|string',
            'tanggal' => 'required|date',
            'sudah_terima_dari' => 'required|string',
            'nama_peminjam' => 'required|string',
            'untuk_pembayaran' => 'required|string',
            'jumlah_uang' => 'required|numeric',
        ]);
    
        Kwitansi::create($request->all());
    
        return redirect()->route('kwitansi.index')->with('success', 'Kwitansi berhasil ditambahkan.');
    }
    
    
    public function edit(Kwitansi $kwitansi)
    {
        return view('kwitansi.edit', compact('kwitansi'));
    }

    public function update(Request $request, Kwitansi $kwitansi)
    {
        $kwitansi->update($request->all());
        return redirect()->route('kwitansi.index');
    }
    public function show(Kwitansi $kwitansi)
{
    return view('kwitansi.show', compact('kwitansi'));
}
    public function destroy(Kwitansi $kwitansi)
    {
        $kwitansi->delete();
        return redirect()->route('kwitansi.index');
    }
}
