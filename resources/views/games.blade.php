@extends('layouts.client')

@section('content')
        <div class="row mt-5 justify-content-center"  style="text-align: center">
            <div class="col-lg-6 mb-4">
                <h1>1a COPA</h1>
                <h2>Inscripciones Abiertas</h2>
                <div class="card">
                    <div class="card-header">
                    23 al 25 de Junio - Canchas del Instituto Bilingüe México
                    </div>
                    <ul class="list-group list-group-flush"> 
                        <li class="list-group-item">Cuota de Inscripción $3500</li>                  
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <h3>Ultimos Juegos</h3>
            @foreach($games as $game)
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                      Fecna:  {{ $game->start_time }}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $game->team1->name }}</li>
                        <li class="list-group-item">{{ $game->team2->name }}</li>
                    </ul>
                </div>
            </div>
            @endforeach

        </div>
        
        <div class="row mt-5">
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

        <div class="row mt-5 justify-content-center" style="text-align: center">
            <div class="col-lg-6 mb-4">
                <i class="fas fa-phone fa-2x">
                </i>
                <a href="tel:55-4370-5605">55-4370-5605</a>
                <a href="tel:56-3028-9595">56-3028-9595</a>
                <br>
                <i class="fas fa-map-marker-alt fa-2x">
                </i>
                <a>Francisco Sarabia Mz. 034, Col. San Isidro Atleuntenco, C.P. 55064, Ecatepec de Morelos, Estado de México</a>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7516.6865363913685!2d-98.990806!3d19.612617!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1efddf2ea30b7%3A0x1dcec4434b8d228b!2sCentro%20Cultural%20Ibime!5e0!3m2!1ses-419!2smx!4v1687377769929!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

@endsection