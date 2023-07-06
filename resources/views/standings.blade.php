@extends('layouts.cliente')

@section('content')
<div class="row">
  <div class="col-md-12">
      <div class="title">
          <h2>Tabla de Posiciones</h2>
          <span>Conoce la tabla de posiciones de cada equipo.</span>
      </div>
  </div>
  <div class="col-md-12">
    <div class="card">
          <h3 class="card-header">
            Tabla de Posiciones
          </h3>
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-borderless">
              <thead class="table-success">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Equipo</th>
                  <th scope="col">Ganado</th>
                  <th scope="col">Ligado</th>
                  <th scope="col">Perdido</th>
                  <th scope="col">Puntos</th>
                </tr>
              </thead>
              <tbody>
                @foreach($teams as $team)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->won }}</td>
                    <td>{{ $team->tied }}</td>
                    <td>{{ $team->lost }}</td>
                    <td>{{ $team->points }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            </div>
          </div>
      </div>
  </div>
</div>

@endsection