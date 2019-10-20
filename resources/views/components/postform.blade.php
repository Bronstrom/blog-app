<div class="postform">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>

    <div class="form-group">
        <label for="body">Body</label>
        <input type="text" class="form-control" id="body" name="body">
    </div>

    <button type="submit" class="btn btn-primary">{{ $title }}</button>
</div>
