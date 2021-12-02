<?php
/*
  | Source Code Aplikasi Penjualan Barang Kasir dengan PHP & MYSQL
  | 
  | @package   : pos-kasir-php
  | @file	   : config.php ( untuk mengatur koneksi php ke database mysql )
  | @author    : fauzan1892 / Fauzan Falah
  | @copyright : Copyright (c) 2017-2021 Codekop.com (https://www.codekop.com)
  | @blog      : https://www.codekop.com/read/source-code-aplikasi-penjualan-barang-kasir-dengan-php-amp-mysql-gratis.html
  |
  | 
  | keterangan : untuk login aplikasi dengan username : admin dan password : 123
  | 
  | 
  | 
 */

date_default_timezone_set("Asia/Jakarta");
error_reporting(0);

	define('DB_SERVER','172.20.0.2');
  define('DB_USER','root');
  define('DB_PASS','fr160900');
  define('DB_NAME','db_toko');
	try{
		$config = new PDO(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	}catch(PDOException $e){
		echo 'KONEKSI GAGAL' .$e -> getMessage();
	}
	$view = 'fungsi/view/view.php'; 
?>

