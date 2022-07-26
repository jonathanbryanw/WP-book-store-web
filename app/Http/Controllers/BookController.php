<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Detail;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function viewHome(){

    	$books = Book::paginate(5);

    	return view('home',compact('books'));
    }

    public function viewDetail($id){

    	$books = Book::find($id);

    	return view('detail',compact('books'));
    }

    public function viewFiction(){

    	$books = Book::all()->where('category_id',1);

    	return view('fiction',compact('books'));
    }

    public function viewScience(){

    	$books = Book::all()->where('category_id',2);

    	return view('science',compact('books'));
    }

    public function viewComputer(){

    	$books = Book::all()->where('category_id',3);

    	return view('computer',compact('books'));
    }

    public function viewContact(){

    	return view('contact');
    }

}
