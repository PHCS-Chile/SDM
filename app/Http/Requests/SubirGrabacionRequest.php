<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubirGrabacionRequest extends FormRequest
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
            'grabacion' => 'required|mimes:mp3,wav,ogg,mp4a'
        ];
    }

    public function messages()
    {
        return [
            'grabacion.mimes' => 'El archivo debe tener un formato de audio permitido (MP3, WAV, OGG o M4A).',
        ];
    }
}
