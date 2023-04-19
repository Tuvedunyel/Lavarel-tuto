@extends('base')

@section('title', 'Modification de' + $post->title)

@section('content')
<section>
    <h1>Modifier l'article {{ $post->title }}</h1>
    <form action="post"></form>
</section>
@endsection