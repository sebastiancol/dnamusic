@extends('layout')

@section('task')


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
                            
                            <br/>
                            <div className="section text-center">
                                <form action="{{route('task_show')}}" method="GET">
                                    <div class="form-control">
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control"  name="busqueda" placeholder="buscar producto" >
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="submit" class="btn btn-primary" name="buscador" >
                                        </div>
                                    </div>
                                    
                                </form>
                            
                            </div>
                            <br/>

                            <div class="col md-7">
                                <a href="{{ route('task_create') }}" class="btn btn-primary">
                                    <span class="fas fa-user-plus"></span> AGREGAR TICKET
                                </a>
                            </div>

                            
                            <thead class="table-header">
                                <tr>
                                    <th scope="col">TITULO</th>
                                    <th scope="col">DESCRIPCION</th>
                                    <th scope="col">ESTADO</th>
                                    <th scope="col">FECHA CREACION</th> 
                                    <th scope="col">FECHA FIN</th> 
                                    <th scope="col">FECHA ACTUALIZACION</th> 
                                    <th scope="col">Operaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($data)<=0 )
                                    <tr>
                                        <td colspan="5">no hay registros que coindidan</td>
                                    </tr>    
                                @else
                                    
                            
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->title}}</td>
                                    <td>{{ $item->description}}</td>
                                    <td>{{ $item->status}}</td>
                                    <td>{{ $item->created_at}}</td>
                                    <td>{{ $item->updated_at}}</td>
                                    <td>{{ $item->updated_at}}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-">
                                            <a class="" href="{{ route('task_edit', $item->id) }}">EDITAR<i class="fa fa-pencil-square" aria-hidden="true"></i></a>
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
                                                            <a class="" href="{{ route('task_delete', $item->id) }}">CONFIRMAR<i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </td>
                                </tr> 
                                @endforeach
                                @endif
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

