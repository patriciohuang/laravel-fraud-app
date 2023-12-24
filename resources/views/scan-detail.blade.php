@extends('layouts.main')

@section('title', 'Scan detail')

@section('main')
<main class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-gray-100 dark:bg-gray-900 dark:text-white selection:bg-red-500">
  <section class="m-20">
    <h2 class="text-3xl font-semibold my-4">Scan detail</h2>
    <div class="overflow-x-auto">
      <table class="min-w-full my-5 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 shadow-md rounded-md text-gray-800 dark:text-gray-100">
        <thead class="dark:border-gray-700 dark:bg-gray-900">
          <tr>
            <th class="py-4 px-4 border-b">Customer ID</th>
            <th class="py-4 px-4 border-b">First Name</th>
            <th class="py-4 px-4 border-b">Last Name</th>
            <th class="py-4 px-4 border-b">Fraudulent</th>
            <th class="py-4 px-4 border-b">Reasons</th>
          </tr>
        </thead>
        <tbody>
          @foreach($customers as $customer)
            <tr class="{{ $customer->fraudulent ? 'bg-red-200 dark:bg-purple-800' : '' }}">
              <td class="py-2 px-4 border-b text-center">{{$customer->customer_id}}</td>
              <td class="py-2 px-4 border-b text-center">{{$customer->first_name}}</td>
              <td class="py-2 px-4 border-b text-center">{{$customer->last_name}}</td>
              <td class="py-2 px-4 border-b text-center">
                @if($customer->fraudulent)
                  <span class="ont-semibold">Yes</span>
                @else
                  <span class="text-gray-600 font-semibold">No</span>
                @endif
              </td>
              <td class="py-2 px-4 border-b text-center">{{$customer->reasons}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
</main>
