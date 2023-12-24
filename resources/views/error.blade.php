@extends('layouts.main')

@section('title', 'Error')

@section('main')
<main class="flex items-center justify-center min-h-screen bg-center bg-gray-100 dark:bg-gray-900 selection:bg-red-500 selection:text-white">
  <section class="text-center dark:text-white">
    <div class="bg-[url('../img/warning.png')] dark:bg-[url('../img/warning-dark-mode.png')] my-24 h-64 w-64 bg-center bg-no-repeat mx-auto"></div>
    <h2 class="text-4xl font-bold text-gray-800 dark:text-gray-200 mb-6">Oops! Something went wrong</h2>
    <p class="text-lg text-gray-600 dark:text-gray-400 mb-8">We apologize for the inconvenience. Please try again.</p>
    <a href="/" class="text-blue-500 hover:underline">Go back to Home</a>
  </section>
</main>
@endsection
