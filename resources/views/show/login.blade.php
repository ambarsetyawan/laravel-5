<link rel="stylesheet" type="text/css" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}">
<div class="container" style="padding-left: 0px; padding-right: 15px;">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Admin Login</h3>
    </div>
    <div class="page-header">
        <h6>&nbsp; </div>

<form action="{{URL::route('post-login')}}" method="post">

<div class="form-group">
<label class="col-lg-2 control-label" for="">Username: </label>
<div class="col-lg-6">
<div id="field">
<input type="text"class="form-control" name="username">
{{$errors->first('username')}}
</div>
</div>
</div>
<div class="clearfix" style="height: 10px;clear: both;"></div>


<div class="form-group">
<label class="col-lg-2 control-label" for="">Password:</label>
<div class="col-lg-6">
<div id="field">
<input type="text" class="form-control" name="password">
{{$errors->first('password')}}
</div>
</div>
</div>
<div class="clearfix" style="height: 10px;clear: both;"></div>
 
<div class="form-group">
 <div class="col-lg-10 col-lg-offset-2"> 

<input name="_token" value="{{csrf_token()}}" type="hidden">
<input type="submit"class="btn btn-primary" value="Submit">

<a href="{{URL::route('index-page')}}"><button class="btn btn-warning back2"  type="button"><span class="glyphicon glyphicon-hand-left"></span> Back</button></a>


</div>
</div>
</form>&nbsp;
