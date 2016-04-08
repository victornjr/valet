<?php
$fName=$_POST['fName'];
$lName=$_POST['lName'];
$email=$_POST['email'];
$username=$_POST['username'];
$clave=$_POST['clave'];

$conexion=mysqli_connect("localhost","root","","mydb");
mysqli_select_db($conexion,"mydb");

$consulta="SELECT * FROM users WHERE username= '$username'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if ($filas==0){
    $insertar = "insert into users(FName,LName,email,username,password) values('$fName','$lName','$email','$username','$clave')";
    mysqli_query($conexion,$insertar); 
    mysqli_close($conexion);
    header("location:camara.html");
}
else{
    mysqli_close($conexion);
     header("location:Signup.html");
    //header("location:Signup.html/?exist=1");

//validar que el usuario no exista ya y si sí existe te diga que ya existe el usuario y te devuelva a Signup.html
    
    }
?>