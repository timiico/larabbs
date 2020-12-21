<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
class UserRequest extends FormRequest
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
            'name'         => 'required|between:3,25|regex:/^[\x{4e00}-\x{9fa5} A-Za-z0-9-_]+$/u|unique:users,name,'.Auth::id(),
            'email'        => 'required|email',
            'introduction' => 'nullable|max:80',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '昵称不能为空',
            'name.between'  => '昵称需3-25个字体',
            'name.unique'   => '昵称已存在,请再次尝试新昵称',
            'introduction'  => '个人简介字数不能超出80个'
        ];
    }

}
