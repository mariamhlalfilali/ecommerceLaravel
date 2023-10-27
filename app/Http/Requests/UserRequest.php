<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
{
    $userId = $this->route('userId');

    $passwordRules = [
        'required',
        'min:8',
        Rule::unique('users')->ignore($userId),
        'max:191',
    ];

    if ($this->filled('password')) {
        $passwordRules[] = 'confirmed';
    }

    return [
        'password' => $passwordRules,
        'email' => [
            'required',
            'email',
            Rule::unique('users')->ignore($userId),
            'max:191',
        ],
        'name' => 'required|max:191',
        'prenom' => 'required|min:3|max:191',
    ];
}
}
