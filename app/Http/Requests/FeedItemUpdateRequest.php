<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FeedItemUpdateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $feedId = $this->route('feed');

        return Feed::where('id', $feedId)->where('user_id', Auth::id())->exists();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
