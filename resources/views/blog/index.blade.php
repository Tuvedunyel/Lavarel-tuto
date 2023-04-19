@extends('base')

@section('title', 'Mon blog')

@section('content')
    <section class="bg-[#111827] text-white h-full">
        <div class="w-[75%] mx-auto">
            <h1 class="font-bold text-[40px] text-center uppercase">Blog</h1>
            <ul>
                @foreach ( $posts as $post )
                    <li>
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->content }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection