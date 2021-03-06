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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/p3.css" type='text/css' rel='stylesheet'>
@stop

@section('img')
    <img
            src='http://stephboreldesign.com/wp-content/uploads/2012/03/lorem-ipsum-logo.jpg'
            style='width:300px'
            alt='Lorem Ipsum Page'>
@stop

@section('content')
    @if(count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <p>
        How long should the text be?
        <form method='POST' action='/lorem-ipsum'>
            {{csrf_field()}}
{{--  removed to allow validation
           <input maxlength="2" name="paragraphs" type="text" id="paragraphs"> (Max: 99)--}}
            <input name="size" type="text" id="size"> (Max: 99)
            <select name="text_type" id="text_type">
                <option value="words">Words</option>
                <option value="sentences">Sentences</option>
                <option value="paragraphs">Paragraphs</option>
            </select>
            <br>
            <input type="submit" value="Ipsum!">
        </form>
    </p>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/show.js"></script>
@stop