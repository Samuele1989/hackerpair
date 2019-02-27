<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventStoreRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:50',
            'city' =>  'required|string|min:2|max:50',
            'venue' => 'required|string|min:2|max:50',
            'description' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Please provide an event :attribute',
            'min' => 'Event :attribute must consist of at least 2 characters',
            'max' => 'Event :attribute cannot be longer than 50 characters'
        ];
    }
}
