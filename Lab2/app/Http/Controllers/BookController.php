<?php
namespace App\Http\Controllers;

use App\Books;
use App\BooksGroups;
use App\Groups;
use App\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{

    public function index($groupID = null, $bookID = null)
    {
        $book = Books::has('author')->find($bookID);
      //  dd($book);
        $groups = Groups::has('booksGroups')->get();
        return view('book', compact('groups'), compact('book'));
    }

    public function insertComment(Request $request, $id)
    {

        $validator = Validator::make(
            [   'vardas' =>$request->input('vardas'),
                'zvaigzdutes' =>$request->input('points')
            ],
            [   'vardas' => 'required',
                'zvaigzdutes' => 'required',

            ]
        );

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator);
        }
        else
        {

            $review = new Reviews();
            $review->zvaigzdutes  = $request->input('points');
            $review->komentaras = $request->input('atsiliepimas');
            $review->knyga = $id;
            $review->vardas = $request->input('vardas');
            $review->save();

        }
        return redirect()->back()->with('success', 'Atsiliepimas pridėtas');
    }

    public function deleteComment($id){

        Reviews::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Atsiliepimas pašalintas');
    }
}
