<x-mail::message>
# Solicitud respondida

Su solicitud ha sido marcada como {{$application->is_approved ? 'APROBADA' : 'NEGADA'}}
Por parte de la comisión {{$application->committee->name}}

Gracias,<br>
{{ config('app.name') }}
</x-mail::message>
