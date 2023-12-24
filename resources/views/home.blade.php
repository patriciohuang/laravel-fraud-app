@extends('layouts.main')

@section('title', 'Home')

@section('main')
<main class="flex items-center justify-center min-h-screen bg-center bg-gray-100 dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="text-center">
        <form action="{{ route('create-scan') }}" method="post">
            @csrf
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full shadow-md mt-4 transition duration-300 ease-in-out">
                Start New Scan
            </button>
        </form>

        <a href="{{ route('scans') }}" class="block mt-6">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full shadow-md transition duration-300 ease-in-out">
                Scan History
            </button>
        </a>
    </div>
</main>
@endsection
