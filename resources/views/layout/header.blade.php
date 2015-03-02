<html>
<head><link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<link href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('js/bootstrap.js') }}" type="text/javascript">
<link href="{{ URL::asset('js/bootstrap.min.js') }}" type="text/javascript">
<link href="{{ URL::asset('js/jquery-1.9.0.min.js') }}" type="text/javascript">
</head>
<body>

 <div class="navbar navbar-inverse navbar fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" target="_blank"><span class="fa fa-home"></span> The Articles</a>
        </div>
        <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1" >
          <ul class="nav navbar-nav">


<li><a href="{{URL::route('home-page')}}">Home</a></li>


<li><a href="{{URL::route('index-page')}}">Our Blog</a></li>
<li><a href="{{URL::route('search-data')}}">Search web</a></li>

<li><a href="">Contact us</a></li>







           
           <!--Drop down starts-->
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">More<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Demos</a></li>
                <li><a href="#">Projects</a></li>
              </ul>
              
              
            </li>

        
          <!--Drop down ends here-->

          </ul>
        </div>
      </div>
    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <div class="container mainbody">

      </div>
      <div class="clearfix"></div>




</body>
</html>


