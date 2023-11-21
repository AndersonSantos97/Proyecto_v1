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
                  <form action="{{ route('users.login')}}" method="POST" class="col s12" >
                    @csrf
                    <div class="row">
                      <div class="input-field col s12">
                        <input name="email" id="email" type="email" class="validate">
                        <label for="email">Correo Electrónico</label>
                      </div>
                      <div class="input-field col s12 m12">
                        <input name="password" id="password" type="password" class="validate">
                        <label for="password">Contraseña</label>
                      </div>
                    </div>
                    <div>
                      <div>
                        <p>Tipo de usuario</p>
                      </div>
                      <p>
                        <label>
                          <input class="with-gap mb-2" name="rol" type="radio" value="m"/>
                          <span>Medico</span>
                        </label>
                        <label>
                          <input class="with-gap mb-2" name="rol" type="radio"  value="p"/>
                          <span>Paciente</span>
                        </label>
                        <label>
                          <input class="with-gap mb-2" name="rol" type="radio"  value="e"/>
                          <span>Entidad</span>
                        </label>
                      </p>
                      {{-- <input type="radio" name="rol" id="rol_medico" value="m"/>
                      <label for="rol_medico">Medico</label>
                      <input type="radio" name="rol" id="rol_paciente" value="p"/>
                      <label for="rol_paciente">Paciente</label> --}}
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