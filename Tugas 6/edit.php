<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
</head>
<body>



<h2 style="text-align: center;">Form PhoneBook</h2>
        
<?php
$file = "data.txt";
$data = file_get_contents($file);
$rowUpdt = $_GET['row'];
$baris = explode("[R]", $data);
$col = explode("|F|", $baris[$rowUpdt]);
echo"
<form style='width: 30%; margin-left: 38%;' action = 'update.php?row= $rowUpdt' method='POST'>
  <div class='form-group' >
    <label >Nama: </label>
    <input type='text' class='form-control' placeholder='Masukkan Nama' name='nama' value = $col[0]>
    <label >Email:</label>
    <input type='email' class='form-control' placeholder='Masukkan Email' name='email' value=$col[1]>
    <label >Phone No.</label>
    <input type='tel' class='form-control' placeholder='Masukkan Nomor Telepon' name='phone' value=$col[2]>
    <label >Job</label>
    <input type='text' class='form-control' placeholder='Masukkan Pekerjaan' name='job' value=$col[3]> 
  </div>
  <button type='submit' class='btn btn-primary'>Edit</button>
</form>";
    ?>
</body>
</html>