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
                    <h1 class="h3 mb-0 text-gray-800">{{ __('Crear Equipo') }}</h1>
                    <a href="{{ route('admin.teams.index') }}" class="btn btn-primary btn-sm shadow-sm">{{ __('Regresar') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.teams.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{ __('Nombre') }}</label>
                        <input type="text" class="form-control" id="name" placeholder="{{ __('Nombre') }}" name="name" value="{{ old('name') }}" />
                    </div>
                    <div class="form-group">
                        <label for="categorie">{{ __('Categoría') }}</label>
                        <select name="categories_id" id="categorie" class="form-control" required>
                            @foreach($categories as $id => $categorie)
                                <option value="{{ $id }}" {{ (in_array($id, old('team', [])) || isset($team) && $team->categories->id == $id) ? 'selected' : '' }}>{{ $categorie }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="genre">{{ __('División por Género') }}</label>
                        <select name="genre" id="genre" class="form-control" required>
                            <option value="Femenil">Femenil</option>
                            <option value="Varonil">Varonil</option>
                            <option value="Mixto">Mixto</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Guardar') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection