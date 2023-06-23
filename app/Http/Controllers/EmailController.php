<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Providers\RouteServiceProvider;

class EmailController extends Controller
{
    public function recivedata(Request $request)
    {
        //dd($request->all());

        $validated = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
        ]);

        if($request != null)//send mail and send flash message
        {
            MailController::sendEmail($request->fname, $request->email, $request->lname);
            return redirect()->back()->with('success','Your message is successfully received. We will be in touch shortly');
        }
        else
        {
            return redirect()->back()->with('error','something went wrong!');//This was unnecessary.User must need to enter name and email before hit submit
        }

    }
}
