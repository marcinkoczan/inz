<?php

function connect()
{
 $q = mysql_connect('localhost','root','') or die('Brak polaczenia z serwerem');
 $q = mysql_select_db('suploteka') or die('Nie ma takiej bazy');
 //mysql_close();
}
?> 