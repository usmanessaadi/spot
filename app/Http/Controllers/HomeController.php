<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Validator;
use Mail;
use App\Mail\ContactFormMail;

class HomeController extends Controller
{


    public function index()
    {
        return view('spot', ['events' => Event::all()]);
    }

    /**
     * Sending Mail Function
     */

    public function send(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            $response = array(
                'status' => 'fails',
                'error' => $validator->messages()->first() . ' please try again,  or call thespot directly',
            );
            return response()->json($response, 404);
        } else {
            $response = array(
                'status' => 'success',
                'msg' => 'Your Message was been sent successfully, a lot of thanks from the Spot Team',
            );
            Mail::to('hello@thespot.ma')->send(new ContactFormMail($request->all()));
            return response()->json($response, 200);
        }
    }




    public function webdev()
    {
        return view('webdev');
    }
    
    public function dashboard()
    {
        return view('dashboard');
    }
}
