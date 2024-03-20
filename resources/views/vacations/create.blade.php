<x-layout title="New Holiday Plan">
    <form action="vacations/save" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <button type="submit" class="btn btn-dark mb-2">Add vacation</button>
        <a href="/vacations" class="btn btn-dark mb-2">Back</a>
    </form>
</x-layout>