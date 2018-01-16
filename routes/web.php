 <?php

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
//Auth::routes();

Route::post('/login', 'AuthController@login')->name('login');
Route::post('/register', 'AuthController@register')->name('register');
Route::post('/logout', 'AuthController@logout')->name('logout');

Route::get('/', 'MainController@index')->name('home');
Route::get('/exchange', 'MainController@exchange')->name('exchange');
Route::get('/register', 'AuthController@create')->name('register');
Route::get('/logout', 'AuthController@destroy')->name('logout');
Route::get('/login', 'AuthController@login')->name('login');
Route::get('/account', 'AccountController@show')->name('account');
Route::get('/portfolio', 'PortfolioController@show')->name('portfolio');

Route::get('/test', function () {
	return Response::download(public_path('downloads/BTCUSDT_15m_1513316700_1514397599.csv'));
});