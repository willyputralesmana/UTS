<?php
 
  // Menangkap isi variabel dari file yang telah diisi pada form.php
  date_default_timezone_set('Asia/Jakarta');
  $waktu = date('d F Y H:i:s'); 
  $wilayah = $_POST['wilayah'];
  $positif = $_POST['positif'];
  $dirawat = $_POST['dirawat'];
  $sembuh = $_POST['sembuh'];
  $meninggal = $_POST['meninggal'];
  $operator = $_POST['operator'];
  $nim = $_POST['nim'];
 

  $data = 
"Data Pemantauan Covid19 Wilayah $wilayah
 Per $waktu
 $operator / $nim
--------------------------------------------------------------------------------------
Positif            | Dirawat             | Sembuh             | Meninggal            |
--------------------------------------------------------------------------------------
$positif            | $dirawat               | $sembuh            | $meninggal                |
--------------------------------------------------------------------------------------";
          
 

  $fh = fopen("data.txt", "a");
  fwrite($fh, $data);
 

  fclose($fh);
 

  echo "<script>alert('Data berhasil disimpan');
        history.go(-1);</script>"; 
?>