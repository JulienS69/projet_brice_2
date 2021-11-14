<?php

namespace App\Http\Controllers;

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

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
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
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request,$id)
    {
        Commentaires::create(['contenu' => $request->contenu, "user_id" => Auth::user()->id, 'article_id'=>$id]);
        Log::create([
            "user_id" => Auth::user()->getAuthIdentifier(),
            "description" => " [CREATE] " .Auth::user()->nom. " a cree un commentaire : ". $request->contenu,
        ]);

        return redirect("/article");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return RedirectResponse
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
