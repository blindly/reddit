
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="../../assets/ico/favicon.ico">

		<title>{{$subreddit}}</title>

		<!-- Bootstrap core CSS -->
		<link href="/css/themes/yeti/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="/css/starter-template.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
	</head>

	<body>

		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="http://reddit.borke.us/r/{{$subreddit}}">{{$subreddit}}</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li @if (Request::segment(3) == 'hot') class="active" @endif><a href="/r/{{$subreddit}}/hot">Hot</a></li>
						<li @if (Request::segment(3) == 'top') class="active" @endif><a href="/r/{{$subreddit}}/top">Top</a></li>
						<li @if (Request::segment(3) == 'new') class="active" @endif><a href="/r/{{$subreddit}}/new">New</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>

		<div class="container">
			<div class="starter-template">
				@yield('content')
			</div>
		</div><!-- /.container -->


		<!-- Bootstrap core JavaScript
================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script src="/js/sorttable.js"></script>
	</body>
</html>
