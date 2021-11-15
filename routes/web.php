 <?php

use App\Http\Controllers\AddCategorieController;
 use App\Http\Controllers\ArticleController;
 use App\Http\Controllers\CatégorieController;
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

 /* Route N°4 */
Route::get('/categorie/addCateg',[AddCategorieController::class, 'index'])->name('addCateg');

 /* Route N°5 */
Route::post('/categorie/addCateg', [AddCategorieController::class, 'store'])->name('categorie');

 /* Route N°6 */
Route::post('/categorie/editCateg/{id}',[CatégorieController::class, 'showCateg'])->name('showCateg');

 /* Route N°7 */
Route::put('/categorie/editCateg/{id}',[CatégorieController::class, 'updateCateg'])->name('updateCateg');

 /* Route N°8 */
Route::get('/article', [ArticleController::class, 'index'])->name('article');

 /* Route N°9 */
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('showArticle');

 /* Route N°10 */
 Route::get('/categorie/{id}', [CatégorieController::class, 'showArticleFromCateg'])->name('showArticleFromCateg');

 /* Route N°11 */
 Route::get('/logs', [LogsController::class, 'index'])->name('log');

 /* Route N°10 */
Route::delete('/categorie/{id}', [CatégorieController::class, 'destroy'])->name('delete_categ');

require __DIR__.'/auth.php';

 /* Route N°12 */
 Route::get('/article/view/add', [ArticleController::class, 'indexAddArticle'])->name('addViewArticle');

 Route::get('/article/view/update', [ArticleController::class, 'indexUpdateArticle'])->name('updateViewArticle');

 Route::delete('/article/{id}', [ArticleController::class, 'destroy'])->name('deleteViewArticle');

 Route::post('/article', [ArticleController::class, 'store'])->name('addArticle');

 /* Route N°13 */
 Route::post('/article/update', [ArticleController::class, 'update'])->name('article.update');

 /* Route N°13 */
// Route::post('/article/destroy/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');
// require __DIR__.'/auth.php';

 /* Route N°13 */
 Route::get('/article/commentaire/{id}', [CommentaireController::class, 'index'])->name('commentaire.index');
 /* Route N°13 */
 Route::post('/article/commentaire/{id}', [CommentaireController::class, 'store'])->name('addCommentaire');

 /* Route N°13 */
 Route::post('/article/commentaire/edit/{id}', [CommentaireController::class, 'update'])->name('commentaire.update');
