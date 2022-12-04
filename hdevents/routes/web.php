<?php

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

Route::get('/', function () {
  $nome = 'Gustavo';
  $idade = 17;
  $arr = [1, 2, 3, 4, 5];
  $nomes = ['Maria', 'Pádme', 'Cycrux', 'Lucanda Barbosa'];

  return view(
    'welcome',
    [
      'nome'      => $nome,
      'idade'     => $idade,
      'profissao' => 'Programador',
      'arr'       => $arr,
      'nomes'     => $nomes
    ]
  );
});

Route::get('/contact', function () {
  return view('contact');
});

Route::get('/products', function () {
  $busca = request('search');

  return view('products', ['busca' => $busca]);
});

Route::get('/products/{id}', function ($id) {
  return view('product', ['id' => $id]);
});

Route::get('/products_test/{id?}', function ($id = null) {
  return view('product', ['id' => $id]);
});
