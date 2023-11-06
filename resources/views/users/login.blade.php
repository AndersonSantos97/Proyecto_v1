<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>LOGIN</title>
</head>
<body>
    
    <div class="container">
        <div class="row main-container">
          <div class="col s12 m12 ">
            <div class="card">
              <div class="card-content">
                <span class="card-title">Inicio de Sesión</span>
                <div class="row">
                  <form class="col s12" >
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Correo Electrónico</label>
                      </div>
                      <div class="input-field col s12 m12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Contraseña</label>
                      </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Iniciar Sesión
                      <i class="material-icons right">send</i>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>