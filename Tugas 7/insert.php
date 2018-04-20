<?php

/*konfigurasinya*/
include "connect.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$tel = $_POST['phone'];
$job = $_POST['job'];

$sql = "INSERT INTO bukutelepon (nama,email,tel,job) ".
		"VALUES ('$nama','$email','$tel','$job')";

$res = mysqli_query($link,$sql);


/*tutup koneksi mysql ini opsional, karena secara default dia akan close connection setiap script nya selesai*/
mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
</head>
  <body background="background.jpg" style="background-repeat: no-repeat;">

  <div class = "container">
  <div class="col-md-8 col-sm-12 col-xs-12" style="margin: 50px auto;">
  <div class ="card">
    <div class="card-body" style="margin-left: 25%;">
    	<?php
if($res){
	echo "<h2>Data berhasil disimpan</h2>";
}
else{
    echo "Gagal";
}
    	?>
       <a href="select.php" style="padding: 10px; background-color: #12a8bb; color: white; border-radius: 10px; margin-right: 10%;">Liat PhoneBook?</a>
       
<a href="form.html" style="padding: 10px; background-color: #12a8bb; color: white; border-radius: 10px;">Input Data Lagi?</a>
 
</div>
</div>
</div>
    </body>
</html>