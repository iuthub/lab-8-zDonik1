@extends('layouts.master')

<?php
$posts = [
    [
        'heading' => 'Learning Laravel',
        'text' => 'This blog post will get you right on track with Laravel!'
    ],
    [
        'heading' => 'The next Steps',
        'text' => 'Understanding the Basics is great, but you need to be able to make the next steps.'
    ],
    [
        'heading' => 'Laravel 5.3',
        'text' => 'Though announced as a "minor release", Laravel 5.3 ships with somer very interesting additions and features.'
    ]
]
?>

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">The beautiful Laravel</p>
        </div>
    </div>
    @for($i = 0; $i < count($posts); ++$i)
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="post-title">{{ $posts[$i]['heading'] }}</h1>
                <p>{{ $posts[$i]['text'] }}</p>
                <p><a href="{{ route('post', ['id' => $i]) }}">Read more...</a></p>
            </div>
        </div>
        <hr>
    @endfor
@endsection
