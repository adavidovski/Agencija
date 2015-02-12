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
echo 'Connected successfully';
mysql_set_charset('utf8', $connect);
$db_selected = mysql_select_db('agencija', $connect);
if (!$db_selected) {
    die ('Can\'t use the base : ' . mysql_error());
}
if($pass_confirm == $pass){
	$sql = "INSERT INTO korisnici(ime, email, pass) VALUES ('$ime' ,'$email' ,'$pass')";
	header('Location:profil.php');
	}
else{
	echo 'Внесените лозинки не се совпаѓаат !!!';
	header('Location:najavi.html');
	}
		
@mysql_query($sql);

mysql_close($connect); 


?>
</body>
</html>
