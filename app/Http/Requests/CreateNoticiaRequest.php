<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNoticiaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'noticia'=>['required', 'max:100']
        ];
    }
    public function messages()
    {
      return[
        'noticia.required'=>'Por favor, escribe el título de la noticia',
        'noticia.max'=>'El titulo de la noticia debe superar los 100 caracteres'

      ];
    }
}
