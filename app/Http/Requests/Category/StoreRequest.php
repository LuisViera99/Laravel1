<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;


class StoreRequest extends FormRequest
{
    /**
     * 
     * Determine if the user is authorized to make this request.
     */

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => str($this->title) ->slug()
         ]);
    }


     static public function myRules()
     {
        return [
            "title" => "required|min:5|max:500",
            "slug" => "required|min:5|max:500|unique:posts",
        ];

     }
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return $this -> myRules();
    }
}
