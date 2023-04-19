@extends('base')

@section('title', $post->title)

@section('content')
<section class="bg-[#111827] w-full h-screen text-white">
    <div class="w-[75%] mx-auto">
        <h1 class="font-bold text-[40px] text-center">{{ $post->title }}</h1>
        <p class="mt-[25px] text-[18px]">{{ $post->content }}</p>
    </div>
</section>
@endsection