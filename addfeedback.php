<?
    require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");

    // Переменные с формы
    $name = $_POST['username'];
    $mail = $_POST['useremail'];
    $message = $_POST['usermessage'];
 
    global $DB;
     
    $res = $DB->Query("INSERT INTO feedback (`USERNAME`, `USEREMAIL`, `USERTEXT`) VALUES ('$name', '$mail', '$message')");
    
    header("Location: /index.php");
?>