<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title> Formulario de Acceso </title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="author" content="Videojuegos & Desarrollo">
        <meta name="description" content="Muestra de un formulario de acceso en HTML y CSS">
        <meta name="keywords" content="Formulario Acceso, Formulario de LogIn">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="css/login.css">
        
        <style type="text/css">
            
        </style>
        
        <script type="text/javascript">
        
        </script>
        
    </head>
    
    <body>
        
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <form action="process.php" method="POST">
                    <form id="loginform">
                        <input type="text" name="USUARIO" placeholder="USUARIO" required>
                        
                        <input type="CONTRASEÑA" placeholder="CONTRASEÑA" name="CONTRASEÑA" required>
                        
                        <button type="submit" title="Ingresar" name="Ingresar">Login</button>
                    </form>
                    </form>
                    <div class="pie-form">
                        
                    </div>
                </div>
                <div class="inferior">
                    
                </div>
            </div>
        </div>
            
    </body>
</html>