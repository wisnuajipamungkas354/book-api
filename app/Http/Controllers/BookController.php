<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('view', Book::class);

        return $this->sendResponse('Berhasil mengambil data', 200, Book::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        Gate::authorize('create', Book::class);

        $validatedData = $request->validated();

        $book = Book::create($validatedData);

        return $this->sendResponse('Data buku berhasil ditambahkan!', 201, ['ID Buku' => $book->id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, Book $book)
    {
        Gate::authorize('update', $book);

        $validatedData = $request->validated();

        $book->update($validatedData);
        
        return $this->sendResponse('Data buku berhasil diupdate', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        Gate::authorize('delete', $book);

        Book::destroy($book->id);

        return $this->sendResponse('Buku berhasil dihapus!', 200);
    }
}
