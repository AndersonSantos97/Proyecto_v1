<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


   
    <title>Registo Entidad Medica</title>
</head>
<body>
   
    <div class="main-container">

        <div class="row">
            <h1>Registro Entidad Medica</h1>
        
            <div class="col s12 m12">
            <p>Nombre de la entidad Medica</p>
            <input type="text" name="" id="" placeholder="Entidad Medica">
            </div>
            <div class="col s12 m6">
            <p>Numero de RTN</p>
            <input type="text" name="" id="" placeholder="RTN">
            </div>
            <div class="col s12 m6">
            <p>Numero Telefonico</p>
            <input type="text" name="" id="" placeholder="Telefono">
            </div>
            <div class="col s12 m6">
            <p>Correo electronico</p>
            <input type="text" name="" id="" placeholder="Correo Electronico">
            </div>
            <div class="col s12 m6">
            <p>Contraseña</p>
            <input type="password" name="" id="" placeholder="Contraseña">
            <a class="waves-effect waves-light btn-small"><i class="material-icons">remove_red_eye</i></a>
            </div>
            <div class="col s12 m6">
            <p>Confirmar Contraseña</p>
            <input type="password" name="" id="" placeholder="Confirmar Contraseña">
            <a class="waves-effect waves-light btn-small"><i class="material-icons">remove_red_eye</i></a>
            </div>
            <div class="col s12 m12">
            <p>Direccion Exacta</p>
            <input type="text" name="" id="" placeholder="Direccion Exacta">
            </div>
            <div class="col s12 m6">
            <p>Municipio</p>
            <select class="browser-default">
                <option value="" disabled selected>Seleccione Una Opcion</option>
                <option value="1">Cortes </option>
                <option value="2">Santa Barbara</option>
                <option value="3"> Olancho</option>
            </select>
            </div>
            <div class="col s12 m6">
            <p>Departamento</p>
            <select class="browser-default">
                <option value="" disabled selected>Seleccione Una Opcion</option>
                <option value="1">Cortes </option>
                <option value="2">Santa Barbara</option>
                <option value="3"> Olancho</option>
            </select>
             </div>
                
        </div>
        
    </div>
    
    <div class="main-container">

        <div class="row">
            <h1>Agregar Medico Especialista</h1>
        
            <div class="col s12 m12">
            <p>Nombre Completo del Medico</p>
            <input type="text" name="" id="" placeholder="Nombre completo">
            </div>
            <div class="col s12 m6">
            <p>Numero de DNI</p>
            <input type="text" name="" id="" placeholder="DNI">
            </div>
            <div class="col s12 m6">
            <p>Numero Telefonico</p>
            <input type="text" name="" id="" placeholder="Telefono">
            </div>
            <div class="col s12 m6">
            <p>Correo electronico</p>
            <input type="text" name="" id="" placeholder="Correo Electronico">
            </div>
            <div class="col s12 m6">
            <p>Contraseña</p>
            <input type="password" name="" id="" placeholder="Contraseña">
            <a class="waves-effect waves-light btn-small"><i class="material-icons">remove_red_eye</i></a>
            </div>
            <div class="col s12 m6">
            <p>Confirmar Contraseña</p>
            <input type="password" name="" id="" placeholder="Confirmar Contraseña">
            
            <a class="waves-effect waves-light btn-small"><i class="material-icons">remove_red_eye</i></a>
            </div>
            <div class="col s12 m6">
            <p>Numero de Consultorio</p>
            <input type="text" name="" id="" placeholder="Numero de Consultorio">
            </div>
            <br><br><br>
            <div id="btn" class="col s12 m6">
                <button class="btn waves-effect waves-light" type="submit" name="action">Agregar Otro Medico
                <i class="material-icons right">add</i>
             </button>     
            </div>

            
                
        </div>
       
    </div>
    
    <div class="main-container">
        <div class="row">
            <div id="btn" class="col s12 m6">
                <button class="btn waves-effect waves-light" type="submit" name="action">Cancelar
                     <i class="material-icons right">cancel</i>
                  </button>            
            </div>
            
            <div id="btn" class="col s12 m6">
                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar Datos
                     <i class="material-icons right">send</i>
                  </button>            
            </div>   

        </div>
        
    </div>    


</body>
</html>