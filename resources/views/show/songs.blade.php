@extends('layout.main')

@section('content')
<link rel="stylesheet" type="text/css" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}">
<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
<div class="container" style="text-align:justify;font-size:18px;">
<div class="container" style="padding-left: px; padding-right: 15px;">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Recent Articles</h3>
    </div>
    <br>
    <?php 
if(Auth::check())
{
?>
<a href="{{ URL::route('account-sign-out') }}">&nbsp;&nbsp;&nbsp;<button class="btn btn-danger "  type="button"><span class=""></span>Sign out</button></a>
<a href="{{URL::route('get-add-page')}}"><button style="margin-right:100px;"class="btn btn-success pull-right"  type="button"><span class="glyphicon glyphicon-book"></span> Add Article</button></a>

    <div class="page-header">

        <h6>&nbsp; </div>

<?php }?>

@foreach($singer as $s)
<strong><h3>{{$s->title}}</h3></strong>
<br>
@if($s->image)
<a href="details/{{$s->id}}"><img src='public/uploads/{{$s->image}}' width="250" height="150"></a>


@endif
<br>

{{$s->lyrics}}<br>





<strong>Article by Ranjeet</strong> on
<i>{{ date("d F Y",strtotime($s->created_at)) }}</i><br>

<?php
if(Auth::check()){
	?>

<a href="details/{{$s->id}}"><button class="btn btn-info "  type="button"><span class="glyphicon glyphicon-zoom-in"></span>View</button></a>

<a href="edit/{{$s->id}}"><button class="btn btn-warning "  type="button"><span class="glyphicon glyphicon-edit"></span>Edit</button></a>
<a href="delete/{{$s->id}}"><button class="btn btn-danger "  type="button"><span class="glyphicon glyphicon-remove-circle"></span>Delete</button></a>
<?php }?>
<?php if(Auth::guest()){
	?>


<a href="details/{{$s->id}}"><button class="btn btn-info "  type="button"><span class="glyphicon glyphicon-zoom-in"></span>&nbsp;Read More</button></a>
<?php } ?>
<hr>
 
@endforeach

    <div class="container">
<?php echo $singer->render(); ?>
</div>
</div>

@stop


