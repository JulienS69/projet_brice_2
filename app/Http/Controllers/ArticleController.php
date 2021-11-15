<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Commentaires;
use App\Models\Log;
use App\Models\NoteArticle;
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
        //Permet d'afficher dans la vue d'un article, les commentaires ainsi que les notes en plus des informations de l'article.
        $article = Article::find($id);
        $commentaires = Commentaires::where('article_id',$id)->get();
        $notes = NoteArticle::where('article_id',$id)->get();

        return view('showArticle', compact(["article", "commentaires","notes"]));
    }

    public function store(Request $request){
        $createArticle = Article::create(['titre' => $request->nom, "user_id" => Auth::user()->id, 'libelle'=>$request->libelle]);
        $createArticle->categories()->attach($request->categorie);

        // Log permetant de voir qui a créé l'article ainsi que le nom de l'article.
            Log::create([
                "user_id" => Auth::user()->getAuthIdentifier(),
                "description" => " [CREATE] " .Auth::user()->nom. " a cree un article s'intitulant : ". $request->nom,
            ]);

//     Redirection vers la page des catégories.
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
        // Permet de supprimer les articles liée à une catégorier qui va être supprimée
        $task = Article::findOrFail($id);
        $article = Article::addSelect('titre')
            ->first();

        //Récupère le titre de l'article qui correspond à l'id récupérer dans l'url afin de pouvoir le supprimer
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
        // Cette fonction permet d'update l'article en fonction des champs saisie dans nos inputs depuis notre vue.
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

        // redirige vers la vue des articles.
        return redirect("/article");
    }


}

