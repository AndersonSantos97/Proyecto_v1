<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <title>Menu Medico</title>
    
</head>
<body>
    <div class="main-container">
      
        <div class="row">
          <div class="col s12">
            <h1>Menú Medico</h1>
            <div class="row">
            <!-- ************ -->
              <div class="col s12 m6 ">
                <div class="card ">
                  <div class="card-content">
                    <span class="card-title">Opción 1</span>
                    <p>Consultas Medicas</p>
                    <div class="file-field input-field col s12">
                      <a href="#" target="_self">
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
                    <p>Agenda</p>
                    <div class="file-field input-field col s12">
                        <div class="btn">
                          <i class="material-icons">widgets</i>
                          <span>Ir</span>
                          
                        </div>
                     
                      </div>

                  </div>
                </div>
              </div>
              <!-- ************ -->
              <div class="col s12 m12 columna"  onclick="seleccionarColumna('resultados')">
                <div class="card">
                  <div class="card-content">
                    <span class="card-title">Opción 3</span>
                    <p>Disponibilidad de Horario</p>
                    <div class="file-field input-field col s12">
                        <div class="btn">
                          <i class="material-icons">widgets</i>
                          <span>Ir</span>
                                                   
                        </div>
                     
                      </div>

                  </div>
                </div>
              </div>
             
            



            </div>
            <div class="row">
              <div class="col s12 m3">
                <a class="waves-effect waves-light btn">Salir</a>
              </div>

            </div>
            
            
          </div>
        </div>
      </div>
      
  
</body>
</html>