<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'body' => ['required'],
            'user_id' => ['required']
        ];
    }
}
