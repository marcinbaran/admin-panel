<!-- resources/views/users/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Dodaj Nowego Użytkownika</h1>

        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="first_name" class="block text-sm font-medium text-gray-700">Imię:</label>
                <input type="text" name="first_name" id="first_name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-500">
            </div>

            <div class="mb-4">
                <label for="last_name" class="block text-sm font-medium text-gray-700">Nazwisko:</label>
                <input type="text" name="last_name" id="last_name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-500">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" name="email" id="email" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-500">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Hasło:</label>
                <input type="password" name="password" id="password" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-500">
            </div>

            <button type="submit" class="w-full bg-indigo-600 py-2 rounded-md hover:bg-indigo-700">Utwórz użytkownika</button>
        </form>
    </div>
@endsection
