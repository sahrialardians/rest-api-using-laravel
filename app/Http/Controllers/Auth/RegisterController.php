<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RegisterRequest $request)
    {
        User::create([
            'name'      => request('name'),
            'username'  => request('username'),
            'email'     => request('email'),
            'password'  => bcrypt(request('password'))
        ]);

        return request("Thanks, you are registered.");
    }
}
