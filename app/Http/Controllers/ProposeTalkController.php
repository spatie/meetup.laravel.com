<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTalkProposalRequest;

class ProposeTalkController
{
    public function index()
    {
        return view('proposeTalk');
    }

    public function store(StoreTalkProposalRequest $request)
    {

    }
}
