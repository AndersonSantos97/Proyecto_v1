

@section('template_title')
    Cita
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cita') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cita.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Paciente Id</th>
										<th>Paciente Dni</th>
										<th>Medico Id</th>
										<th>Fecha Concertada</th>
										<th>Hora Concertada</th>
										<th>Examenes Previos</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cita as $cita)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cia->paciente_id }}</td>
											<td>{{ $cita->paciente_dni }}</td>
											<td>{{ $cita->medico_id }}</td>
											<td>{{ $cita->fecha_concertada }}</td>
											<td>{{ $cita->hora_concertada }}</td>
											<td>{{ $cita->examenes_previos }}</td>

                                            <td>
                                                <form action="{{ route('cita.destroy',$citum->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cita.show',$cita->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cita.edit',$cita->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $cita->links() !!}
            </div>
        </div>
    </div>
@endsection
