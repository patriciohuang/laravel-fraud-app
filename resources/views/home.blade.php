@extends('layouts.main')

@section('title', 'Home')

@section('main')
<main class="flex items-center justify-center min-h-screen bg-center bg-gray-100 dark:bg-gray-900 selection:bg-red-500 selection:text-white">
  <section class="text-center">
    <h1 class="text-4xl font-bold mb-4 dark:text-white">Fraud Detection Dashboard</h1>
    <p class="text-gray-600 dark:text-gray-300">
      Welcome to the Fraud Detection Dashboard. Initiate a new scan to identify fraudulent activities among your customers.
    </p>
    <div class="my-20">
      <form action="{{ route('create-scan') }}" method="post" class="mt-6">
        @csrf
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full shadow-md transition duration-300 ease-in-out">
          Start New Scan
        </button>
      </form>
      <a href="{{ route('scans') }}" class="block mt-6">
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full shadow-md transition duration-300 ease-in-out">
          Scan History
        </button>
      </a>
    </div>
  </section>
</main>
@endsection