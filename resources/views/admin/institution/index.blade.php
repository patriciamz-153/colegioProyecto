<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<table>
    <thead>
        <th>Nombre</th>
        <th>Siglas</th>
    </thead>
    <tbody>
        @foreach($institutions as $institution)
        <tr>
            <td>{{ $institution->nombre }}</td>
            <td>{{ $institution->siglas }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>