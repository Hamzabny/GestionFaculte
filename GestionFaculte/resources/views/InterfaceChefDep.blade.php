@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard chef departement</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4"> 
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{\App\Models\Student::count()}}</h3>
                    <p>Etudiant</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{url('chefDep/etudiant-list_CD')}}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
