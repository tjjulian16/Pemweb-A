<?php

$file = "data.txt";

$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$job = $_POST['job'];

$data = $nama  . "|F|" . 
        $email . "|F|" .
        $phone . "|F|".
        $job   . "[R]";

$handle = fopen($file, "a+");
fwrite($handle, $data);
fclose($handle);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
</head>
<body style="text-align: center;">
<h2 >Data Sudah Disimpan!</h2>
<a href="baca.php" style="padding: 10px; background-color: #12a8bb; color: white; border-radius: 10px;">Liat PhoneBook?</a>
<br>
<br>
<a href="form.html" style="padding: 10px; background-color: #12a8bb; color: white; border-radius: 10px;">Input Data Lagi?</a>
</body>
</html>