<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Carbon\Carbon; 

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.forgot-password');
    }

    public function profCreate()
    {
        return view('prof.forgot-password');
    }
    public function profStore(Request $request){
        $request->validate([
            'email' => 'required|email|exists:professeurs,email',
        ]);
            $token = \Str::random(64);
            \DB::table('password_resets')->insert([
                'email'=>$request->email,
                'token'=>$token,
                'created_at'=>Carbon::now(),
            ]);
            $action_link =route('prof.password.reset',['token'=>$token,'email'=>$request->email]);
            $body="On a reçu une demande de réinitialisation de mot de passe pour le compte de <b> EST Meknes e-learning platform</b>
             associé à l'email ".$request->email.".Veuillez cliquer sur le lien ci-dessous. ";
            \Mail::send('email-forgot',['action_link'=>$action_link,'body'=>$body],function($message) use ($request){
                $message->from('noreply@example.com','E-learning App');
                $message->to($request->email,'')
                        ->subject('Demande de réinitialisation');

    
            });
            return back()->with('status','Le lien a été envoyé, veuillez verifier votre adresse électronique !');
    }
    public function adminCreate()
    {
        return view('admin.forgot-password');
    }

    public function adminStore(Request $request){
        $request->validate([
            'email' => 'required|email|exists:admins,email',
        ]);
            $token = \Str::random(64);
            \DB::table('password_resets')->insert([
                'email'=>$request->email,
                'token'=>$token,
                'created_at'=>Carbon::now(),
            ]);
            $action_link =route('admin.password.reset',['token'=>$token,'email'=>$request->email]);
            $body="On a reçu une demande de réinitialisation de mot de passe pour le compte de <b> EST Meknes e-learning platform</b>
             associé à l'email ".$request->email.".Veuillez cliquer sur le lien ci-dessous. ";
            \Mail::send('email-forgot',['action_link'=>$action_link,'body'=>$body],function($message) use ($request){
                $message->from('noreply@example.com','E-learning App');
                $message->to($request->email,'')
                        ->subject('Demande de réinitialisation');

    
            });
            return back()->with('status','Le lien a été envoyé, veuillez verifier votre adresse électronique !');
    }
    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $token = \Str::random(64);
        \DB::table('password_resets')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>Carbon::now(),
        ]);
        $action_link =route('admin.password.reset',['token'=>$token,'email'=>$request->email]);
        $body="On a reçu une demande de réinitialisation de mot de passe pour le compte de <b> EST Meknes e-learning platform</b>
         associé à l'email ".$request->email.".Veuillez cliquer sur le lien ci-dessous. ";
        \Mail::send('email-forgot',['action_link'=>$action_link,'body'=>$body],function($message) use ($request){
            $message->from('noreply@example.com','E-learning App');
            $message->to($request->email,'')
                    ->subject('Demande de réinitialisation');


        });
        return back()->with('status','Le lien a été envoyé, veuillez verifier votre adresse électronique !');
  }
}
