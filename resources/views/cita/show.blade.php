

@section('template_title')
    {{ $cita->name ?? "{{ __('Show') Cita" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cita</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cita.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Paciente Id:</strong>
                            {{ $cita->paciente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Paciente Dni:</strong>
                            {{ $cita->paciente_dni }}
                        </div>
                        <div class="form-group">
                            <strong>Medico Id:</strong>
                            {{ $cita->medico_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Concertada:</strong>
                            {{ $cita->fecha_concertada }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Concertada:</strong>
                            {{ $cita->hora_concertada }}
                        </div>
                        <div class="form-group">
                            <strong>Examenes Previos:</strong>
                            {{ $cita->examenes_previos }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
