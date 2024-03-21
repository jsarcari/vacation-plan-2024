<x-layout title="New Holiday Plan">
    <form action="/vacations" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title <strong>*</strong></label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description <strong>*</strong></label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date <strong>*</strong></label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location <strong>*</strong></label>
            <input type="text" class="form-control" id="location" name="location">
        </div>
        <div class="mb-3">
            <label for="participants" class="form-label">Participants</label>
            <textarea class="form-control" id="participants" name="participants"></textarea>
        </div>
        <button type="submit" class="btn btn-dark mb-2">Add vacation</button>
        <a href="/vacations" class="btn btn-dark mb-2">Back</a>
    </form>
</x-layout>