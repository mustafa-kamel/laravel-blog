@component('mail::message')
# Introduction
Hello {{ $user->name }}
The body of your message.

@component('mail::button', ['url' => ''])
Confirm
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
