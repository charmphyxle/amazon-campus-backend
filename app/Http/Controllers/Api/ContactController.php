<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        $inputs = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric|digits_between:10,20',
            'inquiry_type' => 'required|max:255',
            'subject' => 'required|max:255',
            'message' => 'required|string|max:1000',
        ]);   
        
        Mail::send(new ContactMail($inputs));

        return response()->json([
            'message' => 'Contact form submitted successfully.',
            'data' => $inputs,
        ], 200);
    }
}
