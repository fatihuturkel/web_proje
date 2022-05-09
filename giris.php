<?php
    $kullanıcı="G211210016@sakarya.edu.tr";
    $sifre="G211210016";

    $_Email=htmlspecialchars($_POST['email']);
    $pass=htmlspecialchars( $_POST['sifre']);

    if($_POST['gonder']){
        if(empty($_Email)or empty($pass)){
            header('Location: /login.html');
        }
        else if($_Email==$kullanıcı and $pass==$sifre){
            echo 'Hoşgeldiniz ' ,$sifre; 
        }
        else{
            header('Location: /login.html');
        }
    }
?>