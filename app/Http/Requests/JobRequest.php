<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title"=>"required|max:60",
            "body"=>"required",
            "lang"=>"required",
            "order"=>"required",
            "number"=>"required",
            "status"=>"required",
            "email"=>"required",
            "address"=>"required",
            "phone"=>"required",
            "mobile"=>"required",
        ];
    }
}
