<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App;
use Config;
use Mail;

class TinderController extends Controller
{
    public function __construct()
    {

    }

    public function getContactInfo(Request $request)
    {

        if ($request->isMethod('post')) {
            return redirect()->route('tinder.questions');
        }
        return view('tinder.contact');
    }

    public function getQuestions(Request $request)
    {

        if ($request->isMethod('post')) {
            $questions = $request->except(['_token', 'SKUS']);
            $skus = $request->input('SKUS');
            $match = true;
            foreach ($questions as $question) {
                $match = (bool) $question;
                if ($match === false) {
                    break;
                }
            }

            if ($skus < 500) {
                $match = false;
            }

            Mail::send('email.tinder', [], function ($message) {
                $message->from('2-execute@luc.net', 'den Luc');
                $message->to('ryckaertkevin@gmail.com', 'Kevin')->subject('Test email');
            });

            // Mail::raw('Text to e-mail', function ($message) {
            //     $message->from('postmaster@sandbox9366cf4d7ae0455193309910dd99c7dd.mailgun.org', '2-execute');
            //     $message->to('ryckaertkevin@gmail.com');
            // });

            // if ($match) {
            //     // Mail::send('emails.welcome', ['key' => 'value'], function ($message) {
            //     //     $message->to('foo@example.com', 'John Smith')->subject('Welcome!');
            //     // });

            //     Mail::raw('Text to e-mail', function ($message) {
            //         $message->from('postmaster@sandbox9366cf4d7ae0455193309910dd99c7dd.mailgun.org', '2-execute');

            //         $message->to('luc.geysen@2-execute.net')->cc('ryckaertkevin@gmail.com');
            //     });
            // }
            // var_dump($match);
            // exit;
        }
        return view('tinder.questions');
    }
}
