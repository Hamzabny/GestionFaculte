<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container py-4">
        <div class="col-lg-12">
            <h2>Edit student</h2>
             @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
        </div>
        <form action="{{ url('/professeur/save-student/'.$listeetu->id) }}" method="post">
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
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ url('professeur/etudiant-list') }}" class="btn btn-danger">Back</a>
        </form>
    </div>
</body>
</html>
