<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CaixaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'dataSolicitada'=>'required',
            'nome'=>'required',
            'setor_id' => 'required',
            'valorSolicitado'=>'required',
            'descricao'=>'required'
        ];
    }
}
