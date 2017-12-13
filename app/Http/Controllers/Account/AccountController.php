<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AccountController extends Controller
{
    public function update(Request $request)
    {
        $this->validate($request, [
          'avatar_id' => Rule::exists('images', 'id')
                          ->where(function ($q) use ($request) {
                            $q->where('user_id', $request->user()->id);
                          })
        ]);

        auth()->user()->update($request->only(['name', 'avatar_id']));

        return back();
    }
}
