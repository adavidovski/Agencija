<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

</head>
<body>
<?php
extract($_POST);
$connect = mysql_connect('localhost', 'root', '');
if (!$connect) {
    die('Could not connect: ' . mysql_error());
}

mysql_set_charset('utf8', $connect);
$db_selected = mysql_select_db('agencija', $connect);
if (!$db_selected) {
    die ('Can\'t use the base : ' . mysql_error());
}

$sql = "INSERT INTO rezervacii(ponuda, termin1, smestuvanje, prevoz, ime, email, tel, baranja ) VALUES ('$ponuda','$termin' ,'$smestuvanje','$prevoz','$ime','$email','$tel','$baranja')";
		
	@mysql_query($sql);

mysql_close($connect); 

header('Location:profil.php');

?>
</body>
</html>
