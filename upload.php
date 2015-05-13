<html>
<head>
<meta charset="utf-8">
<title>Результат завантаження файла</title>
</head>
<body>

<?php
   if($_FILES["filename"]["size"] > 1024*3*1024)
   {
     echo ("Розмір файлу перевищує три мегабайти");
     exit;
   }
	if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
   {
    echo("Файл успішно завантажений");
		move_uploaded_file($_FILES["filename"]["tmp_name"], "upload/".$_FILES["filename"]["name"]);
   } else {
      echo("Помилка завантаженняґ файла");
   }
?>
</body>
</html> 
