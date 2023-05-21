@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <p><h3>Hello :  {{ Auth::user()->name }} </h3> </p>
@stop

@section('content')
    <div class="row">
        
        <div class="col-md-4">
            
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{\App\Models\Employe::count()}}</h3>
                    <p>Employes</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{url('admin/employes')}}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{\App\Models\Departement::count()}}</h3>
                    <p>Employes</p>
                </div>
                <div class="icon">
                    <i class="fas fa-building"></i> <!-- Updated icon class -->
                </div>
                <a href="{{url('admin/employes/departementList')}}" class="small-box-footer">
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
