<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentStoreRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return \Auth::check();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'surname'=>'required|string|max:255',
			'name'=>'required|string|max:255',
			'patronymic'=>'required|string|max:255',
			'groups.*'=>'required|integer',
		];
	}
}
