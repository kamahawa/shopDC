<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
				'username' => 'required|unique:users',
				'email' => 'required|email|max:255|unique:users',
				'password' => 'required|min:6|confirmed',
				'password-confirm' => 'confirmed'
		];
	}

	public function messages()
	{
		return [
				'username.required' => 'Please enter username',
				'email.required' => 'Please enter email',
				'password.required' => 'Please enter password'
		];
	}
}