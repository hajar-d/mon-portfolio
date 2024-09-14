<!-- resources/views/contact.blade.php -->
@extends('layouts.app')

@section('content')


@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                iconColor: '#fff',
                title: 'Success!',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK',
                background: '#333', // Dark background
                color: '#fff', // Text color
                confirmButtonColor: '#007bff', // Confirm button color
                customClass: {
                    container: 'custom-container', // Add custom class for container
                    title: 'custom-title', // Add custom class for title
                    content: 'custom-content', // Add custom class for content
                    confirmButton: 'custom-confirm-button' // Add custom class for button
                }
            });
        });
    </script>
@endif


<form action="{{ route('contact.store') }}" method="POST" class="max-w-3xl mx-auto bg-gray-100 p-8 rounded-lg shadow-lg border border-gray-200">
    @csrf
    <div class="border-b border-gray-300 pb-8 mb-8">
        <h2 class="text-lg font-semibold text-gray-800">Personal Information</h2>
        
        <div class="mt-8 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-2">
            <div class="sm:col-span-1">
                <label for="nom" class="block text-sm font-medium text-gray-700">Name</label>
                <div class="mt-1">
                    <input type="text" id="nom" name="nom" required autocomplete="given-name" class="block w-96 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-9 p-2">
                </div>
            </div>
            
            <div class="sm:col-span-1">
                <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                <div class="mt-1">
                    <input id="email" name="email" type="email" autocomplete="email" class="block w-72 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm h-9 p-2">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <div class="mt-1">
                    <textarea class="p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="message" name="message" rows="6" required></textarea>
                </div>
            </div>
        </div>
        
        <div class="mt-6">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md shadow-sm transition duration-150 ease-in-out">Envoyer</button>
        </div>
    </div>
</form>

@endsection



  
    {{-- <form action="{{ route('contact.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="nom">Nom</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="nom" name="nom" required>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" id="email" name="email" required>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="message">Message</label>
          <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Envoyer</button>
      </form> --}}