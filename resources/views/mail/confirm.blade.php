<x-mail::message>
Спасибо за ваше сообщение!

Наши специалисты скоро с вами свяжутся.
    <div style="background-color: grey; color: white">
        {{ $mailSubject }} <br> <br>
    {{ $message }}
    </div>>
С уважением,<br>
{{ config('app.name') }}
</x-mail::message>
