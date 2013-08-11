<!DOCTYPE html>
<html lang="es">
<head>
<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
<link href="stilo.css" rel="stylesheet">
</head>
<body>
<div id="contenido" class="table-bordered">
<form method="POST">
<span>URL</span> : <input type="text" id="url" name="url" class="span9">
<button class="btn btn-primary btn-large"><i class="icon-download-alt icon-white"></i> Descargar</button>
</form>
<div id="lic">
Created by Jhonathan Borda Moreno<br>
/jhonathan.bordamoreno<br>
@Jhontona
</div>
</div>
<img src="http://www.intesolv.com/wp-content/uploads/2012/08/Adobe_Connect_8_Logo_webready.jpg"/>
</body>
</html>
<?php
if (isset($_POST["url"]) and !empty($_POST["url"])){
$maximo = strlen($_POST["url"]);
$total= stripos($_POST["url"], '?');
$total2 = ($maximo-$total); 
$final= substr($_POST["url"],0,-$total2);
header("Location: ".$final."output/filename.zip?download=zip");
}
?>