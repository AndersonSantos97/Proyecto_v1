@extends('layout.layout')

@section('title','Regisatro del paciente')

@section('content')
    <style>
        
        /* Personalización para los radio buttons */
        .custom-radio-group input[type="radio"]:checked+label:after {
          border: 2px solid #2196F3;

        }
        .custom-radio-group input[type="radio"]:checked+label:before {
          background-color: #2196F3;

        }
    </style>

    <div class="container">
        <div class="row main-container">
          <div class="col s12 m12 ">
            <div class="card">
              <div class="card-content">
                <span class="card-title">Registro de Paciente</span>
                <div class="row">

                  <form action="{{ route('users.store') }}" method="POST" class="col s12" id="registrationForm">
                    @csrf
                    <!--Datos a llenar -->
                    <div class="row">
                      <!--Nombre -->
                      <div class="input-field col s12">
                        <input name="txtname" id="nombreCompleto" type="text" class="validate" required>
                        <label for="nombreCompleto">Nombre Completo</label>
                      </div>
                      
                      <!--DNI -->
                      <div class="input-field col s12">
                        <input name="txtdni" id="numeroIdentidad" type="text" class="validate" required>
                        <label for="numeroIdentidad">Número de Identidad</label>
                      </div>

                      <!--telefono -->
                      <div class="input-field col s12">
                        <input name="txtcel" id="numeroTelefono" type="tel" class="validate" required>
                        <label for="numeroTelefono">Número de Teléfono</label>
                      </div>
                      <!--Estado Civil-->
                      <div class="input-field col s6">
                        <fieldset class="custom-radio-group">
                          <legend>Estado Civil</legend>
                          <p>
                            <label>
                              <input class="with-gap" name="estadoCivil" type="radio" value="soltero" />
                              <span>Soltero</span>
                            </label>
                          </p>
                          <p>
                            <label>
                              <input class="with-gap" name="estadoCivil" type="radio" value="casado" />
                              <span>Casado</span>
                            </label>
                          </p>
                        </fieldset>
                      </div>

                      <!--Genero-->
                      <div class="input-field col s6">
                        <fieldset class="custom-radio-group">
                          <legend>Género</legend>
                          <p>
                            <label>
                              <input class="with-gap" name="genero" type="radio" value="masculino" />
                              <span>Masculino</span>
                            </label>
                          </p>
                          <p>
                            <label>
                              <input class="with-gap" name="genero" type="radio" value="femenino" />
                              <span>Femenino</span>
                            </label>
                          </p>
                        </fieldset>
                      </div>
                    </div>

                    <!--Tipo de Sangre-->
                    <div class="input-field col s12 m12">
                      <br>
                        <label for="tipoSangre">Tipo de Sangre</label><br>
                        <select name="optypeblood" id="tipoSangre" class="browser-default" required>
                          <option value="" disabled selected>Selecciona el Tipo de Sangre</option>
                          <option value="A+">A+</option>
                          <option value="A-">A-</option>
                          <option value="B+">B+</option>
                          <option value="B-">B-</option>
                          <option value="AB+">AB+</option>
                          <option value="AB-">AB-</option>
                          <option value="O+">O+</option>
                          <option value="O-">O-</option>
                          <option value="N/A">No se</option>
                        </select>
                    </div>

                      <!--email-->
                    <div class="input-field col s12">
                        <input name="txtemail" id="email" type="email" class="validate" required>
                        <label for="email">Correo Electrónico</label>
                    </div>

                    <!--contraseña-->
                    <div class="input-field col s12">
                        <input name="txtpassword" id="password" type="password" class="validate" required>
                        <label for="password">Contraseña</label>
                    </div>

                    <!--confirmar contra-->
                    <div class="input-field col s12">
                        <input name="txtconfirmpass" id="confirmPassword" type="password" class="validate" required>
                        <label for="confirmPassword">Confirmación de Contraseña</label>
                    </div>

                    <!--contacto-->
                    <div class="input-field col s12">
                        <input name="txtcontact" id="contactoEmergencia" type="text" class="validate" required>
                        <label for="contactoEmergencia">En caso de emergencia, llamar a</label>
                    </div>

                    <!--telefono contacto-->
                    <div class="input-field col s12">
                        <input name="txtcelcontact" id="telefonoEmergencia" type="tel" class="validate" required>
                        <label for="telefonoEmergencia">Teléfono de Contacto</label>
                    </div>

                    
                    <div class="file-field input-field col s12">
                        <div class="btn">
                          <span>Subir DNI</span>
                          <input type="file" accept="image/*" multiple>
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="Sube una foto de tu DNI">
                        </div>
                      </div>
                      <div class="file-field input-field col s12 m12">
                        <div class="btn">
                          <span>Subir Foto de Perfil</span>
                          <input type="file" accept="image/*" multiple>
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="Sube tu foto de perfil">
                        </div>
                      </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="btnregister">Registrar
                      
                    </button>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Cancelar
                      
                    </button>
                    <br><br>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endsection