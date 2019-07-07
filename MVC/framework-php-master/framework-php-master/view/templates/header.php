<!DOCTYPE html>
<html>
<head>
	<title>Studenten app</title>	
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="<?= URL ?>/css/style.css">
</head>
<body>
	<div id='top'>
		<div id='header'>
			<h1>Manege</h1>
			<h2>Nu in MVC!</h2>
			<h2>a</h2>
		</div>
	

		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
		    	<div class="navbar-header">
		      		<a class="navbar-brand" href="#">Plannings tool</a>
		    	</div>
		    	<ul class="nav navbar-nav">
		      		<li id='homeli'><a href="<?= URL ?>home/index">Home</a></li>
		      		<li id='reserveerli'><a href="<?= URL ?>home/createPage">Reserveer nu</a></li>
		      		<li id='overzichtli'><a href="<?= URL ?>home/Overview">Reserveringen zien</a></li>
		    	</ul>
		  	</div>
		</nav>
	</div>

<script type="text/javascript">
	var currentPath = window.location.href;
	console.log('current window: ',currentPath)
	if(currentPath=='http://localhost/weken/blok-4/MVC/framework-php-master/framework-php-master/home/index#' || currentPath =='http://localhost/weken/blok-4/MVC/framework-php-master/framework-php-master/home/index'|| currentPath =='http://localhost/weken/blok-4/MVC/framework-php-master/framework-php-master/'){
		document.getElementById('homeli').setAttribute('class','active');
	}
	else if(currentPath=='http://localhost/weken/blok-4/MVC/framework-php-master/framework-php-master/home/createPage'||currentPath=='http://localhost/weken/blok-4/MVC/framework-php-master/framework-php-master/home/createPage#'){
		document.getElementById('reserveerli').setAttribute('class','active');
	}
	else if(currentPath=='http://localhost/weken/blok-4/MVC/framework-php-master/framework-php-master/home/Overview'||currentPath=='http://localhost/weken/blok-4/MVC/framework-php-master/framework-php-master/home/Overview#'){
		document.getElementById('overzichtli').setAttribute('class','active');
	}
	else if(currentPath=='http://localhost/weken/blok-4/MVC/framework-php-master/framework-php-master/home/createDate'||currentPath=='http://localhost/weken/blok-4/MVC/framework-php-master/framework-php-master/home/createDate#'){
		document.getElementById('homeli').setAttribute('class','active');
	}
	else{
		console.log('NOT IMPORTANT---> error 404: path could not be found');
		document.getElementById('overzichtli').setAttribute('class','active');
	}
</script>