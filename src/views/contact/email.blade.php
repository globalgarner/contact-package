@component('mail::message')
# Introduction
there is new query from {{$name}}
message:
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
