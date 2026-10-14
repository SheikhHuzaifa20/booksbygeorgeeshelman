<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules = [
            'page_name' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
        ];

        $page = $this->route('page');
        if ($page instanceof \App\Models\Page && (int) $page->id === 3) {
            $rules['text2'] = 'nullable|string';
        }

        return $rules;
    }
}
