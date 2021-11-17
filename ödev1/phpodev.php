<?php

class Bilgiler{

    function __construct()
    {   
        echo "<h3>Bilgiler Geldi.</h3>";
        
    }

    function isim(){
        echo '<h3> Ad: Furkan SARIOĞLU </h3>';
    }

    function uni(){
        echo '<h3> Üniversitesi: Adnan Menderes Üniversitesi </h3>';
        
    }


    function prog(){
        echo '<h3> Program: Bilgisayar Programcılığı </h3>';
    }



    function mail(){
        echo '<h3> Mail: 206001056@stu.adu.edu.tr </h3> ';
    }


    function __destruct(){
    
        echo "<h3>Bilgiler Gitti.</h3>";

    }

   


}

$Bilgiler = new bilgiler();

   $Bilgiler ->isim();

   $Bilgiler ->uni();

   $Bilgiler ->prog();

   $Bilgiler ->mail();
   




?>