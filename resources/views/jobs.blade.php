<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                <li ><span class="font-bold">{{ $job['title'] }}:</span> pays {{ $job['salary'] }} per month</li>
            </a>
        @endforeach
    </ul>
    
</x-layout>