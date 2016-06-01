<form name="create_post_form" action="{{ route('post.store') }}" method="POST">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="title" class="sr-only">Title</label>
        <input type="text" class="form-control input-lg" id="title" name="title" placeholder="title" />
    </div>
    <div class="form-group">
        <label for="body" class="sr-only">Body</label>
        <textarea rows="6" required class="form-control input-lg" id="body" name="body" placeholder="body"></textarea>
    </div>
    <button class="btn btn-primary btn-lg" type="submit">Create</button>
</form>
