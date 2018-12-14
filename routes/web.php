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

Route::get('/', function () {
    return view('auth/login');
});
/*/Route::prefix('principal')->group(function (){

    Route::get('/principal', array('as' => '/principal', function () {
        return view('principal');
    }));

});/*/


Route::get('/login', 'LoginController@GO')->name('login.GO');
Route::get('/fornecedor', 'FornecedorController@GO')->name('fornecedor.GO');
Route::get('/pedidos', 'PedidosController@GO')->name('pedidos.GO');
Route::get('/relatorio', 'RelatorioController@GO')->name('relatorio.GO');
Route::get('/produtos/remove/{id}', 'ProdutoController@remover')->name('produtos.remove');
Route::resource('produtos', 'ProdutoController');

Route::get('/marcas/produtos/{id}', 'MarcaController@produtos')->name('marcas.produtos');
Route::get('/marcas/remove/{id}', 'MarcaController@remover')->name('marcas.remove');
Route::post('/marcas2', 'MarcaController@store2')->name('marcas.store2');
Route::resource('marcas', 'MarcaController');

Route::get('/categorias/produtos/{id}', 'CategoriaController@produtos')->name('categorias.produtos');
Route::get('/categorias/remove/{id}', 'CategoriaController@remover')->name('categorias.remove');
Route::post('/categorias2', 'CategoriaController@store2')->name('categorias.store2');
Route::resource('categorias', 'CategoriaController');
Route::get('/cadastrar', 'CategoriaController@cade')->name('categorias.cade');


Auth::routes();
