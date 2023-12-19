@component('mail::message')
# Welcome!

Hi {{$user->name}}
<br>Welcome to Merachy,
your account has been created successfully.
Now you can explore more Unique things and Places with no worries!

@component('mail::button', ['url' => route('login')])
Login here 
@endcomponent

Thanks, <br>
{{ config('app.name') }}
@endcomponent
