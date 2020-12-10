<?php
ob_start();
require_once 'app_config.php';
$connect=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or handle_error("DB ERORR!", error_get_last());

if(isset($_POST['submit'])) {   // если форма отправлена
	$name = mysqli_real_escape_string($connect, trim($_POST['name']));
	$surname = mysqli_real_escape_string($connect, trim($_POST['surname']));
	$phone = mysqli_real_escape_string($connect, ($_POST['phone']));
    $email = mysqli_real_escape_string($connect, trim($_POST['email']));
	// если все поля заполнены	
		if(!empty($name) && !empty($surname) && !empty($phone) && !empty($email)) 
         {
        mysqli_set_charset($connect, "UTF8");
        $query = "INSERT INTO weapons.users (name, surname, phone, email)
                                VALUES('$name','$surname','$phone','$email')";
            mysqli_query($connect, $query) or handle_error('Request error',mysqli_error($connect));
			echo '<p>Регистрация прошла успешно. Вы можете перейти в форму <a href="order.php">заказа.</a></p>';
		} 
	 }else {
		echo '<p class="error">Вы должны заполнить все поля.</p>';
	}
?>
<!doctype html>
<html>
<head>
<title>Регистрация</title>
<meta charset="utf-8">
</head>
<body>
<h1>Чтобы сделать заказ, необходима регистрация</h1>
    <h3>Пожалуйста, введите ниже свои данные:</h3>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <fieldset>
            <label for="name">Имя</label>
            <input type="text" id="name" name="name"><br>
            <label for="surname">Фамилия</label>
            <input type="text" id="surame" name="surname"><br>
            <label for="phone">Телефон</label>  
            <input type="text" id="phone" name="phone" /><br />  
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email" /><br />           
            <input type="submit" value="Регестрация " name="submit">
            <input type="reset" value="Очистить" name="reset">
        </fieldset>
    </form>
</body>
</html>