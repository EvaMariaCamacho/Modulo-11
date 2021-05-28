@extends('layouts.app')

@section('template_title')
Empleados
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Empleados') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('employees.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Nuevo Empleado') }}
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

                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Email</th>
                                    <th>Birthday</th>
                                    <th>Departamento</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->lastname }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->birthday }}</td>
                                    <td>{{ $employee->department }}</td>

                                    <td>
                                        <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('employees.show',$employee->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('employees.edit',$employee->id) }}"><i class="fa fa-fw fa-edit"></i> Modificar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $employees->links() !!}
        </div>
    </div>
</div>
@endsection