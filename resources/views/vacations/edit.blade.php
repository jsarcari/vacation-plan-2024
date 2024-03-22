<x-layout title="Edit Holiday Plan">
    <x-vacations.form :action="route('vacations.update', $vacation->id)" :title="$vacation->title" :description="$vacation->description" :date="$vacation->date" :location="$vacation->location" :participants="$vacation->participants" />
</x-layout>