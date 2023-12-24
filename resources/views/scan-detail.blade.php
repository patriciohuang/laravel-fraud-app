@extends('layouts.main')

@section('title', 'Scan detail')

@section('main')
<main class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-gray-100 dark:bg-gray-900 dark:text-white selection:bg-red-500">
  <section class="m-20">
    <h2 class="text-4xl font-semibold mb-6">Scan Detail</h2>
    <p class="text-gray-600 dark:text-gray-300 mb-4">Date: {{$scan->created_at}}</p>
    <p class="text-gray-600 dark:text-gray-300 mb-8">Fraudulent: {{$scan->fraudulent_count}} %</p>
    <div class="overflow-x-auto">
      <table class="w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 shadow-md rounded-md text-gray-800 dark:text-gray-100">
        <thead class="bg-gray-200 dark:bg-gray-700">
          <tr>
            <th class="py-4 px-6 border-b">Customer ID</th>
            <th class="py-4 px-6 border-b">First Name</th>
            <th class="py-4 px-6 border-b">Last Name</th>
            <th class="py-4 px-6 border-b">Fraudulent</th>
            <th class="py-4 px-6 border-b">Reasons</th>
          </tr>
        </thead>
        <tbody>
          @foreach($scan->customers as $customer)
            <tr class="{{ $customer->fraudulent ? 'bg-red-100 dark:bg-purple-800' : '' }}">
              <td class="py-3 px-6 border-b text-center">{{$customer->customer_id}}</td>
              <td class="py-3 px-6 border-b text-center">{{$customer->first_name}}</td>
              <td class="py-3 px-6 border-b text-center">{{$customer->last_name}}</td>
              <td class="py-3 px-6 border-b text-center">
                @if($customer->fraudulent)
                  <span class="font-semibold">Yes</span>
                @else
                  <span class="text-gray-600 font-semibold">No</span>
                @endif
              </td>
              <td class="py-3 px-6 border-b text-center">
                @foreach($customer->reasons as $reason)
                  <p>{{$reason}}</p>
                @endforeach
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
</main>
@endsection
