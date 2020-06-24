@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-2">
        <div class="form-group">
        </div>
    </div>
    <div class="col-sm-8 col-centered">
        <div class="form-group">
            <div class="card card-info">
                <div class="card-header">
                    <h3><i class="fa fa-home"></i> <strong>Formulario de Inscripción Clase Media
                        </strong><small class="pull-right">
                </div>
                <section class="invoice">
                    @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                    @if(Session::has('error'))
                    <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
                    @endif
                    <form role="form" action="/home/create" method="get">
                        @csrf
                        <div class="card-body">

                            <div class="input-group">
                                <input type="number" id="nroexp" required maxlength="8" name="cedula" value=""
                                    placeholder="Ingrese N° de Cedula" class="form-control">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-info btn-flat"><i
                                            class="fa fa-search"></i></button>
                                </span>

                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
@section('scripts')

@endsection
@section('css')

@endsection
