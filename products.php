<!doctype html>
<html>
<head>
<title>Изделия</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ruslan+Display&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="reset.css">
</head>
<body>
<?php
require_once 'app_config.php';
require_once 'head.php';
    $connect=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or handle_error("Возникла проблема с подключением к базе данных.", error_get_last()); 
    mysqli_set_charset($connect, 'UTF8'); 
        $category=$_GET['category'];
    
    $query = "SELECT name, width, height, weight, description, image, price FROM weapons.weapons WHERE category=$category";  
    $data = mysqli_query($connect, $query);

    echo "<h1>Каталог товаров</h1>";
       echo "<figure>";
        while ($row = mysqli_fetch_array($data)){
           echo '<img src="' . UPLOADPATH . $row['image'] . '" alt="' . $row['name'] . '">';
            echo "<figcaption>";
        echo'<table>';
            echo'<tr><td>'.'Название: '.$row['name'].'</tr></td>';
            echo'<tr><td>'.'Ширина: '.$row['width'].'см'.'</tr></td>';
            echo'<tr><td>'.'Длинна: '.$row['height'].'см'.'</tr></td>';
            echo'<tr><td>'.'Вес: '.$row['weight'].'гр'.'</tr></td>';
            echo'<tr><td>'.'Описание: '.$row['description'].'</tr></td>';
            echo'<tr><td>'.'Цена: '.$row['price'].'p'.'</tr></td>';
        echo '</table>';
            echo "</figcaption>";
        }
        echo "</figure>";
        mysqli_close($connect);
?>


</body>
</html>
