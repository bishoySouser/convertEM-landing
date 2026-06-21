<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\ComingSoon;
use App\Models\LandingRequest;
use App\Mail\NewLandingRequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $landingRequest = LandingRequest::create([
            'email' => $request->email,
        ]);

        Mail::to(config('mail.from.address', 'admin@example.com'))->send(new NewLandingRequestMail($landingRequest));

        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }
}
