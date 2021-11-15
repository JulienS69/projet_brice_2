<?php

namespace App\Http\Controllers;

use App\Models\NoteArticle;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Commentaires;
use App\Models\Log;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $article = Article::find($id);
        $notes = NoteArticle::where('article_id',$id)->get();

        return view('notes',compact("article","notes"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {

        NoteArticle::create(['note' => $request->all()['note_article'], 'article_id'=>$id,"user_id" => Auth::user()->id ]);
        Log::create([
            "user_id" => Auth::user()->getAuthIdentifier(),
            "description" => " [CREATE] " .Auth::user()->nom. " a ajoutee une note : ". $request->note." à l'article ". $id,
        ]);

        return redirect("/article");
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $input = $request->all();

        $idNote= NoteArticle::where('note', $input['note_article'])->get()[0]->id;

        NoteArticle::where('id', $idNote)->update(['note' => $input['NewNote']]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $input = $request->all();
        $idNote = NoteArticle::where('note', $input['deleteNote'])->get()[0]->id;
        Log::create([
            "user_id" => Auth::user()->getAuthIdentifier(),
            "description" => " [DELETE] " .Auth::user()->nom. "a supprimé la note portant l'id : ". $idNote
        ]);

        $ligneNote = NoteArticle::find($idNote);
        $ligneNote->delete();

        return redirect("/article");
    }
}
