<?php

namespace App\Http\Requests\Dashboard\Patients;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
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
            'name' => ['required' , 'max:30'],
            'address' => ['required' , 'max:191'],
            'description' => ['required' ,'min:10'],
            'image' => ['nullable' ,'image']
        ];
    }
}
