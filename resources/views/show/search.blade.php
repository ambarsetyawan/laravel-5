 
@extends('layout.main')

@section('content')

<link rel="stylesheet" type="text/css" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}">
<form action="{{URL::route('search-data')}}" method="GET">

<div class="form-group">
<label class="col-lg-2 control-label" for="">Search:</label>
<div class="col-lg-6">
<input type="text"class="form-control" name="character">

</div>
</div>
<input type="hidden" name="_token" value="y2ovMLjq9npraeSb6ly0ISOziZbIDezPH9HCLskG">
<input type="submit"class="btn btn-primary" value="Submit">
<div class="clearfix" style="height: 10px;clear: both;"></div>
<?php  if (isset($title)){?>
@foreach($searchResult as $r)

<div class="container">
<h1>{{$r->title}}</h1>
    {{$r->lyrics}}
</div>

@endforeach
    
<?php  }else{

//echo "Search here...";
}
	?>
    @stop

