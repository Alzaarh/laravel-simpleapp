<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

class MessagesController extends Controller
{
    public function showForm() {

        return view('contact');

    }

    public function submit(Request $request) {

        $rules = [

            'name' => 'required|string',

            'email' => 'required|email',

            'message' => 'required|string'

        ];

        $data = $request->validate($rules);

        $message = Message::create($data);

        return redirect('/')->with('success', 'message was sent');

    }

    
}
