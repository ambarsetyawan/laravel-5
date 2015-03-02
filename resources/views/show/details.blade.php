
@extends('layout.main')
@section('content')
<link rel="stylesheet" type="text/css" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}">
<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
<div class="container" style="width:600px;text-align:justify;font-size:18px;">


<p><h2>{{$songs_display_details->title}}</p></h2></p>
<p>{{$songs_display_details->lyrics}}</p>

<img src="public/uploads/{{$songs_display_details->image}}">



<a href="{{URL::route('index-page')}}"><button class="btn btn-warning back2"  type="button"><span class="glyphicon glyphicon-hand-left"></span> Back</button></a>




</div>
@stop
