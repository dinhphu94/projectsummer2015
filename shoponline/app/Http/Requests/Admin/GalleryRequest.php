<?php

namespace App\Http\Requests\Admin;
use Illuminate\Foundation\Http\FormRequest;
use Lang;

class GalleryRequest extends FormRequest {

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
            
        ];
    }

    public function attributes()
    {
        return[
            'product_id' => Lang::get('admin/gallery.product_id'),
            'image_name' => Lang::get('admin/gallery.image_name'),
            'image_path' => Lang::get('admin/gallery.image_path'),
        ];

    }

}

