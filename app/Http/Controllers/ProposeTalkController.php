<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTalkProposalRequest;
use App\Models\TalkProposal;

class ProposeTalkController
{
    public function index()
    {
        return view('proposeTalk');
    }

    public function store(StoreTalkProposalRequest $request)
    {
        (new TalkProposal())
            ->fill($request->validated())
            ->save();

        flash()->success("Thank you for your proposal. We'll get in touch if we think it is interesting for our meetup.");

        return back();
    }
}
