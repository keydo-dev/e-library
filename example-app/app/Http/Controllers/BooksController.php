<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BooksController extends Controller
{
    /**
     * Menampilkan daftar buku
     */
    public function index()
    {
        $books = Books::latest()->paginate(10);
        return view('books.index', compact('books'));
    }

    /**
     * Menampilkan form untuk membuat buku baru
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Menyimpan buku baru ke database
     */
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama_buku' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tahun-penerbit' => 'required|integer|min:1900|max:' . date('Y'),
            'jumlah_halaman' => 'required|integer|min:1|max:10000',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        // Buat buku baru
        Books::create($request->all());
        
        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail buku
     */
    public function show(Books $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Menampilkan form untuk mengedit buku
     */
    public function edit(Books $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Memperbarui buku di database
     */
    public function update(Request $request, Books $book)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama_buku' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tahun_penerbit' => 'required|integer|min:1900|max:' . date('Y'),
            'jumlah_halaman' => 'required|integer|min:1|max:10000',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        // Update buku
        $book->update($request->all());
        
        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil diperbarui!');
    }

    /**
     * Menghapus buku dari database
     */
    public function destroy(Books $book)
    {
        $book->delete();
        
        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil dihapus!');
    }
}
