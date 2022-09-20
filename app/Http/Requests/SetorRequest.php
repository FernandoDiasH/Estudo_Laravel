<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SetorRequest extends FormRequest
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
        $id = $this->route('id');
        return [
            'setor'=> "required|max:50|unique:setores,setor,{$id}",


        ];
    }

     /**
   * Get the error messages for the defined validation rules.
   *
   * @return array
   */

    // public function messages(){
    //     return [
    //         'setor.max' => 'Limite de caractere atingido.',

    //     ];
    // }
}
