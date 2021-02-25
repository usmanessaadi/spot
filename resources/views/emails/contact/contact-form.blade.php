@component('mail::message')
# A message has been received from

<strong>Name</strong> {{ $data['name']}} <br>
<strong>Phone</strong> {{ $data['phone']}} <br>
<strong>Email</strong> {{ $data['email']}} <br>
<strong>Messaage</strong> {{ $data['message']}} <br>

Thanks,<br>

{{ config('app.name') }}
@endcomponent
