@extends('base')

@section('title', 'Mon blog')

@section('content')
    <section class="bg-[#111827] text-white h-screen">
        <div class="w-[75%] mx-auto">
            <h1 class="font-bold text-[40px] text-center uppercase">Blog</h1>
            <ul class="grid grid-cols-2 gap-10 items-center justify-items-center mt-[40px]">
                @foreach ( $posts as $post )
                    <li class="bg-[#ef4444]/[.1] rounded-[10px] w-[591px] h-[248px] flex flex-col justify-between items-start px-[15px] py-[20px]">
                        <h2 class="text-[#ef4444] text-[30px] font-bold mb-[10px]">{{ $post->title }}</h2>
                        <p >{{ $post->content }}</p>
                        <a class="mt-[5px] text-[20px] text-white opacity-[.55] self-end duration-500 hover:opacity-[1]" href="{{ route('blog.show', [ 'slug' => $post->slug, 'id' => $post->id ]) }}">Lire la suite</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection