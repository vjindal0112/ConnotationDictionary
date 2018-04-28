<!doctype html>
<html lang='en'>
<head>
    <title>Weather</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />   
	
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">

	
	<style>
		html, body {
			height: 100%;
		}
		
		.container {
			background: url("images/weatherBackground.jpg") no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			width: 100%;
			height: 100% !important;
			padding-top: 60px;
		}
		
		.center {
			text-align: center;
		}
		
		#lead {
			padding-top: 20px;
			font-weight:bold;
		}
		
		#city-form {
			padding-top: 60px;
		}
		
		#city {
			margin-right: auto;
			margin-left:auto;
		}
		
		#findbtn {
			margin-top: 30px;
		}
	
	</style>
	
	
</head>

<body>

	
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1 class="center"><strong>What's the weather like?</strong></h1>
				<p class="center" id="lead">Enter your city below to get a forecast of the weather</p>
				<form id="city-form">
					<div class="form-group center">
						<input type="text" class="form-control" name="city" id="city" placeholder="e.g. London, Paris, San Francisco, New York..."/>
						<button class="btn btn-success btn-lg" id="findbtn">Find my weather</button>
					</div>
				</form>
			</div>
			
		</div>
		<div class="row alerts" id="forecastdiv" style="display:none">
			<div class="col-md-6 col-md-offset-3">
				<div class="alert alert-success">
					<p id="forecast"></p>
				</div>
			</div>
		</div>
		<div class="row alerts" id="faildiv" style="display:none">
			<div class="col-md-6 col-md-offset-3">
				<div class="alert alert-danger">
					<p id="fail">Could not find any data for that city. Please try again</p>
				</div>
			</div>
		</div>
		<div class="row alerts" id="nocitydiv" style="display:none">
			<div class="col-md-6 col-md-offset-3">
				<div class="alert alert-danger">
					<p id="nocity">Please enter a city</p>
				</div>
			</div>
		</div>
	</div>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
		$('#findbtn').click(function(event) {
			event.preventDefault();
			$('.alerts').hide();
			if ($('#city').val() != "") {
				$.get('scraper.php?city=' + $('#city').val(), function(data) {
					if (data == "") {
						$("#faildiv").fadeIn();
					} else {
						$("#forecastdiv").fadeIn();
						$('#forecast').html(data);
					}
				});
			} else {
				$('#nocitydiv').fadeIn();
			}
			
		});
			
	</script>
</body>
</html>
