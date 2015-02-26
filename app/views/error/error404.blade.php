<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Error 404</title>
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/style.css') }}
</head>
<body>
	<div class="container" style="margin-top:80px;">
		<center><h1><span class="glyphicon glyphicon-fire"></span>Error 404, la página solicitada no existe</h1></center>
		<center>{{HTML::link('/','Regresar a la página de inicio')}}</center>
		
	</div><!--/.container-->
	{{ HTML::script('js/bootstrap.js') }}
	{{ HTML::script('js/jquery.js') }}
</body>
</html>