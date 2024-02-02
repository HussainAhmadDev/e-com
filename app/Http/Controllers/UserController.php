<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request) {

        if($request->method() == 'POST') {
 
            $where = [
                'email' => $request->email,
            ];

            $user = $this->User_m->where($where)->first();

            if($user && Hash::check($request->password, $user->password)) {
                $request->session()->put('user', $user->id);
                return redirect()->route('index');
            } else {

            }
        }

        return view('login');
    }

    public function logout(Request $request) {
        $value = $request->session()->pull('user');
        if($value) {
            return redirect()->route('logout');
        }
    }
}
