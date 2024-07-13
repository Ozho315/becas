<table>
    <thead>
        <tr>
            <th>Fecha de creación de la solicitud</th>
            <th>Tipo de beca solicitada</th>
            <th>Estado de aprobación</th>
            <th>Identificación estudiante</th>
            <th>Nombre estudiante</th>
            <th>Comité asignado</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($applications as $app)
            <tr>
                <td>{{ $app->created_at }}</td>
                <td>{{ $app->scholarshipType->name }}</td>
                <td>{{ $app->is_approved === null ? 'PENDIENTE' : ($app->is_approved ? 'APROBADA' : 'NEGADA') }}</td>
                <td>{{ $app->student->identification_number }}</td>
                <td>{{ $app->student->name }}</td>
                <td>{{ $app->committee->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
