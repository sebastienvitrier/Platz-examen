@extends('template.index')


@section('content')
    
<div id="wrapper-container">

    <div class="container object">

        <div id="main-container-image">


                <section class="work">
                    @foreach ($posts as $post)
                    <figure class="white">
                        <a href="{{route('posts.show', ['post' => $post->id])}}">
                            <img src={{$post->image}} alt="" />
                            <dl>
                                <dt>{{$post->title}}</dt>
                                <dd>{{$post->description}}</dd>
                            </dl>
                        </a>
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src={{$post->Category}} alt="" width="28" height="28"/></div>
                            <div id="part-info">{{$post->title}}</div>
                        </div>
                    </figure>
                    @endforeach

                  
                </section>

            </div>

             
            {{ $posts->links() }}

        </div>
        @endsection