 <?php

use App\Http\Controllers\AddCategorieController;
 use App\Http\Controllers\ArticleController;
 use App\Http\Controllers\CatégorieController;
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
})->middleware(['auth'])->name('home');

/* Route N°3 */
Route::get('/categorie', [CatégorieController::class, 'index'])->middleware(['auth'])->name('dashboard');

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
Route::delete('/categorie/{id}', [CatégorieController::class, 'destroy'])->name('delete_categ');
require __DIR__.'/auth.php';
