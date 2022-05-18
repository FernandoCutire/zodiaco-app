<?php
//se comprueba si existe la cookie.
if (!isset($_COOKIE["idiomaUsuario"])){
//si no existe, se determina como pagina la destinada a elegir el idioma.
    $pagina = "pedirIdioma.html";


} elseif ($_COOKIE["idiomaUsuario"]== "sp"){
    //si existe la cookie y el valor de la variable es "sp" se ira a la pagina en español.
    $pagina = "spanish.html";

}elseif ($_COOKIE["idiomaUsuario"]== "fr"){
    //si existe la cookie y el valor de la variable es "sp" se ira a la pagina en español.
    $pagina = "frances.html";

}else{
    //si el valor no es "sp" se ira a la pagina en ingles
    $pagina = "english.html";
}


?>

<html>
    <head>
        <script language="javascript" type="text/javascript">
//se redirige a la pagina seleccionada
location.href ="<?php echo $pagina; ?>";
        </script>
    </head>
</html>