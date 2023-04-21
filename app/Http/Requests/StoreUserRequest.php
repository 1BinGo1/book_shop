<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
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
            'surname' => ['max:50'],
            'name' => ['bail', 'required','max:50'],
            'patronymic' => ['max:50'],
            'phone' => ['bail','max:20', Rule::unique('users')->ignore(Auth::user()->id)],
            'date_of_birth' => ['date'],
            'email' => ['bail','required','max:255','email', Rule::unique('users')->ignore(Auth::user()->id)]
        ];
    }
}
