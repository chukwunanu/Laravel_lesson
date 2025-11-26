<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-large">{{ $job['title'] }}</h2>

    <p>This job pays {{ $job['salary'] }} per month.</p>
    
</x-layout>