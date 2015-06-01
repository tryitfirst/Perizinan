<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <style>
	* { box-sizing: border-box; padding:0; margin: 0; }


form {
 	
  width:300px;
  margin:30px auto;
  border-radius:0.4em;
  border:1px solid #191919;
  overflow:hidden;
  position:relative;
  box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
}

form:after {
  content:"";
  display:block;
  position:absolute;
  height:1px;
  width:100px;
  left:20%;
  background:linear-gradient(left, #111, #444, #b6b6b8, #444, #111);
  top:0;
}

form:before {
 	content:"";
  display:block;
  position:absolute;
  width:8px;
  height:5px;
  border-radius:50%;
  left:34%;
  top:-7px;
  box-shadow: 0 0 6px 4px #fff;
}

.inset {
 	padding:20px; 
  border-top:1px solid #19191a;
}

form h1 {
  font-size:18px;
  text-shadow:0 1px 0 black;
  text-align:center;
  padding:15px 0;
  border-bottom:1px solid rgba(0,0,0,1);
  position:relative;
}

form h1:after {
 	content:"";
  display:block;
  width:250px;
  height:100px;
  position:absolute;
  top:0;
  left:50px;
  pointer-events:none;
  transform:rotate(70deg);
  -webkit-transform: rotate(70deg);
  background:linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
   background-image: -webkit-linear-gradient(50deg, rgba(255,255,255,0.05), rgba(0,0,0,0)); /* For Safari */

}

label {
 	color:#666;
  display:block;
  padding-bottom:9px;
}

input[type=text],
input[type=password] {
 	width:100%;
  padding:8px 5px;
  
  border:1px solid #222;
  box-shadow:
    0 1px 0 rgba(255,255,255,0.1);
  border-radius:0.3em;
  margin-bottom:20px;
}

label[for=remember]{
 	color:white;
  display:inline-block;
  padding-bottom:0;
  padding-top:5px;
}

input[type=checkbox] {
 	display:inline-block;
  vertical-align:top;
}

.p-container {
 	padding:0 20px 20px 20px; 
}

.p-container:after {
 	clear:both;
  display:table;
  content:"";
}

.p-container span {
  display:block;
  float:left;
  color:#0d93ff;
  padding-top:8px;
}

input[type=submit] {
 	padding:5px 20px;
  border:1px solid rgba(0,0,0,0.4);
  text-shadow:0 -1px 0 rgba(0,0,0,0.4);
  box-shadow:
    inset 0 1px 0 rgba(255,255,255,0.3),
    inset 0 10px 10px rgba(255,255,255,0.1);
  border-radius:0.3em;
  	background:#0043A8; 
	background: -moz-linear-gradient(#43A9FF, #0043A8);
  background: -o-linear-gradient(#43A9FF, #0043A8);
  background: -webkit-linear-gradient(#43A9FF, #0043A8);
  color:white;
  float:center;
  font-weight:bold;
  cursor:pointer;
  font-size:13px;
}

input[type=submit]:hover {
  box-shadow:
    inset 0 1px 0 rgba(255,255,255,0.3),
    inset 0 -10px 10px rgba(255,255,255,0.1);
}

input[type=text]:hover,
input[type=password]:hover,
label:hover ~ input[type=text],
label:hover ~ input[type=password] {
 	background:#27292c;
}
	</style>
</head>
<body>

<form>
  <h1>Create Account</h1>
  <div class="inset">
	<h3>
	
	
	<?php
	
	echo form_open('login/create_member');
	echo 'Nama   : ';
	echo form_input(array(
  		'name' => 'nama',
  		'value' => '',
  		'placeholder' => 'Nama Anda',
	));echo 'Ketegori :            ';?>
	
	<select name="category">
<option value="Mahasiswa">Mahasiswa</option>
<option value="Dosen">Dosen</option>
</select>
<br>

<br>

	<?php
	echo 'Alamat : ';
	echo form_input(array(
  		'name' => 'alamat',
  		'value' => '',
  		'placeholder' => 'Alamat Anda',
	));
	echo 'No Telepon :';
	echo form_input(array(
  		'name' => 'no_telp',
  		'value' => '',
  		'placeholder' => 'Nomor Telfon/Handphone Anda',
	));
	?>




	<?php
	echo 'Email';
	echo form_input(array(
  		'name' => 'email',
  		'value' => '',
  		'placeholder' => 'Email',
	));
	echo 'Password';
	echo form_password(array(
  		'name' => 'password',
  		'value' => '',
  		'placeholder' => 'Password',
	));
	echo 'Konfirmasi Password';
	echo form_password(array(
  		'name' => 'password2',
  		'value' => '',
  		'placeholder' => 'Konfirmasi Password',
	));
	echo form_submit('submit', 'Daftar Akun');
	echo form_close();
	?>
	
	<?php echo validation_errors('<p class="error">');?>
	

	</h3>
  </div>
</form>

</body>
</html>





