<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionFormRequest extends FormRequest
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
            'amount'   => 'bail|required',
            'file'   => 'bail|required|mimes:pdf,jpg,jpeg,png'

        ];
    }

    public function messages()
    {
        return[
            'file.mimes' => 'Apenas pdf,jpg,jpeg,png são permitidos.',
            'amount.required'                   => 'Por favor insira uma quantidade.',
            'file.required'                   => 'O Comprovante é obrigatório.',
        ];
    }
}
