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
                echo "Yanlış Giriş yapıldı.";
                echo "<br><a href ='login.html'>Ana Menü</a>";
            }
            else if($_Email==$kullanıcı and $pass==$sifre){
                echo 'Hoşgeldiniz G211210016';
                echo "<br><a href ='index.html'>Ana Menü</a>";
            }
            else{
                echo "Yanlış Giriş yapıldı.";
                echo "<br><a href ='login.html'>Ana Menü</a>";
            }
        }
        else{
            if(empty($_Email)or empty($pass)){
                echo "Yanlış Giriş yapıldı.";
                echo "<br><a href ='login.html'>Ana Menü</a>";
            }
            else if($_Email==$kullanıcı and $pass==$sifre){
                echo 'Hoşgeldiniz G211210016';
                echo "<br><a href ='index.html'>Ana Menü</a>";
            }
            else{
                echo "Yanlış Giriş yapıldı.";
                echo "<br><a href ='login.html'>Ana Menü</a>";
            }
        }
        
    }
?>