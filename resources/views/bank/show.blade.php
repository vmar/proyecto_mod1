@extends('layouts.app')

@section('template_title')
    {{ $bank->name ?? 'Show Bank' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Bank</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bank.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $bank->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $bank->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Ci:</strong>
                            {{ $bank->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $bank->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $bank->correo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
