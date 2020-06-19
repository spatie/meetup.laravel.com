<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Spatie\Mailcoach\Models\EmailList;
use Spatie\Mailcoach\Rules\EmailListSubscriptionRule;

class SubscribeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => ['required', 'email', new EmailListSubscriptionRule($this->emailList())],
        ];
    }

    public function emailList(): EmailList
    {
        return EmailList::where('name', 'Meetup')->first();
    }
}
