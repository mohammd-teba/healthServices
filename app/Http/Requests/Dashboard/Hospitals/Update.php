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
            'name' => ['required' , 'max:191'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users,email,'.$this->user],
            'phone' => ['required' , 'max:10'],
            'fax' => ['required' , 'max:10'],
            'address' => ['required' , 'max:191'],
            'meta_keywords' => ['max:20'],
            'meta_des' => ['max:191'],
            'doctorsNo' => ['required' , 'integer'],
            'image' => ['nullable' ,'image']
        ];
    }
}
