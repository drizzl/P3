@extends('layouts.master')


@section('title')
    Lorem Ipsum Generator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    <link href="/css/books/show.css" type='text/css' rel='stylesheet'>
@stop

@section('img')
    <img
            src='http:\\p3.danrunt.me\resources\images\loremipsum.jpg'
            style='width:300px'
            alt='Lorem Ipsum Page'>
@stop

@section('content')
    How long should the text be?
    <form method='POST' action='/lorem-ipsum'>
        {{csrf_field()}}
        <input maxlength="2" name="paragraphs" type="text" value="3" id="paragraphs"> (Max: 99)
        <select name="text_type" id="text_type">
            <option value="words">Words</option>
            <option value="sentences">Sentences</option>
            <option value="paragraphs">Paragraphs</option>
        </select>
        <br>
        <input type="submit" value="Ipsum!">
    </form>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/show.js"></script>
@stop