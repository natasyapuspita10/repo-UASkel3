@component('mail::message')
# Your Transaction Has Been ConfirmablePasswordController

Hi {{$checkout->user->name}}
<br>Your transaction has been confirmed,
we can't wait to see you at <b>{{$checkout->wisata->title}}!</b>.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent