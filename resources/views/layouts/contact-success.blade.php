@extends('layouts.app')

@section('content')

<section>
<div class="container mx-auto p-4">
        <div class="bg-white shadow-md rounded-lg p-6 max-w-md mx-auto">
            <h2 class="text-2xl font-bold mb-4 text-center">Message Sent</h2>
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            <div class="text-center">
                <a href="{{ url('/contact') }}" class="bg-indigo-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Go Back</a>
            </div>
        </div>
    </div>
</section>

@endsection