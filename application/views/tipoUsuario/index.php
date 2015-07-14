<html>
    <head>
        <title>Tipo de Usuarios</title>
        <link rel="stylesheet" href="<?php echo(CSS . 'bootstrap.min.css'); ?>">
    </head>
    <body>
        <div class="content">
        <h1>Tipo de Usuarios</h1>

        <form method="post">
   
                <div class ="form-group">
                    <label for ="roll"> Roll </label>
                    <input class ="form-control" type="text" name="Roll" id="roll"> 
                </div>
                <div class="form-group">
                    <label for ="nombre"> Nombre</label>
                    <input class="form-control" type= "text" name="Nombre"  id="nombre">
                </div>
                <div class="form-group">
                    <label for ="descripcion"> Descripcion </label>
                    <input class="form-control" type= "text" name="Descripcion"  id="descripcion">
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="submit" class="btn btn-primary">Modificar</button>
                <button type="submit" class="btn btn-primary">Eliminar</button>
                
                
            
        </form>

        <br>
        <p> 
             
     
        </p>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo(JS . 'bootstrap.min.js'); ?>" />
    </body>

</html>
