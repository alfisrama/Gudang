<?php
	class DataBase{
		private $host = "localhost";
		private $user = "root";
		private $pass = "";
		private $db = "persediaan";

	 function __construct(){
		$koneksi = mysqli_connect($this->host,$this->user,$this->pass);
			mysqli_select_db($koneksi, $this->db);
if($koneksi){
			echo "Koneksi database mysql dan php berhasil.";
		}else{
			echo "Koneksi database mysql dan php GAGAL !";
		}

		}
	}

$cek = new DataBase();

?>