<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Coinmarketcap Indonesia</title>
</head>
<body>

	<div class="container">
		<!-- Image and text -->
		<nav class="navbar navbar-light bg-light">
		  <a class="navbar-brand" href="#">
		    <img src="/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
		    Market
		  </a>
		</nav>
		<br>
		<div class="card">
			<div class="card-header">
		    <li class="breadcrumb-item"><a href="#">Market</a></li>
			</div>
		  <div class="card-body">
		  	<p style="width: 18rem;"><u><b>#rank {{$result['market_cap_rank']}}</b></u></p>
			  <img src="{{$result['image']['thumb']}}" width="50" height="50">
			    <h5 class="card-title">{{ $result['name'] }}</h5>
			    <p class="card-text">{{ $result['name'] }}.</p>
			    <a href="{{ route('coin.index') }}" class="btn btn-primary">kembali</a>
		  </div>
		</div>

	</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
</html>