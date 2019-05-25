<?php
	class database{
		var $host="localhost";
		var $user="root";
		var $pass="";
		var $db="test";

		Protected $con;

		function __construct(){
			$this->con = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
			if(!$this->con){
				session_start();
				$_SESSION['msg']="KONEKSI DATABASE GAGAL";
			}
			return $this->con;
		}

		function tampil(){ // fungsi menampilkan data dari database
			$result = mysqli_query($this->con,"SELECT * FROM users");
			while($data = mysqli_fetch_array($result)){
				$hasil[] = $data;
			}
			return $hasil;
		}

		function tampil_skil($id){
			$result = mysqli_query($this->con,"SELECT * FROM skills WHERE user_id='$id'");
			while($data = mysqli_fetch_array($result)){
				$hasil[] = $data;
			}
			return $hasil;
		}

		function insert($nama){
			if(mysqli_query($this->con,"INSERT INTO users VALUES('','$nama')")){
				session_start();
				$_SESSION['msg']="Berhasil Menambah Programmer Baru";
			}
			else{
				session_start();
				$_SESSION['msg']="Gagal Menambah Programmer Baru";
			}
		}

		function insert_skil($nama,$id){
			if(mysqli_query($this->con,"INSERT INTO skills VALUES('','$nama','$id')")){
				session_start();
				$_SESSION['msg']="Berhasil Menambah Skill Baru";
			}
			else{
				session_start();
				$_SESSION['msg']="Gagal Menambah Skill Baru";
			}
			
		}
	}
?>

