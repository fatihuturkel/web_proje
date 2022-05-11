<?php
    $kullanıcı="G211210016@sakarya.edu.tr";
    $sifre="G211210016";
    $path='./login.html';  /* dosya aynı klasörde bulunuyorsa*/
    $path2='../login.html'; /* dosya bir üst klasörde bulunuyorsa*/

    $_Email=htmlspecialchars($_POST['email']);
    $pass=htmlspecialchars( $_POST['sifre']);

    if($_POST['gonder']){
        if(file_exists($path)){
            if(empty($_Email)or empty($pass)){
                header ('Location: /web/login.html');
            }
            else if($_Email==$kullanıcı and $pass==$sifre){
                echo 'Hoşgeldiniz G211210016';
            }
            else{
                header ('Location: /web/login.html');
            }
        }
        else{
            if(empty($_Email)or empty($pass)){
                header ('Location: /login.html');
            }
            else if($_Email==$kullanıcı and $pass==$sifre){
                echo 'Hoşgeldiniz G211210016';
            }
            else{
                header ('Location: /login.html');
            }
        }
        
    }
?>