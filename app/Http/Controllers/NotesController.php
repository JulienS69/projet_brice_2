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
        //Récupère l'article dans lequel la note se trouve
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
        //Requete d'insertion à l'aide des réponse du formulaire de la vue 'notes.blade.php'
        NoteArticle::create(['note' => $request->all()['note_article'], 'article_id'=>$id,"user_id" => Auth::user()->id ]);
        //Création des Logs
        Log::create([
            "user_id" => Auth::user()->getAuthIdentifier(),
            "description" => " [CREATE] " .Auth::user()->nom. " a ajoutee une note : ". $request->note." à l'article ". $id,
        ]);
        //Redirige sur la vue comportant l'uri /article
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

        //On récupère l'id de la note que l'on veut modif
        $idNote= NoteArticle::where('note', $input['note_article'])->get()[0]->id;

        //Requete update
        NoteArticle::where('id', $idNote)->update(['note' => $input['NewNote']]);

        //Redirige sur la vue précédente
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
        //On récupère l'id de la note que l'on veut supprimer
        $idNote = NoteArticle::where('note', $input['deleteNote'])->get()[0]->id;

        //Création des logs
        Log::create([
            "user_id" => Auth::user()->getAuthIdentifier(),
            "description" => " [DELETE] " .Auth::user()->nom. "a supprimé la note portant l'id : ". $idNote
        ]);

        //On récupère la ligne que l'on veut supprimer grâce l'idNote
        $ligneNote = NoteArticle::find($idNote);

        //Requete delete
        $ligneNote->delete();

        return redirect("/article");
    }
}
