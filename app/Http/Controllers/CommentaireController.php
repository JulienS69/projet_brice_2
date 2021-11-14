<?php

namespace App\Http\Controllers;


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Commentaires;
use App\Models\Log;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $article = Article::find($id);
        $commentaires = Commentaires::where('article_id',$id)->get();
        return view('commentaires',compact("article","commentaires"));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        Commentaires::create(['contenu' => $request->contenu, "user_id" => Auth::user()->id, 'article_id'=>$id]);
        Log::create([
            "user_id" => Auth::user()->getAuthIdentifier(),
            "description" => " [CREATE] " .Auth::user()->nom. " a cree un commentaire : ". $request->contenu,
        ]);
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        Commentaires::where('contenu', $input['commentaireOldContenu'])->update(['contenu' => $input['newDescription']]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
