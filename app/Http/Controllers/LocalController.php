<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\TinderContact;
use App\TinderAnswer;

class LocalController extends Controller
{
    public function renderEmail($tinder_contact_id, $tinder_answer_id)
    {
        $tinder_contact = TinderContact::find($tinder_contact_id);
        $tinder_answer = TinderAnswer::find($tinder_answer_id);
        $data = [
            'tinder_contact' => $tinder_contact,
            'tinder_answer' => $tinder_answer,
            'match' => true
        ];

        return view('email.tinder.result', $data);
    }
}
