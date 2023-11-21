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

                  <form action="{{ route('users.store2') }}" method="POST" class="col s12" id="registrationForm">
                    @csrf
                      
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