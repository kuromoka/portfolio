<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Inquiry;
use App\Mail\InquiryReceived;

class InquiryController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required|max:1024',
        ]);

        $inquiry = Inquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        Mail::to($request->email)->send(new InquiryReceived($inquiry));
    }
}
