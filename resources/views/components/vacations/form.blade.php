<form action="{{ $action }}" method="post">
    @csrf
    @isset($title)
    @method('PUT')
    @endisset
    <div class="mb-3">
        <label for="title" class="form-label">Title <strong>*</strong></label>
        <input type="text" class="form-control" id="title" name="title" @isset($title)value="{{ $title }}"@endisset>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description <strong>*</strong></label>
        <input type="text" class="form-control" id="description" name="description" @isset($description)value="{{ $description }}"@endisset>
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Date <strong>*</strong></label>
        <input type="date" class="form-control" id="date" name="date" @isset($date)value="{{ $date }}"@endisset>
    </div>
    <div class="mb-3">
        <label for="location" class="form-label">Location <strong>*</strong></label>
        <input type="text" class="form-control" id="location" name="location" @isset($location)value="{{ $location }}"@endisset>
    </div>
    <div class="mb-3">
        <label for="participants" class="form-label">Participants</label>
        <textarea class="form-control" id="participants" name="participants" @isset($participants)value="{{ $participants }}"@endisset></textarea>
    </div>
    <button type="submit" class="btn btn-dark mb-2">@isset($title) Edit @endisset @empty($title) Add @endempty vacation</button>
    <a href="/vacations" class="btn btn-dark mb-2">Cancel</a>
</form>