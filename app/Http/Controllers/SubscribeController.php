<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeRequest;

class SubscribeController
{
    public function __invoke(SubscribeRequest $request)
    {
        $request->emailList()->subscribe($request->email);

        session()->flash('email-submitted');

        return redirect()->to(url()->previous() . '#newsletter');
    }
}
