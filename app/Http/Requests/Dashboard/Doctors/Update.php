<?php

namespace App\Http\Requests\Dashboard\Hospitals;

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
            'specialization' => ['required' ,'max:20'],
            'workplace' => ['required' ,'max:191'],
            'experience' => ['required' ,'max:191'],
            'image' => ['nullable' ,'image']
        ];
    }
}
