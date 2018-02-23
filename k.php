<!Doctype html>
<html lang=”en”>
<head>
<meta charset=”UTF-8”>
<meta name=”viewport” content=”width=device-width, initial-scale=1.8”>
<meta http-equip=”X-UA-Compatible” content=”ie=edge”>
<title>Document</title>
</head>
<body>
<?php
if($link= mysql_connect("localhost","root","","testowa")):
    //udało sie połączyć z bazą
    $query= 'select * FROM testowa';
    if ($result = mysql_query($link, $query)):
    //udalo sie wykonać zapytania
    

?><table>
<tr>
<th> Imię</th> 
<th> Nazwisko</th></tr>
<?PHP //Odczytanie i wyświetlenie danych pobranych z tabeli
while($row = mysql_fetch_row($result)) 

?>
</table>
</body>
</html>