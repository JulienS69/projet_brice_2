<?php

namespace App\Http\Controllers;
//Recupération de tout les lib dont nous avons besoin
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
        //Récupère l'article dans lequel la note se trouve
        $article = Article::find($id);
        //Récupère les commentaires qui ont pour article_id, l'id se trouvenant en parametre
        $commentaires = Commentaires::where('article_id',$id)->get();
        //On retourn une vue et on transmet nos 2 variables du dessus
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
        //Requete d'insertion à l'aide des réponse du formulaire de la vue 'commentaires.blade.php'
        Commentaires::create(['contenu' => $request->contenu, "user_id" => Auth::user()->id, 'article_id'=>$id]);
        //Création des Logs
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
    public function update(Request $request)
    {
        $input = $request->all();
        //On récupère l'id du commentaire que l'on veut modif
        $idCom= Commentaires::where('contenu', $input['commentaireAncien'])->get()[0]->id;

        //Requete update
        Commentaires::where('id', $idCom)->update(['contenu' => $input['newContenu']]);

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

        //On récupère l'id du commentaire que l'on veut supprimer
        $idCom = Commentaires::where('contenu', $input['deleteCom'])->get()[0]->id;
        //Création des logs
        Log::create([
            "user_id" => Auth::user()->getAuthIdentifier(),
            "description" => " [DELETE] " .Auth::user()->nom. "a supprimé le commentaire portant l'id : ". $idCom
        ]);
        //On récupère la ligne que l'on veut supprimer grâce l'$idCom
        $ligneCom = Commentaires::find($idCom);
        //Requete delete
        $ligneCom->delete();

        return redirect("/article");
    }
}
