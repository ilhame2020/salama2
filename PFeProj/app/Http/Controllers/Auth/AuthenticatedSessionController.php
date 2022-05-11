<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController 
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {   
        
            
   
        
         if ($request->routeIs('user.*')) {
             Auth::guard('web')->logout();
             $request->session()->invalidate();

             $request->session()->regenerateToken();
            
             return redirect('/login');
         }
         elseif($request->routeIs('prof.*')) {
             Auth::guard('webprof')->logout();
             $request->session()->invalidate();

             $request->session()->regenerateToken();
            
             return redirect('/professeur/login');
         }
    
         elseif($request->routeIs('admin.*')){
            Auth::guard('webadmin')->logout();
            $request->session()->invalidate();

            $request->session()->regenerateToken();
            return redirect('/admin/login');;
        }
    
       
    }

}