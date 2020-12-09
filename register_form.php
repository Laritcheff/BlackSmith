<?php
ob_start();
require_once 'app_config.php';
$connect=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or handle_error("DB ERORR!", error_get_last());

if(isset($_POST['submit'])) {   // если форма отправлена
	
	// если все поля заполнены
	if(!empty($name) && !empty($surname) && !empty($phone) && !empty($email)) 
         {
		$name=trim($_POST['name']);
        $surame=trim($_POST['surname']);
        $phone=$_POST['phone'];
        $email=trim($_POST['email']);
        mysqli_set_charset($connect, "UTF8");
        $query = "INSERT INTO weapons.users (name, surname, phone, email)
                                    VALUES('$name','$surname','$phone','$email')";
            mysqli_query($connect, $query) or handle_error('Request error',mysqli_error($connect));
			echo '<p>Регистрация прошла успешно. Вы можете перейти в форму <a href="order.php">заказа.</a></p>';
		} 
	} else {
		echo '<p class="error">Вы должны заполнить все поля.</p>';
	}
echo "sdfdsfsdfdsf";
?>