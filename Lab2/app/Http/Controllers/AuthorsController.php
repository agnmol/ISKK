<?php
namespace App\Http\Controllers;

use App\Authors;
use App\Books;
use App\BooksGroups;
use App\Groups;
use App\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthorsController extends Controller
{

    public function index()
    {
        $authors = Authors::all();
        //  dd($book);

        return view('authors', compact('authors'));
    }

    public function addAuthor(){
        return view('addAuthor');
    }

    public function insertAuthor(Request $request)
    {

        $validator = Validator::make(
            [   'vardas_pavarde' =>$request->input('vp'),
                'apie' =>$request->input('apie')
            ],
            [   'vardas_pavarde' => 'required|regex:/^((\w+)\ )+\w+/',
                'apie' => 'required'
            ]
        );

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator);
        }
        else
        {
            $author = new Authors();
            $author->vardas_pavarde  = $request->input('vp');
            $author->apie = $request->input('apie');
            $author->save();
        }
        return redirect()->back()->with('success', 'Autorius pridėtas');
    }


    public function editAuthor($id){
        $author = Authors::find($id);
        return view('editAuthor', compact('author'));
    }

    public function confirmEditAuthor(Request $request, $id = null)
    {
        $author = \App\Authors::find($id);
        $author->apie  = $request->apie;
        $author->save();
        return redirect()->back()->with('success', 'Autorius redaguotas');
    }

    public function deleteAuthor($id){
        $books = Books::where('autorius', $id)->get();
        foreach($books as $book){
            Reviews::where('knyga', $book->id)->delete();
            BooksGroups::where('knyga', $book->id)->delete();
        }
        Books::where('autorius', $id)->delete();
        Authors::where('id',$id)->delete();
        return Redirect::to('/authors ')->with('success', 'Autorius pašalintas');
    }
}
