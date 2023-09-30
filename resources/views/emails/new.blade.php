<x-mail::message>
# Introduction
Dear Admin,<br>
You have a new message.<br>
    Sender: {{ $emails->name ?? 'Name Not Provided' }}<br>
    Sender Email: {{ $emails->email ?? 'No Email Provided' }}<br>
    Message: "{{ $emails->message }}"

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
