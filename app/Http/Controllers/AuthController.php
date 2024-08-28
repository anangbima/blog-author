<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    function login(Request $request) {
        $account = Account::where('username', $request->username)->first();

        // Check Username
        if ($account) {
            if (password_verify($request->password, $account->password)) {

                // Menyimoan data user login kedalam session
                session([
                    'username'  => $account->username,
                    'name'      => $account->name,
                    'role'      => $account->role,
                ]);

                // Check role
                if ($account->role == 'admin') {
                    return redirect()->to('/admin/');
                }elseif($account->role == 'author'){
                    return redirect()->to('/author');
                }
            }else{
                dd('Password tidak sesuai');
            }
        }else{
            dd('Username tidak tersedia');
        }
    }

    public function logout(Request $request){
        $request->session()->flush();

        return redirect('/');
    }
}
