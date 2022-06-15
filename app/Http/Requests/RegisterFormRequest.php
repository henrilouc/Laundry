<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
            'name'   => 'bail|required|max:200',
            'email'      => 'bail|required|max:150|email:rfc,dns|unique:users,email',
            'password'      => [
                'required',
                'same:password_confirmation',
                'string',
                'min:8',             // must be at least 10 characters in length
                'regex:/[0-9]/',      // must contain at least one digit
            ],
            'password_confirmation' => 'bail|same:password|required',
            'cpf'      => 'bail|required|cpf|unique:users,cpf',
            'phone'  => 'bail|required',
            'birth' => 'bail|required|date',
        ];
    }

    public function messages()
    {
        return[
            'name.required'                   => 'O campo Nome é obrigatório.',
            'birth.required'                  => 'O campo Data Nascimento é obrigatório.',
            'cpf.required'                    => 'O campo CPF é obrigatório.',
            'cpf.cpf'                         => 'Por favor digite um CPF válido.',
            'cpf.unique'                      => 'Já existe um usuário com os cpf informado.',
            'name.max'                        => 'Limite de caractéres excedido.',
            'phone.between'                   => 'Por favor insira um Telefone válido',
            'phone.required'                  => 'O campo telefone é obrigatório',
            'email.required'                  => 'O campo Email é obrigatório.',
            'email.email'                     => 'Por favor insira um Email válido.',
            'email.max'                       => 'Limite de caractéres excedido.',
            'email.unique'                    => 'Já existe um usuário com os dados informados. Use a opção de recuperar senha de acesso.',
            'password.required'               => 'O campo Senha é obrigatório.',
            'password.min'                    => 'A senha deve ter no minimo 8 caracteres.',
            'password.regex'                  => 'Formato de senha inválido. Ela deve conter pelo menos uma letra',
            'password_confirmation.required'  => 'O campo confirmar Senha é obrigatório.',
            'password_confirmation.same'      => 'As senhas devem ser iguais.',
            'password.same'                   => 'As senhas devem ser iguais.'
        ];
    }
}
