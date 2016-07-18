<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App;
use Config;
use Mail;
use App\TinderContact;
use App\TinderAnswer;
use Validator;

class TinderController extends Controller
{
    public function __construct()
    {

    }

    public function getContactInfoNoAnimations()
    {
        return view('tinder.contact-no-animations');
    }

    public function getContactInfo(Request $request)
    {
        $tinder_contact_id = Session::get('tinder_contact_id');
        $tinder_contact = null;
        if ($tinder_contact_id) {
            $tinder_contact = TinderContact::find($tinder_contact_id);
        }

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:50',
                'email' => 'required|email',
                'company' => 'required|string|max:50',
                'function' => 'string|max:50',
                'telephone_number' => 'string|max:15',
            ]);

            if ($validator->fails()) {
                return redirect()
                    ->route('tinder.contact-no-animations')
                    ->withErrors($validator)
                    ->withInput();
            }

            $tinder_contact = TinderContact::create(
                $request->only([
                    'name',
                    'email',
                    'company',
                    'function',
                    'telephone_number',
                ])
            );
            Session::put('tinder_contact_id', $tinder_contact->id);

            return redirect()->route('tinder.questions');
        }
        $data = ['tinder_contact' => $tinder_contact];

        return view('tinder.contact', $data);
    }

    public function getQuestions(Request $request)
    {
        $tinder_contact_id = Session::get('tinder_contact_id');
        if (!$tinder_contact_id) {
            return redirect()->route('tinder.contact');
        }

        if ($request->isMethod('post')) {
            $questions = $request->except(['_token', 'answer6']);
            $answer6 = $request->input('answer6');
            $match = true;
            foreach ($questions as $question) {
                $match = (bool) $question;
                if ($match === false) {
                    break;
                }
            }

            if ($answer6 < 500) {
                $match = false;
            }

            $tinder_contact = TinderContact::find($tinder_contact_id);
            if (!$tinder_contact) {
                return redirect()->route('tinder.contact');
            }
            $tinder_contact->match = $match;
            $tinder_contact->save();

            $tinder_answer = TinderAnswer::create(
                $request->only([
                    'answer1',
                    'answer2',
                    'answer3',
                    'answer4',
                    'answer5',
                    'answer6',
                    'answer7',
                    'answer8',
                ])
            );
            $tinder_contact->answers()->save($tinder_answer);

            // exit;
            $subject = null;
            if ($match) {
                Mail::send('email.tinder.success', [], function ($message) use ($tinder_contact) {
                    $message->from('info@2-execute.net', '2-execute');
                    $message->to($tinder_contact->email)->subject("It's a match!");
                    $message->bcc('ryckaertkevin@gmail.com');
                });
                $subject = 'Nieuwe match met ';
            } else {
                $subject = 'Geen match met ';
            }
            $subject .= $tinder_contact->name;
            $data = [
                'match' => $match,
                'tinder_contact' => $tinder_contact,
                'tinder_answer' => $tinder_answer,
            ];
            Mail::send('email.tinder.result', $data, function ($message) use ($subject) {
                $message->from('info@2-execute.net', '2-execute');
                $message->to('luc.geysen@2-execute.net')->subject($subject);
                $message->bcc('ryckaertkevin@gmail.com');
            });

            // var_dump($match);
            // exit;

            return redirect()->route('tinder.confirm');
        }
        return view('tinder.questions');
    }

    public function confirm()
    {
        $tinder_contact_id = Session::get('tinder_contact_id');

        if (!$tinder_contact_id) {
            return redirect()->route('tinder.contact');
        }

        $tinder_contact = TinderContact::find($tinder_contact_id);
        if (!$tinder_contact) {
            return redirect()->route('tinder.contact');
        }

        $data = ['tinder_contact' => $tinder_contact];

        return view('tinder.confirm', $data);
    }
}
