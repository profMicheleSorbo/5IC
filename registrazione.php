<?php

echo $_POST["nome"]."<br>";
echo $_POST["cognome"]."<br>";
echo $_POST["mail"]."<br>";
echo $_POST["pwd"]."<br>";
echo $_POST["d_nascita"];

echo "<br>";

if (strtolower($_POST["nome"]) == "pasquale"){
    echo "Puoi entrare";
}else{
    echo "Non puoi entrare";
}

echo "<br>";

//Verifico se la mail e la password sono corrette per essere identificati
if(strtolower($_POST["mail"])=="uno@mail.it" && md5($_POST["pwd"]) == "202cb962ac59075b964b07152d234b70"){
    echo "Benvenuto";
    echo "<br>Scegli cosa vuoi fare";
}else{   
    echo "User o password errati";
}
?>