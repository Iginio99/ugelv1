<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResolucionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'dni' => ['max:255'],
            'ap_paterno' => ['max:255'],
            'ap_materno' => ['max:255'],
            'nombres' => ['max:255'],
            'num_rd' => ['max:255'],
            'periodo' => ['max:255'],
            'fecha' => ['max:255'],
            'asunto' => ['max:255'],
            'proy' => ['max:255'],
            'not_oficiona' => ['max:255'],
            'not_notificador' => ['max:255'],
            'fecha_notificacion' => ['max:255'],
            'firma' => ['max:255'],
            'foto' => ['max:255'],
            'fecha_registro' => ['max:255'],
            'observacion'=> ['max:255'],
            'idUsuario' => ['max:255']
        ];
    }
}
