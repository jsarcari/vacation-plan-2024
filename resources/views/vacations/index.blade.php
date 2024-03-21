<x-layout title="Vacations">
    <a href="/vacations/create" class="btn btn-dark mb-2">New Holiday Plan</a>
    <ul class="list-group">
        @foreach ($vacations as $vacation)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div><strong>Title:</strong> {{ $vacation->title }} | <strong>Description:</strong> {{ $vacation->description }} | <strong>Date:</strong> {{ $vacation->date }} | <strong>Location:</strong> {{ $vacation->location }} | <strong>Participants:</strong> {{ $vacation->participants }}</div> 
            <form action="{{ route('vacations.destroy', $vacation->id) }}" method="post">    
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">X</button>
            </form>
        </li>
        @endforeach
    </ul>
</x-layout>
