<!DOCTYPE html>
<html>
<head>
  <title>Wyszukiwarka</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="Stylesheet" type="text/css" href="style.css" />
  
	<script type="text/javascript">
		$(window).load(function()
		{
			$("#button").click(function()
			{
				$.ajax({
					url: 'search.php',
					data: {funkcja: 'wyszukiwanie'},
					type: 'post',
					success: function(output) {
						$("#results").append(output);
					}
				});
			});
		});
	</script>
</head>
<body>

<div class="container">
  <div class="jumbotron">
    <h1>Znajdź odpowiedni produkt!</h1>
    <p>Określ interesujące Cię parametry i ciesz się dostosowanym do Twoich potrzeb suplementem!</p> 
  </div>
  
	<form class="form-horizontal" role="form">
			<div class="form-group">
				<label class="control-label col-sm-2" for="kategoria">Kategoria: </label>
				<div class="col-sm-10">
					<select class="form-control" id="kategoria">
						<option>Potreningowe</option>
						<option>Aminokwasy</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="producent">Producent: </label>
				<div class="col-sm-10">
					<select class="form-control" id="kategoria">
						<option>-</option>
						<option>Olimp</option>
						<option>ActivLab</option>
						<option>Kevin Levrone</option>
						<option>Inner Armour</option>
					</select>
				</div>
			</div>
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-10">
					<input id="button" type="button" class="btn btn-default" value="Wyszukaj cena/jakość">
				</div>
			</div>
	</form>
	
	<div id="results"></div>
	
	
  
</div>



</body>
</html>