@extends('layout.layout')

@section('title','Agendar Cita en Linea')

@section('content')

  <!-- Tu contenido HTML aquí -->
  <div class="main-container">
   
    <div class="container">
      <h1>Agendar Cita en Línea</h1>
      <form action="{{ route('home')}}" method="POST">
        @csrf
        <!-- Selección de fecha y hora -->
        <div class="input-field">
          <input type="text" id="fecha" class="datepicker" name="fecha_concertada">
          <label for="fecha">Fecha</label>
        </div>
  
        <div class="input-field">
          <input type="text" id="hora" class="timepicker" name="hora_concertada">
          <label for="hora">Hora</label>
        </div>
  
        <div class="input-field">
          <select id="especialidad" class="browser-default">
            <option value="" disabled selected>Selecciona la Especialidad</option>
            <!-- Agrega aquí opciones de especialidades -->
            <option name="especialidad" value="Medicina General">Medicina General</option>
            <option name="especialidad" value="Cardiología">Cardiología</option>
            <option name="especialidad" value="especialidad3">Dermatología</option>
            <option name="especialidad" value="especialidad4">Neurología</option>
            <option name="especialidad" value="especialidad5">Pedriatría</option>
            <!-- ... -->
          </select>
        </div>

        <!-- Diagnóstico y especialidad -->
        <div class="input-field">
          <textarea name="" id="diagnostico" class="materialize-textarea"></textarea>
          <label for="diagnostico">Medico</label>
        </div>
  
     
  
        <!-- Botones para consultar disponibilidad y agendar cita -->
        <button class="btn" type="button" onclick="consultarDisponibilidad()">Salir</button>
        <button class="btn" type="button" onclick="agendarCita()">Agendar Cita</button>
      </form>
    </div>
  </div>
 



  <!-- Materialize JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <!-- Script para inicializar select, datepicker y timepicker -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.datepicker');
      var instances = M.Datepicker.init(elems);

      elems = document.querySelectorAll('.timepicker');
      instances = M.Timepicker.init(elems);
    });
  </script>
  <script>

    
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.browser-default');
      var instances = M.FormSelect.init(elems);
    });

    function mostrarNombreMedico() {
      var especialidadSeleccionada = document.getElementById('especialidad').value;
      var nombreMedico = obtenerNombreMedico(especialidadSeleccionada);
      document.getElementById('nombreMedico').innerText = 'Nombre del Médico: ' + nombreMedico;
    }

    function obtenerNombreMedico(especialidad) {
      // Simulación de datos de médicos
      var medicos = {
        'Medicina General': 'Dr. Juan Pérez',
        'Cardiología': 'Dra. María Gómez'
        // Puedes agregar más especialidades y nombres de médicos según tus necesidades
      };

      return medicos[especialidad] || 'No disponible';
    }

    function consultarDisponibilidad() {
      // Obtener departamento y municipio seleccionados
      var departamento = document.getElementById('departamento').value;
      var municipio = document.getElementById('municipio').value;

      // Crear la URL de OpenStreetMap con la ubicación
      var url = 'https://www.google.com/maps/place/' + municipio + '%2C%20' + departamento;

      // Abrir la URL en una nueva pestaña
      window.open(url, '_blank');
    }
  </script>
@endsection
