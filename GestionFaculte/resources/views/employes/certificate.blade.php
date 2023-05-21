@extends('adminlte::page')

@section('title', 'Employes Management System | Create')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row my-5">
                <div class="col-md-6 mx-auto">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-dark">
                        Add new employe
                    </h3>
                </div>
                <div class="card-body">
                    <form method="POST" class="mt-3" action="{{ route('employes.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="fullname" class="form-label fw-bold">Full Name</label>
                            <input type="text" name="fullname" value="{{old("fullname")}}" placeholder="Full Name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="registration_number">Registration Number</label>
                            <input type="text" name="registration_number" value="{{old("registration_number")}}"  placeholder="Registration Number" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="depart">Role</label>
                            <select class="form-control" name="role">
                                <option value="CHEFDEP">CHEFDEP</option>
                                <option value="PROFESSEUR">PROFESSEUR</option>
                            </select>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="depart">Departement</label>
                            <select class="form-control" name="departement_id"> <!-- Updated field name to departement_id -->
                                @foreach($departements as $departement)
                                    <option value="{{ $departement->id }}">{{ $departement->Nom_Departement }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="classe_id">Classe</label>
                            <select class="form-control" name="classe_id"> <!-- Updated field name to classe_id -->
                                @foreach($classes as $classe)
                                    <option value="{{ $classe->id }}">{{ $classe->Nom_Classe }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="depart">Matiere</label>
                            <select class="form-control" name="matiere_id"> <!-- Updated field name to matiere_id -->
                                @foreach($matieres as $matiere)
                                    <option value="{{ $matiere->id }}">{{ $matiere->Nom_Matiere }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="hire_date">Hiring Date</label>
                            <input type="date" class="form-control" value="{{old("hire_date")}}"  placeholder="Hiring Date" name="hire_date">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="phone">Phone</label>
                            <input type="text" class="form-control" value="{{old("phone")}}"  placeholder="Phone" name="phone">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="address">Address</label>
                            <input type="text" class="form-control" value="{{old("address")}}"  placeholder="Address" name="address">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="city">City</label>
                            <input type="text" class="form-control" value="{{old("city")}}"  placeholder="City" name="city">
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

