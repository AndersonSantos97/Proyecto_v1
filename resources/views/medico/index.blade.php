

@section('template_title')
    Medico
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Medico') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('medico.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Dni</th>
										<th>Primer Nombre</th>
										<th>Segundo Nombre</th>
										<th>Primer Apellido</th>
										<th>Segundo Apellido</th>
										<th>Direccion</th>
										<th>Fecha Nacimiento</th>
										<th>Estad Civil</th>
										<th>Sexo</th>
										<th>Email</th>
										<th>Telefono</th>
										<th>Usuario</th>
										<th>Contraseña</th>
										<th>Fecha Registro</th>
										<th>Especialidad</th>
										<th>Entidad Medica</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($medicos as $medico)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $medico->dni }}</td>
											<td>{{ $medico->primer_nombre }}</td>
											<td>{{ $medico->segundo_nombre }}</td>
											<td>{{ $medico->primer_apellido }}</td>
											<td>{{ $medico->segundo_apellido }}</td>
											<td>{{ $medico->direccion }}</td>
											<td>{{ $medico->fecha_nacimiento }}</td>
											<td>{{ $medico->estad_civil }}</td>
											<td>{{ $medico->sexo }}</td>
											<td>{{ $medico->email }}</td>
											<td>{{ $medico->telefono }}</td>
											<td>{{ $medico->usuario }}</td>
											<td>{{ $medico->contraseña }}</td>
											<td>{{ $medico->fecha_registro }}</td>
											<td>{{ $medico->especialidad }}</td>
											<td>{{ $medico->entidad_medica }}</td>

                                            <td>
                                                <form action="{{ route('medicos.destroy',$medico->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('medico.show',$medico->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('medico.edit',$medico->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $medicos->links() !!}
            </div>
        </div>
    </div>
@endsection
