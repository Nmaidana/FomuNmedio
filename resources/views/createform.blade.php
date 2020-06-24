@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-2">
        <div class="form-group">
        </div>
    </div>

    <div class="col-sm-8 col-centered">

        <div class="form-group">

            <div class="box box-default">
                <!--  <div class="box-header with-border">
        <h3 class="box-title">Llenar Formulario</h3>
    </div>-->

                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fa fa-home"></i> <strong> Completar Formulario de Inscripción
                                Clase Media
                            </strong><small class="pull-right"></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="/formulario" method="post" id="my-form"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="1">Nombre</label>
                                        <input type="text" class="form-control" name='nombre'
                                            value="{{ isset($nombre)? $nombre :null}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nacionalidad</label>
                                        <input type="text" class="form-control" name='nacionalidad'
                                            value="{{ isset($nacionalidad)? $nacionalidad :null}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Género</label>
                                        <input type="text" class="form-control" name='sexo' placeholder="Agregar Género"
                                            value="{{isset($sexo)? $sexo :null}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">N° Celular o Teléfono</label>
                                        <input type="number" class="form-control" name="celular"
                                            placeholder="Agregar N° de Celular" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="1">Zona o Localidad Donde Vive Actualmente</label>
                                        <input type="text" class="form-control" name="vivienda_actual" value=""
                                            placeholder="Agregar Dirección de la Vivienda" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Lugar de Trabajo o Denominación</label>
                                        <input type="text" class="form-control" name="trab_nombre" value=""
                                            placeholder="Agregar Nombre del Lugar de Trabajo" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Cantidad de Integrante de la Familia</label>
                                        <input type="number" class="form-control" name="integrante_fliar" value=""
                                            placeholder="Agregar Cantidad Familiar" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">N° de Aportantes ( Los que se com prometen a pagar las
                                            cuotas)</label>
                                        <input type="number" class="form-control" name="numero_aport" value=""
                                            placeholder="Agregar N° de Aportantes" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Apellido</label>
                                        <input type="text" class="form-control" name='apellido'
                                            value="{{isset($apellido)? $apellido :null}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Cédula de Identidad</label>
                                        <input type="number" class="form-control" name='ci'
                                            value="{{isset($cedula)? $cedula :null}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Fecha de Nacimiento</label>
                                        <input type="text" class="form-control" name='fecha_nac'
                                            value="{{ isset($fecha_nac)? $fecha_nac :null}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Agregar Email</label>
                                        <input type="text" class="form-control" name="email" value=""
                                            placeholder="Agregar Cuenta de Correo" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Zona o Localidad donde Trabaja</label>
                                        <input type="text" class="form-control" name="trab_direccion"
                                            placeholder="Agregar Dirección de Trabajo" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ingreso Familiar de los Aportantes (Aprox)</label>
                                        <input type="text" class="form-control" name="ingreso_fliar" value=""
                                            placeholder="Agregar Ingreso Aproximado de los Aportantes" require>
                                    </div>
                                    <div class="form-group">
                                        <label for="">En qué Zona le Gustaria
                                            Vivir(Departamento/Ciudad/Barrio)</label>
                                        <input type="text" class="form-control" name="vivienda_deseada" value=""
                                            placeholder="Agregar Zona de la Vivienda Deseada" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Seleccionar N° de Dormitorios</label>
                                        <select class="form-control" name="cantidad_dor" value="">
                                            <option>1 dormitorio</option>
                                            <option>2 dormitorios</option>
                                            <option>3 dormitorios</option>
                                        </select>
                                    </div>
                                </div>
                            </div><br>
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Completar Las Preguntas Solicitada</h3>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-5">
                                    <label>
                                        ¿Posee algún Inmueble en la Zona Metropolitana?
                                    </label>
                                </div>
                                <div class="col-1">
                                    <div class="icheck-primary d-inline">
                                        <label>
                                            <input type="radio" name="q1" id="q1" value="t" required>
                                            Si
                                        </label>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="icheck-primary d-inline">
                                        <label>
                                            <input type="radio" name="q1" id="q1" value="f" required>
                                            No
                                        </label>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <input type="text" name="q1_text" class="form-control"
                                        placeholder="Descripción donde.....??">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-5">
                                    <label>
                                        ¿Alguna vez fue beneficiado/a con algún Subsidio del MUVH?
                                    </label>

                                </div>
                                <div class="col-1">
                                    <div class="icheck-primary d-inline">

                                        <label>
                                            <input type="radio" name="q2" id="q2" value="t" required>
                                            Si
                                        </label>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="icheck-primary d-inline">

                                        <label>
                                            <input type="radio" name="q2" id="q2" value="f" required>
                                            No
                                        </label>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <input type="Text" name="q2_text" class="form-control"
                                        placeholder="Descripción del Subsidio.....">
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Enviar</button>
                            <button type="submit" class="btn btn-default float-right">Cancelar</button>
                        </div>
                </div>
            </div>
        </div>
        </form>
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
