<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Administracion de Medicos</title>
   
      
</head>
<body>

  <div class="main-container">
    <div class="container">
        <h4 class="center-align">Administración de Médicos</h4>
        <br>

        <!-- Buscar por DNI -->
        
        <div class="input-field">
          <input type="text" id="dni" placeholder="DNI">
         <label style="font-size: 20px" for="dni">Buscar Medico colocar DNI <button class="btn search-btn" onclick="buscarPorDNI()"><i class="material-icons right">search</i>Buscar
          </button></label>
          </div>
        <br>
    
        <!-- Formulario de Médico -->
        <form id="medico-form">
          <div class="input-field">
            <input type="text" id="nombre" placeholder="Nombre">
            <label for="nombre">Nombre completo</label>
          </div>
          <br>
          <div class="input-field">
            <select id="especialidad">
              <option value="" disabled selected>Elegir especialidad</option>
              <option value="medicina interna">Medicina General</option>
              <option value="cardiologia">Cardiología</option>
              <option value="dermatologia">Dermatología</option>
              <option value="neurologia">Neurología</option>
              <option value="pedriatria">Pedriatría</option>

              <!-- Especialidades Medicos -->
            </select>
            <label for="especialidad">Elegir especialidad</label>
          </div>
          <br>
          <div class="input-field">
            <input type="text" id="dniMedico" placeholder="DNI">
            <label for="dniMedico">DNI</label>
          </div>
          <div class="input-field">
            <input type="email" id="correo" placeholder="Correo">
            <label for="correo">Correo</label>
          </div>
          <div class="input-field">
            <input type="password" id="contrasena" placeholder="Contraseña">
            <label for="contrasena">Contraseña</label>
          </div>
          <div class="input-field">
            <input type="password" id="confirmarContrasena" placeholder="Confirmar Contraseña">
            <label for="confirmarContrasena">Confirmar Contraseña</label>
          </div>
        
          <div class="row">
            <button class="btn btn-small" type="submit"><i class="material-icons left">add</i>Agregar Otro Médico</button>
            <button class="btn btn-small" type="submit"><i class="material-icons left">save</i>Guardar Registro</button>
          </div>
        </form>
    
        <!-- Botones de Modificar, Eliminar, Atrás, Salir, etc. -->
        <div class="row ">

          

          
          <div id="btn" class="col s12 m3">
                <a href="#" target="_self">
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                      Modificar
                      <i class="material-icons right">edit</i>
                     </button>
                </a>
                          
          </div>
          <!-- ****************** -->
          <div class="row">
            <div id="btn" class="col s12 m3">
                <a href="#" target="_self">
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                     Eliminar
                      <i class="material-icons right">delete</i>
                     </button>
                </a>
                          
          </div>
           <!-- ****************** -->
           <div class="row">
            <div id="btn" class="col s12 m3">
                <a href="#" target="_self">
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                     Regresar
                      <i class="material-icons right">arrow_back</i>
                     </button>
                </a>
                          
          </div>
           <!-- ****************** -->
           <div class="row">
            <div id="btn" class="col s12 m3">
                <a href="#" target="_self">
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                     Salir
                      <i class="material-icons right">exit_to_app</i>
                     </button>
                </a>
                          
          </div>


          
         
          
        
    
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('select');
          var instances = M.FormSelect.init(elems);
        });
    
       </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


  </div>
    </body>
</html>