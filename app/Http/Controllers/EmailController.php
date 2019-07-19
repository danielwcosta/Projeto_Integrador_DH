<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMailUser;
use Session;

class EmailController extends Controller
{
    public function postContact(Request $request)
    {
        $inputs = $request->validate([
            'name'=> 'required|between:3,50',
            'email'=> 'required|between:5,50',
            'mensagem'=> 'required|min:5',
        ]);
        mail::to('matchsports.brasil@gmail.com')
            ->send(new SendMailUser($inputs));
        Session::flash('sucess','Obrigado, email enviado com sucesso!');

        return redirect('/#fale-conosco');
    }
}
