<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Str;

class StoreRequest extends FormRequest
{
    /**
     * 
     * Determine if the user is authorized to make this request.
     */

    protected function prepareForValidation()
    {
        $this->merge([

            // 'slug'=> Str::slug($this->title)
            //'slug'=> Str::of($this->title)->slug()
            'slug' => str($this->title) ->slug()
         ]);
    }


     static public function myRules()
     {
        return [
            "title" => "required|min:5|max:500",
            "slug" => "required|min:5|max:500|unique:posts",
            "content" => "required|min:7",
            "category_id" => "required",
            "description" => "required|max:500",
            "posted" => "required",


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
