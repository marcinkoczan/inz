<?php
include_once 'connDB.php';
connect();


$wynik = mysql_query("SELECT * FROM cena_jakosc") or die('B³¹d zapytania'); 
	if(mysql_num_rows($wynik) > 0) { 
    /* je¿eli wynik jest pozytywny, to wyœwietlamy dane */
    echo '<table cellpadding="2" border=1>'; echo "\r\n";
		echo "<tr>";
        echo "<td>Nazwa produktu</td>";
        echo "<td>Cena</td>";
        echo "</tr>"; 
		echo "\r\n";
    while($r = mysql_fetch_object($wynik)) {
        echo "<tr>";
        echo "<td>".$r->nazwa."</td>";
        echo "<td>".$r->cena."</td>";
        echo "</tr>"; 
		echo "\r\n";
    }
    echo "</table>"; echo "\r\n";
	}

?>