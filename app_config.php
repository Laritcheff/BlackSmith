<?php
define ('DB_HOST','localhost');
define ('DB_USER','root');
define ('DB_PASSWORD', '');
define ('DB_NAME', 'weapons');
//Image
define('UPLOADPATH','images/');

function debug_print($message){
    if(DEBUG_MODE){
        echo $message;
    }
}

function handle_error($user_error, $error_array){
    if(is_array($error_array)){
    $system_error= 'Error`s type'.$error_array['type'].'<br>ERROR:'.$error_array["message"].'<br>File:'.$error_array['file'].'<br>String:'.$error_array['line'] ;
    }
    else
    {
        $system_error=$error_array;
    }
    header("Location:show_error.php?user_error=$user_error&system_error=$system_error");
    exit();

}
?>