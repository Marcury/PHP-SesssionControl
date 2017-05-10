<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include "klasa.php";
        session_start();
        echo "Id Sesji: ".session_id()."</br></br>";
      /*  echo "Username:   ".$_SESSION["username"]."<br/>Id Sesji=".session_id()."<br/>";
        echo  "Imię i Nazwisko: ".$_SESSION["fullname"]."<br/>";
        echo  "Email =".$_SESSION["email"]."<br/>";
        echo  "Email =".$_SESSION["status"]."<br/>";*/
        if(isset($_SESSION['k1']))
        {
            $k1 = unserialize($_SESSION['k1']);
            $k1->show();
        }else echo "Brak obiektu sesji";
        
       
        if(isset($_COOKIE[session_name()]))
        {
            setcookie(session_name(),'',time()-42000,'/');
        }
        
        session_destroy();
       // setcookie("Ciasteczko", "", time());
        ?>
        
        <a href="test1.php">Strona 1</a>
    </body>
</html>
