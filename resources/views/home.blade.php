@extends('layouts.app')
@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Formulario de Inscripción Clase Media</h2>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
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

                <div class="input-group mb-3">
                    <input type="number" id="nroexp" required maxlength="8" name="cedula" value=""
                        placeholder="Ingrese N° de Cedula" class="form-control">
                    <div class="input-group-append">
                        <span type="submit" class="btn btn-primary btn-flat"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </form>




        
    </section>
</div>
@endsection
@section('scripts')

@endsection
@section('css')

@endsection
