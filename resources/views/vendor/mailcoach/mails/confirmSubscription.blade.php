@component('mail::message')
Hi,

You can confirm your subscription to the meetup.laravel.com by clicking the button below.

We will only use your email address to send you mails regarding upcoming events.

@component('mail::button', ['url' => $confirmationUrl])
    {{ __('Confirm subscription') }}
@endcomponent

@endcomponent
