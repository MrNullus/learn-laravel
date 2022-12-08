<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{

  public function index() {
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
  }

  public function create() {
    return view('events.create');
  }

}
