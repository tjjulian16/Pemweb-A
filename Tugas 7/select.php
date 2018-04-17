
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
</head>
<body background="background.jpg " style="background-repeat: no-repeat;">
	<div class = "container">
	<div class="col-md-8 col-sm-12 col-xs-12" style="margin: 50px auto; padding: 0%;">
	<div class ="card text-center">
		<div class="card-body">
		<h2> PhoneBook </h2>
<table class= "table table-hover table-bordered table-responsive" style="text-align: center; ">
<thead class = "bg-info" style="color: white;">
<tr >
<th scope="col"> No.</th>
<th scope="col"> Nama</th>
<th scope="col"> Email</th>
<th scope="col"> Phone</th>
<th scope="col"> Job</th>
<th scope="col"> Delete</th>
<th scope="col"> Edit</th>
</tr>
</thead>
<?php

/*konfigurasinya*/
include "connect.php";

$sql = "SELECT id,nama,email,tel,job "."FROM bukutelepon";

$res = mysqli_query($link,$sql);

while($baris = mysqli_fetch_array($res)){
	$id = $baris['id'];
	
	echo "<tr>";
	echo "<tbody >";
	echo "<td >" . $id ."</td>";
	echo "<td >" . $baris['nama'] ."</td>";
	echo "<td>" . $baris['email'] ."</td>";
	echo "<td> " . $baris['tel'] ."</td>";
	echo "<td >" . $baris['job'] ."</td>";
	echo '<td > <a href="delete.php?id='.$id.'">Delete</a></td>';
	echo '<td> <a href="edit.php?row='.$id.'">Ya</a> </td>'; 
	echo "</tr>";
	echo "</tbody>";
}

mysqli_close($link);
?>
</table>
<a href="form.html" style="padding: 10px; font-size: 20px; background-color: #12a8bb; border-radius: 10px; color: white;">Tambah Data Baru</a>
</div>
</div>
</div>
</div>
</body>
</html>