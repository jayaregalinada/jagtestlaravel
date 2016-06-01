<div class="container">
    <ul class="nav nav-pills">
        <li @if (\Request::route()->getName() == 'index') class="active" @endif>
            <a href="{{ route('index') }}">Home</a>
        </li>
        <li @if (\Request::route()->getName() == 'post.create') class="active" @endif>
            <a href="{{ route('post.create') }}">Create Post</a>
        </li>
        @if (isset($post) && (\Request::route()->getName() == 'post.show'))
        <li>
            <a href="{{ route('post.edit', $post->id) }}">Edit Post</a>
        </li>
        @endif
        <li>
            <a href="{{ url('auth/logout') }}">Logout</a>
        </li>
    </ul>
</div>
<hr />
