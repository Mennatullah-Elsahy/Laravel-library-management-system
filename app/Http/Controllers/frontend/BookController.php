<?php

namespace App\Http\Controllers\frontend;

use App\Models\book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {

        return view('frontend.Book', [
            'books' => book::Paginate(5)
        ]);
    }
    public function updateStatus(Request $request)
    {
        // Validate the request data
        $request->validate([
            'bookId' => 'required|integer',
            'newStatus' => 'required|in:Y,N', // Assuming 'Y' for Available and 'N' for Issued
        ]);

        // Find the book by ID
        $book = Book::findOrFail($request->input('bookId'));

        // Update the status
        $book->status = $request->input('newStatus');
        $book->save();

        // Redirect back or return a response as needed
        return redirect()->back()->with('success', 'Status updated successfully');
    }
}
