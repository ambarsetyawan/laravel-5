@extends('layout.main')

@section('content')
@foreach($song as $s)
{{$s->title}}
@endforeach
<h1>List of Songs</h1>
@stop