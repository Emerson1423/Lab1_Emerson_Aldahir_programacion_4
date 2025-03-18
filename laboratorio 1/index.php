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
            text-align: center;
        }


        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #333;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }


        a:hover {
            opacity: 0.8;
        }


        /* Responsividad */
        @media (max-width: 600px) {
            table {
                font-size: 14px;
            }

            th, td {
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'?>
    <h1>Listado de empleados</h1>
    <?php
        $liest = $conexion->query('SELECT * from empleados');
        echo '<table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>apellido</th>
                        <th>fecha de nacimiento</th>
                        <th>area del empleado</th>
                    </tr>
                </thead>
                <tbody>';
            while($fila = $liest->fetch_assoc()){
                echo "<tr>
                    <td>{$fila['nomEmpleado']}</td>
                    <td>{$fila['apeEmpleado']}</td>
                    <td>{$fila['fechaNacEmp']}</td>
                    <td>{$fila['areaEmp']}</td>
                    <td>
    
                    <a href='Editar.php?id={$fila['id']}'>Editar</a>
                    <a href='Eliminar.php?id={$fila['id']}'>Eliminar</a>
                    </td>
                   
                    </tr>
                   
                ";
            }
            echo '</tbody>
                </table> ';
    ?>
        
        <a href="Registrar.php">Agregar Estudiante</a>
</body>
        <!--Al incluir el footer aqui el archivo de footer aparece al final 
        del body-->
<?php include 'Footer.php'?>
</html>