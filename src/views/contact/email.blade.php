@component('mail::message')
# Introduction

{{ $message }}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks, {{ $name }} <br>
{{ config('app.name') }}
@endcomponent
