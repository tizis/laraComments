@php
    $count = $model->comments()->parentless()->count();
    $comments = $model->comments()->parentless()->get();
@endphp
@if($count < 1)
    <p class="lead">There are no comments yet.</p>
@endif
<ul class="list-unstyled">
    @foreach($comments as $comment)
        @include('comments::components.comment.comment')
    @endforeach
</ul>
@auth
    @include('comments::form')
@else
    @include('comments::login-message')
@endauth

   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>