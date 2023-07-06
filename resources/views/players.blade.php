@extends('layouts.cliente')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="title">
            <h2>Jugadores</h2>
            <span>Conoce los jugadores de cada equipo.</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">
              Lista de jugadores
            </h5>
            <ul class="list-group list-group-flush">
                @foreach($players as $player)
                  <li class="list-group-item">{{ $player->name }} <span class="float-end badge bg-info">{{ $player->team->name }}</span></li>   
                @endforeach
            </ul>
        </div>
    </div>

</div>
@endsection