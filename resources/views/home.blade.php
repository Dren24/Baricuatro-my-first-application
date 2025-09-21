<x-layout>
    <x-slot name="heading">
        Welcome Home 🏡
    </x-slot>

    <div class="text-center">
        <p class="lead">This is your personalized Laravel website layout. Clean, modern, and made only for you.</p>

        <div class="mt-4">
            <a href="{{ url('/about') }}" class="btn btn-primary btn-lg me-2">Learn More About Us</a>
            <a href="{{ url('/contact') }}" class="btn btn-outline-primary btn-lg">Get in Touch</a>
        </div>
    </div>
</x-layout>
