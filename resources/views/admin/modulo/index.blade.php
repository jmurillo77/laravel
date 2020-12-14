@extends("theme.$theme.layout")
@section('Titulo')
    Titulo de la Pantalla
@endsection

@section('contenido')
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Permisos</h3>
    
                    <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar">
    
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover table-striped text-nowrap">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($modulos as $modulo)
                            <tr>
                                <td>{{$modulo->IdModulo}}</td>
                                <td>{{$modulo->Nombre}}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection