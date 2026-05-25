<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        return view('show', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'published_date' => 'required',
        ]);

        if($validated){
            $book = new Book();
            $book->title = $request->title;
            $book->author = $request->author;

            if($request->hasFile('image')){
                $file = $request->file('image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images'), $fileName);

                $book->image = $fileName;
            }

            $book->description = $request->description;
            $book->published_date = $request->published_date;
            $book->save();

            return redirect('/books')->with('create-msg', 'Book created successfully');
        }else{
            return back()->with('errors', 'Errors');
        }

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('details', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'published_date' => 'required',
        ]);

        if($validated){
            $book->title = $request->title;
            $book->author = $request->author;
            $book->description = $request->description;
            
            if($request->hasFile('image')){
                $publicPhotoPath = public_path('images/'. $book->image);
                if($book->image && $publicPhotoPath){
                    unlink($publicPhotoPath);
                }

                $file = $request->file('image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images'), $fileName);

                $book->image = $fileName;
            }

            $book->published_date = $request->published_date;
            $book->save();

            return redirect('books')->with('update-msg', 'Book updated successfully');
        }else{
            return back()->with('errors', 'Errors');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return back()->with('delete-msg', 'Book deleted successfully');
    }
}
