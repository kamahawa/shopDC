<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateRequest extends FormRequest
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
	        'txtCateName' => 'required|unique:cates,name',
        ];
    }

	//show error
	public function messages()
	{
		return [
			'txtCateName.required' => 'Please input category name.',
			'txtCateName.unique' => 'This name category is exits.',
		];
	}
}
