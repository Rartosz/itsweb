<?php 

if(isset($_POST['form__submit'])){
    $to = "itsolutions.kontakt@gmail.com";
    $from = $_POST['form__input--email']; 
    $name = $_POST['form__input--name'];
    $message = $name . " " . $from . " napisal: " . $_POST['form__textarea'];
    
    mail($to,$from,$message);
    }


?>