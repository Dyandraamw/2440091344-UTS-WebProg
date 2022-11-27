<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index()
    {
        return view('navbar');
    }

    public function showHome(){
        $books = DB::table('books')->get();
        //$books = Book::where('year','LIKE','2017')->get();
        return view('home',compact('books'));
    }

    public function showManga(){
        $books = DB::table('books')
         ->join('book_category','book_category.book_id','=','books.id')
         ->select('books.*','book_category.category_id')
         ->where('book_category.category_id','LIKE',1)
         ->get();
         return view('categoryManga',compact('books'));
    }

    public function showSoL(){
        $books = DB::table('books')
         ->join('book_category','book_category.book_id','=','books.id')
         ->select('books.*','book_category.category_id')
         ->where('book_category.category_id','LIKE',2)
         ->get();
         return view('categorySoL',compact('books'));
    }

    public function showFantasy(){
        $books = DB::table('books')
         ->join('book_category','book_category.book_id','=','books.id')
         ->select('books.*','book_category.category_id')
         ->where('book_category.category_id','LIKE',3)
         ->get();
         return view('categoryFantasy',compact('books'));
    }

    public function showSports(){
        $books = DB::table('books')
         ->join('book_category','book_category.book_id','=','books.id')
         ->select('books.*','book_category.category_id')
         ->where('book_category.category_id','LIKE',4)
         ->get();
         return view('categorySports',compact('books'));
    }

    public function showDetail($id){
         $details = DB::table('books')
         ->join('publishers','books.publisher_id','=','publishers.id')
         ->select('books.*','publishers.name')
         ->where('books.id','LIKE',$id)
         ->get();
         return view('detail',compact('details'));
    }

    public function showPublishers(){
        $details = DB::table('books')
        ->join('publishers','books.publisher_id','=','publishers.id')
        ->select('books.*','publishers.image AS p_img',
        'publishers.name','publishers.address','publishers.phone','publishers.email')
        ->get();
        return view('publisher',compact('details'));
   }


}
