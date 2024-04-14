<!-- resources/views/mps/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="mt-8">
            <h1 class="text-2xl font-bold mb-4">Detalles del MP</h1>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Información del MP</h3>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">ID</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $mp->id }}</dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Campo 1</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $mp->campo1 }}</dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Campo 2</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $mp->campo2 }}</dd>
                        </div>
                        <!-- Agrega aquí los campos adicionales que deseas mostrar -->
                    </dl>
                </div>
            </div>
            <a href="{{ route('mps.index') }}" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Volver a la lista</a>
        </div>
    </div>
@endsection
