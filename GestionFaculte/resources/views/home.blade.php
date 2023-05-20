@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(session('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
