<?php include 'conexion.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        /* Responsivo */
        @media (max-width: 480px) {
            .container {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="">Nombre de empleado</label>
        <input type="text" name="nombreempleado">
        <label for="">Apellido de empleado</label>
        <input type="text" name="apellidoempleado">
        <label for="">Fecha de Nacimiento</label>
        <input type="date" name="fechaempleado" id="">
        <label for="">area</label>
        <input type="text" name="areaempleado" id="">
        <button type="submit">Registrar</button>
    </form>

    <?php

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $nombre = $_POST['nombreempleado'];
            $apellido = $_POST['nombreempleado'];
            $fecha = $_POST['fechaempleado'];
            $area = $_POST['areaempleado'];

            $insertar = $conexion->prepare(
                'INSERT INTO empleados (nomEmpleado
                ,apeEmpleado,fechaNacEmp,areaEmp)VALUES(?,?,?,?)');
            $insertar->bind_param('ssss',$nombre,$apellido,$fecha,$area);
            $insertar->execute();
            header("Location:index.php");    

        }
    ?>
</body>
</html>