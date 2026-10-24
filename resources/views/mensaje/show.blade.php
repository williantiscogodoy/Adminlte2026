@extends('adminlte::page')

@section('template_title')
    {{ __('Show') }} Mensaje
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Mensaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('mensajes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>Contenido:</strong>
                            {{ $mensaje->contenido }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Chat:</strong>
                            {{ $mensaje->chat?->nombre }} {{ $mensaje->chat?->apellidos }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection