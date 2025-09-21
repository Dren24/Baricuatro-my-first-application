<x-layout>
    <x-slot name="heading">
        Contact Us ✉️
    </x-slot>

    <p class="lead">Got questions? We’d love to hear from you.</p>

    <form class="mt-4">
        <div class="mb-3">
            <label class="form-label">Your Name</label>
            <input type="text" class="form-control" placeholder="Enter your name">
        </div>
        <div class="mb-3">
            <label class="form-label">Your Email</label>
            <input type="email" class="form-control" placeholder="Enter your email">
        </div>
        <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea class="form-control" rows="4" placeholder="Write your message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</x-layout>
