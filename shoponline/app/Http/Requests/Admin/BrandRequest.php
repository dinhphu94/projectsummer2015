<?php
namespace App\Http\Requests\Admin;
use Illuminate\Foundation\Http\FormRequest;
use Lang;

class BrandRequest extends FormRequest {

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
            'brand_name'=>'required||unique:brand,brand_name,',
        ];
    }

    public function attributes()
    {
        return[
            'brand_name' => Lang::get('admin/brand.brand_name'),

        ];

    }

}

