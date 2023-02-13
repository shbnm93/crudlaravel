<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        if(request()->isMethod('post')) {
            return [
                'title' => 'required|string|max:258',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description' => 'required|string',
                'price' => 'required|integer|max:258',
                'stock' => 'required|string|max:258'
            ];
        } else {
            return [
                'title' => 'required|string|max:258',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description' => 'required|string',
                'price' => 'required|integer|max:258',
                'stock' => 'required|string|max:258'
            ];
        }
    }

    public function messages()
    {
        if(request()->isMethod('post')) {
            return [
                'title.required' => 'Title is required!',
                'image.required' => 'Image is required!',
                'description.required' => 'Descritpion is required!',
                'price.required' => 'Price is required!',
                'stock.required' => 'Stock is required!'
            ];
        } else {
            return [
                'title.required' => 'Title is required!',
                'description.required' => 'Descritpion is required!',
                'price.required' => 'Price is required!',
                'stock.required' => 'Stock is required!'
            ];   
        }
    }
}
