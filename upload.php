<html> 
<head>
<meta charset="utf-8"> 
<title> Результат загрузки файла </title> 
</head> <body> 
<?php   
if(copy($_FILES['filename']['tmp_name'],      
		"temp/".$_FILES['filename']['name']))   
{     
	echo "Файл успешно загружен";   
}   
else   
{    
	echo "Ошибка загрузки файла";   
} 
 
?> 
</body> 
</html> 

