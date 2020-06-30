@extends('mailcoach::landingPages.layouts.landingPage', ['title' => __('Unsubscribed')])

@section('content')
    <p>
        {{ __('Sorry to see you go.') }}
    </p>
    <p class="mt-4">
        You have been unsubscribed.
    </p>
@endsection
