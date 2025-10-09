<x-mail::message>
    # You got new contact mail from **{{ $inputs["name"] }}**. You can find full details below.

    <x-mail::table>
        | Key | Value |
        | :---------------- | ---------------------: |
        | **Name** | {{ $inputs["name"] }} |
        | **Email Address** | {{ $inputs["email"] }} |
        | **Subject** | {{ $inputs["subject"] }} |
        | **Inquiry Type** | {{ $inputs["inquiry_type"] }} |
        | **Phone Number** | {{ $inputs["phone"] }} |
    </x-mail::table>

    <x-mail::panel>
        {{ $inputs["message"] }}
    </x-mail::panel>

    Thanks,<br>
    {{ config("app.name") }}
</x-mail::message>
