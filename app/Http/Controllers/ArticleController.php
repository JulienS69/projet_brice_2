<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Psy\debug;

class ArticleController extends Controller
{
    public function index()
    {
//        Permet de récuperer certaines informations des articles + jointure permettant de récupérer les noms des catégories associés aux articles.
        $article = Article::addSelect(['articles.id', 'titre', 'articles.created_at'])
        ->get();
        $catégories = Categorie::all();
        return view('article', compact("article","catégories"));
    }

    public function show($id)
    {

//        $article = Article::find($id)->with("user");
        $article = Article::find($id);

//        $article = Article::where("id",$id)->with("user")->first();
//        $id = Article::addSelect('id')
//            ->where('id', $idArticle)
//            ->get();

        return view('showArticle', compact(["article"]));
    }

    public function store(Request $request){
//        $test = Article::addSelect('titre')->get();
//      Permet d'afficher un message d'erreur en cas de validation avec l'input vide.
//        if ($request->input('titre') == '') {
//
//          return back()->with('fail', 'Veuillez saisir du texte !');
//    }
//      Voir pour ajouter une exeption en cas de doublon pour la création d'un article.
//        else if ($request->input('titre') == $test){
//            return back()->with('fail', 'Cette article existe déjà !');
//        }
//       Création de l'article.
//        else {
            Article::create(['titre' => $request->nom, "user_id" => Auth::user()->id, 'libelle'=>$request->libelle]);
            Log::create([
                "user_id" => Auth::user()->getAuthIdentifier(),
                "description" => " [CREATE] " .Auth::user()->nom. " a cree un article s'intitulant : ". $request->nom,
            ]);
//        }
//       Redirection vers la page des catégories.
        return redirect('/article');
    }

    public function update(Request $requete)
    {
        $input = $requete->all();
        if ($input['nouveauNom'] != null) {
            Article::where('titre', $input['article'])->update(['titre' => $input['nouveauNom'], 'libelle' => $input['newDescription']]);
        } else {
            Article::where('titre', $input['article'])->update(['titre' => $input['article'], 'libelle' => $input['newDescription']]);
        }

        return redirect()->back();
    }

    public function destroy($id){
        $task = Article::findOrFail($id);

        $nomArticle = Article::addSelect('titre')
            ->where('id', $task)
            ->first();
        $task->delete();


        Log::create([
            "user_id" => Auth::user()->getAuthIdentifier(),
            "description" => " [DELETE] " .Auth::user()->nom. " a supprimer l'article : ". $id,
        ]);

        return redirect("/article");
    }
}

