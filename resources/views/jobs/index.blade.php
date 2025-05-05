<x-layout>
    <x-slot:heading>
        <div class=" flex justify-between ">
            <div>Job listing</div>
        </div>
    </x-slot:heading>
    <div class="space-y-4">
    @foreach($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-b-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </div>
            </a>
    @endforeach

        {{--  Layout from tailwind to interact with pagination --}}
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
