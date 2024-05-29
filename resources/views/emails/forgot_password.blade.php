@component('mail::message')
Hi,{{ $user->name }}.forgot your password?
<p>It happends. click the link below to reset your password</p>
@component('mail::button',['url'=>url('reset/'.$user->remember_token)])
Reset Your Password
@endcomponent
! in case you have any issue recovery in your password , please contact is using the form from contact-as page
Thanks<br>
{{ config('app.name') }}
@endcomponent
