<!DOCTYPE html> 
 
<head> 
  <title>Akses dan Manipulasi Data</title> 
  <style type="text/css">
		<!--
		body {
		background-image:url('t.jpg');
		background-repeat:no-repeat;
		background-position:center;
		padding: 5px 10px 5px 10px;
		}
		--> 
		</style>
  </style>
	<script language="JavaScript">
                function konfirmasi(Keterangan){
                        tanya = confirm('Anda yakin ingin menghapus mahasiswa dengan NIM '+ Keterangan + ' ?');
                        if (tanya == true) return true;
                        else return false;
                }
        </script>
  
</head> 
 
<body> 
 
<?php 
session_start();
if(isset($_SESSION['user'])){
	$user = $_SESSION['user'];
	echo	'<p align="right">
			<a href="tugas.php">Logout</a>
			'.$user.'
			</p color="red">
			<div class="border">
			<p align="center">
			<br/><br>
			</font>
			</p>
			</div> 
			
			';
	} else {
		header('location:tugas.php');
		exit;
	}
	
ini_set('display_errors',1); 
 
// Meng-include file koneksi dan data handler 
require_once './koneksi.php'; 
require_once './data_handler.php'; 
 
// Konstanta nama tabel 
define('MHS', 'mahasiswa'); 
 
// Memanggil fungsi data handler 
data_handler('?m=data'); 
 
?> 
 
</body> 
</html>