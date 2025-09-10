<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'user_message' => $request->message, // 🔥 jangan pakai "message"
        ];

        \Mail::send('email.contact', $data, function ($mail) use ($request) {
            $mail->to('cs@anugrahdigital.co.id')
                ->subject('New Contact Form Submission');
        });

        return back()->with('success', 'Thank you for contacting us!');
    }

}
