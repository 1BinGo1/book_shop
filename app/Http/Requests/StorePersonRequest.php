<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonRequest extends FormRequest
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
            'surname' => 'max:50',
            'name' => 'max:50',
            'patronymic' => 'max:50',
            'phone' => 'max:20',
            'date_of_birth' => 'date',
            'email' => 'bail|required|max:255|email:filter'
        ];
    }
}
