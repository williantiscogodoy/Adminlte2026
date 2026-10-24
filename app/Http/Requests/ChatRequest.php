<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ChatRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // Al editar, la ruta trae el chat; así el email no choca consigo mismo
        $chatId = $this->route('chat')?->id ?? $this->route('chat');

        return [
            'nombre'    => 'required|string',
            'apellidos' => 'nullable|string',
            'email'     => ['required', 'email', Rule::unique('chats', 'email')->ignore($chatId)],
            'telefono'  => 'nullable|string',
            'direccion' => 'required|string',
            'edad'      => 'required|integer',
        ];
    }
}