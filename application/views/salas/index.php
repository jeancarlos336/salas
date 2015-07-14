<html>
    <head>
        <title>Maestro de Salas</title>
        <link rel="stylesheet" href="<?php echo(CSS . 'bootstrap.min.css'); ?>">
    </head>
    <body>
        <div class="content">
        <h1>Maestro de Salas</h1>

        <form method="post">
   
                <div class ="form-group">
                    <label for ="id_sala"> Codigo </label>
                    <input class ="form-control" type="text" name="Codigo" id="id_sala"> 
                </div>
                <div class="form-group">
                    <label for ="nombre"> Nombre </label>
                    <input class="form-control" type= "text" name="Nombre"  id="nombre">
                </div>
                <div class="form-group">
                    <label for ="ubicacion"> Ubicacion </label>
                    <input class="form-control" type= "text" name="Ubicacion"  id="ubicacion">
                </div>
                <div class="form-group">
                    <label for ="capacidad"> Capacidad </label>
                    <input class="form-control" type= "text" name="Capacidad"  id="capacidad">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="submit" class="btn btn-primary">Modificar</button>
                <button type="submit" class="btn btn-primary">Eliminar</button>
            
        </form>

        <br>
        <p> 
             Codigo:
            <?php
            echo $this->id_sala;
            ?>
            <br>
            Nombre Sala:
            <?php
            echo $this->nombre;
            ?>
            <br>
            Ubicacion:
            <?php
            echo $this->ubicacion;
            ?>
            <br>
            Capacidad:
            <?php
            echo $this->capacidad;
            ?>
            
     
        </p>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo(JS . 'bootstrap.min.js'); ?>" />
    </body>

</html>
