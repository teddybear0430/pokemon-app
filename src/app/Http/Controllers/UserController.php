<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show(Request $request, string $id) 
    {
        $user = User::findOrFail($id);

        return view('user.show', [
            'user' => $user,
        ]);
    }
}
