@extends('layouts.app')
@section('content')

<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Llenar Formulario</h3>
    </div>

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Completar Datos Solicitados</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="/formulario" method="post" id="my-form" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Agregar Nombre">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nacionalidad</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Agregar Nacionalidad">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Género</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Agregar Género">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">N° Celular</label>
                            <input type="number" class="form-control" id="exampleInputEmail1"
                                placeholder="Agregar N° de Celular">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Zona o Localidad Donde Vive Actualmente</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                placeholder="Agregar Dirección de la Vivienda">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Lugar de Trabajo Denominación</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Agregar Nombre del Lugar de Trabajo">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cantidad de Integrante de la Familia</label>
                            <input type="number" class="form-control" id="exampleInputEmail1"
                                placeholder="Agregar Cantidad Familiar">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">N° de Aportantes ( Los que se com prometen a pagar las
                                cuotas)</label>
                            <input type="number" class="form-control" id="exampleInputEmail1"
                                placeholder="Agregar N° de Aportantes">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Apellido</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Agregar Apellido ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cédula de Identidad</label>
                            <input type="number" class="form-control" id="exampleInputEmail1"
                                placeholder="Agregar N° der CI">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Fecha de Nacimiento</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Agregar Fecha de Nacimiento">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">N° Teléfono</label>
                            <input type="number" class="form-control" id="exampleInputEmail1"
                                placeholder="Agregar N° de Teléfono">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Zona o Localidad donde Trabaja</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Agregar Dirección de Trabajo">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ingreso Familiar de los Aportantes (Aprox)</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Agregar Ingreso Aproximado de los Aportantes">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">En qué Zona le Gustaria
                                Vivir(Departamento/Ciudad/Barrio)</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Agregar Zona de la Vivienda Deseada">
                        </div>
                      <div class="form-group">
                        <label>Seleccionar N° de Dormitorios</label>
                        <select class="form-control">
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
                            <input type="radio" id="radioPrimary1" name="r1" checked="">
                            <label for="radioPrimary1">
                                Si
                            </label>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="icheck-primary d-inline">
                            <input type="radio" id="radioPrimary2" name="r1">
                            <label for="radioPrimary2">
                                No
                            </label>
                        </div>
                    </div>
                    <div class="col-5">
                        <input type="text" class="form-control" placeholder="Descripción donde.....??">
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
                            <input type="radio" id="radioPrimary1" name="r1" checked="">
                            <label for="radioPrimary1">
                                Si
                            </label>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="icheck-primary d-inline">
                            <input type="radio" id="radioPrimary2" name="r1">
                            <label for="radioPrimary2">
                                No
                            </label>
                        </div>
                    </div>
                    <div class="col-5">
                        <input type="Text" class="form-control" id="exampleInputEmail1"
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
@endsection
@section('scripts')

@endsection
@section('css')

@endsection
