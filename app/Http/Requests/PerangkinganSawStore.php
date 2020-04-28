<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerangkinganSawStore extends FormRequest
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
            'dosen_id'      => ['required', 'exists:dosens,id', 'unique:perangkingan_saws'],
            'nilai'         => ['required', 'numeric'],
            'evaluated_by'  => ['required', 'max:255']
        ];
    }
}
