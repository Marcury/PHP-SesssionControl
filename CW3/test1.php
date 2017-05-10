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
        setcookie(session_name());
        
        echo "Id Sesji: ".session_id()."</br></br>";
        
        $k1 = new klasa("kubus", "Kubus Puchatek", "kubus@stumilowylas.pl", "ADMIN");
        $k1->show();
        
        $_SESSION['k1']=serialize($k1);
        
      /*  echo "Username:   ".$_SESSION["username"]."<br/>Id Sesji=".session_id()."<br/>";
        echo  "Imię i Nazwisko: ".$_SESSION["fullname"]."<br/>";
        echo  "Email =".$_SESSION["email"]."<br/>";
        echo  "Email =".$_SESSION["status"]."<br/>";*/
        
        echo "</br></br>Cookie: ".$_COOKIE[session_name()]."</br>";
        
        
        ?>
        <a href="strona2.php">Strona 2</a>
    </body>
</html>
