<?php 
    session_start(); 

    date_default_timezone_set('Asia/Jakarta'); 
    $time = date('H:i:s'); 
    $browserAnda = $_SERVER['HTTP_USER_AGENT']; 
     
    $_SESSION['waktu'] = $time; 
    $_SESSION['browserAnda'] = $browserAnda; 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Page 1</title>
</head>
<body>
<h2 style="text-align: center;">Hai Semua
<br>
<?php
if(isset($_SESSION)){
	echo "Session Telah Berhasil Dimulai";
} 
?>
<form action="Page 2.php" method="POST">
	<input type="text" name="nama" placeholder="Nama Anda">
	<button type="submit">Masuk</button>
</form>
</h2>

</body>
</html>