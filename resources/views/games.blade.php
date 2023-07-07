@extends('layouts.cliente')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="title">
            <h2>Primera Copa</h2>
            <span>23 - 25 Junio</span>
        </div>
    </div>
</div>

    <div class="row">
        <div class="col-md-12">
            <div class="title">
                <h2>Juegos</h2>
                <span>Conoce los resultados de los partidos, ya seas un seguidor apasionado del baloncesto juvenil o un padre/madre orgulloso/a que anima a su hijo o hija en el deporte.</span>
            </div>
        </div>

        <div class="col-md-12">
            <h3>Ultimos Juegos</h3>
            <br>
            @foreach($games as $game)
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        Fecha:  {{ $game->start_time }}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $game->team1->name }}</li>
                        <li class="list-group-item">{{ $game->team2->name }}</li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>

        <div class="col-md-12">
            <h3>Resultados</h3>
            @foreach($results as $result)
            <div class="col-lg-6 mb-5">
                <div class="card">
                    <div class="card-header">
                        Fecha:  {{ $result->start_time }}
                        <span class="float-end badge bg-dark">Puntos</span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $result->team1->name }} <span class="float-end badge bg-success">{{ $result->result1 }}</span></li>
                        <li class="list-group-item">{{ $result->team2->name }} <span class="float-end badge bg-danger">{{ $result->result2 }}</span></li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
@endsection