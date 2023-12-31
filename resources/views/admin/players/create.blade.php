@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('Crear Jugadores') }}</h1>
                    <a href="{{ route('admin.players.index') }}" class="btn btn-primary btn-sm shadow-sm">{{ __('Regresar') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.players.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="surname">{{ __('Apellido') }}</label>
                        <input type="text" class="form-control" id="surname" placeholder="{{ __('Apellido') }}" name="surname" value="{{ old('surname') }}" />
                    </div>
                    <div class="form-group">
                        <label for="name">{{ __('Nombre') }}</label>
                        <input type="text" class="form-control" id="name" placeholder="{{ __('Nombre') }}" name="name" value="{{ old('name') }}" />
                    </div>
                    <div class="form-group">
                        <label for="birth_date">{{ __('Fecha de Nacimiento') }}</label>
                        <input type="date" class="form-control" id="birth_date" placeholder="{{ __('Cumpleaños') }}" name="birth_date" value="{{ old('birth_date') }}" />
                    </div>
                    <div class="form-group">
                        <label for="team">{{ __('Equipo') }}</label>
                        <select name="team_id" id="team" class="form-control" required>
                            @foreach($teams as $id => $team)
                                <option value="{{ $id }}" {{ (in_array($id, old('team', [])) || isset($player) && $player->team->id == $id) ? 'selected' : '' }}>{{ $team }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Guardar') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection