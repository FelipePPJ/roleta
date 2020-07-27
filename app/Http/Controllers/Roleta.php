<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Roleta extends Controller
{
    /**
     * @see Criação de parametros para controle da roleta
     */
    public $premios = array(
        array(
            'posicao' => 25,
            'nome' => '10% desconto'
        ),
        array(
            'posicao' => 65,
            'nome' => '3% desconto'
        ),
        array(
            'posicao' => 110,
            'nome' => '5% desconto'
        ),
        array(
            'posicao' => 150,
            'nome' => 'Tente outra vez!'
        ),
        array(
            'posicao' => 200,
            'nome' => '5% desconto'
        ),
        array(
            'posicao' => 245,
            'nome' => '3% desconto'
        ),
        array(
            'posicao' => 290,
            'nome' => '10% desconto'
        ),
        array(
            'posicao' => 340,
            'nome' => 'Tente outra vez!'
        )
    );

    public function roleta()
    {
      return view('roleta', ['premios' => json_encode($this->premios, JSON_UNESCAPED_UNICODE)]);
    }
}
