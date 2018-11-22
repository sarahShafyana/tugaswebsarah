<?php 
session_start(); //memulai session
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bedi.css">
</head>
<body>
<?php
if(isset($_POST['btn'])):
	//membuat session array dengan variabel - variabel POST
	$_SESSION['pos']=$_POST;
endif;

if(isset($_SESSION['pos'])):
	$nama   =$_SESSION['pos']['nama'];
	$alamat =$_SESSION['pos']['alamat'];
	$telp	=$_SESSION['pos']['telp'];
	$password	=$_SESSION['pos']['password']; 
else:
	$nama   ='';
	$alamat ='';
	$telp	='';
	$password	='';
endif;
?>
<form method="post" name="frm" action="">
	<center>
	<div class="vid-container">
	  	<div class="inner-container">
	    <div class="box">
	      <h1></h1>
	  
			<input type="text" name="nama" value="<?php echo $nama; ?>" placeholder="Nama anda"/>
			<input type="text" name="alamat" value="<?php echo $alamat; ?>" placeholder="Alamat anda"/>
			<input type="text" name="telp" value="<?php echo $telp; ?>" placeholder="Nomor telphone anda"/>
			<input type="password" name="password" value="<?php echo $password; ?>" placeholder="Masukkan password anda"/>
			<input type="password" name="password" value="<?php echo $password; ?>" placeholder="Masukkan password confirmasi anda"/>
	      <button type="submit" name="btn" value="Submit">submit</button>
	    </div>
	  	</div>
	</div>
	</center>
</form>

</body>
</html>