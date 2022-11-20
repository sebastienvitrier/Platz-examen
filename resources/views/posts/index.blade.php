@extends('template.index')


@section('content')
    
<div id="wrapper-container">

    <div class="container object">

        <div id="main-container-image">


                <section class="work">
                    @foreach ($posts as $post)
                    <figure class="white">
                        <a href="details.html">
                            <img src={{$post->image}} alt="" />
                            <dl>
                                <dt>{{$post->title}}</dt>
                                <dd>Symphony is a responsive one page website template designed with sketches and coded with html5 and php. Freebie released by Lacoste Xavier.</dd>
                            </dl>
                        </a>
                        <div id="wrapper-part-info">
                            <div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
                            <div id="part-info">{{$post->title}}</div>
                        </div>
                    </figure>
                    @endforeach

                  
                </section>
            </div>

        </div>
        @endsection