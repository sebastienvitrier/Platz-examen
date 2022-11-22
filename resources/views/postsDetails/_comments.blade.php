</div>
@foreach ($comments as $comment)
<div class="post-reply">
    <img src="{{asset('avatar.png')}}" class="image-reply-post"></img>
    <div class="name-reply-post">{{$comment->pseudo}}</div>
    <div class="text-reply-post">{{$comment->content}}</div>
</div>
@endforeach