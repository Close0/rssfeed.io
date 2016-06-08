<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use App\Feed;
use Auth;

class FeedUpdateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $feedId = $this->route('feeds');

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
            'title' => 'required',
            'link' => 'required',
            'description' => 'required',
        ];
    }
}
