

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
</head>
<body>
    <h2 style="text-align: center; margin-top: 25px;">PhoneBook</h2>;
    <?php

$file = "data.txt";
$data = file_get_contents($file);

$baris = explode("[R]", $data);

echo "<table class='table'>";
echo "<thead class ='thead-dark'";
echo "<tr>";
echo "<th scope='col'> No.</th>";
echo "<th scope='col'> Nama</th>";
echo "<th scope='col'> Email</th>";
echo "<th scope='col'> Phone</th>";
echo "<th scope='col'> Job</th>";
echo "<th scope='col'> Delete?</th>";
echo "<th scope='col'> Edit?</th>";

echo "</tr>";
for($i =1; $i<count($baris); $i++) {
    //echo $b . "<br>";

    $col = explode("|F|", $baris[$i-1]);

    echo "<tr>";
    echo "<td>" .$i."</td>";
    echo "  <td>" . $col[0] . "</td>";
    echo "  <td>" . $col[1] . "</td>";
    echo "  <td>" . $col[2] . "</td>";
    echo "  <td>". $col[3] . "</td>";
    echo '  <td> <a href="delete.php?row='.($i-1).'">DELETE</a> </td>';
    echo '  <td> <a href="edit.php?row='.($i-1).'">Ya</a> </td>'; 
    echo "</tr>";
}
echo "</table>";
?>  
</body>
</html>