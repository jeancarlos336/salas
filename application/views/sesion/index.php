<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="<?php echo(CSS . 'bootstrap.min.css'); ?>">
    </head>
    <body>
        <div class="content">
        <h1>Control de Acceso</h1>

        <form method="post">
   
                <div class ="form-group">
                    <label for ="usuario"> Usuario </label>
                    <input class ="form-control" type="text" name="Usuario" id="usuario"> 
                </div>
                <div class="form-group">
                    <label for ="password"> Password </label>
                    <input class="form-control" type= "password" name="Password"  id="password">
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                <button type="reset" class="btn btn-primary">Cancelar</button>
          
            
        </form>

        <br>
        <p> 
            Usuario:
            <?php
            echo $this->usuario;
            ?>
            <br>
            Password:
            <?php
            echo $this->password;
            ?>


        </p>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo(JS . 'bootstrap.min.js'); ?>" />
    </body>

</html>
