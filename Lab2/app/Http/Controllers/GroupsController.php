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

class GroupsController extends Controller
{
    public function index()
    {
        $groups = Groups::all();


        return view('groups', compact('groups'));
    }

    public function addGroup(){
        return view('addGroup');
    }

    public function insertGroup(Request $request)
    {

        $validator = Validator::make(
            [   'pavadinimas' =>$request->input('pav')
            ],
            [   'pavadinimas' => 'required|regex:/^((\w+)\ )*\w+/'
            ]
        );

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator);
        }
        else
        {
            $group = new Groups();
            $group->pavadinimas  = $request->input('pav');
            $group->save();
        }
        return redirect()->back()->with('success', 'Kategorija pridėta');
    }


    public function editGroup($id){
        $group = Groups::find($id);
        return view('editGroup', compact('group'));
    }

    public function confirmEditGroup(Request $request, $id)
    {
        $group = \App\Groups::find($id);
        $group->pavadinimas  = $request->input('pav');
        $group->save();
        return redirect()->back()->with('success', 'Kategorija redaguota');
    }

//     $books = Books::where('autorius', $id)->get();
//        foreach($books as $book){
//            Reviews::where('knyga', $book->id)->delete();
//            BooksGroups::where('knyga', $book->id)->delete();
//        }
//        Books::where('autorius', $id)->delete();
//        Authors::where('id',$id)->delete();

    public function deleteGroup($id){
        $booksGroups = BooksGroups::where('grupe', $id)->get();
        foreach($booksGroups as $bg) {
            $books = Books::where('id', $bg->knyga)->get();
            foreach ($books as $book) {
                Reviews::where('knyga', $book->id)->delete();
                BooksGroups::where('grupe', $id)->delete();
            }
            Books::where('id', $book->id)->delete();
            Authors::where('id',$book->autorius)->delete();
        }
        Groups::where('id', $id)->delete();
        $this->newSession();
        return Redirect::to('/groups ')->with('success', 'Kategorija pašalinta');
    }

    public function newSession(){
        session()->forget('categories');

        $groups = Groups::has('booksGroups')->get();
        if(isset($groups)){
            session(['categories' => $groups]);
        }
    }
}
