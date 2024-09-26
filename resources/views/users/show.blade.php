<!-- resources/views/users/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Szczegóły Użytkownika</h1>

        <div class="mb-4">
            <strong>ID:</strong> {{ $user->id }}<br>
            <strong>Imię:</strong> {{ $user->first_name }}<br>
            <strong>Nazwisko:</strong> {{ $user->last_name }}<br>
            <strong>Email:</strong> {{ $user->email }}<br>
        </div>

        <div class="flex justify-between mt-6">
            <a href="{{ route('users.edit', $user) }}" class="inline-flex items-center px-4 py-2 bg-gray-800
            border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest
            hover:bg-gray-700focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500
                focus:ring-offset-2 transition ease-in-out duration-150">Edytuj Użytkownika</a>
            <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent
                rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
                focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500
                focus:ring-offset-2 transition ease-in-out duration-150">Usuń Użytkownika</button>
            </form>
        </div>
        <a href="{{ route('users.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border
        border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
                focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500
                focus:ring-offset-2 transition ease-in-out duration-150">Powrót do listy użytkowników</a>
    </div>
@endsection
