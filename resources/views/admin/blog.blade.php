@extends('adminlte::page')

@push('css')

@section('title', 'News')

@section('content_header')
    <h1>News Feed</h1>
@stop

@section('content')
    <p>this is the news feed. with no feed</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@push('js')