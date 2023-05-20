<!DOCTYPE html>
<html lang="en">
<head>
    <title>Liste Etudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Liste Etudiant</a>
            <a class="navbar-brand" href="{{ url('/professeur/InterfaceProfesseur') }}">Dashboard</a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
                @endif
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Date de naissance</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listeetu as $l)
                <tr>
                    <td>{{ $l->id }}</td>
                    <td>{{ $l->nom }}</td>
                    <td>{{ $l->prenom }}</td>
                    <td>{{ $l->email }}</td>
                    <td>{{ $l->datedenaissance }}</td>
                    <td>
                        <a onclick="return confirm('Vous souhaitez modifier?')" href="{{ url('professeur/edit-student/'.$l->id) }}"><i class="bi bi-pencil-square text-success"></i></a>
                        <a onclick="return confirm('Vous souhaitez supprimer?')" href="{{ url('professeur/delete-student/'.$l->id) }}"><i class="bi bi-trash-fill text-danger"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
