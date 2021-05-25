@extends('layouts.app')

@section('template_title')
{{ $employee->name ?? 'Show Employee' }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">Datos Empleados</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('employees.index') }}">Home</a>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Nombre:</strong>
                        {{ $employee->name }}
                    </div>
                    <div class="form-group">
                        <strong>Apellido:</strong>
                        {{ $employee->lastname }}
                    </div>
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $employee->email }}
                    </div>
                    <div class="form-group">
                        <strong>Birthday:</strong>
                        {{ $employee->birthday }}
                    </div>
                    <div class="form-group">
                        <strong>Departamento:</strong>
                        {{ $employee->department }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection