@extends('app')
@section('content')
    <div class="container w-25 border p-4 mt-4">
        <form action="{{ route('provincia', ['codigo' => $provincia->codigo]) }}" method="POST">
            @method('PATCH')
            @csrf
            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif
            @error('detalle')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            <div class="mb-3">
                <label for="detalle" class="form-label">Provincia</label>
                <input type="text" name="detalle" class="form-control" value="{{ $provincia->detalle }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar provincia</button>
            <a class="btn btn-danger" href="{{ route('provincias') }}">Volver</a>
        </form>
    </div>
@endsection
