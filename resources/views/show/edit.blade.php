@extends('layout.main')
@section('content')


<link rel="stylesheet" type="text/css" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}">
<div class="container" style="padding-left: 0px; padding-right: 15px;">
  <div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="panel-title">Edit Your Article!</h3>
    </div>
    <div class="page-header">
        <h6>&nbsp; </div>

<form action="{{URL::route('post-edit-page')}}" method="post">

<div class="form-group">
<label class="col-lg-2 control-label" for="">Your Title: </label>
<div class="col-lg-6">
<input type="text"class="form-control" name="title" value="{{$edit->title}}">

</div>
</div>
<div class="clearfix" style="height: 10px;clear: both;"></div>


<div class="form-group">
<label class="col-lg-2 control-label" for="">Your Content</label>
<div class="col-lg-6">
<textarea name="lyrics" cols="57" rows="7" value="{{$edit->lyrics}}"></textarea>

</div>
</div>
<div class="clearfix" style="height: 10px;clear: both;"></div>
 
<div class="form-group">
 <div class="col-lg-10 col-lg-offset-2"> 
     <input name="_token" type="hidden" value="{{csrf_token}}">
<input type="submit"class="btn btn-primary" value="Submit">
<a href="{{URL::route('index-page')}}"><button class="btn btn-warning back2"  type="button"><span class="glyphicon glyphicon-hand-left"></span> Back</button></a>

</div>
</div>
</form>&nbsp;


@stop
