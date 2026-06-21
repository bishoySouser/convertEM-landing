<x-mail::message>
# New Landing Page Request

A new user has just subscribed from the landing page.

**Email:** {{ $landingRequest->email }}

<x-mail::button :url="config('app.url')">
View App
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
