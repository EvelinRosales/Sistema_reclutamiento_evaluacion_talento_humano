@extends ('layouts.admi')
@section ('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3> Lista del Personal <a href="personal/create"><button>Nuevo Registro</button></a></h3>
          @include('personal.search')
    </div>
</div>

<div class="row">   
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table.responsive">
            <table class="table table-striped table-bordered table-condensed table-horver">
                <thead>
                    <th>Codigo Personal</th>
                    <th>Nombres</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Genero</th>
                    <th>Carnet de Identidad</th>
                    <th>Num de Celular</th>
                    <th>Opciones</th>
                </thead>
                @foreach ($datos_personales as $per)
                <tr>
                    <td>{{ $per->Cod_Personal}}</td>
                    <td>{{ $per->Nombres}}</td>
                    <td>{{ $per->Apellido_Paterno}}</td>
                    <td>{{ $per->Apellido_Materno}}</td>
                    <td>{{ $per->Genero}}</td>
                    <td>{{ $per->Carnet_Identidad}}</td>
                    <td>{{ $per->Num_Celular}}</td>
                    <td>
                        <a href=""><button class="btn btn-info">Modificar</button></a>
                        <a href=""><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                    
                </tr>
                @endforeach
            </table>
        </div>
        {{$datos_personales->render()}}
    </div>
</div>   
@endsection