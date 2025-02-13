<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\BookEntryRequest;

class BooksController extends Controller
{
    public function loadBookEntryPage(){
        return view('bookEntryPage');
    }

    public function saveBookDetails(Request $request){

        $title=$request->input("txtName");
        $author=$request->input("txtAuth");
        $description=$request->input("txtDescr");
        if($title=="")
            echo "Title cannot be null";
        else if($author=="")
            echo "Author cannot be null";
        else{
            $book=new Book;
            $book->bookTitle=$title;
            $book->bookAuthor=$author;
            $book->bookDescription=$description;
            $book->save();
            echo "inserted successfully";
        }
    }

    public function saveBookDetailsUsingLaravelValidation(BookEntryRequest $request){

        $title=$request->input("txtName");
        $author=$request->input("txtAuth");
        $description=$request->input("txtDescr");
        $book=new Book;
        $book->bookTitle=$title;
        $book->bookAuthor=$author;
        $book->bookDescription=$description;
        $book->save();
        echo "inserted successfully";
    }
}
