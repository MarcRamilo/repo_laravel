<!-- resources/views/mps/index.blade.php -->

@extends('test.vista')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Lista de MPs</h1>
                <a href="{{ route('mps.create') }}" class="btn btn-primary">Crear Nuevo MP</a>
                <br><br>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Campo1</th>
                        <th>Campo2</th>
                        <th>Acciones</th>
                    </tr>
                    @foreach ($mps as $mp)
                        <tr>
                            <td>{{ $mp->id }}</td>
                            <td>{{ $mp->campo1 }}</td>
                            <td>{{ $mp->campo2 }}</td>
                            <td>
                                <form action="{{ route('mps.destroy',$mp->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('mps.show',$mp->id) }}">Mostrar</a>
                                    <a class="btn btn-primary" href="{{ route('mps.edit',$mp->id) }}">Editar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
