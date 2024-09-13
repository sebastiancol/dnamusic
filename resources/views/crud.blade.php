@extends('layout')

@section('crud')


@if ($mensaje = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{ $mensaje }}
    </div>
@endif
        


<div class="row m-9">
    <div class="col-12 mx-auto">
        <div class="card">
            <h5 class="card-header text-center">LISTADO DE TICKETS </h5>
            <div class="card-body">
                <div class="row md-12">
                    <table class="table text-center text-uppercase table-bordered" id="myTable">
                        <div class="col md-7">
                            <a href="{{ route('crud_create') }}" class="btn btn-primary">
                                <span class="fas fa-user-plus"></span> AGREGAR TICKET
                            </a>
                        </div>
                        <br/>
                        <div className="section text-center">
                            <form action="{{route('busqueda')}}" method="GET">
                                <input class="form-control" type="text" name="busqueda" placeholder="buscar producto" aria-label="Search"/>
                                <button class="btn btn-primary" type="button" >Buscar</button>
                            </form>
                          
                        </div>
                        <thead class="">
                            <tr>
                                <th scope="col">TITULO</th>
                                <th scope="col">DESCRIPCION</th>
                                <th scope="col">ESTADO</th>
                                <th scope="col">FECHA CREACION</th> 
                                <th scope="col">FECHA ACTUALIZACION</th> 
                                <th scope="col">Operaciones</th>
                            </tr>
                        </thead>
                        <tbody id="dataTable">
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->title}}</td>
                                <td>{{ $item->description}}</td>
                                <td>{{ $item->status}}</td>
                                <td>{{ $item->created_at}}</td>
                                <td>{{ $item->updated_at}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-">
                                        <a class="" href="{{ route('crud_edit', $item->id) }}">EDITAR<i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                    </button>
                                                                                
                                    
                                    <button type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#deleteTask" id="delete">
                                        ELIMINAR
                                    </button>
                                                                         
                                    
                                    <div class="modal fade" data-animation="slideInOutLeft" tabindex="-1" aria-labelledby="modal-title" id="deleteTask">
                                                                    
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            
                                                <div class="modal-body">
                                                    <p>¿DESEA ELIMINAR EL TICKET?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                                                    <button type="button" class="btn btn-primary">
                                                        <a class="" href="{{ route('crud_delete', $item->id) }}">CONFIRMAR<i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </td>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
         
        </div>
    </div>
</div>        
@endsection