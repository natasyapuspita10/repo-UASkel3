@component('mail::message')
# Register Wisata: {{$checkout->wisata->title}}

Hi {{$checkout->user->name}}
<br>Thank you for purchased <b>{{$checkout->wisata->title}}</b> ticket on Merachy!
Please see payment instruction by click the button below!

@component('mail::button', ['url' => route('user.checkout.invoice', $checkout->id)])
Login here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
