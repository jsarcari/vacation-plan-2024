<x-layout title="Vacations">
    <a href="/vacations/create" class="btn btn-dark mb-2">New Holiday Plan</a>
    <ul class="list-group">
        @foreach ($vacations as $vacation)
        <li class="list-group-item">{{ $vacation }}</li>
        @endforeach
    </ul>
</x-layout>
