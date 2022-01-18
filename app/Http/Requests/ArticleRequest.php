<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'featured' => 'boolean',
            'title' => 'required|string|max:150',
            'url' => 'required|string|max:150',
            'imageUrl' => 'required|string|max:150',
            'newsSite' => 'required|string|max:60',
            'summary' => 'required|string|max:500',
            'publishedAt' => 'required|string|max:30',
            'updatedAt' => 'required|string|max:30',
            'launches' => 'required|string',
            'events' => 'required|string',
        ];
    }
}
