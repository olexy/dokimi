@component('mail::message')
{{ $data['name'] }}

{{ $data['email']}}

{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
