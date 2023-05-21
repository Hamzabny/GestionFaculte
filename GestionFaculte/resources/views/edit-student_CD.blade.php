<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Edit student</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('chefDep/etudiant-list_CD') }}">Back</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <div class="col-lg-12">
            <h2>Edit student</h2>
             @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
        </div>
        <form action="{{ url('/chefDep/save-student_CD/'.$listeetu->id) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" value="{{ $listeetu->nom }}" name="nom" id="nom">
                @error('nom')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" value="{{ $listeetu->prenom }}" name="prenom" id="prenom">
                @error('prenom')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" value="{{ $listeetu->email }}" name="email" id="email">
                @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="datedenaissance" class="form-label">Date de Naissance</label>
                <input type="date" class="form-control" value="{{ $listeetu->datedenaissance }}" name="datedenaissance" id="datedenaissance">
                @error('datedenaissance')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="depart">Department</label>
                            <select class="form-control" name="departement_id">
                                @foreach($departements as $departement)
                                    <option value="{{ $departement->id }}" {{ $listeetu->departement_id == $departement->id ? 'selected' : '' }}>
                                        {{ $departement->Nom_Departement }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="depart">Classe</label>
                            <select class="form-control" name="classe_id">
                                @foreach($classes as $classe)
                                    <option value="{{ $classe->id }}" {{ $listeetu->classe_id == $classe->id ? 'selected' : '' }}>
                                        {{ $classe->Nom_Classe }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
