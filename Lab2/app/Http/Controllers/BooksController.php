<?php

namespace App\Http\Controllers;

use App\Authors;
use App\BooksGroups;
use App\Reviews;
use Illuminate\Http\Request;
use App\Groups;
use App\Books;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class BooksController extends Controller
{

    public function index($groupID = null)
    {
        session()->forget('category');
        $groups = session('categories');
        $books = BooksGroups::with('books')->paginate(2);
        if (isset($groupID))
        {
            $books = BooksGroups::with('books')->where('grupe', $groupID)->paginate(2);
            $group = BooksGroups::with('group')->where('grupe', $groupID)->first();
            session(['category' => $group->group->pavadinimas]);
        }
        return view('books', compact('books','groups'));
    }

    public function book($groupID = null, $bookID = null)
    {
        $book = Books::has('booksGroups.group')->has('author')->with('reviews')->find($bookID);
        $groups = Groups::has('booksGroups')->get();
        return view('book', compact('groups','book', 'groupID'));
    }

    public function addBook(){
        $authors = Authors::all();
        $groups = Groups::all();
        return view('addBook', compact('authors', 'groups'));
    }

    public function insertBook(Request $request)
    {

        $validator = Validator::make(
            [   'puslapiai' =>$request->input('psl'),
                'data' =>$request->input('data'),
                'pavadinimas' =>$request->input('pavadinimas'),
                'aprasymas' =>$request->input('apie'),
                'autorius' =>$request->input('autorius'),
                'grupe' =>$request->input('grupe')
            ],
            [   'data' => 'required|integer|min:1800|max:2020',
                'puslapiai' => 'required|integer',
                'pavadinimas' => 'required',
                'aprasymas' => 'required',
                'autorius' =>'required',
                'grupe' =>'required'

            ]
        );

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator);
        }
        else
        {

            $book = new Books();
            $book->pavadinimas  = $request->input('pavadinimas');
            $book->aprasymas = $request->input('apie');
            $book->data = $request->input('data')."-01-01";
            $book->puslapiai = $request->input('psl');
            $book->autorius= $request->input('autorius');
            $book->save();

            $bookGroup = new BooksGroups();
            $bookGroup->knyga = $book->id;
            $bookGroup->grupe = $request->input('grupe');
            $bookGroup->save();

        }
        return redirect()->back()->with('success', 'Knyga pridėta');
    }

    public function editBook($id){
        $book = Books::has('booksGroups.group')->has('author')->find($id);
        return view('editBook', compact('book'));
    }

    public function confirmEditBook(Request $request, $id = null)
    {
        $book = \App\Books::find($id);
        $book->aprasymas  = $request->apie;
        $book->save();
        return redirect()->back()->with('success', 'Knyga redaguota');
    }

    public function deleteBook($id){
        Reviews::where('knyga', $id)->delete();
        BooksGroups::where('knyga', $id)->delete();
        Books::where('id',$id)->delete();
        return Redirect::to('/books ')->with('success', 'Knyga pašalinta');
    }

}
