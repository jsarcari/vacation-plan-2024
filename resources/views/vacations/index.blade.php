<x-layout title="Vacations">
    <a href="/vacations/create" class="btn btn-dark mb-2">New Holiday Plan</a>
    @isset($messageSuccess)
    <div class="alert alert-success">
        {{ $messageSuccess }}
    </div>
    @endisset
    <ul class="list-group">
        @foreach ($vacations as $vacation)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div><strong>Title:</strong> {{ $vacation->title }} | <strong>Description:</strong> {{ $vacation->description }} | <strong>Date:</strong> {{ $vacation->date }} | <strong>Location:</strong> {{ $vacation->location }} | <strong>Participants:</strong> {{ $vacation->participants }}</div> 
            <span class="d-flex">
                <a href="{{ route('vacations.edit', $vacation->id) }}" class="btn btn-primary btn-sm">E</a>
                <form action="{{ route('vacations.destroy', $vacation->id) }}" method="post" class="ms-2">    
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">X</button>
                </form>
                <a href="{{ route('generate-pdf', $vacation->id) }}" class="btn btn-warning btn-sm ms-2">PDF</a>
            </span>
        </li>
        @endforeach
    </ul>
</x-layout>
