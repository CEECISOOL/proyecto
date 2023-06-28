@extends('app')
@section('content')
    <div class="container w-25 border p-4 mt-4">
        <form action="{{ route('provincias') }}" method="POST">
            @csrf

            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif
            @error('detalle')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            <div class="mb-3">
                <label for="detalle" class="form-label">Provincia</label>
                <input type="text" name="detalle" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Crear nueva provincia</button>
        </form>
        <br>
        <br>
        <div>
            @foreach ($provincias as $p)
                <div class="row align-items-start">
                    <div class="col-5">
                        <p>{{ $p->detalle }}</p>
                    </div>
                    <div class="col-3">
                        <a class="btn btn-primary btn-sm"
                            href="{{ route('provincia', ['codigo' => $p->codigo]) }}">Modificar</a>
                    </div>
                    <div class="col-1">
                        <form action="{{ route('provincia', [$p->codigo]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
