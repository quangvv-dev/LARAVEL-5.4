<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;
class ValidateRequest extends FormRequest
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
            'name'          => 'required',
            'description'   => 'required',
            'leader'        => 'required',
        ];
    }
    public function messages()
    {
        return[
            // 'name.required' => 'khong dc bo trong',
            'required' => ' Không được để trống :attribute',
        ];
        $validator = Validator::make($input,$rules,$messages); 
    }
    
}
