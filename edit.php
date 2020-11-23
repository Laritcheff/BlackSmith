<?php
session_start();
require_once'app_config.php';
$connect=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Ошибка ");
?>
<body>
<h1>Редактирование базы</h1>
<form class='form' method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <fieldset>
          <lable for='name'>Название</lable>
          <input type="text" id="name" name="name"><br>
          <lable for='width'>Ширина</lable>
          <input type="text" id="width" name="width"><br>
          <lable for='height'>Длинна</lable>
          <input type="text" id="height" name="height"><br>
          <lable for='weight'>Вес</lable>
          <input type="text" id="weight" name="weight"><br>
          <lable for='price'>Цена</lable>
          <input type="text" id="price" name="price"><br>
          <lable for='description'>Описание</lable>
          <textarea cols='20' rows='5' id='description' name='description'></textarea></br>
          <label for='image'>Add foto:</label><br>
            <input type="hidden" name="max_file_size" value="2000000000"><br>
            <input type="file" id='image' name="image"></br>
            <input type="submit" value="Изменить" name="submit">
        </fieldset>   
</form>  
<?php
if(isset($_POST['submit'])){
$name=trim($_POST['name']);
$width=intval($_POST['width']);
$height=intval($_POST['height']);
$weight=intval($_POST['weight']);
$price=intval($_POST['price']);
$description=$_POST['description'];
//Add foto
$img=$_FILES['image']['name'];
$target=UPLOADPATH.$img;
move_uploaded_file($_FILES['image']['tmp_name'], $target);
mysqli_set_charset($connect, "UTF8");
$query="INSERT INTO weapons(name, width, height, weight, description, image, price) VALUES('$name', '$width','$height','$weight','$description','$img','$price')";
echo $price;
//$system_error=$_GET["system_error"];
mysqli_query($connect, $query) or die ('А вот и хрен!');}
?>   
</body>
</html>