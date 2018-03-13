<?php  
    session_start(); 
    $namaUser = $_REQUEST['nama'];
    $waktu = $_SESSION['waktu']; 
    $Browser = $_SESSION['browserAnda'];
    if (isset($_SESSION)) { 
        echo "<h2>Waktu saat anda masuk menunjukkan pukul <br>
               ".$waktu."</h2>";
       if(substr($waktu, 0,2) > 1 and substr($waktu, 0,2) <= 11){
        echo "Selamat Pagi ".$namaUser;
       }
      elseif (substr($waktu, 0,2) >11 and substr($waktu, 0,2) <= 15){
        echo "Selamat Siang ".$namaUser;
      }
      elseif (substr($waktu, 0,2) > 15 and substr($waktu, 0,2) <= 18){
        echo "Selamat Sore ".$namaUser;
      }
      elseif (substr($waktu, 0,2) >18 and substr($waktu, 0,2) < 24){
        echo "Selamat Malam ".$namaUser;
      }
        echo "<br>Saat Ini Browser Anda Adalah: ".$Browser;
    } 
    else { 
        echo "Belum ada session"; 
    } 

?>