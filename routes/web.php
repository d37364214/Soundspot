use App\Http\Controllers\IndexController;
use App\Http\Controllers\PageController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/{page}', [PageController::class, 'show']);