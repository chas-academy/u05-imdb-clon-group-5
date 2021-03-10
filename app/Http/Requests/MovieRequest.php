<?php
////////////////////////////////////
//                                //
//Added some rules to the request!//
//                                //
////////////////////////////////////
namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            //Added some rules to the request!
            'title' => 'required|min:5|max:100',
            'director' => 'required|min:5|max:50',
            'writer' => 'required|min:5|max:50',
            'description' => 'required',
            'year' => 'required',
            'runtime' => 'required',
            'release_date' => 'required',
            'img' => 'required'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
