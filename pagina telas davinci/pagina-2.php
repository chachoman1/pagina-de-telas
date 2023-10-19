<head>
   <title>Pagina 2 en PHP para la conexion
   con el Codigo de MYSQL </title>
</head>
<body>
    <?php
    $conexion = mysqli_connect("localhost","root", "", "chacho1") or
    die("Problemas con la conexión");

    mysqli_query($conexion, "insert into alumnos(codigo,nombres,correo,codigocurso) values
                           ($_REQUEST[codigo],'$_REQUEST[nombres]','$_REQUEST[correo]',$_REQUEST[codigocurso])")
    or die("no se a podido hacer su registro por favor intente nuevamente" . mysqli_error($conexion));
    

    mysqli_close($conexion);
    
    echo " utd se a registrado exitosamente  ";
    
   ?>
</body>
</html>