<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

</head>
<body>
<?php

$kemail = $_POST['kemail']; 
$password=$_POST['password']; 

if($kemail == "admin@atlantida.com" && $password == "1234"){
	header('Location:admin.php');
}
else{

$connect = mysql_connect('localhost', 'root', '');
if (!$connect) {
    die('Could not connect: ' . mysql_error());
}

mysql_set_charset('utf8', $connect);
$db_selected = mysql_select_db('agencija', $connect);
if (!$db_selected) {
    die ('Can\'t use the base : ' . mysql_error());
}

$result=mysql_query("SELECT * FROM korisnici WHERE email='$kemail'");
$count = mysql_num_rows($result);


if($count == 0){
echo 'Адресата не постои во базата,ве молиме регистрирајте се!';
echo '<a href="najavi.html">Кликнете овде да се регистрирате!</a>';
}
else{
	
	?>
	<input type="hidden" name="kemail" value='<?php echo $_POST['kemail'] ?>' />
	<?php

header('Location:profil.php');
}
		

mysql_close($connect); 
}

?>
</body>
</html>
