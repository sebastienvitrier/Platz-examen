@extends('template.index')


@section('content')
    
<div id="wrapper-container">

    <div class="container object">

        <div id="main-container-image">


                <section class="work">
					@foreach($category->posts as $post)

					<figure class="white">
						<a href="{{ route('postsDetails.index', ['post'=>$post->id, 'slug' => \Illuminate\Support\Str::slug($post->title)]) }}">
						<img src="img/{{$post->image}}" alt=""/>
							<dl>
								<dt>{{ $post->title }}</dt>
								<dd>{{ \Illuminate\Support\Str::limit($post->content, 150, $end='...') }}</dd>
							</dl>
						</a>
        					<div id="wrapper-part-info">
            					<div class="part-info-image"><img src="{{ asset('storage/' . $post->category->image) }}" alt="" width="28" height="28"/></div>
            					<div id="part-info">{{ $post->category->name }}</div>
							</div>
					</figure>


					@endforeach

				</section>

</div>
</div>

 @endsection