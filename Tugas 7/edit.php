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
    <div class="card-body">
<h2 style="text-align: center;">Edit PhoneBook</h2>
        
<?php
include "connect.php";
$id = $_GET['row'];
$sql = "SELECT nama,email,tel,job
        FROM bukutelepon 
        WHERE id= '$id'";

$res = mysqli_query($link,$sql);
$dataBaris = mysqli_fetch_array($res);
?>
<form  action = "update.php?row="
     <?php echo "$id"; ?> method="POST">
  <div class='form-group' >
    <label >Nama: </label>
    <input type='text' class='form-control' placeholder='Masukkan Nama' name='nama' value= <?php echo "\" $dataBaris[nama] \""; ?> >
    <label >Email:</label>
    <input type='email' class='form-control' placeholder='Masukkan Email' name='email' value= <?php echo "\" $dataBaris[email] \""; ?>>
    <label >Phone No.</label>
    <input type='tel' class='form-control' placeholder='Masukkan Nomor Telepon' name='phone' value=<?php echo "\" $dataBaris[tel] \""; ?>>
    <label >Job</labmel>
    <input type='text' class='form-control' placeholder='Masukkan Pekerjaan' name='job' value= <?php echo "\" $dataBaris[nama] \""; ?>> 
  </div>
  <button type='submit' class='btn btn-primary'>Edit</button>
</form>
</div>
</div>
</div>
<?php
mysqli_close($link);
   ?> 
</body>
</html>