

@section('template_title')
    {{ $medico->name ?? "{{ __('Show') Medico" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Medico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('medico.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $medico->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Nombre:</strong>
                            {{ $medico->primer_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Nombre:</strong>
                            {{ $medico->segundo_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Apellido:</strong>
                            {{ $medico->primer_apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Apellido:</strong>
                            {{ $medico->segundo_apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $medico->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $medico->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Estad Civil:</strong>
                            {{ $medico->estad_civil }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $medico->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $medico->email }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $medico->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $medico->usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $medico->contraseña }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Registro:</strong>
                            {{ $medico->fecha_registro }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad:</strong>
                            {{ $medico->especialidad }}
                        </div>
                        <div class="form-group">
                            <strong>Entidad Medica:</strong>
                            {{ $medico->entidad_medica }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
