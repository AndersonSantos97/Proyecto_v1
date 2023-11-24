<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <title>Menu Paciente</title>
    
</head>
<body>
    <div class="main-container">
        <div class="row">
          <div class="col s12">
            <h1>Bienvenido</h1>
            <p><h3>¿Qué desea realizar hoy?</h3></p>
            <div class="row">
            <!-- ************ -->
              <div class="col s12 m6 columna"  onclick="seleccionarColumna('resultados')">
                <div class="card">
                  <div class="card-content">
                    <span class="card-title">Opción 1</span>
                    <p>Agendar cita médica</p>
                    <div class="file-field input-field col s12">
                      <a href="{{ Route('agendarCita')}}" target="_self">
                        <div class="btn">
                        <i class="material-icons">widgets</i>
                          <span>Ir</span>
                          
                        </div>
                      </a>
                     
                      </div>

                  </div>
                </div>
              </div>

               <!-- ************ -->
               <div class="col s12 m6 columna"  onclick="seleccionarColumna('resultados')">
                <div class="card">
                  <div class="card-content">
                    <span class="card-title">Opción 2</span>
                    <p>Consulta de recetas de última cita</p>
                    <div class="file-field input-field col s12">
                      <a href="ConsultarReceta" target="_self">
                        <div class="btn">
                        <i class="material-icons">widgets</i>
                          <span>Ir</span>
                          
                        </div>
                      </a>
                     
                      </div>

                  </div>
                </div>
              </div>
              <!-- ************ -->
              <div class="col s12 m6 columna"  onclick="seleccionarColumna('resultados')">
                <div class="card">
                  <div class="card-content">
                    <span class="card-title">Opción 3</span>
                    <p>Exámenes a realizar según última cita</p>
                    <div class="file-field input-field col s12">
                      <a href="ConsultaExamenes" target="_self">
                        <div class="btn">
                        <i class="material-icons">widgets</i>
                          <span>Ir</span>
                          
                        </div>
                      </a>
                     
                      </div>

                  </div>
                </div>
              </div>
             
              <!-- ************ -->
              <div class="col s12 m6 columna"  onclick="seleccionarColumna('resultados')">
                <div class="card">
                  <div class="card-content">
                    <span class="card-title">Opción 4</span>
                    <p>Subir Resultados</p>
                    <div class="file-field input-field col s12">
                      <a href="SubirExamenes" target="_self">
                        <div class="btn">
                          
                          <i class="material-icons">widgets</i>
                          <span>Ir</span>
                         </div>
                        </a>
                      </div>

                  </div>
                </div>
              </div>



            </div>
            <div class="row">
              <div id="btn" class="col s6 m6">
                <a href="/" target="_self">
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                      Salir
                      <i class="material-icons right">exit_to_app</i>
                     </button>
                </a>                          
              </div>
            </div>
          </div>
        </div>
      </div>
      
  
</body>
</html>