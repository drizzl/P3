@extends('layouts.master')


@section('title')
    User Generator
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
            src='https://i.github-camo.com/2b823643220243f4926d5b40296c0f3f2b6b3555/68747470733a2f2f7261772e67697468756275736572636f6e74656e742e636f6d2f6c657769736d6f74656e2f61746f6d2d766964656f2d67616d652d6e616d652d67656e657261746f722f6d61737465722f6173736574732f7468652d766964656f2d67616d652d67656e657261746f722e706e67'
            style='width:300px'
            alt='User Generator Page'>
@stop

@section('content')
    <p>
        How many names should we generate?
        <form method='POST' action='/user-generator'>
            {{csrf_field()}}
            Users: <input maxlength="2" name="users" type="text" id="users"> (Max 99)<br>
            Alliterative names: <input type="checkbox" name="allit" id="allit"><br>
            Computer Environment: <input type="checkbox" name="environment" id="environment"><br>
            <input type="submit" value="Generate!">
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