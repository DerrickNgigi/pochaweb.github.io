<?php

namespace App\Http\Controllers;

use App\feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function show()
    {

        $feedback = feedback::latest()->get();
        return view('home', ['feedback' => $feedback]);
    }

    public function create()
    {

        return view('contact');

    }

    public function store()
    {
        feedback::create($this->validateFeedback());
        return redirect("customers");
    }

    public function validateFeedback()
    {
        return request()->validate(['Name' => 'required',
            'Email' => 'required',
            'message' => 'required'
        ]);
    }
}
