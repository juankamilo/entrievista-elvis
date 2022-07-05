<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Football Data App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="container pt-4">
    <h1>Resultados</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="row">Liga</th>
            <th scope="row">Fecha</th>
            <th scope="col">Equipo de casa</th>
            <th scope="col">Equipo visitante</th>
            <th scope="col">Ganador</th>
        </tr>
        </thead>

        <tbody>
            <th scope="row">{{ $competition }}</th>
            <td>{{ $date }}</td>
            <td>{{ $home_team }}</td>
            <td>{{ $away_team }}</td>
            <td>{{ $winner }}</td>
        </tbody>
    </table>

    <a href='/'><button class="btn btn-primary w-100 mb-5">Nueva busqueda</button></a>
</div>

</body>
</html>
