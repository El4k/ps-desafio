<?php

namespace App\Http\Requests;

use Brick\Math\Exception\IntegerOverflowException;
use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{

  public function rules()
  {
    return [
      'nome' => [
        'required', 'min:3', 'max: 200'
      ],
      'preco' => [
        'required', 'min:0', 'max: 1000', 'numeric'
      ],
      'descricao' => [
        'required', 'min:1', 'max: 800'
      ],
      'quantidade' => [
        'required', 'min:0', 'max: 100', 'numeric'
      ],
      'imagem' => [
        'required'
      ],
      'categoria_id' => [
        'required'
      ]
    ];
  }
}
