<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Admin(){
        $books = Book::get();
        return view('index',compact('books'));
    }

    public function StoreData(Request $request){
        dd($request->all());
    }

    public function Price($book_id){


        $price = Book::where('id',$book_id)->select('price')->get();

        return response()->json(['price'=>$price[0]->price]);
    }
}
