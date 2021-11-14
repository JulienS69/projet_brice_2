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
        $article = Article::addSelect(['id', 'articles.id', 'titre', 'articles.created_at'])
        ->get();
        $catégories = Categorie::all();
        return view('article', compact("article"));
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
        $createArticle = Article::create(['titre' => $request->nom, "user_id" => Auth::user()->id, 'libelle'=>$request->libelle]);
        $createArticle->categories()->attach($request->categorie);
            Log::create([
                "user_id" => Auth::user()->getAuthIdentifier(),
                "description" => " [CREATE] " .Auth::user()->nom. " a cree un article s'intitulant : ". $request->nom,
            ]);
//        }
//       Redirection vers la page des catégories.
        return redirect('/article');
    }

    public function indexAddArticle(){

        $categories = Categorie::all();

        return view('addArticle', compact('categories'));
    }

    public function indexUpdateArticle(){
        $article = Article::addSelect(['articles.id', 'titre', 'articles.created_at'])
            ->get();

        return view('updateArticle', compact('article'));
    }

    public function destroy(Request $request, $id){
        $article = Article::addSelect(['articles.id', 'titre', 'articles.created_at'])
            ->get();
        $task = Article::findOrFail($id);
        $article = Article::addSelect('titre')
            ->first();

//        dd($article);

        $nomArticle = Article::addSelect('titre')
            ->where('id', $task)
            ->first();
        $task->delete();
        Log::create([
            "user_id" => Auth::user()->getAuthIdentifier(),
            "description" => " [DELETE] " .Auth::user()->nom. "a supprimé l'article portant l'id : ".  $id
        ]);
        return redirect("/article");
    }

    public function update(Request $requete)
    {
//        $article = Article::addSelect('titre')
//            ->where('titre', $input['article'])
//            ->get();

        $input = $requete->all();
        if ($input['nouveauNom'] != null) {
            Article::where('titre', $input['article'])->update(['titre' => $input['nouveauNom'], 'libelle' => $input['newDescription']]);
        } else {
            Article::where('titre', $input['article'])->update(['titre' => $input['article'], 'libelle' => $input['newDescription']]);
        }

        $ancienNom = $requete->input('article');
        $nouveauNom = $requete->input('nouveauNom');

        Log::create([
            "user_id" => Auth::user()->getAuthIdentifier(),
            "description" => " [UPDATE] " .Auth::user()->nom. " a modifié l'article s'intitulant : ".  $ancienNom. " par : ". $nouveauNom,
        ]);

        return redirect("/article");
    }


}

