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
        <h1>Football Data App</h1>

        <form action="{{ route('search') }}" method="POST">
            <select name="select-competition" class="form-control mb-4">
                <option value="CL" name="Champions League">Champions League</option>
                <option value="PL" name="Premier League">Premier League</option>
            </select>

            <div class="d-flex gap-3 mb-5">
                <input type="number" name="matchday" class="form-control w-50" placeholder="Dia del partido (dejar vacio para buscar todo el mes)">
                <input type="submit" class="btn btn-primary w-50" value="Buscar" />
            </div>
        </form>

        @if(!empty($array_result))
        <h2>Busquedas recientes</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="row">#</th>
                    <th scope="row">Fecha</th>
                    <th scope="col">ID Competición</th>
                    <th scope="col">Nombre de la competición</th>
                    <th scope="col">Ganador</th>
                    <th scope="col">Dia del partido</th>
                </tr>
            </thead>

            <tbody>
            @foreach($array_result as $result)
                <tr>
                    <th scope="row">{{ $result['id'] }}</th>
                    <td>{{ $result['created_at'] }}</td>
                    <td>{{ $result['competition_id'] }}</td>
                    <td>{{ $result['competition_name'] }}</td>
                    <td>{{ $result['winner'] }}</td>
                    <td>{{ isset($result['matchday']) ? $result['matchday'] : 'Busqueda General' }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        @else
            @if(isset($error))
                <p class="text-danger">{{ $error }}</p>
                <a href="/">Regresar</a>
            @else
                <h3>No hay ninguna busqueda reciente</h3>
            @endif
        @endif
    </div>

    </body>
</html>
