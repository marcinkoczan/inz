<?php
include_once 'connDB.php';
connect();

if(isset($_POST['funkcja']) && !empty($_POST['funkcja']))
{
	switch($_POST['funkcja'])
	{
		case 'wyszukiwanie' :
		wyszukiwanie();
		break;
	}
}

function wyszukiwanie()
{
	$wynik = mysql_query("SELECT * FROM cena_jakosc") or die('Błąd zapytania'); 
	if(mysql_num_rows($wynik) > 0) { 
    /* jeżeli wynik jest pozytywny, to wyświetlamy dane */
    echo '<table class="table table-striped">'; echo "\r\n";
		echo '<thead>';
		echo "<tr>";
        echo "<td>Nazwa produktu</td>";
        echo "<td>Cena</td>";
		echo "<td>Sklep</td>";
        echo "</tr>"; 
		echo '</thead>';
		echo "\r\n";
    while($r = mysql_fetch_object($wynik)) {
		echo '<tbody>';
        echo "<tr>";
        echo "<td>".$r->nazwa."</td>";
        echo "<td>".$r->cena."</td>";
		echo "<td>".$r->nazwa_sklepu."</td>";
        echo "</tr>"; 
		echo "\r\n";
    }
	echo '</tbody>';
    echo "</table>";
	}
	
	$wynik = mysql_query("SELECT * FROM productimg") or die('Błąd zapytania');
	if(mysql_num_rows($wynik) > 0) { 
		echo '<div class="row">
				<div class="col-md-12">
					<ul class="portfolio-list">
						
								';
		
		while($r = mysql_fetch_object($wynik)) {
			
									echo '<li class="col-md-3 isotope-item">
									<div class="team-item thumbnail">';
									echo '<a class="thumb-info" href="http://localhost/suploteka/odzywki/'.$r->ID.'/index.php">';
									echo '<img class="img-responsive" alt="" src="pictures/'.$r->nazwa_zdjecia.'"></img>
								</a></div>
						</li>';
		}
							echo '
					</ul>
				</div>
			</div>';
		
	}
}
?>



