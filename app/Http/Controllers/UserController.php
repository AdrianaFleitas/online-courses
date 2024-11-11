<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use HasRoles;
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard(Request $request)
    {
        if (Auth::check()) {
            return view('dashboard');
        }
        return redirect()->route('loadLoginPage')
        ->withErrors([
            'email' => 'Please, enter credentials.',
        ])->onlyInput('email');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function users(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->hasRole('admin')) {
                 $users = User::get();
        return view('users', compact('users'));
            }else {
                return redirect('/dashboard')->with('error','Your role is not available for this view');
            }

        }
        return redirect()->route('loadLoginPage')
        ->withErrors([
            'email' => 'Please, enter credentials.',
        ])->onlyInput('email');
    }
}
