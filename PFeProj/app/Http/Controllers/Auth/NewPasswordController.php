<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Models\Admin;
use App\Models\Professeur;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('auth.reset-password', ['request' => $request]);
    }
    public function adminCreate(Request $request)
    {
        return view('admin.reset-password', ['request' => $request]);
    }
    public function profCreate(Request $request)
    {
        return view('prof.reset-password', ['request' => $request]);
    }
    /**
     * Handle an incoming new password request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
   
    public function adminStore(Request $request){
        $request->validate([
             'email'=>'required|email|exists:admins,email',
             'password'=>'required|min:5|confirmed',
             'password_confirmation'=>'required',
        ]);

        $check_token = \DB::table('password_resets')->where([
             'email'=>$request->email,
             'token'=>$request->token,
        ])->first();

        if(!$check_token){
            return back()->withInput()->with('fail', 'Invalid token');
        }else{
            Admin::where('email', $request->email)->update([
                'password'=>$request->password,
            ]);

            \DB::table('password_resets')->where([
                'email'=>$request->email
            ])->delete();

            return redirect()->route('admin.login')->with('info', 'Votre mot de passe a été modifié avec succès.')->with('verifiedEmail', $request->email);
        }
    }
    public function profStore(Request $request){
        $request->validate([
             'email'=>'required|email|exists:professeurs,email',
             'password'=>'required|min:5|confirmed',
             'password_confirmation'=>'required',
        ]);

        $check_token = \DB::table('password_resets')->where([
             'email'=>$request->email,
             'token'=>$request->token,
        ])->first();

        if(!$check_token){
            return back()->withInput()->with('fail', 'Invalid token');
        }else{
            Professeur::where('email', $request->email)->update([
                'password'=>$request->password,
            ]);

            \DB::table('password_resets')->where([
                'email'=>$request->email
            ])->delete();

            return redirect()->route('prof.login')->with('info', 'Votre mot de passe a été modifié avec succès.')->with('verifiedEmail', $request->email);
        }
    }
    public function store(Request $request)
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => $request->password,
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('user.login')->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
    }
}
