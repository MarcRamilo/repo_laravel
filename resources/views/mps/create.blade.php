<!-- resources/views/mps/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="mt-8">
            <h1 class="text-2xl font-bold mb-4">Crear Nuevo MP</h1>
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('mps.store') }}" method="POST" class="mt-4">
                @csrf
                <div class="mb-4">
                    <label for="campo1" class="block text-gray-700 text-sm font-bold mb-2">Campo 1:</label>
                    <input type="text" id="campo1" name="campo1" class="form-input rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="campo2" class="block text-gray-700 text-sm font-bold mb-2">Campo 2:</label>
                    <input type="text" id="campo2" name="campo2" class="form-input rounded-md shadow-sm">
                </div>
                <!-- Agrega aquí los campos adicionales que desees para tu recurso MP -->
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Guardar</button>
            </form>
        </div>
    </div>
@endsection
