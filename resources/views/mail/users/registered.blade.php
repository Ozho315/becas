<x-mail::message>
# Usuario registrado | Credenciales de acceso

Estimado/a estudiante {{ $student->name . ' ' . $student->last_name }}, se ha registrado existosamente en el sistema de
becas <br />
A continuación listamos las credenciales de acceso

Usuario: {{$student->user->email}}
Contraseña: {{$student->identification_number}}

<x-mail::button :url="config('app.url')">
Ir al sistema de becas
</x-mail::button>

Gracias,<br>
{{ config('app.name') }}
</x-mail::message>
