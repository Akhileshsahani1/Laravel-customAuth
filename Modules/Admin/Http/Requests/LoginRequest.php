<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\JsonResponse;
use App\Traits\ResponseTrait;

class LoginRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
              'email'=>'required|email',
               'password'=> 'required|min:5|max:8',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function message()
    {
        return [
             'email.email'=>'email must be true',
             'password.min'=>"Password must be 6 character",
             'password.max'=>"Password  is not grater then 8 character"
 
         ];
    }
    public function authorize()
    {
        return true;
    }
}
