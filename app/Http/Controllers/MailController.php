<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public static function sendEmail($fname, $email, $lname)
    {
        $data = [
            'fname' => $fname,
            'lname' => $lname,
            'email' => $email
        ];

        //dd($receveremail);
        //dd($data);

       Mail::to($email)->send(new SendMail($data));


    }

}
