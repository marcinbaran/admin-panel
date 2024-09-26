<!-- resources/views/users/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Użytkownicy</h1>

        <a href="{{ route('users.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border
        border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
        focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
        transition ease-in-out duration-150">Dodaj użytkownika</a>

        <table class="min-w-full border border-gray-300">
            <thead>
            <tr class="bg-gray-100">
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Imię</th>
                <th class="py-2 px-4 border-b">Nazwisko</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Akcje</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-4 border-b">{{ $user->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $user->first_name }}</td>
                    <td class="py-2 px-4 border-b">{{ $user->last_name }}</td>
                    <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('users.show', $user) }}" class="text-indigo-600 hover:underline">Wyświetl</a>
                        <a href="{{ route('users.edit', $user) }}" class="text-indigo-600 hover:underline">Edytuj</a>
                        <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border
                            border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest
                            hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500
                            focus:ring-offset-2 transition ease-in-out duration-150">Usuń</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
