<?php
$usuario=$_POST['usuario'];
$password=$_POST['password'];

//me conecto a mi database
//servidor-usuario-clave-database a la que me conecto
$conexion=mysqli_connect("localhost","root","","mydb");
$consulta="SELECT * FROM users WHERE username= '$usuario'and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0){
    header("location:camara.html");
}
else{
    echo "Error en la autenticación";//que mande algo más bonito que eso 
    header("location:Particulas.html");
}
mysqli_free_result($resultado);//para liberar memoria
mysqli_close($conexion);
?>

//checar que sólo se meta si pica a login y si pica en sign up aunque haya un usuario y pass vaya a signup.html