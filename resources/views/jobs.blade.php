<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <h1>Jobs</h1>

    <ul>
        @foreach ($jobs as $job)
            <li> 
                <a href="/jobs/{{$job['id']}}">
                    <strong>{{$job['title']}}:</strong> pays {{$job['salary']}} per year 
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>