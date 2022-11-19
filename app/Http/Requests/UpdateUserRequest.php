<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'name'                  => 'sometimes|string',
        'email'                 => 'sometimes|string|unique:users,email',
        'password'              => 'sometimes|string',
        'picture'               => 'sometimes|image|max:5000',
        'type_user_id'          => 'sometimes|integer|exists:type_users,id'
        ];
    }
}
