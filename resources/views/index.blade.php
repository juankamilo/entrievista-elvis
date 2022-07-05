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

        <form action="">
            <select name="" id="" class="form-control mb-4">
                <option>Bundesliga</option>
                <option>La Liga</option>
            </select>

            <input type="submit" class="btn btn-primary w-100 mb-5" value="Buscar" />
        </form>

        <h2>Busquedas recientes</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="row">#</th>
                    <th scope="row">Fecha</th>
                    <th scope="col">Competición</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>

            <tbody>
                <th scope="row">1</th>
                <td>01-01-2020</td>
                <td>Bundesliga</td>
                <td><button class="btn btn-success">Buscar nuevamente</button></td>
            </tbody>
        </table>
    </div>

    </body>
</html>
