<?php
include_once '../../connDB.php';
connect();
											 

$wynik = mysql_query("SELECT p.*,d.waga_porcji,d.ile_razy_dn,z.nazwa_zdjecia FROM produkt p join dawkowanie d on d.ID=p.dawkowanie_ID join zdjecia z on z.ID_produktu=p.ID where p.ID=4") or die('B³¹d zapytania');
if(mysql_num_rows($wynik) > 0) {
	while($r = mysql_fetch_object($wynik)) {
		echo '
<!DOCTYPE html>
<html>
<head>
  <title>'.$r->nazwa.'</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="Stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="summary entry-summary">
					<h2 class="shorter">
						<strong>'.$r->nazwa.'</strong>
					</h2>
					<p class="price">
						<span class="amount">'.$r->waga_ilosc.'g</span>
					</p>
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#opis" data-toggle="tab">Opis</a>
						</li>
						<li>
							<a href="#dawkowanie" data-toggle="tab">Dawkowanie</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="opis" class="tab-pane fade in active">
								'.$r->opis.'
						</div>
						<div id="dawkowanie" class="tab-pane fade">
							
								'.$r->waga_porcji.'g x '.$r->ile_razy_dn.' dziennie
									
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="thumbnail">
					<img class="img-responsive img-rounded" alt="'.$r->nazwa.'" src="../../pictures/'.$r->nazwa_zdjecia.'"></img>
				</div>
			</div>
		</div>
	</div>



</body>
</html>';
		}
	}
?>