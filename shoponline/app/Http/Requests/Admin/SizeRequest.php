<?php
namespace App\Http\Requests\Admin;
use Illuminate\Foundation\Http\FormRequest;
use Lang;

class SizeRequest extends FormRequest {


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
            'size_value'=>'required|unique:size,size_value,'.$this->get('id'),
        ];
    }

    public function attributes()
    {
        return[
            'height_value' => Lang::get('messages.height_value'),

        ];

    }

}

