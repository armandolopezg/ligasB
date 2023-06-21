@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
   

    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
               {{ $team->name }}  player 
                </h6>
                <div class="ml-auto">
                    <a href="{{ route('admin.teams.index') }}" class="btn btn-primary">
                        <span class="text">{{ __('Regresar') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover " cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nombre</th>
                                <th>Cumpleaños</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($team->players as $player)
                            <tr data-entry-id="{{ $team->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $player->name }}</td>
                                <td>{{ $player->birth_date }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">{{ __('Vaciar Datos') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
            <h6 class="my-2 font-weight-bold text-primary">
               {{ $team->name }}  Games 
                </h6>
            <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover " cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Equipo 1</th>
                                <th>Equipo 2</th>
                                <th>Hora de Inicio</th>
                                <th>Rsultado 1</th>
                                <th>Resultado 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($games as $game)
                            <tr data-entry-id="{{ $team->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $game->team1->name }}</td>
                                <td>{{ $game->team2->name }}</td>
                                <td>{{ $game->start_time }}</td>
                                <td>{{ $game->result1 }}</td>
                                <td>{{ $game->result2 }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">{{ __('Vaciar Datos') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
    <!-- Content Row -->

</div>
@endsection
