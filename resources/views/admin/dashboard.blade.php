@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Panel de Control</h1>
    </div>

<!-- Content Row -->
    <div class="row">
        <div class="col-xl-3 col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="{{ route('admin.teams.index') }}">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Equipos
                                </div>
                            </a>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="col-xl-3 col-md-4 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="{{ route('admin.players.index') }}">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Jugadores
                                </div>
                            </a>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-running fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="col-xl-3 col-md-4 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <a href="{{ route('admin.games.index') }}">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Partidos
                                </div>
                            </a>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-futbol fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-4 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                               Hee Hoo</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-snowflake fa-2x text-gray-300"></i>
                            <iframe width="225" height="200" src="https://www.youtube.com/embed/RqcNX7O9z0U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Content Row -->

</div>
@endsection