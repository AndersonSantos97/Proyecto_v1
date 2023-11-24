<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('paciente_id') }}
            {{ Form::text('paciente_id', $cita->paciente_id, ['class' => 'form-control' . ($errors->has('paciente_id') ? ' is-invalid' : ''), 'placeholder' => 'Paciente Id']) }}
            {!! $errors->first('paciente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paciente_dni') }}
            {{ Form::text('paciente_dni', $cita->paciente_dni, ['class' => 'form-control' . ($errors->has('paciente_dni') ? ' is-invalid' : ''), 'placeholder' => 'Paciente Dni']) }}
            {!! $errors->first('paciente_dni', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('medico_id') }}
            {{ Form::text('medico_id', $cita->medico_id, ['class' => 'form-control' . ($errors->has('medico_id') ? ' is-invalid' : ''), 'placeholder' => 'Medico Id']) }}
            {!! $errors->first('medico_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_concertada') }}
            {{ Form::text('fecha_concertada', $cita->fecha_concertada, ['class' => 'form-control' . ($errors->has('fecha_concertada') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Concertada']) }}
            {!! $errors->first('fecha_concertada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_concertada') }}
            {{ Form::text('hora_concertada', $cita->hora_concertada, ['class' => 'form-control' . ($errors->has('hora_concertada') ? ' is-invalid' : ''), 'placeholder' => 'Hora Concertada']) }}
            {!! $errors->first('hora_concertada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('examenes_previos') }}
            {{ Form::text('examenes_previos', $cita->examenes_previos, ['class' => 'form-control' . ($errors->has('examenes_previos') ? ' is-invalid' : ''), 'placeholder' => 'Examenes Previos']) }}
            {!! $errors->first('examenes_previos', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>