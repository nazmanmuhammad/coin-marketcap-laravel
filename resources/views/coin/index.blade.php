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
		    <table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Harga</th>
			      <th scope="col">Tinggi</th>
			      <th scope="col">Rendah</th>
			      <th scope="col">Market Cap</th>
			      <th scope="col">Volume%</th>
			      <th scope="col">Menghitung Penawaran</th>
			      <th scope="col">Aksi</th>
			    </tr>
			  </thead>
			  <?php $i=1; ?>
			  	@foreach($data as $coin_list)
			  <tbody>
			    <tr>
			     <td>{{ $i++ }}</td>
			     <td><img src="{{$coin_list['image']}}" width="18px">&nbsp;<a href="{{ route('coin.show', $coin_list['id'])}}">{{ $coin_list['name'] }}</a></td>
			     <td>Rp {{ number_format($coin_list['current_price']) }}</td>
			     <td>Rp {{ number_format($coin_list['high_24h']) }}</td>
			     <td>Rp {{ number_format($coin_list['low_24h']) }}</td>
			     <td>Rp {{ number_format($coin_list['market_cap']) }}</td>
			     <td>Rp {{ number_format($coin_list['total_volume']) }}</td>
			     <td>Rp {{ number_format($coin_list['circulating_supply']) }}</td>
			     <td><a href="{{ route('coin.show', $coin_list['id'])}}" class="btn btn-primary">Lihat</a></td>
			    </tr>
			  </tbody>
			   @endforeach
			</table>
		  </div>
		</div>

	</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
</html>