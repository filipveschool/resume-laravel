<?php

namespace App\Http\Controllers\Front;

use App\Events\ContactEmailSended;
use App\Http\Controllers\Controller;
use App\Http\Requests\SendMessageRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    /**
     *
     * Send a mail with the message to the email specified in the contact form.
     *
     * @param \App\Http\Requests\SendMessageRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function SendMessageRequest(SendMessageRequest $request) : \Illuminate\Http\RedirectResponse
    {
        $name      = $request->input('name');
        $emailFrom = $request->input('email');
        $body      = $request->input('message');

        event(new ContactEmailSended($name, $emailFrom, $body));

        flash()->info(__('texts.mailsended'));

        return redirect()->route('contact')->with('info', __('texts.mailsended'));

    }
}
