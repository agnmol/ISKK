<?php

namespace App\Http\Controllers;

use App\BooksGroups;
use App\Groups;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $this->newSession();
        $groups = session('categories');
        $books = BooksGroups::with('books')->paginate(2);
        return view('books', compact('books','groups'));
    }
    public function newSession(){
        session()->forget('categories');

        $groups = Groups::has('booksGroups')->get();
        if(isset($groups)){
            session(['categories' => $groups]);
        }
    }
}
