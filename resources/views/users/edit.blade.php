<!-- resources/views/users/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Edytuj Użytkownika</h1>

        <form action="{{ route('users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Imię:</label>
                <input type="text" name="first_name" id="name" value="{{ old('name', $user->first_name) }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-500">
            </div>

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nazwisko:</label>
                <input type="text" name="last_name" id="name" value="{{ old('name', $user->last_name) }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-500">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-500">
            </div>

            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent
                rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
                focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500
                focus:ring-offset-2 transition ease-in-out duration-150">Zapisz zmiany</button>
        </form>
    </div>
@endsection
