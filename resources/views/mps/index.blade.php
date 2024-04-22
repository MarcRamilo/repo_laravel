<!-- resources/views/mps/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="mt-8">
            <h1 class="text-2xl font-bold mb-4">Llista de MPs</h1>
            <a href="{{ route('mps.create') }}" class="inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Crear Nou MP</a>
            <br><br>
            @if ($message = Session::get('success'))
            <x-flash_ok :message="$message" />
            @endif
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Camp1</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Camp2</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Accions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($mps as $mp)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $mp->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $mp->campo1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $mp->campo2 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center space-x-4">
                                    <a href="{{ route('mps.show',$mp->id) }}" class="text-indigo-600 hover:text-indigo-900">Mostrar</a>
                                    <a href="{{ route('mps.edit',$mp->id) }}" class="text-blue-600 hover:text-blue-900">Editar</a>
                                    <form id="deleteForm" action="{{ route('mps.destroy',$mp->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" data-modal-target="popup-modal" data-modal-toggle="popup-modal" data-modal class="text-red-600 hover:text-red-900">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    

    
    
@endsection
