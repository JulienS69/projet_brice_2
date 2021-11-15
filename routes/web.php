 <?php

use App\Http\Controllers\AddCategorieController;
 use App\Http\Controllers\ArticleController;
 use App\Http\Controllers\CatégorieController;
 use App\Http\Controllers\NotesController;
 use App\Http\Controllers\ContactController;
 use App\Http\Controllers\LogsController;
 use App\Http\Controllers\CommentaireController;
 use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 /* Route N°1 */
Route::get('/', function () {
    return view('welcome');
});
 /* Route N°2 */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/* Route N°3 */
Route::get('/categorie', [CatégorieController::class, 'index'])->middleware(['auth'])->name('categorie');

/* Route AddCategorieController */
Route::get('/categorie/addCateg',[AddCategorieController::class, 'index'])->name('addCateg');
Route::post('/categorie/addCateg', [AddCategorieController::class, 'store'])->name('categorie');

/* Route CatégorieController */
Route::post('/categorie/editCateg/{id}',[CatégorieController::class, 'showCateg'])->name('showCateg');
Route::put('/categorie/editCateg/{id}',[CatégorieController::class, 'updateCateg'])->name('updateCateg');
Route::get('/categorie/{id}', [CatégorieController::class, 'showArticleFromCateg'])->name('showArticleFromCateg');
Route::delete('/categorie/{id}', [CatégorieController::class, 'destroy'])->name('delete_categ');

 /* Route LogsController */
Route::get('/logs', [LogsController::class, 'index'])->name('log');



require __DIR__.'/auth.php';

/* Route ArticleController */
Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('showArticle');
Route::get('/article/view/add', [ArticleController::class, 'indexAddArticle'])->name('addViewArticle');
Route::get('/article/view/update', [ArticleController::class, 'indexUpdateArticle'])->name('updateViewArticle');
Route::delete('/article/{id}', [ArticleController::class, 'destroy'])->name('deleteViewArticle');
Route::post('/article', [ArticleController::class, 'store'])->name('addArticle');
Route::post('/article/update', [ArticleController::class, 'update'])->name('article.update');



/* Route CommentaireController */
Route::get('/article/commentaire/{id}', [CommentaireController::class, 'index'])->name('commentaire.index');
Route::post('/article/commentaire/edit', [CommentaireController::class, 'update'])->name('commentaire.update');
Route::post('/article/commentaire/delete', [CommentaireController::class, 'destroy'])->name('deleteCommentaire');
Route::post('/article/commentaire/{id}', [CommentaireController::class, 'store'])->name('addCommentaire');


/* Route NotesController */
//Route qui renvoie vers la fonction index
Route::get('/article/note/{id}', [NotesController::class, 'index'])->name('notes.index');
Route::post('/article/note/edit', [NotesController::class, 'update'])->name('note.update');
Route::post('/article/note/delete', [NotesController::class, 'destroy'])->name('deleteNote');
Route::post('/article/note/{id}', [NotesController::class, 'store'])->name('addNote');
