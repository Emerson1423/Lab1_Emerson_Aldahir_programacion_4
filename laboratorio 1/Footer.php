
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>

footer {
        background-color: #333;
        color: #fff;
        padding: 15px;
        font-size: 14px;
        position: fixed;
        bottom: 0;
        width: 100%;
        display: flex;
        justify-content: space-between; /* Distribuye elementos */
        align-items: center; /* Centra verticalmente */
        /* Ajusta el texto */
    }


    .footer-content {
        flex: 1; /* Hace que el contenido ocupe el espacio disponible */
    }

    .footer-nav {
        margin-top: 0px;
    }

    .footer-nav a {
        color: #bbb;
        text-decoration: none;
        margin: 0 1px;
        transition: color 0.3s ease;
    }

    .footer-nav a:hover {
        color: #fff;
    }

    footer img {
        width: 150px;
        border-radius: 45%;
        margin-right: 50px; /* Empuja la imagen a la derecha */
    } 

    </style>
</head>
<body>

    <footer>
            <div class="footer-content">
                <p>&copy; 2025 Todos los derechos reservados.</p>
                <nav class="footer-nav">
                    <a href="#">Política de privacidad</a>
                    <a href="#">Términos de uso</a>
                    <a href="#">Contacto</a>
                </nav>
                <p>&copy; Creado por: Emerson Aldahir Portillo Segovia</p>
            </div>
            <img src="Designer.jpeg">
    </footer>
</body>
</html>