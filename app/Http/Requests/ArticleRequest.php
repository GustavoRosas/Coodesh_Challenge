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
            'title' => 'required|string',
            'url' => 'required|string',
            'imageUrl' => 'required|string',
            'newsSite' => 'required|string',
            'summary' => 'required|string',
            'publishedAt' => 'required|string',
            'updatedAt' => 'required|string',
            'launches' => 'required|string',
            'events' => 'required|string',
        ];
    }
}
