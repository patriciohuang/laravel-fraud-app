@extends('layouts.main')

@section('title', 'History')

@section('main')
<main class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-gray-100 dark:bg-gray-900 selection:bg-red-500 selection:text-white">
  <section class="m-20 text-center">
    <h2 class="text-4xl font-bold mb-6 dark:text-white">Scan History</h2>
    @if(count($scans) > 0)
      <div class="overflow-x-auto">
        <table class="w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 shadow-md rounded-md text-gray-800 dark:text-gray-100">
          <thead class="bg-gray-200 dark:bg-gray-700">
            <tr>
              <th class="py-4 px-6 border-b">Date</th>
              <th class="py-4 px-6 border-b">Amount of Fraudulents</th>
            </tr>
          </thead>
          <tbody>
            @foreach($scans as $scan)
              <tr class="transition-all duration-300 ease-in-out hover:bg-gray-100 dark:hover:bg-gray-600">
                <td class="py-3 px-6 border-b text-center">
                  <a href="{{ route('scan-detail', ['id' => $scan->id]) }}" class="text-blue-500 hover:underline">
                    {{ $scan->created_at }}
                  </a>
                </td>
                <td class="py-3 px-6 border-b text-center">{{ $scan->fraudulent_count }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @else
    <div class="bg-[url('../img/search.png')] dark:bg-[url('../img/search-dark-mode.png')] my-24 h-64 w-64 bg-center bg-no-repeat"></div>
    <p class="dark:text-white my-5">There are no previous scans</p>
    <a href="/" class="text-blue-500 hover:underline">Go back to Home</a>
    @endif
  </section>
</main>
@endsection
