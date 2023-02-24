<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactMessageRequest extends FormRequest
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
        return [
            'name' => 'max:30',
            'email' => 'max:50',
            'subject' => 'max:50',
            'text' => 'max:30000'
        ];
    }

    public function messages()
    {
        return [
            'name.max' => 'Введённое имя слишком длинное. Укажите Ваше имя (без фамилии и отчества).',
            'email.max' => 'Введённая электронная почти слишком длинная.',
            'subject.max' => 'Введённая тема сообщения слишком длинна. Будьте лаконичны.',
            'text.max' => 'Введено слишком много текста. Попробуйте сократить Ваше сообщение.'
        ];
    }
}
